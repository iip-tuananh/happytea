@extends('site.layouts.master')
@section('title')
    {{ $category->meta_title ? $category->meta_title : $category->name }}
@endsection
@section('description')
    {{ $category->meta_des ? $category->meta_des : $category->short_des }}
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
<div class="category-banner">
    <div class="category-banner__wrapper">
        <div class="category-banner__bg-image category-banner__bg-image--desktop"
            style="background-image: url('{{getBanner($category)}}');">
            <div class="category-banner__gradient"></div>
        </div>
        <div class="category-banner__inner-wrapper">
            <div class="category-breadcrumb">
                <nav class="woocommerce-breadcrumb breadcrumbs uppercase"><a href="{{ route('front.home-page') }}">Trang
                        chủ</a> <span class="divider">&#47;</span> {{ $category->name }}</nav>
            </div>
            <div class="category-banner__content">
                <h1 class="category-banner__title">{{ $category->name }}</h1>
                <div class="category-banner__description">
                    {!! $category->short_des !!}
                </div>
            </div>
        </div>
    </div>
</div>
<div class="category-block"></div>
<main id="main" class="">
    <div class="row category-page-row">
        {{-- <div id="shop-sidebar" class="col large-3 bdr hide-for-medium wcl-filter-sidebar w-pc-20 ">
            <div class="sidebar-inner col-inner">
                <aside id="woocommerce_product_search-2" class="widget woocommerce widget_product_search">
                    <span class="widget-title shop-sidebar">Tìm kiếm</span>
                    <div class="is-divider small"></div>
                    <form role="search" method="get" class="searchform" action="https://winecellar.vn/">
                        <div class="flex-row relative">
                            <div class="flex-col flex-grow">
                                <label class="screen-reader-text" for="woocommerce-product-search-field-3">Tìm
                                    kiếm:</label>
                                <input type="search" id="woocommerce-product-search-field-3"
                                    class="search-field mb-0"
                                    placeholder="Hãy thử  &#039;vang cá chép&#039; xem sao!" value=""
                                    name="s" />
                                <input type="hidden" name="post_type" value="product" />
                            </div>
                            <div class="flex-col">
                                <button type="submit" value="Tìm kiếm"
                                    class="ux-search-submit submit-button secondary button  icon mb-0"
                                    aria-label="Submit">
                                    <i class="icon-search"></i> </button>
                            </div>
                        </div>
                        <div class="live-search-results text-left z-top"></div>
                    </form>
                </aside>
                <aside id="woocommerce_layered_nav-18"
                    class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                    <span class="widget-title shop-sidebar">Quốc gia</span>
                    <div class="is-divider small"></div>
                    <ul class="woocommerce-widget-layered-nav-list wcl-filter-widget">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-phap">Vang Pháp</a>
                            <span class="count">(1031)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-y-italy">Vang Ý
                                (Italy)</a> <span class="count">(339)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-tay-ban-nha">Vang
                                Tây Ban Nha</a> <span class="count">(62)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-my">Vang Mỹ</a>
                            <span class="count">(50)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-uc">Vang Úc</a>
                            <span class="count">(31)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-new-zealand">Vang
                                New Zealand</a> <span class="count">(30)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-argentina">Vang
                                Argentina</a> <span class="count">(23)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-chile">Vang
                                Chile</a> <span class="count">(20)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-duc">Vang Đức</a>
                            <span class="count">(14)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-bo-dao-nha">Vang Bồ
                                Đào Nha</a> <span class="count">(8)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-hungary">Vang
                                Hungary</a> <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-nam-phi">Vang Nam
                                Phi</a> <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_quoc-gia=vang-canada">Vang
                                Canada</a> <span class="count">(3)</span></li>
                    </ul>
                </aside>
                <aside id="woocommerce_layered_nav-20"
                    class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                    <span class="widget-title shop-sidebar">Loại vang</span>
                    <div class="is-divider small"></div>
                    <ul class="woocommerce-widget-layered-nav-list wcl-filter-widget">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-vang-do">Rượu Vang
                                Đỏ</a> <span class="count">(1118)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-vang-trang">Rượu
                                Vang Trắng</a> <span class="count">(357)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-vang-sui">Rượu Vang
                                Sủi</a> <span class="count">(76)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-champagne">Champagne</a>
                            <span class="count">(73)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-vang-hong">Rượu
                                Vang Hồng</a> <span class="count">(27)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=ruou-vang-ngot">Rượu
                                Vang Ngọt</a> <span class="count">(19)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_loai-vang=vang-cuong-hoa">Vang
                                Cường Hóa</a> <span class="count">(4)</span></li>
                    </ul>
                </aside>
                <aside id="woocommerce_layered_nav-21"
                    class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                    <span class="widget-title shop-sidebar">Dung tích</span>
                    <div class="is-divider small"></div>
                    <ul class="woocommerce-widget-layered-nav-list wcl-filter-widget">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=750ml">750ml</a> <span
                                class="count">(1435)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=3000ml">3L</a> <span
                                class="count">(40)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=1500ml">1.5L</a> <span
                                class="count">(36)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=500ml">500ml</a> <span
                                class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=375ml">375ml</a> <span
                                class="count">(5)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=6000ml">6L</a> <span
                                class="count">(7)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=5000ml">5L</a> <span
                                class="count">(7)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=620ml">620ml</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=9000ml">9L</a> <span
                                class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=200ml">200ml</a> <span
                                class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=1-5l-luminous">1.5L
                                Luminous</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=15000ml">15L</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_dung-tich=12000ml">12L</a> <span
                                class="count">(1)</span></li>
                    </ul>
                </aside>
                <aside id="woocommerce_layered_nav-27"
                    class="widget woocommerce widget_layered_nav woocommerce-widget-layered-nav">
                    <span class="widget-title shop-sidebar">Giống nho</span>
                    <div class="is-divider small"></div>
                    <ul class="woocommerce-widget-layered-nav-list wcl-filter-widget">
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=blend">Blend</a> <span
                                class="count">(757)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=merlot">Merlot</a> <span
                                class="count">(483)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=cabernet-sauvignon">Cabernet
                                Sauvignon</a> <span class="count">(437)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-noir">Pinot
                                Noir</a> <span class="count">(340)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=cabernet-franc">Cabernet
                                Franc</a> <span class="count">(311)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=chardonnay">Chardonnay</a>
                            <span class="count">(250)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=petit-verdot">Petit
                                Verdot</a> <span class="count">(142)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=sangiovese">Sangiovese</a>
                            <span class="count">(101)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=syrah">Syrah</a> <span
                                class="count">(85)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=sauvignon-blanc">Sauvignon
                                Blanc</a> <span class="count">(64)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=tempranillo">Tempranillo</a>
                            <span class="count">(46)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-meunier">Pinot
                                Meunier</a> <span class="count">(44)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=nebbiolo">Nebbiolo</a>
                            <span class="count">(39)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=malbec">Malbec</a> <span
                                class="count">(35)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=riesling">Riesling</a>
                            <span class="count">(33)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=garnacha">Garnacha</a>
                            <span class="count">(30)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-gris">Pinot Gris
                                (Pinot Grigio)</a> <span class="count">(24)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=corvina">Corvina</a>
                            <span class="count">(24)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=rondinella">Rondinella</a>
                            <span class="count">(24)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=corvinone">Corvinone</a>
                            <span class="count">(22)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=semillon">Semillon</a>
                            <span class="count">(21)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=viognier">Viognier</a>
                            <span class="count">(21)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=grenache-blanc">Grenache
                                Blanc</a> <span class="count">(19)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=carmenere">Carmenere</a>
                            <span class="count">(19)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=montepulciano">Montepulciano
                                D&#039;abruzzo</a> <span class="count">(17)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=mourvedre">Mourvedre</a>
                            <span class="count">(16)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=moscato">Moscato</a>
                            <span class="count">(14)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=gewurztraminer">Gewürztraminer</a>
                            <span class="count">(15)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=marsanne">Marsanne</a>
                            <span class="count">(13)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=graciano">Graciano</a>
                            <span class="count">(12)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=mazuelo">Mazuelo</a>
                            <span class="count">(12)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=malvasia-nera">Malvasia
                                Nera</a> <span class="count">(12)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=roussanne">Roussanne</a>
                            <span class="count">(11)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=molinara">Molinara</a>
                            <span class="count">(11)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=negroamaro">Negroamaro</a>
                            <span class="count">(9)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=trebbiano">Trebbiano</a>
                            <span class="count">(9)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=primitivo">Primitivo</a>
                            <span class="count">(9)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=vermentino">Vermentino</a>
                            <span class="count">(9)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=glera">Glera</a> <span
                                class="count">(8)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=oseleta">Oseleta</a>
                            <span class="count">(8)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=clairette">Clairette</a>
                            <span class="count">(8)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-blanc">Pinot
                                Blanc</a> <span class="count">(7)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=cinsault">Cinsault</a>
                            <span class="count">(7)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=viura">Viura</a> <span
                                class="count">(6)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=canaiolo">Canaiolo</a>
                            <span class="count">(5)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=bourboulenc">Bourboulenc</a>
                            <span class="count">(6)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=nerello-mascalese">Nerello
                                Mascalese</a> <span class="count">(5)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=barbera">Barbera</a>
                            <span class="count">(5)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=grecanico">Grecanico</a>
                            <span class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=muscadelle">Muscadelle</a>
                            <span class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=verdejo">Verdejo</a>
                            <span class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=port-red-blend">Port Red
                                Blend</a> <span class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=macabeo">Macabeo</a>
                            <span class="count">(4)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=petite-sirah">Petite
                                Sirah</a> <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=touriga-franca">Touriga
                                Franca</a> <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=rolle">Rolle</a> <span
                                class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=harslevelu">Hárslevelű</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=furmint">Furmint</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=carricante">Carricante</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=xarel-lo">Xarel lo</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=ciliegiolo">Ciliegiolo</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=parellada">Parellada</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=gamay">Gamay</a> <span
                                class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=rossignola">Rossignola</a>
                            <span class="count">(3)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=nero-davola">Nero
                                d&#039;Avola</a> <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=grechetto">Grechetto</a>
                            <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=colorino">Colorino</a>
                            <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=chenin-blanc">Chenin
                                Blanc</a> <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=famoso">Famoso</a> <span
                                class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=aligote">Aligoté</a>
                            <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=touriga-nacional">Touriga
                                Nacional</a> <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=tinta-barroca">Tinta
                                Barroca</a> <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pecorino">Pecorino</a>
                            <span class="count">(2)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=tempranillo-blanco">Tempranillo
                                Blanco</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=nerello-cappuccio">Nerello
                                Cappuccio</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=bacca-rossa">Bacca
                                Rossa</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=arneis">Arneis</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=garganega">Garganega</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=traminer">Traminer</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=torrontes">Torrontés</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=mataro">Mataro</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=falanghina">Falanghina</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=lambrusco">Lambrusco</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=albillo">Albillo</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=bacca-bianca">Bacca
                                Bianca</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=savagnin">Savagnin</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=sangioveto">Sangioveto</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=trebbiano-veronese">Trebbiano
                                Veronese</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=minnella">Minnella</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=inzolia">Inzolia</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=moscatel-galego">Moscatel
                                Galego</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=rabigato">Rabigato</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=viosinho">Viosinho</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=malvasia-fina">Malvasia
                                Fina</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=tinta-amarela">Tinta
                                Amarela</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=vidal">Vidal</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=picpoul">Picpoul</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=aglianico">Aglianico</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=albarino">Albarino</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=picardan">Picardan</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=sylvaner">Sylvaner</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=catarratto">Catarratto</a>
                            <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-nero">Pinot
                                Nero</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=pinot-bianco">Pinot
                                Bianco</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=maturana-blanca">Maturana
                                Blanca</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=nero-di-troia">Nero di
                                troia</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=petit-manseng">Petit
                                Manseng</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=fiano">Fiano</a> <span
                                class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=moscatello-selvatico">Moscatello
                                Selvatico</a> <span class="count">(1)</span></li>
                        <li class="woocommerce-widget-layered-nav-list__item wc-layered-nav-term "><a
                                rel="nofollow"
                                href="https://winecellar.vn/ruou-vang/?filter_giong-nho=ansonica">Ansonica</a>
                            <span class="count">(1)</span></li>
                    </ul>
                </aside>
            </div>
        </div> --}}
        <div class="col large-12 w-pc-100">
            <div class="shop-container">
                <div class="flex wcl-orders">
                    <div class="show-for-medium btn-mobile-filter">
                        <a href="#" data-open="#shop-sidebar" data-pos="left"
                            class="filter-button uppercase plain">
                            <i class="icon-equalizer"></i>
                            <strong>Lọc sản phẩm</strong>
                        </a>
                    </div>
                    <div class="result-count">
                        <p class="woocommerce-result-count hide-for-medium">
                            Hiển thị 1&ndash;{{ $products->count() }} của {{ $products->total() }} kết quả
                        </p>
                    </div>
                    <div class="catalog-order">
                        <div id="stack-list-filter" class="stack stack-row justify-start items-center">
                            {{-- <div id="stack-list-view"
                                class="stack hide-for-medium stack-row justify-start items-stretch">
                                <a href="https://winecellar.vn/ruou-vang" class="plain">
                                    <div class="icon-box featured-box icon-box-top text-left">
                                        <div class="icon-box-img" style="width: 22px; margin-bottom: 0">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M0 0h9v9H0V0zm2 2v5h5V2H2zm-2 9h9v9H0v-9zm2 2v5h5v-5H2zm9-13h9v9h-9V0zm2 2v5h5V2h-5zm-2 9h9v9h-9v-9zm2 2v5h5v-5h-5z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <a href="https://winecellar.vn/ruou-vang?mode=list" class="plain">
                                    <div class="icon-box featured-box icon-box-top text-left">
                                        <div class="icon-box-img" style="width: 24px;margin-bottom: 0">
                                            <div class="icon">
                                                <div class="icon-inner">
                                                    <svg viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                                        <path
                                                            d="M1 4h2v2H1V4zm4 0h14v2H5V4zM1 9h2v2H1V9zm4 0h14v2H5V9zm-4 5h2v2H1v-2zm4 0h14v2H5v-2z">
                                                        </path>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </a>
                                <style>
                                    #stack-list-view>* {
                                        --stack-gap: 1rem;
                                    }
                                </style>
                            </div> --}}
                            <form class="woocommerce-ordering" method="get">
                                <select name="orderby" class="orderby" aria-label="Đơn hàng của cửa hàng">
                                    <option value="menu_order" selected='selected'>Thứ tự mặc định</option>
                                    <option value="popularity">Thứ tự theo mức độ phổ biến</option>
                                    <option value="date">Mới nhất</option>
                                    <option value="price">Thứ tự theo giá: thấp đến cao</option>
                                    <option value="price-desc">Thứ tự theo giá: cao xuống thấp</option>
                                    <option value="on_sale">Khuyến mại</option>
                                </select>
                                <input type="hidden" name="paged" value="1" />
                            </form>
                            <style>
                                #stack-list-filter>* {
                                    --stack-gap: 1rem;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                {{-- <div class="range-price flex">
                    <div class="range-price__label">Phân khúc:</div>
                    <div class="range-price__links">
                        <a href="?max_price=500000">
                            <span>Dưới 500K</span>
                        </a>
                        <span class="sp-line"></span>
                        <a href="?min_price=500000&max_price=1000000">
                            <span>500K - 1 triệu</span>
                        </a>
                        <span class="sp-line"></span>
                        <a href="?min_price=1000000&max_price=3000000">
                            <span>1 - 3 triệu</span>
                        </a>
                        <span class="sp-line"></span>
                        <a href="?min_price=3000000">
                            <span>Trên 3 triệu</span>
                        </a>
                    </div>
                </div> --}}
                <div class="woocommerce-notices-wrapper"></div>
                <div
                    class="products row-solid row row-small large-columns-4 medium-columns-2 small-columns- has-equal-box-heights equalize-box">
                    @foreach ($products as $product)
                    @include('site.product_item', ['product' => $product])
                    @endforeach
                </div>
                <div class="container">
                    <nav class="woocommerce-pagination">
                        {{ $products->links() }}
                    </nav>
                </div>
                <div class="term-description">
                    <h1 style="text-align: justify"><a href="{{ route('front.show-product-category', $category->slug) }}">{{ $category->name }}</a></h1>
                    {!! $category->intro !!}
                </div>
                <div class="wcl-cat-footer">
                    <hr />
                    <h1 style="text-align: justify;"><a href="{{ route('front.show-product-category', $category->slug) }}">{{ $category->name }}</a></h1>
                    {!! $category->intro !!}
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('script')
@endpush
