<?php

Route::get('/',[
   'uses'   =>  'NewShopController@index',
   'as'     =>  '/'
]);
Route::get('/category/product/{id}',[
   'uses'   =>  'NewShopController@category',
   'as'     =>  'category-product'
]);
Route::get('/brand/product/{id}',[
   'uses'   =>  'NewShopController@brand',
   'as'     =>  'brand-product'
]);
Route::get('/product/details/{id}',[
   'uses'   =>  'NewShopController@ProductDetails',
   'as'     =>  'product-details'
]);
Route::get('/mail-us',[
   'uses'   =>  'NewShopController@mail',
   'as'     =>  '/mail'
]);
Route::post('/cart/add',[
   'uses'   =>  'CartController@adToCart',
   'as'     =>  'ad-to-cart'
]);
Route::get('/cart/add/{id}',[
   'uses'   =>  'CartController@adToCartHome',
   'as'     =>  'ad-to-cart-home'
]);
Route::get('/cart/view',[
   'uses'   =>  'CartController@viewCart',
   'as'     =>  'view-cart'
]);
Route::get('/cart/delete/{rowId}',[
   'uses'   =>  'CartController@deleteCart',
   'as'     =>  'delete-cart'
]);
Route::get('/cart/empty',[
   'uses'   =>  'CartController@emptyCart',
   'as'     =>  'empty-cart'
]);
Route::post('/update/quantity',[
   'uses'   =>  'CartController@updateQuantityCart',
   'as'     =>  'update-quantity'
]);
Route::get('/cheakout',[
    'uses'   =>  'CheakOutController@index',
    'as'     =>  'cheak-out'
]);
Route::post('/customer/register',[
    'uses'   =>  'CheakOutController@CustomerRegister',
    'as'     =>  'customer-register'
]);
Route::get('/cart/shipping',[
    'uses'   =>  'CheakOutController@ShippingCart',
    'as'     =>  'shipping-cart'
]);
Route::post('/shipping/save',[
    'uses'   =>  'CheakOutController@saveShipping',
    'as'     =>  'save-shipping'
]);
Route::get('/payment',[
    'uses'   =>  'CheakOutController@paymentDetail',
    'as'     =>  'payment-checkout'
]);
Route::post('/Order/new',[
    'uses'   =>  'CheakOutController@newOrder',
    'as'     =>  'new-order'
]);
Route::get('/order/complete',[
    'uses'   =>  'CheakOutController@orderComplete',
    'as'     =>  'complete-order'
]);
Route::post('/customer/login',[
    'uses'   =>  'CheakOutController@CustomerLogin',
    'as'     =>  'customer-login'
]);
Route::post('/login/home',[
    'uses'   =>  'CheakOutController@CustomerLoginSave',
    'as'     =>  'customer-login-home'
]);

Route::get('/login/customer',[
    'uses'   =>  'CheakOutController@CustomerLoginHome',
    'as'     =>  'login-customer'
]);
Route::get('/customer/logout',[
    'uses'   =>  'CheakOutController@CustomerLogOut',
    'as'     =>  'log-out'
]);
Route::get('/customer/registration',[
    'uses'   =>  'CheakOutController@CustomerRegisterIndex',
    'as'     =>  'customer-registration'
]);
Route::post('/registration/save',[
    'uses'   =>  'CheakOutController@CustomerRegisterHome',
    'as'     =>  'registration-save'
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
Route::get('/manage/order',[
    'uses'   =>  'OrderController@orderIndex',
    'as'     =>  'manage-order'
]);
Route::get('/order/view/{id}',[
    'uses'   =>  'OrderController@orderView',
    'as'     =>  'order-view'
]);


Route::get('/image/ad',[
    'uses'   =>  'AdController@AdImage',
    'as'     =>  'ad-image'
]);
Route::post('/ad/save',[
    'uses'   =>  'AdController@SaveAdImage',
    'as'     =>  'save-ad-image'
]);
Route::get('/image/slider',[
    'uses'   =>  'SliderController@SliderImage',
    'as'     =>  'slider-image'
]);
Route::post('/slider/save',[
    'uses'   =>  'SliderController@SaveSliderImage',
    'as'     =>  'save-slider-image'
]);