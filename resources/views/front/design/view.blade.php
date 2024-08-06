@extends('layouts.front.app')

@section('content')
    <!-- ========== Header  ========== -->
    <header id="dsn_header" class="dsn-header-animation  show-box-shadow dsn-container section-padding v-dark-head">
        <div class="entry-header p-relative over-hidden">
            <div class="p-absolute dsn-hero-parallax-img over-hidden z-index-1 full-width" id="hero_image" data-dsn-ajax="img"
                data-overlay="4">
                <img class="cover-bg-img transform-3d" src="{{ Storage::url($design->cover) }}" alt="{{ $design->title }}">
            </div>
            <div id="hero_content" class="d-flex align-items-end p-relative h-100 dsn-hero-parallax-title container">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="dsn_metas" class="p-relative d-flex justify-content-between ">
                                <div class="metas has-separate p-relative mb-10">
                                    <span>{{ $design->category->name }}</span>
                                </div>
                            </div>
                            <div id="hero_title">
                                <h1 class="title" data-dsn-ajax="title">{{ $design->title }}</h1>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <a class="background-main move-circle link-project p-absolute" data-dsn="parallax"
            href="https://www.behance.net/gallery/60425833/Mode-Modular-Headphones">

            VISIT SITE
            <svg viewbox="0 0 1024 1024" version="1.1" xmlns="http://www.w3.org/2000/svg">
                <path
                    d="M213.333333 750.506667L665.173333 298.666667H384V213.333333h426.666667v426.666667h-85.333334V358.826667L273.493333 810.666667 213.333333 750.506667z">
                </path>
            </svg>
        </a>
        <a href="#page_wrapper" rel="nofollow" class="dsn-scroll-bottom"
            data-dsn-option='{"ease": "power4.inOut" , "duration" : 1.5}'>
            <div class="text">SCROLL</div>
        </a>
    </header>
    <!-- ========== End Header  ========== -->
    <div id="page_wrapper" class="wrapper">
        <!-- ========== Info Project  ========== -->
        <div class="info-project  background-section pb-section pt-40">
            <div class="container text-center">
                <h2 class="title-h2 dsn-up">
                    ABOUT THE PROJECT
                </h2>
                <p class="max-w750 mt-30 dsn-up">
                    {{ $design->description }}
                </p>
                <ul class="intro-project-list mt-30 d-grid grid-md-3">

                    <li class="dsn-up grid-item number-item">
                        <h5 class="title-list-project sm-title-block">Category</h5>
                        <p class="description-list-project dsn-auto">{{ $design->category->name }}</p>
                    </li>

                    <li class="dsn-up grid-item number-item">
                        <h5 class="title-list-project sm-title-block">Industry</h5>
                        <p class="description-list-project dsn-auto">{{ $design->title }}</p>
                    </li>

                    <li class="dsn-up grid-item number-item">
                        <h5 class="title-list-project sm-title-block">Published</h5>
                        <p class="description-list-project dsn-auto">{{ $design->created_at->format('F d, Y') }}</p>
                    </li>
                </ul>
            </div>

        </div>
        <!-- ========== End Info Project  ========== -->

        <!-- ========== Parallax Image  ========== -->
        <div class="p-relative mb-section">
            <div class="dsn-bg-mask h-50 top-0  background-section"></div>
            <div class="dsn-container over-hidden">
                <div class="img-box-parallax dsn-animate dsn-effect-down h-v-80" data-dsn-triggerhook="bottom"
                    data-dsn-grid="move-up">
                    <img class="cover-bg-img has-direction" src="{{ Storage::url($design->images[0]->image) }}"
                        alt="{{ $design->title }}">
                    <div class="cap"><span>{{ $design->title }}</span></div>
                </div>
            </div>
        </div>
        <!-- ========== End Parallax Image  ========== -->

        <!-- ========== Paragraph  ========== -->
        <div class="container section-margin text-center">
            <p class="title-block dsn-up max-w750">
                {{ $design->description }}
            </p>
        </div>
        <!-- ========== End Paragraph  ========== -->

        <!-- ========== Tow Image Popup  ========== -->
        <div class="dsn-container p-relative mb-section">
            <div class="d-grid grid-sm-2 align-items-center" data-dsn-gap="80px 40px">
                <div class="p-relative img-box-parallax before-z-index has-popup" data-dsn="parallax">
                    <div class="effect-popup before-z-index h-v-70"
                        data-src="{{ Storage::url($design->images[1]->image) }}" data-caption="{{ $design->title }}"
                        data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                        <img class="cover-bg-img" src="{{ Storage::url($design->images[1]->image) }}" alt="">
                    </div>
                    <div class="cap">
                        <span>{{ $design->title }}</span>
                    </div>
                </div>
                <div class="p-relative img-box-parallax before-z-index has-popup" data-dsn="parallax">
                    <div class="effect-popup before-z-index h-v-80"
                        data-src="{{ Storage::url($design->images[2]->image) }}" data-caption="{{ $design->title }}"
                        data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                        <img class="cover-bg-img" src="{{ Storage::url($design->images[2]->image) }}" alt="">
                    </div>
                    <div class="cap">
                        <span>{{ $design->title }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Tow Image Popup  ========== -->

        <!-- ========== Parallax Image With Popup  ========== -->
        <div class="dsn-container over-hidden section-margin">
            <div class="img-box-parallax dsn-animate dsn-effect-down has-popup h-v-80" data-dsn-triggerhook="bottom"
                data-dsn-grid="move-up">

                <div class="effect-popup before-z-index h-100" data-src="{{ Storage::url($design->images[3]->image) }}"
                    data-caption="{{ $design->title }}" data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                    <img class="cover-bg-img has-direction" src="{{ Storage::url($design->images[3]->image) }}"
                        data-dsn-position="50% 50%" alt="">
                </div>
                <div class="cap"><span>{{ $design->title }}</span></div>
            </div>
        </div>
        <!-- ========== End Parallax Image With Popup  ========== -->

        <!-- ========== Tow Image Popup  ========== -->
        <div class="dsn-container p-relative mb-section">
            <div class="d-grid grid-sm-2 align-items-center" data-dsn-gap="80px 40px">
                <div class="p-relative img-box-parallax before-z-index has-popup" data-dsn="parallax">
                    <div class="effect-popup before-z-index h-v-80"
                        data-src="{{ Storage::url($design->images[4]->image) }}" data-caption="{{ $design->title }}"
                        data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                        <img class="cover-bg-img" src="{{ Storage::url($design->images[4]->image) }}" alt="">
                    </div>
                    <div class="cap">
                        <span>{{ $design->title }}</span>
                    </div>
                </div>
                <div class="p-relative img-box-parallax before-z-index has-popup" data-dsn="parallax">
                    <div class="effect-popup before-z-index h-v-70"
                        data-src="{{ Storage::url($design->images[5]->image) }}" data-caption="{{ $design->title }}"
                        data-fancybox="_1" data-cursor="open" data-dsn-overlay="0">
                        <img class="cover-bg-img" src="{{ Storage::url($design->images[5]->image) }}" alt="">
                    </div>
                    <div class="cap">
                        <span>{{ $design->title }}</span>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Tow Image Popup  ========== -->


        <!-- ========== Paragraph  ========== -->
        <div class="container section-margin text-center">
            <p class="title-block dsn-text max-w750">
                {{ $design->description }}
            </p>
            <h5 class="title-block dsn-up mt-15">Richard Price</h5>
        </div>
        <!-- ========== End Paragraph  ========== -->


        <!-- ========== Next Project  ========== -->
        <div class="next-project section-padding p-relative footer-animate svg-animate">
            <svg class="dsn-separator dsn-separator-up  dsn-icon-main-color" width="100%" height="100%"
                viewbox="0 0 100 10" preserveaspectratio="none">
                <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
                    vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
            </svg>
            <div data-dsn-ajax="img" class="p-absolute dsn-hero-parallax-img transform-3d bg-container over-hidden"
                data-overlay="4">
                <img class="cover-bg-img wp-post-image" src="{{ Storage::url($nextDesign->cover) }}" alt=""
                    data-dsn-position="50% 50%">
            </div>
            <div class="dsn-container dsn-z-index-2 p-relative h-100 v-dark-head">
                <div class="p-relative h-100 d-flex flex-column justify-content-center">
                    <div class="intro-project w-100">
                        <div class="intro-title text-center">
                            <div class="metas has-separate p-relative mb-10">
                                {{ $nextDesign->category->name }}
                            </div>

                            <div class="hero-title fill-text">
                                <a class='d-inline-block effect-ajax' data-dsn-ajax='next'
                                    href='{{ route('design.show', $nextDesign->id) }}'>
                                    <h2 class="title">{{ $nextDesign->title }}</h2>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
        <!-- ========== End Next Project  ========== -->

    </div>
@endsection
