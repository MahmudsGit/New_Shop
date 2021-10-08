@extends('front-end.master')
@section('title')
    Home
@endsection
@section('body')
    <!--banner-->
    <div class="banner-w3">
        <div class="demo-1">
            <div id="example1" class="core-slider core-slider__carousel example_1">
                <div class="core-slider_viewport">
                    <div class="core-slider_list">
                        @foreach($sliderImages as $sliderImage)
                        <div class="core-slider_item">
                            <img src="{{ asset($sliderImage->first_image) }}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset($sliderImage->second_image) }}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset($sliderImage->third_image) }}" class="img-responsive" alt="">
                        </div>
                        <div class="core-slider_item">
                            <img src="{{ asset($sliderImage->fourth_image) }}" class="img-responsive" alt="">
                        </div>
                        @endforeach
                    </div>
                </div>
                <div class="core-slider_nav">
                    <div class="core-slider_arrow core-slider_arrow__right"></div>
                    <div class="core-slider_arrow core-slider_arrow__left"></div>
                </div>
                <div class="core-slider_control-nav"></div>
            </div>
        </div>
        <link href="{{ asset('/') }}/front-end/css/coreSlider.css" rel="stylesheet" type="text/css">
        <script src="{{ asset('/') }}/front-end/js/coreSlider.js"></script>
        <script>
            $('#example1').coreSlider({
                pauseOnHover: false,
                interval: 3000,
                controlNavEnabled: true
            });

        </script>

    </div>
    <!--banner-->
    <!--content-->
    <div class="content">
        <!--banner-bottom-->
        <div class="ban-bottom-w3l">
            <div class="container">
                @foreach($ads as $ad)
                <div class="col-md-6 ban-bottom">
                    <div class="ban-top">
                        <img src="{{ asset($ad->main_image) }}" class="img-responsive" alt=""/>
                        <div class="ban-text">
                            <h4>{{ $ad->main_ad }}</h4>
                        </div>
                        <div class="ban-text2 hvr-sweep-to-top">
                            <h4>{{ $ad->off_percent }}% <span>Off/-</span></h4>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 ban-bottom3">
                    <div class="ban-top">
                        <img src="{{ asset($ad->secondary_image) }}" class="img-responsive" alt=""/>
                        <div class="ban-text1">
                            <h4>{{ $ad->seceondary_ad }}</h4>
                        </div>
                    </div>
                    <div class="ban-img">
                        <div class=" ban-bottom1">
                            <div class="ban-top">
                                <img src="{{ asset($ad->third_image) }}" class="img-responsive" alt=""/>
                                <div class="ban-text1">
                                    <h4>{{ $ad->third_ad }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="ban-bottom2">
                            <div class="ban-top">
                                <img src="{{ asset($ad->fourth_image) }}" class="img-responsive" alt=""/>
                                <div class="ban-text1">
                                    <h4>{{ $ad->fourth_ad }}</h4>
                                </div>
                            </div>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
                @endforeach
                <div class="clearfix"></div>
            </div>
        </div>
        <!--banner-bottom-->
        <!--new-arrivals-->
        <div class="new-arrivals-w3agile">
            <div class="container">
                <h2 class="tittle">New Products</h2>
                <div class="arrivals-grids">

                    @foreach($newProducts as $newProduct)
                        <div class="col-md-3 arrival-grid simpleCart_shelfItem ">
                            <div class="grid-arr">
                                <div  class="grid-arrival">
                                    <figure>
                                        <a href="{{ route('product-details', ['id' => $newProduct->id]) }}" class="new-gri" >
                                            <div class="grid-img">
                                                <img  src="{{ asset($newProduct->product_image) }}" class="img-responsive" alt="">
                                            </div>
                                            <div class="grid-img">
                                                <img  src="{{ asset($newProduct->product_image) }}" class="img-responsive"  alt="">
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
                                    <h6><a href="{{ route('product-details', ['id' => $newProduct->id]) }}">{{ $newProduct->product_name }}</a></h6>
                                    <p ><em class="item_price">Tk. {{ $newProduct->product_price }}</em></p>
                                    <a href="{{ route('ad-to-cart-home',['id'=>$newProduct->id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                </div>
                            </div>
                        </div>
                    @endforeach

                    <div class="clearfix"></div>
                </div>
            </div>
        </div>
        <!--new-arrivals-->
        <!--accessories-->
        <div class="accessories-w3l">
            <div class="container">
                <h3 class="tittle">20% Discount on</h3>
                <span>TRENDING DESIGNS</span>
                <div class="button">
                    <a href="#" class="button1"> Shop Now</a>
                    <a href="#" class="button1"> Quick View</a>
                </div>
            </div>
        </div>
        <!--accessories-->
        <!--Products-->
        <div class="product-agile">
            <div class="container">
                <h3 class="tittle1"> New Arrivals </h3>
                <div class="slider">
                    <div class="callbacks_container">
                        <ul class="rslides" id="slider">
                            <li>
                                <div class="caption">

                                    @foreach($arrivalsProductsOne as $arrivalsProduct)
                                    <div class="col-md-3 cap-left simpleCart_shelfItem">
                                        <div class="grid-arr">
                                            <div  class="grid-arrival">
                                                <figure>
                                                    <a href="{{ route('product-details', ['id' => $arrivalsProduct->id]) }}">
                                                        <div class="grid-img">
                                                            <img  src="{{ asset($arrivalsProduct->product_image) }}" class="img-responsive" alt="">
                                                        </div>
                                                        <div class="grid-img">
                                                            <img  src="{{ asset($arrivalsProduct->product_image) }}" class="img-responsive"  alt="">
                                                        </div>
                                                    </a>
                                                </figure>
                                            </div>
                                            <div class="block">
                                                <div class="starbox small ghosting"> </div>
                                            </div>
                                            <div class="women">
                                                <h6><a href="{{ route('product-details', ['id' => $arrivalsProduct->id]) }}">{{ $arrivalsProduct->product_name }}</a></h6>
                                                <span class="size">XL / XXL / S </span>
                                                <p ><em class="item_price">Tk. {{ $arrivalsProduct->product_price }}</em></p>
                                                <a href="{{ route('ad-to-cart-home',['id'=>$arrivalsProduct->id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                            </div>
                                        </div>
                                    </div>
                                    @endforeach

                                    <div class="clearfix"></div>
                                </div>
                            </li>
                            <li>
                                <div class="caption">

                                    @foreach($arrivalsProductsTwo as $arrivalsProduct)
                                        <div class="col-md-3 cap-left simpleCart_shelfItem">
                                            <div class="grid-arr">
                                                <div  class="grid-arrival">
                                                    <figure>
                                                        <a href="{{ route('product-details', ['id' => $arrivalsProduct->id]) }}">
                                                            <div class="grid-img">
                                                                <img  src="{{ asset($arrivalsProduct->product_image) }}" class="img-responsive" alt="">
                                                            </div>
                                                            <div class="grid-img">
                                                                <img  src="{{ asset($arrivalsProduct->product_image) }}" class="img-responsive"  alt="">
                                                            </div>
                                                        </a>
                                                    </figure>
                                                </div>
                                                <div class="block">
                                                    <div class="starbox small ghosting"> </div>
                                                </div>
                                                <div class="women">
                                                    <h6><a href="{{ route('product-details', ['id' => $arrivalsProduct->id]) }}">{{ $arrivalsProduct->product_name }}</a></h6>
                                                    <span class="size">XL / XXL / S </span>
                                                    <p ><em class="item_price">Tk. {{ $arrivalsProduct->product_price }}</em></p>
                                                    <a href="{{ route('ad-to-cart-home',['id'=>$arrivalsProduct->id]) }}" data-text="Add To Cart" class="my-cart-b item_add">Add To Cart</a>
                                                </div>
                                            </div>
                                        </div>
                                    @endforeach

                                    <div class="clearfix"></div>
                                </div>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!--Products-->
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