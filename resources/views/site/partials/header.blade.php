<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
        {{-- <div id="top-bar" class="header-top hide-for-sticky flex-has-center">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul class="nav nav-left medium-nav-center nav-small  nav-divided"></ul>
                </div>
                <div class="flex-col hide-for-medium flex-center">
                    <ul class="nav nav-center nav-small  nav-divided">
                        <li class="html custom html_topbar_left">
                            <p style="text-align: center;"> For foreign customers, please Get in touch with us
                                on <a href="https://open.kakao.com/o/ss0MncDg"><strong>Kakaotalk</strong></a>
                            </p>
                        </li>
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="nav top-bar-nav nav-right nav-small  nav-divided"></ul>
                </div>
                <div class="flex-col show-for-medium flex-grow">
                    <ul class="nav nav-center nav-small mobile-nav  nav-divided">
                        <li class="html custom html_topbar_left">
                            <p style="text-align: center;"> For foreign customers, please Get in touch with us
                                on <a href="https://open.kakao.com/o/ss0MncDg"><strong>Kakaotalk</strong></a>
                            </p>
                        </li>
                    </ul>
                </div>
            </div>
        </div> --}}
        <div id="masthead" class="header-main hide-for-sticky nav-dark">
            <div class="header-inner flex-row container logo-left medium-logo-center" role="navigation">
                <div id="logo" class="flex-col logo">
                    <a href="{{ route('front.home-page') }}"
                        title="{{ $config->web_title ?? '' }}" rel="home">
                        <img width="300" height="179" src="{{ $config->image->path ?? '' }}"
                            class="header_logo header-logo" alt="{{ $config->web_title ?? '' }}" loading="lazy"/>
                        <img width="334" height="200" src="{{ $config->image->path ?? '' }}"
                            class="header-logo-dark" alt="{{ $config->web_title ?? '' }}" loading="lazy"/>
                    </a>
                </div>
                <div class="flex-col show-for-medium flex-left">
                    <ul class="mobile-nav nav nav-left ">
                        <li class="nav-icon has-icon">
                            <a href="#" data-open="#main-menu" data-pos="left" data-bg="main-menu-overlay"
                                data-color="dark" class="is-small" aria-label="Menu" aria-controls="main-menu"
                                aria-expanded="false"><i class="icon-menu"></i>
                            </a>
                        </li>
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-left flex-grow" style="margin-left: 100px;">
                    <ul class="header-nav header-nav-main nav nav-left  nav-spacing-large nav-uppercase">
                        <li class="header-search-form search-form html relative has-icon">
                            <div class="header-search-form-wrapper">
                                <div class="searchform-wrapper ux-search-box relative is-normal">
                                    <form role="search" method="get" class="searchform"
                                        action="">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                    for="woocommerce-product-search-field-0">Tìm kiếm:</label>
                                                <input type="search" id="woocommerce-product-search-field-0"
                                                    class="search-field mb-0"
                                                    placeholder="Hãy thử tìm kiếm tại đây xem sao!"
                                                    value="" name="s" />
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
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right">
                    <ul class="header-nav header-nav-main nav nav-right  nav-spacing-large nav-uppercase">
                        <li class="account-item has-icon">
                            <a
                                href="#"
                                class="nav-top-link nav-top-not-logged-in is-small">
                                <img src="{{ asset('/site/images/flag_vn.png') }}" alt="Việt Nam" width="30" style="vertical-align: middle; height: 20px;" loading="lazy"/>
                            </a>
                            <a
                                href="#"
                                class="nav-top-link nav-top-not-logged-in is-small">
                                <img src="{{ asset('/site/images/flag_en.png') }}" alt="English" width="30" style="vertical-align: middle; height: 20px;" loading="lazy"/>
                            </a>
                        </li>
                        <li class="header-divider"></li>
                        <li class="cart-item has-icon">
                            <a href="https://winecellar.vn/cart/"
                                class="header-cart-link is-small off-canvas-toggle nav-top-link" title="Giỏ hàng"
                                data-open="#cart-popup" data-class="off-canvas-cart" data-pos="right"><i
                                    class="icon-shopping-basket" data-icon-label="0">
                                </i>
                            </a>
                            <div id="cart-popup" class="mfp-hide">
                                <div class="cart-popup-inner inner-padding cart-popup-inner--sticky">
                                    <div class="cart-popup-title text-center">
                                        <span class="heading-font uppercase">Giỏ hàng</span>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget woocommerce widget_shopping_cart">
                                        <div class="widget_shopping_cart_content"></div>
                                    </div>
                                </div>
                            </div>
                        </li>
                    </ul>
                </div>
                <div class="flex-col show-for-medium flex-right">
                    <ul class="mobile-nav nav nav-right ">
                        <li class="header-search header-search-lightbox has-icon">
                            <a href="#search-lightbox" aria-label="Tìm kiếm" data-open="#search-lightbox"
                                data-focus="input.search-field" class="is-small"><i class="icon-search"></i>
                            </a>
                            <div id="search-lightbox" class="mfp-hide dark text-center">
                                <div class="searchform-wrapper ux-search-box relative is-large">
                                    <form role="search" method="get" class="searchform"
                                        action="https://winecellar.vn/">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                    for="woocommerce-product-search-field-1">Tìm kiếm:</label>
                                                <input type="search" id="woocommerce-product-search-field-1"
                                                    class="search-field mb-0"
                                                    placeholder="Hãy thử tìm kiếm tại đây!"
                                                    value="" name="s" />
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
                                </div>
                            </div>
                        </li>
                        <li class="cart-item has-icon"><a href="https://winecellar.vn/cart/"
                                class="header-cart-link is-small off-canvas-toggle nav-top-link" title="Giỏ hàng"
                                data-open="#cart-popup" data-class="off-canvas-cart" data-pos="right"><i
                                    class="icon-shopping-basket" data-icon-label="0">
                                </i>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
        </div>
        <div id="wide-nav" class="header-bottom wide-nav nav-dark hide-for-medium">
            <div class="flex-row container">
                <div class="flex-col hide-for-medium flex-left">
                    <ul
                        class="nav header-nav header-bottom-nav nav-left  nav-size-medium nav-spacing-xlarge nav-uppercase" style="justify-content: space-evenly;">
                        <li id="menu-item-36227"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-home current-menu-item page_item page-item-35556 current_page_item menu-item-36227 active menu-item-design-default">
                            <a href="{{ route('front.home-page') }}" aria-current="page" class="nav-top-link">Trang
                                chủ</a>
                        </li>
                        {{-- <li id="menu-item-11284"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-11284 menu-item-design-full-width menu-item-has-block has-dropdown">
                            <a href="https://winecellar.vn/ruou-vang/" class="nav-top-link" aria-expanded="false"
                                aria-haspopup="menu">RƯỢU VANG<i class="icon-angle-down"></i></a>
                            <div class="sub-menu nav-dropdown">
                                <section class="section ss-fly-menu" id="section_927618584">
                                    <div class="bg section-bg fill bg-fill  bg-loaded"></div>
                                    <div class="section-content relative">
                                        <div class="row row-large row-divided" id="row-532801423">
                                            <div id="col-175568661" class="col medium-3 small-6 large-3">
                                                <div class="col-inner">
                                                    <div class="ux-menu stack stack-col justify-start">
                                                        <div class="ux-menu-title flex mn-icon mn-icon-type">
                                                            Theo loại rượu
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item label-hot">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-do/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang đỏ </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-trang/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang trắng </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-sui/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang sủi </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-champagne/">
                                                                <span class="ux-menu-link__text">
                                                                    Champagne (Sâm Panh) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-hong/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang hồng </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-ngot/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang ngọt </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-cuong-hoa/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang cường hóa </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-khong-con/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang không cồn </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-organic/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Organic </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item color-main font-bold">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang/">
                                                                <i
                                                                    class="ux-menu-link__icon text-center icon-angle-right"></i>
                                                                <span class="ux-menu-link__text">
                                                                    Tất cả rượu vang </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="col-1798758368" class="col medium-3 small-6 large-3">
                                                <div class="col-inner">
                                                    <div class="ux-menu stack stack-col justify-start">
                                                        <div class="ux-menu-title flex mn-icon mn-icon-country">
                                                            Theo quốc gia
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-phap/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Pháp </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-y/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Ý </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/vang-tay-ban-nha/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Tây Ban Nha </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-chile/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Chile </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-my/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Mỹ </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-uc/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Úc </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-newzealand/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang New Zealand </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-argentina/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Argentina </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-bo-dao-nha/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Bồ Đào Nha </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-duc/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Đức </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-nam-phi/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Nam Phi </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="col-560875499" class="col medium-3 small-6 large-3">
                                                <div class="col-inner">
                                                    <div class="ux-menu stack stack-col justify-start">
                                                        <div class="ux-menu-title flex mn-icon mn-icon-grape">
                                                            Theo giống nho
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/cabernet-sauvignon/">
                                                                <span class="ux-menu-link__text">
                                                                    Cabernet Sauvignon </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/merlot/">
                                                                <span class="ux-menu-link__text">
                                                                    Merlot </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/syrah-shiraz/">
                                                                <span class="ux-menu-link__text">
                                                                    Syrah (Shiraz) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/pinot-noir/">
                                                                <span class="ux-menu-link__text">
                                                                    Pinot Noir </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/malbec/">
                                                                <span class="ux-menu-link__text">
                                                                    Malbec </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/montepulciano-d-abruzzo/">
                                                                <span class="ux-menu-link__text">
                                                                    Montepulciano D&#039;Abruzzo </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/negroamaro/">
                                                                <span class="ux-menu-link__text">
                                                                    Negroamaro </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/primitivo/">
                                                                <span class="ux-menu-link__text">
                                                                    Primitivo </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/chardonnay/">
                                                                <span class="ux-menu-link__text">
                                                                    Chardonnay </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/sauvignon-blanc/">
                                                                <span class="ux-menu-link__text">
                                                                    Sauvignon Blanc </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/riesling/">
                                                                <span class="ux-menu-link__text">
                                                                    Riesling </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item color-main font-bold">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/giong-nho/">
                                                                <i
                                                                    class="ux-menu-link__icon text-center icon-angle-right"></i>
                                                                <span class="ux-menu-link__text">
                                                                    Tìm giống nho </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div id="col-1568232691" class="col medium-3 small-6 large-3">
                                                <div class="col-inner">
                                                    <div class="ux-menu stack stack-col justify-start">
                                                        <div class="ux-menu-title flex mn-icon mn-icon-regions">
                                                            Theo vùng nổi tiếng
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-bordeaux/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Bordeaux (Pháp) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-burgundy/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Bourgogne (Pháp) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-tuscany/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Tuscany (Ý) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-puglia/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Puglia (Ý) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-piedmont/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang Piedmont (Ý) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-vang-california/">
                                                                <span class="ux-menu-link__text">
                                                                    Rượu vang California (Mỹ) </span>
                                                            </a>
                                                        </div>
                                                        <div class="ux-menu-link flex menu-item">
                                                            <a class="ux-menu-link__link flex"
                                                                href="https://winecellar.vn/ruou-champagne/">
                                                                <span class="ux-menu-link__text">
                                                                    Champagne (Pháp) </span>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                    <style>
                                        #section_927618584 {
                                            padding-top: 24px;
                                            padding-bottom: 24px;
                                            background-color: rgb(255, 255, 255);
                                        }
                                    </style>
                                </section>
                            </div>
                        </li> --}}
                        <li id="menu-item-41012"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-41012 menu-item-design-default">
                            <a href="{{route('front.about-us')}}" class="nav-top-link">Giới thiệu</a>
                        </li>
                        @foreach ($productCategories as $category)
                        <li id="menu-item-45626"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-45626 menu-item-design-default has-dropdown">
                            <a href="{{route('front.show-product-category', $category->slug)}}" class="nav-top-link"
                                aria-expanded="false" aria-haspopup="menu">{{ $category->name }}
                                @if ($category->childs->count() > 0)
                                <i class="icon-angle-down"></i>
                                @endif
                            </a>
                            @if ($category->childs->count() > 0)
                            <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                                @foreach ($category->childs as $child)
                                <li id="menu-item-48865"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48865">
                                    <a href="{{$child->link ? $child->link : route('front.show-product-category', $child->slug)}}">{{ $child->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                        @foreach ($postCategories as $postCategory)
                        <li id="menu-item-48851"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-has-children menu-item-48851 menu-item-design-default has-dropdown">
                            <a href="{{route('front.list-blog', $postCategory->slug)}}" class="nav-top-link" aria-expanded="false"
                                aria-haspopup="menu">{{ $postCategory->name }}
                                @if ($postCategory->getChilds()->count() > 0)
                                <i class="icon-angle-down"></i>
                                @endif
                            </a>
                            @if ($postCategory->getChilds()->count() > 0)
                            <ul class="sub-menu nav-dropdown nav-dropdown-simple">
                                @foreach ($postCategory->getChilds() as $child)
                                <li id="menu-item-48852"
                                    class="menu-item menu-item-type-custom menu-item-object-custom menu-item-48852">
                                    <a href="{{route('front.list-blog', $child->slug)}}">{{ $child->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                            @endif
                        </li>
                        @endforeach
                        <li id="menu-item-11288"
                            class="menu-item menu-item-type-post_type menu-item-object-page menu-item-11288 menu-item-design-default">
                            <a href="{{route('front.contact-us')}}" class="nav-top-link">Liên hệ</a>
                        </li>
                        {{-- <li class="header-search header-search-lightbox has-icon">
                            <a href="#search-lightbox" aria-label="Tìm kiếm" data-open="#search-lightbox"
                                data-focus="input.search-field" class="is-small"><i class="icon-search"></i>
                            </a>
                            <div id="search-lightbox" class="mfp-hide dark text-center">
                                <div class="searchform-wrapper ux-search-box relative is-large">
                                    <form role="search" method="get" class="searchform"
                                        action="https://winecellar.vn/">
                                        <div class="flex-row relative">
                                            <div class="flex-col flex-grow">
                                                <label class="screen-reader-text"
                                                    for="woocommerce-product-search-field-2">Tìm kiếm:</label>
                                                <input type="search" id="woocommerce-product-search-field-2"
                                                    class="search-field mb-0"
                                                    placeholder="Hãy thử  &#039;vang cá chép&#039; xem sao!"
                                                    value="" name="s" />
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
                                </div>
                            </div>
                        </li> --}}
                    </ul>
                </div>
                <div class="flex-col hide-for-medium flex-right flex-grow">
                    <ul
                        class="nav header-nav header-bottom-nav nav-right  nav-size-medium nav-spacing-xlarge nav-uppercase">
                    </ul>
                </div>
            </div>
        </div>
        <div class="header-bg-container fill">
            <div class="header-bg-image fill"></div>
            <div class="header-bg-color fill"></div>
        </div>
    </div>
</header>
