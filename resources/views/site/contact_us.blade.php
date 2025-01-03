@extends('site.layouts.master')
@section('title')
    Liên hệ
@endsection

@section('css')
@endsection

@section('content')
<main id="main" class="" ng-controller="ContactUsController" ng-cloak>
    <div id="content" role="main" class="content-area">
        <section class="section" id="section_982976303">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            {!! $config->location !!}
            <style>
                #section_982976303 {
                    padding-top: 0;
                    padding-bottom: 0;
                }
            </style>
        </section>
        <section class="section" id="section_382352698">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row align-middle" style="max-width:1200px" id="row-1854955207">
                    <div id="col-805983049" class="col medium-6 small-12 large-6">
                        <div class="col-inner">
                            <h3>LIÊN HỆ VỚI CHÚNG TÔI</h3>
                            <p>Để nhận thông tin tư vấn nhanh chóng, vui lòng liên hệ với chúng tôi:
                            </p>
                            <div id="gap-968897220" class="gap-element clearfix"
                                style="display:block; height:auto;">
                                <style>
                                    #gap-968897220 {
                                        padding-top: 30px;
                                    }
                                </style>
                            </div>
                            <div class="wpcf7 no-js" id="wpcf7-f6208-p5312-o3" lang="vi" dir="ltr"
                                data-wpcf7-id="6208">
                                <div class="screen-reader-response">
                                    <p role="status" aria-live="polite" aria-atomic="true"></p>
                                    <ul></ul>
                                </div>
                                <form
                                    class="wpcf7-form init" aria-label="Form liên hệ" novalidate="novalidate"
                                    data-status="init">
                                    <p>Họ và tên *</p>
                                    <div style="margin-bottom: 1rem;">
                                        <span class="wpcf7-form-control-wrap">
                                        <input size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-text wpcf7-validates-as-required"
                                                aria-required="true" aria-invalid="false" value="" type="text"
                                                name="your_name" ng-model="your_name" style="margin-bottom: 0;" />
                                        </span><br>
                                        <div class="invalid-feedback d-block error" role="alert">
                                            <span ng-if="errors && errors.your_name">
                                                <% errors.your_name[0] %>
                                            </span>
                                        </div>
                                    </div>

                                    <p>Email*</p>
                                    <div style="margin-bottom: 1rem;">
                                        <span class="wpcf7-form-control-wrap"><input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-email wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-email"
                                                aria-required="true" aria-invalid="false" value="" type="email"
                                                name="your_email" ng-model="your_email" style="margin-bottom: 0;" />
                                        </span><br>
                                        <div class="invalid-feedback d-block error" role="alert">
                                            <span ng-if="errors && errors.your_email">
                                                        <% errors.your_email[0] %>
                                            </span>
                                        </div>
                                    </div>

                                    <p>Số điện thoại*</p>
                                    <div style="margin-bottom: 1rem;">
                                        <span class="wpcf7-form-control-wrap"><input
                                                size="40" maxlength="400"
                                                class="wpcf7-form-control wpcf7-tel wpcf7-validates-as-required wpcf7-text wpcf7-validates-as-tel"
                                                aria-required="true" aria-invalid="false" value="" type="tel"
                                                name="your_phone" ng-model="your_phone" style="margin-bottom: 0;" />
                                        </span><br>
                                        <div class="invalid-feedback d-block error" role="alert">
                                            <span ng-if="errors && errors.your_phone">
                                                <% errors.your_phone[0] %>
                                            </span>
                                        </div>
                                    </div>

                                    <p>Nội dung</p>
                                    <div style="margin-bottom: 1rem;">
                                        <span class="wpcf7-form-control-wrap">
                                            <textarea
                                                cols="40" rows="10" maxlength="2000"
                                                class="wpcf7-form-control wpcf7-textarea" aria-invalid="false"
                                                name="your_message" ng-model="your_message" style="margin-bottom: 0;"></textarea>
                                        </span><br>
                                        <div class="invalid-feedback d-block error" role="alert">
                                            <span ng-if="errors && errors.your_message">
                                                <% errors.your_message[0] %>
                                            </span>
                                        </div>
                                    </div>

                                    <p><input type="submit" value="Gửi đi" ng-click="submitContact()" /></p>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div id="col-374426934" class="col medium-6 small-12 large-6">
                        <div class="col-inner text-left">
                            <div class="container section-title-container">
                                <h4 class="section-title section-title-normal"><b></b><span
                                        class="section-title-main">thông tin liên hệ</span><b></b></h4>
                            </div>
                            <h4>{{ $config->short_name_company }}</h4>
                            <p>Địa chỉ công ty : <strong>{{ $config->address_company }}</strong>
                            </p>
                            <p>Đại chỉ sản xuất : <strong>{{ $config->address_center_insurance }}</strong>
                            </p>
                            <p>Hotline : <strong><a
                                        href="tel:{{ $config->hotline }}">{{ $config->hotline }}</a></strong>
                            </p>
                            <p>Email : <strong><a
                                        href="mailto:{{ $config->email }}">{{ $config->email }}</a></strong>
                            </p>
                            <p>Thời gian làm việc : <strong>08h00 – 11h45  13h00-17h15</strong>
                            </p>
                            <div id="gap-101843187" class="gap-element clearfix"
                                style="display:block; height:auto;">
                                <style>
                                    #gap-101843187 {
                                        padding-top: 50px;
                                    }
                                </style>
                            </div>
                        </div>
                        <style>
                            #col-374426934>.col-inner {
                                padding: 0px 0px 0px 0px;
                            }

                            @media (min-width:550px) {
                                #col-374426934>.col-inner {
                                    padding: 0px 0px 0px 50px;
                                }
                            }
                        </style>
                    </div>
                </div>
            </div>
            <style>
                #section_382352698 {
                    padding-top: 40px;
                    padding-bottom: 40px;
                    background-color: rgb(247, 245, 239);
                }
            </style>
        </section>
    </div>
</main>
@endsection

@push('script')
<script>
    app.controller('ContactUsController', function ($scope, $http) {
        $scope.loading = false;
        $scope.errors = {};
        $scope.submitContact = function () {
            console.log(123);

            $scope.loading = true;
            let data = {
                your_name: $scope.your_name,
                your_email: $scope.your_email,
                your_phone: $scope.your_phone,
                your_message: $scope.your_message
            };
            jQuery.ajax({
                url: '{{ route('front.post-contact') }}',
                type: 'POST',
                headers: {
                    'X-CSRF-TOKEN': "{{csrf_token()}}"
                },
                data: data,
                success: function (response) {
                    if (response.success) {
                        toastr.success('Thao tác thành công !')
                    } else {
                        $scope.errors = response.errors;
                        toastr.error('Thao tác thất bại !')
                    }
                },
                error: function () {
                    toastr.error('Thao tác thất bại !')
                },
                complete: function () {
                    $scope.$applyAsync();
                    $scope.loading = false;
                }
            });
        };
    });
</script>
@endpush
