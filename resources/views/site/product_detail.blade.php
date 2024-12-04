@extends('site.layouts.master')
@section('title')
    {{ $product->name }}
@endsection
@section('description')
    {{ $product->short_des }}
@endsection

@section('css')
<style>
    .text-limit-3-line {
        line-height: 1.5;
        display: -webkit-box;
        -webkit-line-clamp: 3;
        -webkit-box-orient: vertical;
        overflow: hidden;
    }
</style>
@endsection

@section('content')
<main id="main" class="single-product">
    <div class="shop-container">
        <div class="container">
            <div class="woocommerce-notices-wrapper"></div>
        </div>
        <div id="product-39323"
            class="product type-product post-39323 status-publish first instock product_cat-primitivo product_cat-ruou-vang product_cat-ruou-vang-do product_cat-ruou-vang-puglia product_cat-ruou-vang-y product_tag-primitivo product_tag-ruou-vang-do product_tag-san-marzano has-post-thumbnail shipping-taxable purchasable product-type-simple">
            <div class="custom-product-page ux-layout-22023 ux-layout-scope-global">
                <section class="section product-detail__breadcrumb" id="section_1109248493">
                    <div class="bg section-bg fill bg-fill  bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="product-breadcrumb-container is-normal">
                            <nav class="woocommerce-breadcrumb breadcrumbs uppercase">
                                <a href="{{ route('front.home-page') }}">Trang chủ</a>
                                <span class="divider">&#47;</span>
                                <a href="{{ route('front.show-product-category', $category->slug) }}">{{ $category->name }}</a>
                                <span class="divider">&#47;</span>
                                <a href="{{ route('front.show-product-detail', $product->slug) }}">{{ $product->name }}</a>
                            </nav>
                        </div>
                    </div>
                    <style>
                        #section_1109248493 {
                            padding-top: 16px;
                            padding-bottom: 16px;
                        }
                    </style>
                </section>
                <section class="section product-detail__row product-detail__gallery" id="section_212627735">
                    <div class="bg section-bg fill bg-fill  bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="row" id="row-704940362">
                            <div id="col-1208361982" class="col medium-5 small-12 large-5">
                                <div class="col-inner">
                                    <div class="product-images relative mb-half has-hover woocommerce-product-gallery woocommerce-product-gallery--with-images woocommerce-product-gallery--columns-4 images"
                                        data-columns="4">
                                        <div class="badge-container is-larger absolute left top z-1"></div>
                                        {{-- <div class="image-tools absolute top right z-3">
                                            <div class="wishlist-icon">
                                                <button class="wishlist-button button is-outline circle icon"
                                                    aria-label="Wishlist">
                                                    <i class="icon-heart"></i> </button>
                                                <div class="wishlist-popup dark">
                                                    <div class="yith-wcwl-add-to-wishlist add-to-wishlist-39323 yith-wcwl-add-to-wishlist--button_default-style yith-wcwl-add-to-wishlist--single wishlist-fragment on-first-load"
                                                        data-fragment-ref="39323"
                                                        data-fragment-options="{&quot;base_url&quot;:&quot;&quot;,&quot;product_id&quot;:39323,&quot;parent_product_id&quot;:0,&quot;product_type&quot;:&quot;simple&quot;,&quot;is_single&quot;:true,&quot;in_default_wishlist&quot;:false,&quot;show_view&quot;:true,&quot;browse_wishlist_text&quot;:&quot;\u0110\u00e3 th\u00edch&quot;,&quot;already_in_wishslist_text&quot;:&quot;&quot;,&quot;product_added_text&quot;:&quot;&quot;,&quot;available_multi_wishlist&quot;:false,&quot;disable_wishlist&quot;:false,&quot;show_count&quot;:false,&quot;ajax_loading&quot;:false,&quot;loop_position&quot;:&quot;shortcode&quot;,&quot;item&quot;:&quot;add_to_wishlist&quot;}">
                                                        <div class="yith-wcwl-add-button">
                                                            <a href="?add_to_wishlist=39323&#038;_wpnonce=30c069da3b"
                                                                class="add_to_wishlist single_add_to_wishlist alt button theme-button-style "
                                                                data-product-id="39323"
                                                                data-product-type="simple"
                                                                data-original-product-id="0"
                                                                data-title="Thêm vào yêu thích" rel="nofollow">
                                                                <svg id="yith-wcwl-icon-star"
                                                                    class="yith-wcwl-icon-svg"
                                                                    fill="currentColor" viewBox="0 0 24 24"
                                                                    xmlns="http://www.w3.org/2000/svg">
                                                                    <path clip-rule="evenodd"
                                                                        fill-rule="evenodd"
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
                                        <figure
                                            class="woocommerce-product-gallery__wrapper product-gallery-slider slider slider-nav-small mb-half"
                                            data-flickity-options='{
                                            "cellAlign": "center",
                                            "wrapAround": true,
                                            "autoPlay": false,
                                            "prevNextButtons":true,
                                            "adaptiveHeight": true,
                                            "imagesLoaded": true,
                                            "lazyLoad": 1,
                                            "dragThreshold" : 15,
                                            "pageDots": false,
                                            "rightToLeft": false       }'>
                                            @foreach ($product->galleries as $key => $item)
                                            <div data-thumb="{{ $item->image->path }}"
                                                data-thumb-alt="{{ $product->name }}"
                                                class="woocommerce-product-gallery__image slide first"><a
                                                    href="{{ $item->image->path }}"><img
                                                        width="600" height="800"
                                                        src="{{ $item->image->path }}"
                                                        class="wp-post-image skip-lazy"
                                                        alt="{{ $product->name }}"
                                                        data-caption=""
                                                        data-src="{{ $item->image->path }}"
                                                        data-large_image="{{ $item->image->path }}"
                                                        data-large_image_width="600"
                                                        data-large_image_height="800" decoding="async" loading="lazy" /></a>
                                            </div>
                                            @endforeach
                                        </figure>
                                        {{-- <div class="image-tools absolute bottom left z-3">
                                            <a href="#product-zoom"
                                                class="zoom-button button is-outline circle icon tooltip hide-for-small"
                                                title="Zoom">
                                                <i class="icon-expand"></i> </a>
                                        </div> --}}
                                    </div>
                                    <div class="product-thumbnails thumbnails slider-no-arrows slider row row-small row-slider slider-nav-small small-columns-4"
                                        data-flickity-options='{
                                        "cellAlign": "left",
                                        "wrapAround": false,
                                        "autoPlay": false,
                                        "prevNextButtons": true,
                                        "asNavFor": ".product-gallery-slider",
                                        "percentPosition": true,
                                        "imagesLoaded": true,
                                        "pageDots": false,
                                        "rightToLeft": false,
                                        "contain": true
                                        }'>
                                        @foreach ($product->galleries as $key => $item)
                                        <div class="col first">
                                            <a>
                                                <img src="{{ $item->image->path }}"
                                                    alt="{{ $product->name }}"
                                                    width="300" height="400"
                                                    class="attachment-woocommerce_thumbnail" loading="lazy" /> </a>
                                        </div>
                                        @endforeach
                                    </div>
                                </div>
                            </div>
                            <div id="col-398140035" class="col medium-4 small-12 large-4">
                                <div class="col-inner">
                                    <div class="product-title-container">
                                        <h1 class="product-title product_title entry-title">
                                            {{ $product->name }}
                                        </h1>
                                    </div>
                                    <div class="show-for-small">
                                        <div class="price-mobile">
                                            <div class="product-price-container is-normal">
                                                <div class="price-wrapper">
                                                    <p class="price product-page-price ">
                                                        <span class="woocommerce-Price-amount amount"><bdi>{{ formatCurrency($product->price) }}&nbsp;<span
                                                                    class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                    </p>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="product-short-description">
                                        <p style="text-align: justify;">
                                            {!! $product->intro !!}
                                        </p>
                                    </div>
                                    <div class="line-divider"></div>
                                    {{-- <div class="product-seasons">
                                        <table class="variations" cellspacing="0">
                                            <tbody>
                                                <tr>
                                                    <th class="label"><label for="pa_dung-tich">Niên vụ</label>
                                                    </th>
                                                    <td class="value">
                                                        <div class="ux-swatches ux-swatches-attribute-ux_label">
                                                            <div class="ux-swatch tooltip ux-swatch--label selected"
                                                                data-value="2018" data-name="Niên vụ 2018">
                                                                <span class="ux-swatch__text">2018</span>
                                                            </div>
                                                        </div>
                                                    </td>
                                                </tr>
                                            </tbody>
                                        </table>
                                    </div>
                                    <div id="text-2481796344" class="text note-shipping">
                                        <ul>
                                            <li><span style="font-size: 90%;">Giá sản phẩm đã bao gồm VAT</span>
                                            </li>
                                            <li><span style="font-size: 90%;">Phí giao hàng tùy theo từng khu
                                                    vực.</span></li>
                                            <li><span style="font-size: 90%;">Đơn hàng từ 1.000.000 vnđ miễn phí
                                                    giao hàng.</span></li>
                                        </ul>
                                    </div> --}}
                                    <div class="hide-for-small">
                                        <div class="product-price-container is-normal">
                                            <div class="price-wrapper">
                                                <p class="price product-page-price ">
                                                    <span class="woocommerce-Price-amount amount"><bdi>{{ formatCurrency($product->price) }}&nbsp;<span
                                                                class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="add-to-cart-container form-minimal is-small">
                                        <form class="cart" enctype='multipart/form-data'>
                                            <div class="ux-quantity quantity buttons_added form-minimal">
                                                <input type="button" value="-"
                                                    class="ux-quantity__button ux-quantity__button--minus button minus is-form">
                                                <input type="number" id="quantity_674d95613bf2d"
                                                    class="input-text qty text" name="quantity" value="1"
                                                    aria-label="Số lượng sản phẩm" size="4" min="1" max=""
                                                    step="1" placeholder="" inputmode="numeric"
                                                    autocomplete="off" />
                                                <input type="button" value="+"
                                                    class="ux-quantity__button ux-quantity__button--plus button plus is-form">
                                            </div>
                                            <button type="submit" name="add-to-cart" value="39323"
                                                class="single_add_to_cart_button button alt">Thêm vào giỏ
                                                hàng</button>
                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div id="col-957888762" class="col product-detail_right medium-3 small-12 large-3">
                                <div class="col-inner">
                                    <div class="icon-box featured-box ss-icon-box icon-box-left text-left">
                                        <div class="icon-box-text last-reset">
                                            <h5 class="uppercase">Hotline</h5>
                                            <p><a href="tel:{{ $config->hotline }}">{{ $config->hotline }}</a></p>
                                        </div>
                                    </div>
                                    <div class="icon-box featured-box ss-icon-box icon-box-left text-left">
                                        <div class="icon-box-text last-reset">
                                            <h5 class="uppercase">Email</h5>
                                            <p><a href="mailto:{{ $config->email }}">{{ $config->email }}</a></p>
                                        </div>
                                    </div>
                                    <div id="text-477880862" class="text wcl-text-uu-dai">
                                        <p style="text-align: center;"><strong>Ưu đãi thêm</strong></p>
                                        <ul>
                                            <li><span style="font-size: 100%;">Chính sách ưu đãi dành riêng
                                                    cho khách hàng của <a href="{{route('front.home-page')}}">{{ $config->web_title }}</a>.</span></li>
                                            <li><span style="font-size: 100%;">Quà tặng dành cho đơn
                                                    đặt hàng đầu tiên.</span></li>
                                            <li><span style="font-size: 100%;">Giảm thêm 5%/tổng hóa đơn cho
                                                    tháng sinh nhật.</span></li>
                                            <li><span style="font-size: 100%;">Liên hệ B2B để được tư vấn giá
                                                    tốt nhất cho khách hàng doanh nghiệp khi mua số lượng
                                                    nhiều.</span></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_212627735 {
                            padding-top: 20px;
                            padding-bottom: 20px;
                        }
                    </style>
                </section>
                <section class="section product-detail__row" id="section_178778666">
                    <div class="bg section-bg fill bg-fill  bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="row" style="max-width:1000px" id="row-1730974662">
                            <div id="col-709519085" class="col small-12 large-12">
                                <div class="col-inner">
                                    <div class="container section-title-container">
                                        <h3 class="section-title section-title-center"><b></b><span
                                                class="section-title-main" style="color:#056839;">Thông
                                                tin sản phẩm</span><b></b></h3>
                                    </div>
                                    <div class="product-detail__content">
                                        {!! $product->body !!}
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_178778666 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }
                    </style>
                </section>
                <section class="section" id="section_122752870">
                    <div class="bg section-bg fill bg-fill  bg-loaded"></div>
                    <div class="section-content relative">
                        <div class="row" id="row-1446678918">
                            <div id="col-1666243336" class="col small-12 large-12">
                                <div class="col-inner">
                                    <div class="related related-products-wrapper product-section">
                                        <h3
                                            class="product-section-title container-width product-section-title-related pt-half pb-half uppercase">
                                            Sản phẩm tương tự
                                        </h3>
                                        <div
                                            class="row row-solid has-equal-box-heights equalize-box large-columns-4 medium-columns-3 small-columns-1 row-small">
                                            @foreach ($productsRelated as $item)
                                                @include('site.product_item', ['product' => $item])
                                            @endforeach
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <style>
                        #section_122752870 {
                            padding-top: 30px;
                            padding-bottom: 30px;
                        }
                    </style>
                </section>
            </div>
        </div>
    </div>
</main>
@endsection

@push('script')
@endpush
