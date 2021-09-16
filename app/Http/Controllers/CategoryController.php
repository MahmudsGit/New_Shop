<?php

namespace App\Http\Controllers;

use App\category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function AddCategory(){
        return view('admin.category.add_category');
    }
    public function saveCategory(Request $request){
        $category = new category();
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_status = $request->category_status;
        $category->save();

        return redirect('/categories/add')->with('messege','Category Save Success');
    }
    public function ManageCategory(){
        $categories = category::all();
        return view('admin.category.manage_category',['categories'=>$categories]);
    }
    public function UnpublishedCategory($id){
        $category = category::find($id);
        $category->category_status = 0;
        $category->save();

        return redirect('/categories/manage')->with('messege','Category Unpublished Success');
    }
    public function publishedCategory($id){
        $category = category::find($id);
        $category->category_status = 1;
        $category->save();

        return redirect('/categories/manage')->with('messege','Category Published Success');
    }
    public function EditCategory($id){
        $category = category::find($id);
        return view('admin.category.edit_category',['category'=>$category]);
    }
    public function UpdateCategory(Request $request){
        $category = category::find($request->category_id);
        $category->category_name = $request->category_name;
        $category->category_description = $request->category_description;
        $category->category_status = $request->category_status;
        $category->save();

        return redirect('/categories/manage')->with('messege','Category Updated Success');
    }
    public function deleteCategory($id){
        $category = category::find($id);
        $category->delete();

        return redirect('/categories/manage')->with('messege','Category Deleted Success');
    }



}
