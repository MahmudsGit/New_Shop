<?php

namespace App\Http\Controllers;

use App\brand;
use App\category;
use App\product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Image;

class ProductController extends Controller
{
    public function AddProduct(){
        $categories =category::where('category_status', 1) ->get();
        $brands     =brand::where('brand_status', 1) ->get();

        return view('admin.product.add_product',[
            'categories'=>$categories,
            'brands'=>$brands
        ]);
    }

    protected function productValidation($request){
        $this->validate($request,[
            'category_id'=>'required|numeric',
            'brand_id'=>'required|numeric',
            'product_name'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_image'=>'required',
            'product_status'=>'required|numeric',
        ]);
    }

    protected function productValidationWithoutImage($request){
        $this->validate($request,[
            'category_id'=>'required|numeric',
            'brand_id'=>'required|numeric',
            'product_name'=>'required',
            'short_description'=>'required',
            'long_description'=>'required',
            'product_price'=>'required',
            'product_quantity'=>'required',
            'product_status'=>'required|numeric',
        ]);
    }

    protected function productImageUpload($request){
        $productImage = $request->file('product_image');
        $imageNameAndExtension = $productImage->getClientOriginalName();
        $imageName = $request->product_name.$imageNameAndExtension;
        $directory = 'ad-image/';
        $imageUrl = $directory.$imageName;
//        $productImage->move($imageUrl);
        Image::make($productImage) ->resize(500,400) ->save($imageUrl);
        return $imageUrl;
    }
    protected function productDataSve($request, $imageUrl){
        $product = new product();
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        $product->product_image = $imageUrl;
        $product->product_status = $request->product_status;
        $product->save();
    }

    public function SaveProduct(Request $request){
        $this->productValidation($request);
        $imageUrl = $this->productImageUpload($request);
        $this->productDataSve($request,$imageUrl);

        return redirect('/product/add') ->with('messege', 'product save success');
    }
    public function ManageProduct(){
        $products = DB::table('products')
            ->join('categories', 'products.category_id', '=', 'categories.id')
            ->join('brands', 'products.brand_id', '=', 'brands.id')
            ->select('products.*','categories.category_name','brands.brand_name')
            ->get();

        return view('admin.product.manage_product',['products'=>$products]);
    }
    public function PublishProduct($id){
        $product = product::find($id);
        $product->product_status = 0;
        $product->save();
        return redirect('/product/manage')->with('messege','satatus Published Success');
    }
    public function UnPublishProduct($id){
        $product = product::find($id);
        $product->product_status = 1;
        $product->save();
        return redirect('/product/manage')->with('messege','satatus Unpublished Success');
    }

    public function EditProduct($id){
        $categories = category::where('category_status', 1) ->get();
        $brands     = brand::where('brand_status', 1) ->get();
        $products   = product::find($id);
        return view('admin.product.edit_product',[
            'categories'=>$categories,
            'brands'=>$brands,
            'products'=>$products
        ]);
    }

    protected function productUodateSve($request, $imageUrl=null){
        $product = product::find($request->product_id );
        $product->category_id = $request->category_id;
        $product->brand_id = $request->brand_id;
        $product->product_name = $request->product_name;
        $product->short_description = $request->short_description;
        $product->long_description = $request->long_description;
        $product->product_price = $request->product_price;
        $product->product_quantity = $request->product_quantity;
        if ($imageUrl){
            $product->product_image = $imageUrl;
        }
        $product->product_status = $request->product_status;
        $product->save();
    }

    public function UpdateProduct(Request $request){
        $product = product::find($request->product_id );

        $productImage = $request->product_image;
        if ($productImage){
            unlink($product->product_image);

            $this->productValidation($request);
            $imageUrl = $this->productImageUpload($request);
            $this->productUodateSve($request,$imageUrl);
        }
        else{
            $this->productValidationWithoutImage($request);
            $this->productUodateSve($request);
        }

        return redirect('/product/manage')->with('messege', 'product Update success');;
    }

    public function viewProduct($id){
        $categories = category::where('category_status', 1) ->get();
        $brands     = brand::where('brand_status', 1) ->get();
        $products   = product::find($id);
        return view('admin.product.view_product',[
            'categories'=>$categories,
            'brands'=>$brands,
            'products'=>$products
        ]);
    }

    public function DeleteProduct($id){
        $product = product::find($id);
        $product->delete();

        return redirect('/product/manage')->with('messege', 'product Delete success');;
    }
}
