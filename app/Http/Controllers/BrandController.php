<?php

namespace App\Http\Controllers;

use App\brand;
use Illuminate\Http\Request;

class BrandController extends Controller
{
    public function AddBrand(){
        return view('admin.brand.add_brand');
    }
    public function SaveBrand(Request $request){
        $this->validate($request, [
           'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
           'brand_description' => 'required|',
        ]);

        $brand = new brand();
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_status = $request->brand_status;
        $brand->save();

        return redirect('/Brand/add') ->with('messege','Brand Save success');
    }
    public function ManageBrand(){
        $brands = brand::all();
        return view('admin.brand.manage_brand',['brands'=>$brands]);
    }
    public function UnpublishedBrand($id){
        $brand = brand::find($id);
        $brand->brand_status = 0;
        $brand->save();

        return redirect('/Brand/manage') ->with('messege','Brand Unpublished success');

    }
    public function PublishedBrand($id){
        $brand = brand::find($id);
        $brand->brand_status = 1;
        $brand->save();
        return redirect('/Brand/manage') ->with('messege','Brand Published success');
    }
    public function EditBrand($id){
        $brand = brand::find($id);
        return view('admin.brand.edit_brand',['brand'=>$brand]);
    }
    public function UpdateBrand(Request $request) {
        $this->validate($request, [
            'brand_name' => 'required|regex:/^[\pL\s\-]+$/u|max:20|min:2',
            'brand_description' => 'required|',
        ]);

        $brand = brand::find($request->brand_id);
        $brand->brand_name = $request->brand_name;
        $brand->brand_description = $request->brand_description;
        $brand->brand_status = $request->brand_status;
        $brand->save();

        return redirect('/Brand/add') ->with('messege','Brand Save success');
    }
    public function DeleteBrand($id){
        $brand = brand::find($id);
        $brand->delete();

        return redirect('/Brand/manage') ->with('messege','Brand Delete success');
    }
}
