@extends('site.layouts.master')
@section('title')
    {{ $blog_title }}
@endsection

@section('css')
@endsection

@section('content')
<main id="main" class="">
    <div id="content" class="blog-wrapper blog-single page-wrapper">
        <div class="row row-small ">
            <div class="large-9 col">
                <article id="post-51430"
                    class="post-51430 post type-post status-publish format-standard has-post-thumbnail hentry category-tim-hieu-kien-thuc-ruou-vang">
                    <div class="article-inner ">
                        <header class="entry-header">
                            <div class="entry-header-text entry-header-text-top text-center">
                                <h6 class="entry-category is-xsmall"><a
                                        href="{{ route('front.list-blog', $category->slug) }}"
                                        rel="category tag">{{ $cate_title }}</a></h6>
                                    <h1 class="entry-title">{{ $blog_title }}</h1>
                                <div class="entry-divider is-divider small"></div>
                            </div>
                        </header>
                        <div class="entry-content single-page">
                            {!! $blog->body !!}
                        </div>
                    </div>
                </article>
            </div>
            <div class="post-sidebar large-3 col">
                <div id="secondary" class="widget-area " role="complementary">
                    <aside id="nav_menu-2" class="widget widget_nav_menu">
                        <span class="widget-title "><span>Chuyên Mục</span></span>
                        <div class="is-divider small"></div>
                        <div class="menu-menu-category-container">
                            <ul id="menu-menu-category" class="menu">
                                @foreach ($other_blogs as $item)
                                <li id="menu-item-32721"
                                    class="menu-item menu-item-type-taxonomy menu-item-object-category menu-item-32721">
                                    <a href="{{ route('front.detail-blog', $item->slug) }}">{{ $item->name }}</a>
                                </li>
                                @endforeach
                            </ul>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</main>
@endsection

@push('script')
@endpush
