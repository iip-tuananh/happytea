<header id="header" class="header has-sticky sticky-jump">
    <div class="header-wrapper">
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
                            <a href="{{route('cart.index')}}"
                                class="header-cart-link is-small off-canvas-toggle nav-top-link" title="Giỏ hàng"
                                data-open="#cart-popup" data-class="off-canvas-cart" data-pos="right">
                                <i class="icon-shopping-basket" data-icon-label="<% cart.count %>"></i>
                            </a>
                            <div id="cart-popup" class="mfp-hide">
                                <div class="cart-popup-inner inner-padding cart-popup-inner--sticky">
                                    <div class="cart-popup-title text-center">
                                        <span class="heading-font uppercase">Giỏ hàng</span>
                                        <div class="is-divider"></div>
                                    </div>
                                    <div class="widget woocommerce widget_shopping_cart" ng-if="cart.count > 0">
                                        <div class="widget_shopping_cart_content">
                                            <ul class="woocommerce-mini-cart cart_list product_list_widget ">
                                                <li class="woocommerce-mini-cart-item mini_cart_item" ng-repeat="item in cart.items">
                                                    <a href="javascript:void(0);" class="remove" ng-click="removeItem(item.id)">×</a>
                                                    <a href="/san-pham/<% item.attributes.slug %>.html">
                                                        <img width="300" height="400" ng-src="<% item.attributes.image %>" class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail" alt="<% item.name %>" decoding="async" loading="lazy"><% item.name %>
                                                    </a>
                                                    <div ng-if="item.attributes.attribute_name" style="font-size: 12px; color: #666;">Phân loại: <span style="font-weight: 500; font-size: 14px; color: #056839;"><% item.attributes.attribute_name %></span></div>
                                                    <div class="ux-mini-cart-qty">
                                                        <div class="ux-quantity quantity buttons_added">
                                                        <input type="button" value="-" class="ux-quantity__button ux-quantity__button--minus button minus is-form" ng-click="changeQty(item.quantity, item.id)">
                                                        <input type="number" class="input-text qty text" name="quantity" value="1" aria-label="Số lượng sản phẩm" size="4" min="0" max="" step="1" placeholder="" inputmode="numeric" autocomplete="off" ng-model="item.quantity" ng-change="changeQty(item.quantity, item.id)">
                                                        <input type="button" value="+" class="ux-quantity__button ux-quantity__button--plus button plus is-form" ng-click="changeQty(item.quantity, item.id)">
                                                        </div>
                                                        <span class="product-subtotal price-wrapper" data-title="Tạm tính">
                                                        <span class="woocommerce-Price-amount amount"><bdi><% item.price | number %>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>				</span>
                                                    </div>
                                                </li>
                                            </ul>
                                            <div class="ux-mini-cart-footer">
                                                <p class="woocommerce-mini-cart__total total">
                                                    <strong>Tổng:</strong> <span class="woocommerce-Price-amount amount"><bdi><% cart.total | number %>&nbsp;<span class="woocommerce-Price-currencySymbol">₫</span></bdi></span>
                                                </p>
                                                <p class="woocommerce-mini-cart__buttons buttons">
                                                    <a href="{{route('cart.index')}}" class="button wc-forward">Xem giỏ hàng</a>
                                                    <a href="{{route('cart.checkout')}}" class="button checkout wc-forward">Thanh toán</a>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="widget woocommerce widget_shopping_cart" ng-if="cart.count == 0">
                                        <div class="widget_shopping_cart_content">
                                        <div class="ux-mini-cart-empty flex flex-row-col text-center pt pb">
                                            <div class="ux-mini-cart-empty-icon">
                                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 17 19" style="opacity: .1;height:80px;">
                                                    <path d="M8.5 0C6.7 0 5.3 1.2 5.3 2.7v2H2.1c-.3 0-.6.3-.7.7L0 18.2c0 .4.2.8.6.8h15.7c.4 0 .7-.3.7-.7v-.1L15.6 5.4c0-.3-.3-.6-.7-.6h-3.2v-2c0-1.6-1.4-2.8-3.2-2.8zM6.7 2.7c0-.8.8-1.4 1.8-1.4s1.8.6 1.8 1.4v2H6.7v-2zm7.5 3.4 1.3 11.5h-14L2.8 6.1h2.5v1.4c0 .4.3.7.7.7.4 0 .7-.3.7-.7V6.1h3.5v1.4c0 .4.3.7.7.7s.7-.3.7-.7V6.1h2.6z" fill-rule="evenodd" clip-rule="evenodd" fill="#303031"></path>
                                                </svg>
                                            </div>
                                            <p class="woocommerce-mini-cart__empty-message empty">Chưa có sản phẩm trong giỏ hàng.</p>
                                            <p class="return-to-shop">
                                                <a class="button primary wc-backward" href="{{route('front.home-page')}}">
                                                Quay trở lại cửa hàng				</a>
                                            </p>
                                        </div>
                                        </div>
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
                                        action="">
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
                        <li class="cart-item has-icon"><a href=""
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
