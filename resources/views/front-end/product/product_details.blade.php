@extends('front-end.master')
@section('body')
    <div class="content">
        <!--single-->
        <div class="single-wl3">
            <div class="container">
                <div class="single-grids">
                    <div class="col-md-9 single-grid">
                        <div clas="single-top">
                            @foreach($productDetails as $productDetail)
                            <div class="single-left">
                                <div class="flexslider">
                                    <ul class="slides">
                                        <li data-thumb="{{ asset($productDetail->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($productDetail->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{ asset($productDetail->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($productDetail->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                        <li data-thumb="{{ asset($productDetail->product_image) }}">
                                            <div class="thumb-image"> <img src="{{ asset($productDetail->product_image) }}" data-imagezoom="true" class="img-responsive"> </div>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                            <div class="single-right simpleCart_shelfItem">
                                {{ Form::open(['method'=>'POST','route'=>'ad-to-cart']) }}
                                <h4>{{ $productDetail->product_name }}</h4>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <p class="price item_price">Tk. {{ $productDetail->product_price }}</p>
                                <div class="description">
                                    <p><span>Quick Overview : </span>{{ $productDetail->short_description }}</p>
                                </div>
                                <div class="color-quality">
                                    <h6>Quantity :</h6>
                                    <div class="quantity">
                                        <input type="number" name="qty" value="1">
                                        <input type="hidden" name="id" value="{{ $productDetail->id }}">
                                    </div>
                                </div>
                                <div class="women">
                                    <span class="size">XL / XXL / S </span>
                                    <input type="submit" value="Add To Cart" data-text="Add To Cart" class="my-cart-b item_add">
                                </div>
                                {{ Form::close() }}
                                <div class="social-icon">
                                    <a href="#"><i class="icon"></i></a>
                                    <a href="#"><i class="icon1"></i></a>
                                    <a href="#"><i class="icon2"></i></a>
                                    <a href="#"><i class="icon3"></i></a>
                                </div>
                            </div>
                            @endforeach
                            <div class="clearfix"> </div>
                        </div>
                    </div>
                    <div class="col-md-3 single-grid1">
                        <h3>Recent Products</h3>

                        @foreach($recentProducts as $recentProduct)
                        <div class="recent-grids">
                            <div class="recent-left">
                                <a href="{{ route('product-details', ['id' => $recentProduct->id]) }}"><img class="img-responsive " src="{{ asset($recentProduct->product_image) }}" alt=""></a>
                            </div>
                            <div class="recent-right">
                                <h6 class="best2"><a href="{{ route('product-details', ['id' => $recentProduct->id]) }}">{{ $recentProduct->product_name }}</a></h6>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <span class=" price-in1">Tk. {{ $recentProduct->product_price }}</span>
                            </div>
                            <div class="clearfix"> </div>
                        </div>
                        @endforeach

                    </div>
                    <div class="clearfix"> </div>
                </div>
                <!--Product Description-->
                <div class="product-w3agile">
                    <h3 class="tittle1">Product Description</h3>
                    <div class="product-grids">
                        <div class="col-md-4 product-grid">
                            <div id="owl-demo" class="owl-carousel">
                                <div class="item">
                                    @foreach($recentProducts as $recentProduct)
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="{{ route('product-details', ['id' => $recentProduct->id]) }}"><img class="img-responsive " src="{{ asset($recentProduct->product_image) }}" alt=""></a>
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="{{ route('product-details', ['id' => $recentProduct->id]) }}">{{ $recentProduct->product_name }}</a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1">Tk. {{ $recentProduct->product_price }}</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    @endforeach
                                </div>
                                <div class="item">
                                    @foreach($recentProducts as $recentProduct)
                                        <div class="recent-grids">
                                            <div class="recent-left">
                                                <a href="{{ route('product-details', ['id' => $recentProduct->id]) }}"><img class="img-responsive " src="{{ asset($recentProduct->product_image) }}" alt=""></a>
                                            </div>
                                            <div class="recent-right">
                                                <h6 class="best2"><a href="{{ route('product-details', ['id' => $recentProduct->id]) }}">{{ $recentProduct->product_name }}</a></h6>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <span class=" price-in1">Tk. {{ $recentProduct->product_price }}</span>
                                            </div>
                                            <div class="clearfix"> </div>
                                        </div>
                                    @endforeach
                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 product-grid1">
                            <div class="tab-wl3">
                                <div class="bs-example bs-example-tabs" role="tabpanel" data-example-id="togglable-tabs">
                                    <ul id="myTab" class="nav nav-tabs left-tab" role="tablist">
                                        <li role="presentation" class="active"><a href="#home" id="home-tab" role="tab" data-toggle="tab" aria-controls="home" aria-expanded="true">Description</a></li>
                                        <li role="presentation"><a href="#reviews" role="tab" id="reviews-tab" data-toggle="tab" aria-controls="reviews">Reviews (1)</a></li>

                                    </ul>
                                    <div id="myTabContent" class="tab-content">
                                        <div role="tabpanel" class="tab-pane fade in active" id="home" aria-labelledby="home-tab">
                                            <div class="descr">
                                                @foreach($productDetails as $productDetail)
                                                    {!! $productDetail->long_description !!}
                                                @endforeach
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="reviews" aria-labelledby="reviews-tab">
                                            <div class="descr">
                                                <div class="reviews-top">
                                                    <div class="reviews-left">
                                                        <img src="{{ asset('/') }}/front-end/images/men3.jpg" alt=" " class="img-responsive">
                                                    </div>
                                                    <div class="reviews-right">
                                                        <ul>
                                                            <li><a href="#">Admin</a></li>
                                                            <li><a href="#"><i class="glyphicon glyphicon-share" aria-hidden="true"></i>Reply</a></li>
                                                        </ul>
                                                        <p>Ut enim ad minima veniam, quis nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex ea commodi consequatur? Quis autem vel eum iure reprehenderit.</p>
                                                    </div>
                                                    <div class="clearfix"></div>
                                                </div>
                                                <div class="reviews-bottom">
                                                    <h4>Add Reviews</h4>
                                                    <p>Your email address will not be published. Required fields are marked *</p>
                                                    <p>Your Rating</p>
                                                    <div class="block">
                                                        <div class="starbox small ghosting"><div class="positioner"><div class="stars"><div class="ghost" style="width: 42.5px; display: none;"></div><div class="colorbar" style="width: 42.5px;"></div><div class="star_holder"><div class="star star-0"></div><div class="star star-1"></div><div class="star star-2"></div><div class="star star-3"></div><div class="star star-4"></div></div></div></div></div>
                                                    </div>
                                                    <form action="#" method="post">
                                                        <label>Your Review </label>
                                                        <textarea type="text" Name="Message" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Message...';}" required="">Message...</textarea>
                                                        <div class="row">
                                                            <div class="col-md-6 row-grid">
                                                                <label>Name</label>
                                                                <input type="text" value="Name" Name="Name" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Name';}" required="">
                                                            </div>
                                                            <div class="col-md-6 row-grid">
                                                                <label>Email</label>
                                                                <input type="email" value="Email" Name="Email" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Email';}" required="">
                                                            </div>
                                                            <div class="clearfix"></div>
                                                        </div>
                                                        <input type="submit" value="SEND">
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                        <div role="tabpanel" class="tab-pane fade" id="custom" aria-labelledby="custom-tab">

                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"> </div>
                    </div>
                </div>
                <!--Product Description-->
            </div>
        </div>
        <!--single-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h3 class="tittle1">Best Sellers</h3>
                <div class="arrivals-grids">

                    @foreach($bestSellers as $bestSeller)
                        <div class="col-md-3 arrival-grid simpleCart_shelfItem">
                            <div class="grid-arr">
                                <div  class="grid-arrival">
                                    <figure>
                                        <a href="{{ route('product-details', ['id' => $bestSeller->id]) }}">
                                            <div class="grid-img">
                                                <img  src="{{ asset($bestSeller->product_image) }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="{{ asset($bestSeller->product_image) }}" class="img-responsive"  alt="">
                                            </div>
                                        </a>
                                    </figure>
                                </div>
                                <div class="ribben">
                                    <p>NEW</p>
                                </div>
                                <div class="ribben1">
                                    <p>SALE</p>
                                </div>
                                <div class="block">
                                    <div class="starbox small ghosting"> </div>
                                </div>
                                <div class="women">
                                    <h6><a href="{{ route('product-details', ['id' => $bestSeller->id]) }}">{{ $bestSeller->product_name }}</a></h6>
                                    <span class="size">XL / XXL / S </span>
                                    <p ><em class="item_price">Tk. {{ $bestSeller->product_price }}</em></p>
                                    <a href="{{ route('ad-to-cart-home',['id'=>$bestSeller->id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
    </div>
@endsection