@extends('site.layouts.master')
@section('title')
    Về chúng tôi
@endsection

@section('css')
@endsection

@section('content')
<main id="main" class="">
    <div id="content" role="main" class="content-area content-1200">
        <section class="section" id="section_136218820">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row row-collapse align-middle" style="max-width:1200px" id="row-1337557696">
                    <div id="col-512223196" class="col small-12 large-12">
                        <div class="col-inner">
                            <div id="text-1581627601" class="text">
                                <p style="text-align: center">Chào mừng quý khách đến với <strong>{{ $config->web_title }}</strong><br />
                                {!! $config->web_des !!}
                                </p>
                                <style>
                                    #text-1581627601 {
                                        text-align: center;
                                    }
                                </style>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_136218820 {
                    padding-top: 30px;
                    padding-bottom: 30px;
                    background-color: rgb(247, 245, 239);
                }
            </style>
        </section>
        <section class="section" id="section_182276357">
            <div class="bg section-bg fill bg-fill  bg-loaded"></div>
            <div class="section-content relative">
                <div class="row" style="max-width:1200px" id="row-1405672352">
                    <div id="col-360117536" class="col small-12 large-12">
                        <div class="col-inner">
                            <h2 style="text-align: center"><a href="{{ route('front.home-page') }}"><span
                                        style="color: #056839">{{ $config->web_title }}</span></a></h2>
                            {!! $config->introduction !!}
                        </div>
                    </div>
                </div>
            </div>
            <style>
                #section_182276357 {
                    padding-top: 50px;
                    padding-bottom: 50px;
                }
            </style>
        </section>
    </div>
</main>
@endsection

@push('script')
@endpush
