<footer id="footer" class="footer-wrapper" style="padding-bottom: 0">
    <section class="section" id="section_1659235549">
        <div class="bg section-bg fill bg-fill  bg-loaded"></div>
        <div class="section-content relative">
            <div class="row" id="row-1930672875">
                <div id="col-1268185795" class="col medium-4 small-12 large-4">
                    <div class="col-inner text-center">
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Thông tin về chúng tôi</span><b></b></h4>
                            {!! $config->web_des !!}
                            <div class="text-left text-justify-content">
                                <div style="font-weight: 400;
                                    font-size: 14px; margin-bottom: 10px;
                                    line-height: 20px;"> Địa chỉ công ty: {{ $config->address_company }} </div>
                                <div style="font-weight: 400;
                                    font-size: 14px; margin-bottom: 10px;
                                    line-height: 20px;"> Địa chỉ sản xuất: {{ $config->address_center_insurance }} </div>
                                <div style="font-weight: 400;
                                    font-size: 14px; margin-bottom: 10px;
                                    line-height: 20px;"> Hotline: {{ $config->hotline }} </div>
                                <div style="font-weight: 400;
                                    font-size: 14px; margin-bottom: 10px;
                                    line-height: 20px;"> Email: {{ $config->email }} </div>
                                <div style="font-weight: 400;
                                    font-size: 14px; margin-bottom: 10px;
                                    line-height: 20px;"> Thời gian làm việc: 08h00 – 11h45  13h00-17h15 </div>
                            </div>
                        </div>
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Kết nối với chúng tôi</span><b></b></h4>
                        </div>
                        <div class="social-icons follow-icons full-width text-center" style="font-size:130%"><a
                                href="{{ $config->facebook }}" target="_blank"
                                data-label="Facebook" class="icon plain facebook tooltip"
                                title="Follow on Facebook" aria-label="Follow on Facebook"
                                rel="noopener nofollow"><i class="icon-facebook"></i></a><a
                                href="{{ $config->instagram }}" target="_blank"
                                data-label="Instagram" class="icon plain instagram tooltip"
                                title="Follow on Instagram" aria-label="Follow on Instagram"
                                rel="noopener nofollow"><i class="icon-instagram"></i></a><a
                                href="{{ $config->pinterest }}" data-label="Pinterest"
                                target="_blank" class="icon plain pinterest tooltip" title="Follow on Pinterest"
                                aria-label="Follow on Pinterest" rel="noopener nofollow"><i
                                    class="icon-pinterest"></i></a><a
                                href="{{ $config->linkedin }}" data-label="LinkedIn"
                                target="_blank" class="icon plain linkedin tooltip" title="Follow on LinkedIn"
                                aria-label="Follow on LinkedIn" rel="noopener nofollow"><i
                                    class="icon-linkedin"></i></a><a
                                href="{{ $config->youtube }}" data-label="YouTube" target="_blank"
                                class="icon plain youtube tooltip" title="Follow on YouTube" aria-label="Follow on YouTube"
                                rel="noopener nofollow"><i class="icon-youtube"></i></a></div>
                        {{-- <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Chứng nhận</span><b></b></h4>
                        </div>
                        <div id="stack-2529701731" class="stack stack-row justify-center items-center">
                            <div id="text-3839549749" class="text">
                                <p><a href="http://online.gov.vn/Home/WebDetails/87297" target="_blank"
                                        rel="nofollow noopener"><img
                                            src="https://winecellar.vn/wp-content/uploads/2021/10/image-2.png" /></a>
                                </p>
                            </div>
                            <div id="text-2119533496" class="text">
                                <p>
                                    <span style="font-size: 80%;">
                                        <a class="dmca-badge" title="DMCA.com Protection Status"
                                            href="//www.dmca.com/Protection/Status.aspx?ID=4b8a8ee3-256d-4e67-abbb-e8d77ebe600d">
                                            <img src="https://winecellar.vn/wp-content/uploads/2021/07/certificate-3.png?ID=4b8a8ee3-256d-4e67-abbb-e8d77ebe600d"
                                                alt="DMCA.com Protection Status" /></a>
                                        <script
                                            src="https://images.dmca.com/Badges/DMCABadgeHelper.min.js"></script>
                                    </span>
                                </p>
                            </div>
                            <style>
                                #stack-2529701731>* {
                                    --stack-gap: 0.5rem;
                                }
                            </style>
                        </div> --}}
                    </div>
                </div>
                {{-- <div id="col-1829082679" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Thông tin</span><b></b></h4>
                        </div>
                        <div class="ux-menu stack stack-col justify-start">
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/gioi-thieu/">
                                    <span class="ux-menu-link__text">
                                        Giới thiệu công ty </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/lien-he/chinh-sach-va-dieu-khoan-dich-vu/">
                                    <span class="ux-menu-link__text">
                                        CHÍNH SÁCH </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/lien-he/huong-dan-mua-hang-online/">
                                    <span class="ux-menu-link__text">
                                        HƯỚNG DẪN MUA HÀNG </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/chinh-sach-giao-hang/">
                                    <span class="ux-menu-link__text">
                                        chính sách giao hàng </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/category/tuyen-dung/">
                                    <span class="ux-menu-link__text">
                                        TUYỂN DỤNG </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/lien-he/faq/">
                                    <span class="ux-menu-link__text">
                                        CÂU HỎI THƯỜNG GẶP </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-1679339271" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Danh mục rượu</span><b></b></h4>
                        </div>
                        <div class="ux-menu stack stack-col justify-start">
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/ruou-vang/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/ruou-vang-phap/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG PHÁP </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/ruou-vang-y/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG Ý </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/ruou-vang-my/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG MỸ </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex" href="https://winecellar.vn/ruou-vang-uc/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG ÚC </span>
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
                                    href="https://winecellar.vn/ruou-vang-chile/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG CHILE </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/vang-tay-ban-nha/">
                                    <span class="ux-menu-link__text">
                                        RƯỢU VANG TÂY BAN NHA </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/ly-pha-le-riedel/">
                                    <span class="ux-menu-link__text">
                                        LY RƯỢU VANG PHA LÊ </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div> --}}
                <div id="col-1468735152" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        {{-- <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">Quà tặng</span><b></b></h4>
                        </div>
                        <div class="ux-menu stack stack-col justify-start">
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/qua-tang-doanh-nghiep/">
                                    <span class="ux-menu-link__text">
                                        QUÀ TẶNG DOANH NGHIỆP </span>
                                </a>
                            </div>
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="https://winecellar.vn/mid-autumn-2024/">
                                    <span class="ux-menu-link__text">
                                        QUÀ TẶNG TRUNG THU 2024 </span>
                                </a>
                            </div>
                        </div>
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main" style="color:rgb(255, 255, 255);">-</span><b></b>
                            </h4>
                        </div> --}}
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">DANH MỤC</span><b></b></h4>
                        </div>
                        <div class="ux-menu stack stack-col justify-start ux-menu--divider-solid">
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="{{ route('front.about-us') }}">
                                    <span class="ux-menu-link__text">
                                        Giới thiệu công ty </span>
                                </a>
                            </div>
                            @foreach ($product_categories as $item)
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex" href="{{ route('front.show-product-category', $item->slug) }}">
                                        <span class="ux-menu-link__text">
                                            {{ $item->name }} </span>
                                    </a>
                                </div>
                            @endforeach
                            @foreach ($post_categories as $item)
                                <div class="ux-menu-link flex menu-item">
                                    <a class="ux-menu-link__link flex" href="{{ route('front.list-blog', $item->slug) }}">
                                        <span class="ux-menu-link__text">
                                            {{ $item->name }} </span>
                                    </a>
                                </div>
                            @endforeach
                            <div class="ux-menu-link flex menu-item">
                                <a class="ux-menu-link__link flex"
                                    href="{{ route('front.contact-us') }}">
                                    <span class="ux-menu-link__text">
                                        Liên hệ </span>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div id="col-1468735152" class="col medium-5 small-12 large-5">
                    <div class="col-inner">
                        <div class="container section-title-container">
                            <h4 class="section-title section-title-center"><b></b><span
                                    class="section-title-main">HỆ THỐNG</span><b></b></h4>
                        </div>
                        {!! $config->location !!}
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1659235549 {
                padding-top: 40px;
                padding-bottom: 40px;
                background-color: rgb(247, 247, 247);
            }
        </style>
    </section>
    {{-- <section class="section ss-footer-contact" id="section_1595023729">
        <div class="bg section-bg fill bg-fill  bg-loaded"></div>
        <div class="section-content relative">
            <div class="container section-title-container">
                <h3 class="section-title section-title-center"><b></b><span class="section-title-main">HỆ THỐNG
                        HẦM RƯỢU VANG WINECELLAR.vn (Công ty TNHH Hầm Rượu Việt Nam)</span><b></b></h3>
            </div>
            <div class="row" style="max-width:1400px" id="row-1348906924">
                <div id="col-370845756" class="col medium-11 small-12 large-11">
                    <div class="col-inner">
                        <div id="text-3396228202" class="text">
                            <h3><span style="font-size: 90%;"><strong>HOTLINE:</strong></span></h3>
                            <h5><a href="https://winecellar.vn/?tracking_phone=0946698008">094 669 8008</a> | <a
                                    href="https://winecellar.vn/?tracking_phone=0903530268">0903 530 268</a> |
                                <a href="https://winecellar.vn/?tracking_phone=0903520268">0903 520 268</a></h5>
                            <style>
                                #text-3396228202 {
                                    text-align: center;
                                }
                            </style>
                        </div>
                    </div>
                </div>
                <div id="col-306873462" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <h3><span style="font-size: 90%;">TP. HÀ NỘI</span></h3>
                        <p><span style="font-size: 90%;">Số 78 Vũ Phạm Hàm, Cầu Giấy - <a
                                    href="https://winecellar.vn/?tracking_phone=0986587836"><span
                                        style="color: #056839;"> 098 658 7836</span></a></span></p>
                        <p><span style="font-size: 90%;">Số 43 Phan Chu Trinh, Hoàn Kiếm -<a
                                    href="https://winecellar.vn/?tracking_phone=0987577836"> <span
                                        style="color: #056839;">098 757 7836</span></a></span></p>
                        <p><span style="font-size: 90%;">Số 88 Đào Tấn, Ba Đình - <a
                                    href="https://winecellar.vn/?tracking_phone=0968497836"><span
                                        style="color: #056839;">096 849 7836</span></a></span></p>
                        <p><span style="font-size: 90%;">Số 246 Hoàng Ngân, Cầu Giấy - <a
                                    href="https://winecellar.vn/?tracking_phone=0903082366"><span
                                        style="color: #056839;">090 308 2366</span></a></span></p>
                    </div>
                </div>
                <div id="col-2001211853" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <h3><span style="font-size: 90%;">TP. HỒ CHÍ MINH</span></h3>
                        <p dir="auto"><span style="font-size: 90%;">Số 188 Nguyễn Văn Thủ, Quận 1 - <a
                                    href="https://winecellar.vn/?tracking_phone=0916733416"><span
                                        style="color: #056839;">091 673 3416</span></a></span></p>
                        <p dir="auto"><span style="font-size: 90%;">Số 253 Nam Kì Khởi Nghĩa, Quận 3 - <a
                                    href="https://winecellar.vn/?tracking_phone=0916733414"><span
                                        style="color: #056839;">091 673 3414</span></a></span></p>
                        <p dir="auto"><span style="font-size: 90%;">Số 58 Song Hành, An Phú, TP Thủ Đức - <a
                                    href="https://winecellar.vn/?tracking_phone=0916733415"><span
                                        style="color: #056839;">091 673 3415</span></a></span></p>
                    </div>
                </div>
                <div id="col-1430686488" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <h3><span style="font-size: 90%;"><strong>TP. ĐÀ NẴNG</strong></span></h3>
                        <p><span style="font-size: 90%;">Số 172 Nguyễn Văn Linh, Vĩnh Trung, Thanh Khê - <a
                                    href="https://winecellar.vn/?tracking_phone=0935567172"><span
                                        style="color: #056839;">093 556 7172</span></a></span></p>
                        <h3><span style="font-size: 90%;"><strong>TP. NHA TRANG</strong></span></h3>
                        <p><span style="font-size: 90%;">Số 15 Hai Bà Trưng, Phường Xương Huân - <a
                                    href="https://winecellar.vn/?tracking_phone=0941051001"><span
                                        style="color: #056839;">094 105 1001</span></a></span></p>
                    </div>
                </div>
                <div id="col-764767956" class="col medium-3 small-12 large-3">
                    <div class="col-inner">
                        <h3><span style="font-size: 90%;"><strong>HỘI AN</strong></span></h3>
                        <p><span style="font-size: 90%;">Số 166 Nguyễn Trường Tộ, Phường Minh An - <a
                                    href="https://winecellar.vn/?tracking_phone=0964887166"><span
                                        style="color: #056839;">096 488 7166</span></a></span></p>
                        <h3><span style="font-size: 90%;"><strong>PHÚ QUỐC</strong></span></h3>
                        <p><span style="font-size: 90%;">Số 217B Đường 30/4, Phú Quốc, Kiên Giang - <a
                                    href="https://winecellar.vn/?tracking_phone=0916739311"><span
                                        style="color: #056839;">091 673 9311</span></a></span></p>
                    </div>
                </div>
            </div>
        </div>
        <style>
            #section_1595023729 {
                padding-top: 30px;
                padding-bottom: 30px;
                background-color: rgb(247, 247, 247);
            }
        </style>
    </section> --}}
    <div class="absolute-footer light medium-text-center text-center">
        <div class="container clearfix">
            <div class="footer-primary pull-left">
                {{-- <div class="menu-footer-menu-container">
                    <ul id="menu-footer-menu" class="links footer-nav uppercase">
                        <li id="menu-item-10146"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10146"><a
                                href="https://winecellar.vn/ruou-vang-phap/">Rượu vang Pháp</a></li>
                        <li id="menu-item-10145"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-10145"><a
                                href="https://winecellar.vn/ruou-vang-y/">Rượu vang Ý</a></li>
                        <li id="menu-item-13389"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-13389">
                            <a href="https://winecellar.vn/ruou-vang-chile/">Rượu vang Chi Lê</a></li>
                        <li id="menu-item-18328"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-18328">
                            <a href="https://winecellar.vn/ruou-vang-my/">Rượu Vang Mỹ</a></li>
                        <li id="menu-item-18326"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-18326">
                            <a href="https://winecellar.vn/banh-bi-jules-destrooper/">Bánh Bỉ</a></li>
                        <li id="menu-item-18327"
                            class="menu-item menu-item-type-taxonomy menu-item-object-product_cat menu-item-18327">
                            <a href="https://winecellar.vn/nuoc-khoang-borjomi/">Nước khoáng Borjomi</a></li>
                        <li id="menu-item-27838"
                            class="menu-item menu-item-type-custom menu-item-object-custom menu-item-27838"><a
                                href="https://winecellar.vn/pha-le-riedel/">Ly pha lê Riedel</a></li>
                    </ul>
                </div> --}}
                <div class="copyright-footer">
                    <p>Copyright {{ date('Y') }} © <strong>{{ $config->web_title }}</strong></p>
                </div>
            </div>
        </div>
    </div>
    <a href="#top"
        class="back-to-top button icon invert plain fixed bottom z-1 is-outline hide-for-medium circle"
        id="top-link" aria-label="Go to top"><i class="icon-angle-up"></i></a>
</footer>
