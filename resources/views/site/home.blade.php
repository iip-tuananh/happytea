@extends('site.layouts.master')
@section('title')
{{$config->web_title}}
@endsection
@section('description')
{{$config->web_des}}
@endsection
@section('css')
<link rel='stylesheet'
        href='/site/css/callbuttom.css'
        type='text/css' media='all' />
@endsection
@section('content')
<main id="main" class="">
    <div id="content" role="main" class="content-area">
        <section class="section hide-for-small" id="section_59739552">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="slider-wrapper relative banner-gradient-a" id="slider-756248488">
                    <div class="slider slider-type-fade slider-nav-circle slider-nav-normal slider-nav-light slider-style-normal slider-show-nav"
                        data-flickity-options='{
                        "cellAlign": "center",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": 3000,
                        "pauseAutoPlayOnHover" : true,
                        "prevNextButtons": true,
                        "contain" : true,
                        "adaptiveHeight" : true,
                        "dragThreshold" : 10,
                        "percentPosition": true,
                        "pageDots": true,
                        "rightToLeft": false,
                        "draggable": true,
                        "selectedAttraction": 0.1,
                        "parallax" : 0,
                        "friction": 0.6        }'>
                        @foreach ($banners as $key => $banner)
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_{{ $key }}">
                            <a class="" href="{{ $banner->link }}">
                                <div class="img-inner dark">
                                    <img decoding="async" width="2500" height="911"
                                        src="{{ $banner->image->path }}"
                                        class="attachment-original size-original" alt="" />
                                </div>
                            </a>
                            <style>
                                #image_{{ $key }} {
                                    width: 100%;
                                }
                            </style>
                        </div>
                        @endforeach
                    </div>
                    <div class="loading-spin dark large centered"></div>
                </div>
            </div>
            <style>
                #section_59739552 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgb(248, 249, 250);
                }
            </style>
        </section>
        <section class="section show-for-small" id="section_1966772188">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="slider-wrapper relative banner-gradient-a" id="slider-1591666004">
                    <div class="slider slider-nav-circle slider-nav-normal slider-nav-light slider-nav-outside slider-style-normal slider-show-nav"
                        data-flickity-options='{
                        "cellAlign": "center",
                        "imagesLoaded": true,
                        "lazyLoad": 1,
                        "freeScroll": false,
                        "wrapAround": true,
                        "autoPlay": false,
                        "pauseAutoPlayOnHover" : true,
                        "prevNextButtons": true,
                        "contain" : true,
                        "adaptiveHeight" : true,
                        "dragThreshold" : 10,
                        "percentPosition": true,
                        "pageDots": false,
                        "rightToLeft": false,
                        "draggable": true,
                        "selectedAttraction": 0.1,
                        "parallax" : 0,
                        "friction": 0.6        }'>
                        @foreach ($banners as $key => $banner)
                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_{{ $key }}">
                            <a class="" href="{{ $banner->link }}">
                                <div class="img-inner dark">
                                    <img loading="lazy" decoding="async" width="2500" height="2500"
                                        src="{{ $banner->image->path }}"
                                        class="attachment-original size-original" alt="" />
                                </div>
                            </a>
                            <style>
                                #image_{{ $key }} {
                                    width: 100%;
                                }
                            </style>
                        </div>
                        @endforeach
                    </div>
                    <div class="loading-spin dark large centered"></div>
                </div>
            </div>
            <style>
                #section_1966772188 {
                    padding-top: 0px;
                    padding-bottom: 0px;
                    background-color: rgb(248, 249, 250);
                }
            </style>
        </section>
        <section class="section ss-intro" id="section_1206077719">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div id="text-178719832" class="text">
                    <h1 class="uppercase" style="text-align: center;"><span
                            style="font-size: 85%;"><strong>{{$config->web_title}}</strong></span></h1>
                    <div style="text-align: center;">{{$config->web_des}}</div>
                    <style>
                        #text-178719832 {
                            font-size: 0.75rem;
                            line-height: 1.5;
                            color: rgb(255, 255, 255);
                        }

                        #text-178719832>* {
                            color: rgb(255, 255, 255);
                        }
                    </style>
                </div>
            </div>
            <style>
                #section_1206077719 {
                    padding-top: 25px;
                    padding-bottom: 25px;
                    background-color: #98A77C;
                }
            </style>
        </section>
        <section class="section ss-intro-icons" id="section_922821406">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse" id="row-653202484">
                    <div id="col-723825338" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover   has-hover box-text-bottom">
                                <div class="box-image" style="width:20%;">
                                    <div class="">
                                        <img loading="lazy" decoding="async" width="80" height="80"
                                            src="https://winecellar.vn/wp-content/uploads/2022/03/champagne-1.png"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h4><span style="color: #056839;">2000 sản phẩm</span></h4>
                                        <p><span style="font-size: 80%;">Nhập khẩu &amp; phân phối chính
                                                hãng</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-922621510" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover   has-hover box-text-bottom">
                                <div class="box-image" style="width:20%;">
                                    <div class="">
                                        <img loading="lazy" decoding="async" width="42" height="43"
                                            src="https://winecellar.vn/wp-content/uploads/2023/06/gh-toan-quoc.png"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h4><span style="color: #056839;">Giao hàng toàn quốc</span></h4>
                                        <p><span style="font-size: 80%;">Linh hoạt giao hàng theo yêu cầu từ
                                                Khách hàng</span></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-1827824181" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover   has-hover box-text-bottom">
                                <div class="box-image" style="width:20%;">
                                    <div class="">
                                        <img loading="lazy" decoding="async" width="80" height="80"
                                            src="https://winecellar.vn/wp-content/uploads/2022/03/delivery-1.png"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h4><span style="color: #056839;">GIAO HÀNG NHANH (2H)</span></h4>
                                        <p><span style="font-size: 80%;">Giao hàng nhanh chóng, tiện lợi</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div id="col-727917324" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover   has-hover box-text-bottom">
                                <div class="box-image" style="width:20%;">
                                    <div class="">
                                        <img loading="lazy" decoding="async" width="48" height="48"
                                            src="https://winecellar.vn/wp-content/uploads/2023/06/check-correct.png"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="box-text-inner">
                                        <h4><span style="color: #056839;">CAM KẾT CHẤT LƯỢNG</span></h4>
                                        <p><span style="font-size: 80%;">Sản phẩm chính hãng, thương hiệu uy tín.</span>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_922821406 {
                    padding-top: 50px;
                    padding-bottom: 50px;
                    background-color: rgb(249, 245, 240);
                }
            </style>
        </section>
        <section class="section" id="section_1625733146">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">{{ $categorySpecialFlashsale->name }}</span><b></b></h2>
                </div>
                <div class="row" id="row-772684637">
                    @foreach ($categorySpecialFlashsale->products as $product)
                    <div id="col-1362508552" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover box-img-cat  has-hover box-text-bottom">
                                <div class="box-image">
                                    <a href="{{ route('front.show-product-detail', $product->slug) }}">
                                        <div class="image-cover" style="padding-top:75%;">
                                            <img loading="lazy" decoding="async" width="640" height="500"
                                                src="{{ $product->image->path }}"
                                                class="attachment- size-" alt="" />
                                        </div>
                                    </a>
                                </div>
                                <div class="box-text text-center" style="background-color:rgb(249, 245, 240);">
                                    <div class="box-text-inner">
                                        <h3><a href="{{ route('front.show-product-detail', $product->slug) }}">{{ $product->name }}</a>
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <style>
                #section_1625733146 {
                    padding-top: 90px;
                    padding-bottom: 90px;
                }
            </style>
        </section>
        @foreach ($categorySpecial as $category)
        <section class="section ss-home-products" id="section_41584310">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">{{ $category->name }}</span><b></b></h2>
                </div>
                <div class="row row-solid equalize-box large-columns-5 medium-columns-2 small-columns-2 row-normal slider row-slider slider-nav-simple slider-nav-push"
                    data-flickity-options='{"imagesLoaded": true, "groupCells": "100%", "dragThreshold" : 5, "cellAlign": "left","wrapAround": true,"prevNextButtons": true,"percentPosition": true,"pageDots": false, "rightToLeft": false, "autoPlay" : false}'>
                    @foreach ($category->products as $product)
                    <div class="col">
                        <div class="col-inner">
                            <div class="badge-container absolute left top z-1"></div>
                            <div class="product-small box row-solid has-hover box-normal box-text-bottom">
                                <div class="box-image">
                                    <div class="">
                                        <a href="{{ route('front.show-product-detail', $product->slug) }}"
                                            aria-label="{{ $product->name }}">
                                            <img loading="lazy" decoding="async" width="300" height="400"
                                                src="{{ $product->image->path }}"
                                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                                alt="{{ $product->name }}" /> </a>
                                    </div>
                                    {{-- <div class="image-tools top right show-on-hover">
                                        <div class="wishlist-icon">
                                            <button class="wishlist-button button is-outline circle icon"
                                                aria-label="Wishlist">
                                                <i class="icon-heart"></i> </button>
                                            <div class="wishlist-popup dark">
                                                <div class="yith-wcwl-add-to-wishlist add-to-wishlist-13892 yith-wcwl-add-to-wishlist--button_default-style wishlist-fragment on-first-load"
                                                    data-fragment-ref="13892"
                                                    data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;product_id&quot;:13892,&quot;parent_product_id&quot;:0,&quot;product_type&quot;:&quot;simple&quot;,&quot;is_single&quot;:false,&quot;in_default_wishlist&quot;:false,&quot;show_view&quot;:false,&quot;browse_wishlist_text&quot;:&quot;\u0110\u00e3 th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;&quot;,&quot;product_added_text&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;shortcode&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                    <div class="yith-wcwl-add-button">
                                                        <a href="?add_to_wishlist=13892&#038;_wpnonce=ba2b187597"
                                                            class="add_to_wishlist single_add_to_wishlist alt button theme-button-style "
                                                            data-product-id="13892" data-product-type="simple"
                                                            data-original-product-id="0"
                                                            data-title="Thêm vào yêu thích" rel="nofollow">
                                                            <svg id="yith-wcwl-icon-star"
                                                                class="yith-wcwl-icon-svg" fill="currentColor"
                                                                viewBox="0 0 24 24"
                                                                xmlns="http://www.w3.org/2000/svg">
                                                                <path clip-rule="evenodd" fill-rule="evenodd"
                                                                    d="M10.788 3.21c.448-1.077 1.976-1.077 2.424 0l2.082 5.006 5.404.434c1.164.093 1.636 1.545.749 2.305l-4.117 3.527 1.257 5.273c.271 1.136-.964 2.033-1.96 1.425L12 18.354 7.373 21.18c-.996.608-2.231-.29-1.96-1.425l1.257-5.273-4.117-3.527c-.887-.76-.415-2.212.749-2.305l5.404-.434 2.082-5.005Z">
                                                                </path>
                                                            </svg>
                                                            <span>Thêm vào yêu thích</span>
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div> --}}
                                    <div
                                        class="image-tools grid-tools text-center hide-for-small bottom hover-slide-in show-on-hover">
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="title-wrapper">
                                        <p class="name product-title woocommerce-loop-product__title"><a
                                                href="{{ route('front.show-product-detail', $product->slug) }}"
                                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $product->name }}</a></p>
                                    </div>
                                    <div class="price-wrapper">
                                        <span class="price"><span
                                                class="woocommerce-Price-amount amount"><bdi>{{ formatCurrency($product->price) }}&nbsp;<span
                                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                                    </div>
                                    <div class="add-to-cart-button">
                                        <a href="javascript:void(0)"
                                            data-quantity="1"
                                            class="primary is-small mb-0 button product_type_simple add_to_cart_button is-flat"
                                            data-product_id="{{ $product->id }}" data-product_sku="{{ $product->sku }}"
                                            aria-label="Thêm vào giỏ hàng: &ldquo;{{ $product->name }}&rdquo;"
                                            rel="nofollow"
                                            data-success_message="&ldquo;{{ $product->name }}&rdquo; đã được thêm vào giỏ hàng của bạn">Thêm
                                            vào giỏ hàng</a></div>
                                    <span id="woocommerce_loop_add_to_cart_link_describedby_13892"
                                        class="screen-reader-text">
                                    </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <style>
                #section_41584310 {
                    padding-top: 40px;
                    padding-bottom: 40px;
                }

                @media (min-width:850px) {
                    #section_41584310 {
                        padding-top: 38px;
                        padding-bottom: 38px;
                    }
                }
            </style>
        </section>
        @endforeach
        <section class="section" id="section_773858533">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new" style="margin-bottom:0px;">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main"
                            style="color:rgb(255, 255, 255);">TVC doanh nghiệp</span><b></b></h2>
                </div>
                <div id="text-4207487107" class="text">
                    <p>
                        {{ $config->web_title }} tự hào là đại diện độc quyền sản xuất và phân phối sản phẩm tốt nhất tại Việt Nam.<br />
                        <style>
                            #text-4207487107 {
                                text-align: center;
                                color: rgb(255, 255, 255);
                            }

                            #text-4207487107>* {
                                color: rgb(255, 255, 255);
                            }
                        </style>
                </div>
                <div class="row align-equal large-columns-3 medium-columns-1 small-columns-1"
                    id="row-914721395">
                    @foreach ($partners as $partner)
                    <div id="col-1910038234" class="col medium-3 small-6 large-3">
                        <div class="col-inner">
                            <div class="box has-hover box-img-cat  has-hover box-text-bottom">
                                <div class="box-image">
                                    <a href="javascript:void(0)" data-href="{{$partner->link}}">
                                        <div class="image-cover" style="padding-top:75%;">
                                            <img loading="lazy" decoding="async" width="507" height="340"
                                                src="{{$partner->image->path}}"
                                                class="attachment- size-" alt="" />
                                        </div>
                                        <div class="hotline-phone-ring-wrap">
                                            <div class="hotline-phone-ring">
                                            <div class="hotline-phone-ring-circle"></div>
                                            <div class="hotline-phone-ring-circle-fill"></div>
                                            <div class="hotline-phone-ring-img-circle">
                                                <svg style="position: relative" height="" viewBox="0 -77 512.00213 512" width="">
                                                    <path d="m501.453125 56.09375c-5.902344-21.933594-23.195313-39.222656-45.125-45.128906-40.066406-10.964844-200.332031-10.964844-200.332031-10.964844s-160.261719 0-200.328125 10.546875c-21.507813 5.902344-39.222657 23.617187-45.125 45.546875-10.542969 40.0625-10.542969 123.148438-10.542969 123.148438s0 83.503906 10.542969 123.148437c5.90625 21.929687 23.195312 39.222656 45.128906 45.128906 40.484375 10.964844 200.328125 10.964844 200.328125 10.964844s160.261719 0 200.328125-10.546875c21.933594-5.902344 39.222656-23.195312 45.128906-45.125 10.542969-40.066406 10.542969-123.148438 10.542969-123.148438s.421875-83.507812-10.546875-123.570312zm0 0" fill="#f00"></path><path d="m204.96875 256 133.269531-76.757812-133.269531-76.757813zm0 0" fill="#fff"></path>
                                                </svg>
                                            </div>
                                            </div>
                                        </div>
                                        {{-- <div style="position:absolute; top: 50%; left: 50%; transform: translate(-50%, -50%); width: 65px;" >

                                            <div class="hotline-phone-ring-circle-fill">
                                            </div>
                                        </div> --}}
                                    </a>
                                </div>
                                <div class="box-text text-center" style="background-color:rgb(249, 245, 240);">
                                    <div class="box-text-inner">
                                        <h3><a data-href="{{$partner->link}}" href="javascript:void(0)">{{$partner->name}}</a></h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <style>
                #section_773858533 {
                    padding-top: 90px;
                    padding-bottom: 90px;
                    background-color: #CFE1B9;
                }
            </style>
        </section>
        {{-- <section class="section" id="section_429586963">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">LOẠI
                            RƯỢU VANG</span><b></b></h2>
                </div>
                <div class="row" id="row-326562899">
                    <div id="col-1010034829" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="row" id="row-1586138036">
                                <div id="col-2075347997" class="col medium-3 small-6 large-3">
                                    <div class="col-inner">
                                        <div class="banner has-hover banner-kt banner-cat"
                                            id="banner-1957402962">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                </div>
                                                <div class="banner-layers container">
                                                    <a class="fill" href="https://winecellar.vn/ruou-vang-do/">
                                                        <div class="fill banner-link"></div>
                                                    </a>
                                                    <div id="text-box-267688289"
                                                        class="text-box banner-layer x10 md-x10 lg-x10 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text dark">
                                                            <div class="text-inner text-center">
                                                                <div id="text-1831891587" class="text">
                                                                    <h3 class="uppercase"><a
                                                                            href="https://winecellar.vn/ruou-vang-do/">Rượu
                                                                            <br />vang đỏ</a></h3>
                                                                    <style>
                                                                        #text-1831891587 {
                                                                            font-size: 1rem;
                                                                            line-height: 1.7;
                                                                            text-align: left;
                                                                            color: rgb(255, 255, 255);
                                                                        }

                                                                        #text-1831891587>* {
                                                                            color: rgb(255, 255, 255);
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <style>
                                                            #text-box-267688289 {
                                                                width: 60%;
                                                            }

                                                            #text-box-267688289 .text-box-content {
                                                                font-size: 100%;
                                                            }

                                                            @media (min-width:550px) {
                                                                #text-box-267688289 {
                                                                    width: 49%;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height-fix is-invisible"><img loading="lazy"
                                                    decoding="async" width="340" height="200"
                                                    src="https://winecellar.vn/wp-content/uploads/2023/03/tim-hieu-ve-ruou-vang-y.jpg"
                                                    class="attachment-large size-large" alt="" /></div>
                                            <style>
                                                #banner-1957402962 .bg.bg-loaded {
                                                    background-image: url(https://winecellar.vn/wp-content/uploads/2023/03/tim-hieu-ve-ruou-vang-y.jpg);
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div id="col-349014885" class="col medium-3 small-6 large-3">
                                    <div class="col-inner">
                                        <div class="banner has-hover banner-kt banner-cat"
                                            id="banner-1450455177">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                </div>
                                                <div class="banner-layers container">
                                                    <a class="fill"
                                                        href="https://winecellar.vn/ruou-vang-trang/">
                                                        <div class="fill banner-link"></div>
                                                    </a>
                                                    <div id="text-box-104565273"
                                                        class="text-box banner-layer x10 md-x10 lg-x10 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text dark">
                                                            <div class="text-inner text-center">
                                                                <div id="text-4272188119" class="text">
                                                                    <h3 class="uppercase"><a
                                                                            href="https://winecellar.vn/ruou-vang-trang/">Rượu
                                                                            <br />vang Trắng</a></h3>
                                                                    <style>
                                                                        #text-4272188119 {
                                                                            font-size: 1rem;
                                                                            text-align: left;
                                                                            color: rgb(0, 0, 0);
                                                                        }

                                                                        #text-4272188119>* {
                                                                            color: rgb(0, 0, 0);
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <style>
                                                            #text-box-104565273 {
                                                                width: 60%;
                                                            }

                                                            #text-box-104565273 .text-box-content {
                                                                font-size: 100%;
                                                            }

                                                            @media (min-width:550px) {
                                                                #text-box-104565273 {
                                                                    width: 45%;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height-fix is-invisible"><img loading="lazy"
                                                    decoding="async" width="340" height="200"
                                                    src="https://winecellar.vn/wp-content/uploads/2023/03/tim-hieu-ve-ruou-vang-phap.jpg"
                                                    class="attachment-large size-large" alt="" /></div>
                                            <style>
                                                #banner-1450455177 .bg.bg-loaded {
                                                    background-image: url(https://winecellar.vn/wp-content/uploads/2023/03/tim-hieu-ve-ruou-vang-phap.jpg);
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div id="col-566802952" class="col medium-3 small-6 large-3">
                                    <div class="col-inner">
                                        <div class="banner has-hover banner-kt banner-cat"
                                            id="banner-231567803">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                </div>
                                                <div class="banner-layers container">
                                                    <a class="fill"
                                                        href="https://winecellar.vn/ruou-champagne/">
                                                        <div class="fill banner-link"></div>
                                                    </a>
                                                    <div id="text-box-1547088515"
                                                        class="text-box banner-layer x10 md-x10 lg-x10 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text dark">
                                                            <div class="text-inner text-center">
                                                                <div id="text-1312796739" class="text">
                                                                    <h3 class="uppercase"><a
                                                                            href="https://winecellar.vn/ruou-champagne/">Rượu
                                                                            CHAMPAGNE</a></h3>
                                                                    <style>
                                                                        #text-1312796739 {
                                                                            font-size: 0.75rem;
                                                                            text-align: left;
                                                                            color: rgb(0, 0, 0);
                                                                        }

                                                                        #text-1312796739>* {
                                                                            color: rgb(0, 0, 0);
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <style>
                                                            #text-box-1547088515 {
                                                                width: 60%;
                                                            }

                                                            #text-box-1547088515 .text-box-content {
                                                                font-size: 100%;
                                                            }

                                                            @media (min-width:550px) {
                                                                #text-box-1547088515 {
                                                                    width: 42%;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height-fix is-invisible"><img loading="lazy"
                                                    decoding="async" width="340" height="200"
                                                    src="https://winecellar.vn/wp-content/uploads/2023/06/cat-ruou-champagne.jpg"
                                                    class="attachment-large size-large" alt="" /></div>
                                            <style>
                                                #banner-231567803 .bg.bg-loaded {
                                                    background-image: url(https://winecellar.vn/wp-content/uploads/2023/06/cat-ruou-champagne.jpg);
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                                <div id="col-1668661416" class="col medium-3 small-6 large-3">
                                    <div class="col-inner">
                                        <div class="banner has-hover banner-kt banner-cat"
                                            id="banner-1448654022">
                                            <div class="banner-inner fill">
                                                <div class="banner-bg fill">
                                                    <div class="bg fill bg-fill "></div>
                                                </div>
                                                <div class="banner-layers container">
                                                    <a class="fill"
                                                        href="https://winecellar.vn/ruou-vang-hong/">
                                                        <div class="fill banner-link"></div>
                                                    </a>
                                                    <div id="text-box-428719045"
                                                        class="text-box banner-layer x10 md-x10 lg-x10 y50 md-y50 lg-y50 res-text">
                                                        <div class="text-box-content text dark">
                                                            <div class="text-inner text-center">
                                                                <div id="text-3672569694" class="text">
                                                                    <h3 class="uppercase"><a
                                                                            href="https://winecellar.vn/ruou-vang-hong/">Rượu
                                                                            <br />vang HỒNG</a></h3>
                                                                    <style>
                                                                        #text-3672569694 {
                                                                            font-size: 0.75rem;
                                                                            text-align: left;
                                                                            color: rgb(0, 0, 0);
                                                                        }

                                                                        #text-3672569694>* {
                                                                            color: rgb(0, 0, 0);
                                                                        }
                                                                    </style>
                                                                </div>
                                                            </div>
                                                        </div>
                                                        <style>
                                                            #text-box-428719045 {
                                                                width: 60%;
                                                            }

                                                            #text-box-428719045 .text-box-content {
                                                                font-size: 100%;
                                                            }

                                                            @media (min-width:550px) {
                                                                #text-box-428719045 {
                                                                    width: 55%;
                                                                }
                                                            }
                                                        </style>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="height-fix is-invisible"><img loading="lazy"
                                                    decoding="async" width="322" height="200"
                                                    src="https://winecellar.vn/wp-content/uploads/2023/10/Frame-22-1.jpg"
                                                    class="attachment-large size-large" alt="" /></div>
                                            <style>
                                                #banner-1448654022 .bg.bg-loaded {
                                                    background-image: url(https://winecellar.vn/wp-content/uploads/2023/10/Frame-22-1.jpg);
                                                }
                                            </style>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="img has-hover box-img-cat x md-x lg-x y md-y lg-y"
                                id="image_1674739514">
                                <a class="" href="https://winecellar.vn/ruou-vang-cao-cap/" target="_blank"
                                    rel="noopener">
                                    <div class="img-inner dark">
                                        <img loading="lazy" decoding="async" width="2048" height="410"
                                            src="https://winecellar.vn/wp-content/uploads/2022/04/220331-Banner-3.jpg"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </a>
                                <style>
                                    #image_1674739514 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_429586963 {
                    padding-top: 90px;
                    padding-bottom: 90px;
                }
            </style>
        </section> --}}
        @if ($categorySpecialPost->count() > 0)
        @foreach ($categorySpecialPost as $category)
        @if ($category->order_number == 1)
        <section class="section" id="section_848453989">
            <div class="bg section-bg fill bg-fill  "></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main"
                            style="color:rgb(255, 255, 255);">{{$category->name}}</span><b></b></h2>
                </div>
                @if ($category->posts->count() > 0)
                <div class="row" style="max-width:1350px" id="row-248071579">
                    <div id="col-1474770815" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="row row-collapse align-equal box-img-cat" id="row-1422285054">
                                <div id="col-1164054540" class="col medium-8 small-12 large-8">
                                    <div class="col-inner">
                                        <div class="img has-hover x md-x lg-x y md-y lg-y" id="image_727095583">
                                            <a class="" href="{{route('front.detail-blog', $category->posts[0]->slug)}}">
                                                <div class="img-inner dark">
                                                    <img loading="lazy" decoding="async" width="2048"
                                                        height="1072"
                                                        src="{{$category->posts[0]->image->path}}"
                                                        class="attachment-original size-original" alt="" />
                                                </div>
                                            </a>
                                            <style>
                                                #image_727095583 {
                                                    width: 100%;
                                                }
                                            </style>
                                        </div>
                                    </div>
                                    <style>
                                        #col-1164054540>.col-inner {
                                            margin: 0px 0px 0px 0px;
                                        }
                                    </style>
                                </div>
                                <div id="col-221531857" class="col medium-4 small-12 large-4">
                                    <div class="col-inner">
                                        <h2>{{$category->posts[0]->name}}</h2>
                                        <div class="intro-post">{!! $category->posts[0]->intro !!}</div>
                                        <a href="{{route('front.detail-blog', $category->posts[0]->slug)}}"
                                            class="button primary btn-view-sk" style="border-radius:10px;">
                                            <span>Xem chi tiết</span>
                                        </a>
                                    </div>
                                    <style>
                                        #col-221531857>.col-inner {
                                            padding: 30px 30px 30px 30px;
                                        }
                                    </style>
                                </div>
                                <style>
                                    #row-1422285054>.col>.col-inner {
                                        padding: 1px 1px 1px 1;
                                        background-color: rgb(255, 255, 255);
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row" id="row-488558173">
                    <div id="col-1211564009" class="col small-12 large-12">
                        <div class="col-inner">
                            <div class="slider-wrapper relative" id="slider-2055879274">
                                <div class="slider slider-nav-circle slider-nav-large slider-nav-light slider-nav-outside slider-style-normal"
                                    data-flickity-options='{
                                    "cellAlign": "center",
                                    "imagesLoaded": true,
                                    "lazyLoad": 1,
                                    "freeScroll": false,
                                    "wrapAround": true,
                                    "autoPlay": 6000,
                                    "pauseAutoPlayOnHover" : true,
                                    "prevNextButtons": true,
                                    "contain" : true,
                                    "adaptiveHeight" : true,
                                    "dragThreshold" : 10,
                                    "percentPosition": true,
                                    "pageDots": true,
                                    "rightToLeft": false,
                                    "draggable": true,
                                    "selectedAttraction": 0.1,
                                    "parallax" : 0,
                                    "friction": 0.6        }'>
                                    <div class="row" style="max-width:1350px" id="row-377426795">
                                        @foreach ($category->posts as $key => $post)
                                        @if ($key == 0)
                                        @continue
                                        @endif
                                        <div id="col-1888718494" class="col medium-4 small-12 large-4">
                                            <div class="col-inner">
                                                <div
                                                    class="box has-hover box-img-cat  has-hover box-text-bottom">
                                                    <div class="box-image">
                                                        <a
                                                            href="{{route('front.detail-blog', $post->slug)}}">
                                                            <div class="">
                                                                <img loading="lazy" decoding="async"
                                                                    width="1020" height="534"
                                                                    src="{{$post->image->path}}"
                                                                    class="attachment-large size-large"
                                                                    alt="" />
                                                            </div>
                                                        </a>
                                                    </div>
                                                    <div class="box-text text-center"
                                                        style="background-color:rgb(255, 255, 255);">
                                                        <div class="box-text-inner">
                                                            <div id="text-3471938406" class="text">
                                                                <div>
                                                                    <h3 dir="auto">{{$post->name}}</h3>
                                                                </div>
                                                                <div class="intro-post">{!! $post->intro !!}</div>
                                                                <style>
                                                                    #text-3471938406 {
                                                                        text-align: left;
                                                                    }
                                                                </style>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                                <div class="loading-spin dark large centered"></div>
                            </div>
                        </div>
                    </div>
                </div>
                @endif
            </div>
            <style>
                #section_848453989 {
                    padding-top: 80px;
                    padding-bottom: 80px;
                    background-color: #728156;
                }

                /* #section_848453989 .section-bg.bg-loaded {
                    background-image: url(https://winecellar.vn/wp-content/uploads/2023/06/bg-event.jpg);
                } */
            </style>
        </section>
        @else
        <section class="section ss-box-image" id="section_923462598">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">{{$category->name}}</span><b></b></h2>
                </div>
                <div class="row new-posts large-columns-5 medium-columns-1 small-columns-1">
                    @foreach ($category->posts as $post)
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="{{route('front.detail-blog', $post->slug)}}"
                                            class="plain"
                                            aria-label="{{$post->name}}">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="{{$post->image->path}}"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="{{$post->name}}" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small"
                                    style="background-color:rgb(255, 255, 255);">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="{{route('front.detail-blog', $post->slug)}}"
                                                class="plain">{{$post->name}}</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
            </div>
            <style>
                #section_923462598 {
                    padding-top: 40px;
                    padding-bottom: 40px;
                    background-color: rgb(249, 245, 240);
                }

                @media (min-width:850px) {
                    #section_923462598 {
                        padding-top: 80px;
                        padding-bottom: 80px;
                    }
                }
            </style>
        </section>
        @endif
        @endforeach
        @endif
        {{-- <section class="section ss-box-image" id="section_950201897">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main">Tin
                            tức</span><b></b></h2>
                </div>
                <div class="row new-posts large-columns-5 medium-columns-1 small-columns-1">
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="https://winecellar.vn/chon-ruou-vang-y-ca-chep-den-lam-qua-tang-tet-cong-ty/"
                                            class="plain"
                                            aria-label="Chọn Rượu Vang Ý Cá Chép Đen Làm Quà Tặng Tết Công Ty">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="https://winecellar.vn/wp-content/uploads/2024/11/chon-ruou-vang-y-ca-chep-den-lam-qua-tang-tet-cong-ty-533x400.jpg"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="Chọn Rượu Vang Ý Cá Chép Đen Làm Quà Tặng Tết Công Ty" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="https://winecellar.vn/chon-ruou-vang-y-ca-chep-den-lam-qua-tang-tet-cong-ty/"
                                                class="plain">Chọn Rượu Vang Ý Cá Chép Đen Làm Quà Tặng Tết Công
                                                Ty</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="https://winecellar.vn/hop-qua-tet-cong-ty-dai-cat-dai-loc-nang-tam-qua-tang-doanh-nghiep/"
                                            class="plain"
                                            aria-label="Hộp Quà Tết Công Ty Đại Cát Đại Lộc: Nâng Tầm Quà Tặng Doanh Nghiệp">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="https://winecellar.vn/wp-content/uploads/2024/11/hop-qua-tet-cong-ty-dai-cat-dai-loc-nang-tam-qua-tang-doanh-nghiep-533x400.jpg"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="Hộp Quà Tết Công Ty Đại Cát Đại Lộc: Nâng Tầm Quà Tặng Doanh Nghiệp" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="https://winecellar.vn/hop-qua-tet-cong-ty-dai-cat-dai-loc-nang-tam-qua-tang-doanh-nghiep/"
                                                class="plain">Hộp Quà Tết Công Ty Đại Cát Đại Lộc: Nâng Tầm Quà
                                                Tặng Doanh Nghiệp</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="https://winecellar.vn/hop-qua-tet-nhap-khau-cat-tuong-qua-tang-doanh-nghiep-ly-tuong/"
                                            class="plain"
                                            aria-label="Hộp Quà Tết Nhập Khẩu Cát Tường: Quà Tặng Doanh Nghiệp Lý Tưởng">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="https://winecellar.vn/wp-content/uploads/2024/11/hop-qua-tet-nhap-khau-cat-tuong-qua-tang-doanh-nghiep-ly-tuong-533x400.jpg"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="Hộp Quà Tết Nhập Khẩu Cát Tường: Quà Tặng Doanh Nghiệp Lý Tưởng" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="https://winecellar.vn/hop-qua-tet-nhap-khau-cat-tuong-qua-tang-doanh-nghiep-ly-tuong/"
                                                class="plain">Hộp Quà Tết Nhập Khẩu Cát Tường: Quà Tặng Doanh
                                                Nghiệp Lý Tưởng</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="https://winecellar.vn/ruou-vang-y-ca-chep-vang-qua-tang-tet-khach-hang-ly-tuong/"
                                            class="plain"
                                            aria-label="Rượu Vang Ý Cá Chép Vàng – Quà Tặng Tết Khách Hàng Lý Tưởng">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="https://winecellar.vn/wp-content/uploads/2024/11/ruou-vang-y-ca-chep-vang-qua-tang-tet-khach-hang-ly-tuong-533x400.jpg"
                                                class="attachment-medium size-medium wp-post-image" alt="" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="https://winecellar.vn/ruou-vang-y-ca-chep-vang-qua-tang-tet-khach-hang-ly-tuong/"
                                                class="plain">Rượu Vang Ý Cá Chép Vàng – Quà Tặng Tết Khách Hàng
                                                Lý Tưởng</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-normal box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:75%;">
                                        <a href="https://winecellar.vn/qua-tang-cuoi-nam-cho-doanh-nghiep-nganh-bat-dong-san/"
                                            class="plain"
                                            aria-label="Quà tặng cuối năm cho doanh nghiệp ngành bất động sản">
                                            <img loading="lazy" decoding="async" width="533" height="400"
                                                src="https://winecellar.vn/wp-content/uploads/2024/11/qua-tang-cuoi-nam-cho-doanh-nghiep-nganh-bat-dong-san-533x400.jpg"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="Quà tặng cuối năm cho doanh nghiệp ngành bất động sản" />
                                        </a>
                                    </div>
                                </div>
                                <div class="box-text text-center is-small">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="https://winecellar.vn/qua-tang-cuoi-nam-cho-doanh-nghiep-nganh-bat-dong-san/"
                                                class="plain">Quà tặng cuối năm cho doanh nghiệp ngành bất động
                                                sản</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_950201897 {
                    padding-top: 40px;
                    padding-bottom: 40px;
                }

                @media (min-width:850px) {
                    #section_950201897 {
                        padding-top: 80px;
                        padding-bottom: 80px;
                    }
                }
            </style>
        </section> --}}
        <section class="section" id="section_813810729">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="container section-title-container tit-new">
                    <h2 class="section-title section-title-center"><b></b><span class="section-title-main"
                            style="color:rgb(255, 255, 255);">{{$block->title}}</span><b></b></h2>
                </div>
                <div class="row align-equal" id="row-565550359">
                    <div id="col-1998855796" class="col medium-8 small-12 large-8">
                        <div class="col-inner">
                            <div class="img has-hover box-img-cat x md-x lg-x y md-y lg-y"
                                id="image_1397385690">
                                <a class="" href="{{$block->link}}">
                                    <div class="img-inner image-cover dark" style="padding-top:450px;">
                                        <img loading="lazy" decoding="async" width="2500" height="1265"
                                            src="{{$block->image->path}}"
                                            class="attachment-original size-original" alt="" />
                                    </div>
                                </a>
                                <style>
                                    #image_1397385690 {
                                        width: 100%;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                    <div id="col-17130456" class="col medium-4 small-12 large-4">
                        <div class="col-inner">
                            {!! $block->body !!}
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_813810729 {
                    padding-top: 90px;
                    padding-bottom: 90px;
                    background-color: #88976C;
                }
            </style>
        </section>
    </div>
</main>
@endsection
@push('script')
@endpush
