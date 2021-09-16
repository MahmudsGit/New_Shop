<?php

Route::get('/',[
   'uses'   =>  'NewShopController@index',
   'as'     =>  '/'
]);
Route::get('/category-product',[
   'uses'   =>  'NewShopController@category',
   'as'     =>  '/category-product'
]);
Route::get('/mail-us',[
   'uses'   =>  'NewShopController@mail',
   'as'     =>  '/mail'
]);

Auth::routes();
Route::get('/home', 'HomeController@index')->name('home');

Route::get('/categories/add',[
    'uses'   =>  'CategoryController@AddCategory',
    'as'     =>  'add-categories'
]);
Route::get('/categories/manage',[
    'uses'   =>  'CategoryController@ManageCategory',
    'as'     =>  'manage-categories'
]);
Route::post('/categories/new',[
    'uses'   =>  'CategoryController@saveCategory',
    'as'     =>  'new-categories'
]);
Route::get('/categories/Unpublished/{id}',[
    'uses'   =>  'CategoryController@UnpublishedCategory',
    'as'     =>  'unpublished-category'
]);
Route::get('/categories/published/{id}',[
    'uses'   =>  'CategoryController@publishedCategory',
    'as'     =>  'published-category'
]);
Route::get('/categories/edit/{id}',[
    'uses'   =>  'CategoryController@EditCategory',
    'as'     =>  'edit-category'
]);
Route::post('/categories/update',[
    'uses'   =>  'CategoryController@UpdateCategory',
    'as'     =>  'update-category'
]);
Route::get('/categories/delete/{id}',[
    'uses'   =>  'CategoryController@deleteCategory',
    'as'     =>  'delete-category'
]);
Route::get('/Brand/add',[
    'uses'   =>  'BrandController@AddBrand',
    'as'     =>  'add-brand'
]);
Route::post('/Brand/new',[
    'uses'   =>  'BrandController@SaveBrand',
    'as'     =>  'new-brand'
]);
Route::get('/Brand/manage',[
    'uses'   =>  'BrandController@ManageBrand',
    'as'     =>  'manage-brand'
]);
Route::get('/Brand/unpublished/{id}',[
    'uses'   =>  'BrandController@UnpublishedBrand',
    'as'     =>  'unpublished-brand'
]);
Route::get('/Brand/published/{id}',[
    'uses'   =>  'BrandController@PublishedBrand',
    'as'     =>  'published-brand'
]);
Route::get('/Brand/edit/{id}',[
    'uses'   =>  'BrandController@EditBrand',
    'as'     =>  'edit-brand'
]);
Route::post('/Brand/update',[
    'uses'   =>  'BrandController@UpdateBrand',
    'as'     =>  'update-brand'
]);
Route::get('/Brand/delete/{id}',[
    'uses'   =>  'BrandController@DeleteBrand',
    'as'     =>  'delete-brand'
]);
Route::get('/product/add',[
    'uses'   =>  'ProductController@AddProduct',
    'as'     =>  'add-product'
]);
Route::post('/product/save',[
    'uses'   =>  'ProductController@SaveProduct',
    'as'     =>  'new-product'
]);
Route::get('/product/manage',[
    'uses'   =>  'ProductController@ManageProduct',
    'as'     =>  'manage-product'
]);
Route::get('/product/publish/{id}',[
    'uses'   =>  'ProductController@PublishProduct',
    'as'     =>  'publish-product'
]);
Route::get('/product/unpublish/{id}',[
    'uses'   =>  'ProductController@UnPublishProduct',
    'as'     =>  'unpublish-product'
]);
Route::get('/product/edit/{id}',[
    'uses'   =>  'ProductController@EditProduct',
    'as'     =>  'edit-product'
]);
Route::post('/product/update',[
    'uses'   =>  'ProductController@UpdateProduct',
    'as'     =>  'update-product'
]);
Route::get('/product/view/{id}',[
    'uses'   =>  'ProductController@viewProduct',
    'as'     =>  'view-product'
]);
Route::get('/product/delete/{id}',[
    'uses'   =>  'ProductController@DeleteProduct',
    'as'     =>  'delete-product'
]);