@extends('site.layouts.master')
@section('title')
    {{ $cate_title }}
@endsection
@section('description')
    {{ $cate_des ?? '' }}
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
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-archive page-wrapper">
        <header class="archive-page-header">
            <section class="section" id="section_category">
                <div class="bg section-bg fill bg-fill bg-loaded">
                    <div class="section-bg-overlay absolute fill"></div>
                </div>
                <div class="section-content relative">
                    <div class="row row-collapse">
                        <div class="col small-12 large-12">
                            <div class="col-inner">
                                <div id="text-category" class="text">
                                    <h1 class="uppercase" style="text-align: center;">
                                        <span>{{ $cate_title }}</span>
                                    </h1>
                                    <div class="taxonomy-description">
                                        <p>{{ $cate_des ?? '' }}</p>
                                    </div>
                                    <style>
                                        #text-category {
                                            font-size: 1rem;
                                            text-align: center;
                                            color: rgb(255, 255, 255);
                                            max-width: 80%;
                                            margin: 0 auto;
                                        }

                                        #text-category>* {
                                            color: rgb(255, 255, 255);
                                        }
                                    </style>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <style>
                    #section_category {
                        padding-top: 100px;
                        padding-bottom: 100px;
                    }

                    #section_category .section-bg-overlay {
                        background-color: rgba(0, 0, 0, 0.4);
                    }

                    #section_category .section-bg.bg-loaded {
                        background-image: url({{ url('site/images/background_blog.jpg') }});
                    }

                    /* #section_category .section-bg.bg-loaded {
                        position: absolute;
                        left: 0;
                        top: 0;
                        width: calc(100% + 150px);
                        height: calc(100% + 150px);
                        will-change: transform;
                        -webkit-animation: bgPos 100s linear infinite;
                        animation: bgPos 100s linear infinite;
                        -webkit-transform: translate3d(-75px, -75px, 0) rotate(0.001deg);
                        transform: translate3d(-75px, -75px, 0) rotate(0.001deg);
                        background-position: 50% 50%;
                        background-size: cover;
                        z-index: -1;
                    }
                    @-webkit-keyframes bgPos {
                        25% {
                            -webkit-transform:translate3d(-150px, -150px, 0) rotate(0.001deg);
                            transform:translate3d(-150px, -150px, 0) rotate(0.001deg)
                        }
                        75% {
                            -webkit-transform:translate3d(0, 0, 0) rotate(0.001deg);
                            transform:translate3d(0, 0, 0) rotate(0.001deg)
                        }
                    }
                    @keyframes bgPos {
                        25% {
                            -webkit-transform:translate3d(-150px, -150px, 0) rotate(0.001deg);
                            transform:translate3d(-150px, -150px, 0) rotate(0.001deg)
                        }
                        75% {
                            -webkit-transform:translate3d(0, 0, 0) rotate(0.001deg);
                            transform:translate3d(0, 0, 0) rotate(0.001deg)
                        }
                    } */
                </style>
            </section>
        </header>
        <div class="blog-archive-list">
            <div id="post-list">
                <div class="row large-columns-3 medium-columns- small-columns-1">
                    @foreach ($blogs as $item)
                    <div class="col post-item">
                        <div class="col-inner">
                            <div class="box box-text-bottom box-blog-post has-hover">
                                <div class="box-image">
                                    <div class="image-cover" style="padding-top:56%;">
                                        <a href="{{ route('front.detail-blog', $item->slug) }}"
                                            class="plain"
                                            aria-label="Brunello di Montalcino &#8211; Hương vị rượu vang Ý tuyệt hảo">
                                            <img width="533" height="400"
                                                src="{{ $item->image->path }}"
                                                class="attachment-medium size-medium wp-post-image"
                                                alt="{{ $item->name }}"
                                                decoding="async" loading="lazy" /> </a>
                                    </div>
                                </div>
                                <div class="box-text text-center">
                                    <div class="box-text-inner blog-post-inner">
                                        <h5 class="post-title is-large ">
                                            <a href="{{ route('front.detail-blog', $item->slug) }}"
                                                class="plain">{{ $item->name }}</a>
                                        </h5>
                                        <div class="is-divider"></div>
                                        <div class="from_the_blog_excerpt text-limit-3-line">
                                            {!! $item->intro !!}
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    @endforeach
                </div>
                {{ $blogs->links() }}
            </div>
        </div>
    </div>
</main>
@endsection

@push('script')
@endpush
