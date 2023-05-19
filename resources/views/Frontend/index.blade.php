@extends('Frontend.layouts.master')
@section('main-content')

<!-- Page Contain -->
<div class="page-contain">

    <!-- Main content -->
    <div id="main-content" class="main-content">

        <!--Block 01: Main slide-->
        <div class="main-slide block-slider">
            <ul class="biolife-carousel nav-none-on-mobile" data-slick='{"arrows": true, "dots": false, "slidesMargin": 0, "slidesToShow": 1, "infinite": true, "speed": 800}'>
                @foreach ($films as $item)
                <li>
                    <div class="slide-contain slider-opt03__layout01">

                        <div class="media">
                            <div class="child-elememt"><a href="#" class="link-to"><img src="/upload/{{$item->film_image}}" width="604" height="580" alt=""></a></div>
                        </div>
                    </div>
                </li>
                @endforeach
            </ul>
        </div>

        <!--Block 02: Banner-->
        <div class="special-slide">
            <div class="container">
                <ul class="biolife-carousel dots_ring_style" data-slick='{"arrows": false, "dots": true, "slidesMargin": 30, "slidesToShow": 1, "infinite": true, "speed": 800, "responsive":[{"breakpoint":1200, "settings":{ "slidesToShow": 1}},{"breakpoint":768, "settings":{ "slidesToShow": 2, "slidesMargin":20, "dots": false}},{"breakpoint":480, "settings":{ "slidesToShow": 1}}]}'>
                @foreach ($films as $item)    
                <li>
                        <div class="slide-contain biolife-banner__special">
                            <div class="banner-contain">
                                <div class="media">
                                    <a href="#" class="bn-link">
                                        <figure><img src="/upload/{{$item->film_image}}" width="616" height="483" alt=""></figure>
                                    </a>
                                </div>
                                <div class="text-content">
                                    <b class="first-line">{{$item->film_name}}</b>
                                    <span class="second-line">{{$item->film_date}}</span>
                                    <span class="third-line">{{$item->film_type}}</i></span>
                                    <span class="third-line">{{$item->film_author}}</i></span>
                                    <div class="product-detail">
                                        <h4 class="product-name">{{$item->film_description}}</h4>
                                        <div class="buttons">
                                            <a href="#" class="btn add-to-cart-btn">Books tickets</a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </li>
                    @endforeach
                </ul>
            </div>
        </div>
    </div>
</div>

</div>
@endsection