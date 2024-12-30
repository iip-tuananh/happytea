<div class="product-small col wcl-product-col wcl-product__show-attr product-term-113 product type-product post-39323 status-publish first instock product_cat-primitivo product_cat-ruou-vang product_cat-ruou-vang-do product_cat-ruou-vang-puglia product_cat-ruou-vang-y product_tag-primitivo product_tag-ruou-vang-do product_tag-san-marzano has-post-thumbnail shipping-taxable purchasable product-type-simple">
    <div class="col-inner">
        <div class="badge-container absolute left top z-1"></div>
        <div class="product-small box ">
            <div class="wcl-product">
                <div class="wcl-product__head flex">
                    <div class="wcl-product__img" style="max-width: 100%; flex-basis: 100%;">
                        <a href="{{ route('front.show-product-detail', $product->slug) }}"
                            aria-label="{{ $product->name }}" style="width:100%">
                            <img width="300" height="400"
                                src="{{ $product->image->path }}"
                                class="attachment-woocommerce_thumbnail size-woocommerce_thumbnail"
                                alt="{{ $product->name }}"
                                decoding="async" loading="lazy" style="width:100%"/> </a>
                    </div>
                </div>
                <div class="wcl-product-title">
                    <div class="title-wrapper">
                        <p class="name product-title woocommerce-loop-product__title"><a
                                href="{{ route('front.show-product-detail', $product->slug) }}"
                                class="woocommerce-LoopProduct-link woocommerce-loop-product__link">{{ $product->name }}</a>
                        </p>
                    </div>
                </div>
                <div class="wcl-product-des text-limit-3-line">
                    {!! $product->intro !!}
                </div>
                <div class="wcl-product-actions flex">
                    <div class="wcl-price w-50">
                        <span class="price"><span
                                class="woocommerce-Price-amount amount"><bdi>{{ formatCurrency($product->price) }}&nbsp;<span
                                        class="woocommerce-Price-currencySymbol">&#8363;</span></bdi></span></span>
                    </div>
                    <div class="wcl-button w-50 text-right">
                        <a class="button primary is-small"
                            href="javascript:void(0)" ng-click="addToCart({{ $product->id }})">Mua
                            ngay</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
