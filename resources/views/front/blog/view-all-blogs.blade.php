@extends('layouts.front.app')
@section('title', 'Blog')

@php
    use Illuminate\Support\Str;
@endphp

@section('content')
    {{-- <section id="blog" class="w-100 mt-0 p-1 overflow-hidden">
        <div class="container-fluid">
            <div class="section__header justify-content-center align-items-center">
                <h1 class="content-section__title ui heading size-heading_1">
                    Blog
                </h1>
                <small class="content-section__description fs-6">HOME / BLOG</small>
            </div>
            <div style="background-color: #191919" class="blog-content m-5 p-5 ms-0 ps-0 me-0 pe-0">
                <div class="container">
                    <div class="row gy-4">
                        @if (isset($allBlogs))
                            @foreach ($allBlogs as $blog)
                                <div class="col-md-4">
                                    <div style="min-height: 350px; max-height: 350px" class="card p-5">
                                        <div class="card-body">
                                            <p class="w-75 fs-6 content-section__subtitle ui heading size-headingmd">
                                                {{ Str::limit($blog->getTranslation('title', app()->getLocale()), 45) }}
                                                {{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 45) }}
                                            </p>
                                            <br>
                                            <div style="height: 3px" class="section__divider"></div>
                                            <br>
                                            <p class="w-100 fs-6 content-section__description">
                                                {{ Str::limit($blog->getTranslation('normal_description', app()->getLocale()), 60) }}
                                            </p>
                                            <br>
                                            <p>Learn more <a class="arrow text-white text-decoration-none"
                                                    href="{{ route('view.blog', $blog->slug) }}">→</a>
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        @endif

                    </div>

                </div>
                <div class="paginator mt-3">
                    {{ $allBlogs->links('front.pagination.custom-pagination') }}
                </div>
            </div>
        </div>
    </section> --}}
    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation  header-normal ">
        <div class="entry-header p-relative over-hidden">

            <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title container">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="hero_title">
                                <h1 class="title title-org" data-dsn-ajax="title">Our Stories</h1>
                            </div>
                            <p class="subtitle-meta metas p-relative mt-10">NEWS & IDEAS</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
            data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
            <div class="text">SCROLL</div>
        </a>

    </header>
    <!-- ========== End Header Normal ========== -->

    <!-- ========== Stories ========== -->
    <div class="root-blog container section-margin dsn-blog">
        @foreach ($blogs as $blog)
            <article class="blog-item p-relative pt-50 pb-50 border-bottom">
                <div class="blog-item-inner p-relative">
                    <div class="left-box">
                        <a href="{{ route('blog.show', $blog->id) }}" class="effect-ajax word-wrap" rel="bookmark">
                            <h4 class="title-block">{{ $blog->title }}</h4>
                        </a>
                        <div class="link mt-15">
                            <span class="font-caps heading-color">{{ $blog->created_at->format('M d, Y') }}</span>
                        </div>
                    </div>
                    <div class="right-box">
                        <p class="max-w570">
                            {{ Str::limit($blog->getTranslation('short_description', app()->getLocale()), 80) }}
                        </p>
                        <div class="metas has-separates fz-14 blog-category mt-5">
                            <span class="mt-10">{{ $blog->category->name }}</span>
                        </div>
                    </div>
                </div>
            </article>
        @endforeach

        <div class="type-p-nav">
            <div class="dsn-pagination p-relative d-flex align-items-center">
                {{ $blogs->links('front.pagination.custom-pagination') }}
            </div>
        </div>
    </div>
    <!-- ========== End Stories ========== -->


@endsection
