@extends('layouts.front.app')
@section('title', 'Blog Details')
@php
    use Illuminate\Support\Str;
@endphp
<style>
    .message-container {
        position: fixed;
        /* Use fixed positioning */
        top: 80px;
        /* Distance from the top */
        right: 20px;
        /* Distance from the right */
        z-index: 1000;
        /* Ensure it sits above other content */
    }
</style>
<script>
    setTimeout(function() {
        document.getElementsByClassName("message-container")[0].style.display = "none";
    }, 6000);
</script>

@section('content')
    @if (session()->has('message'))
        <div class="message-container">
            <div style="color: green !important" class="alert alert-success">
                {{ session()->get('message') }}
            </div>
        </div>
    @endif
    <!-- ========== Header  ========== -->
    <header id="dsn_header" class="dsn-header-animation  dsn-full-header v-dark-head">
        <div class="entry-header p-relative over-hidden">
            <div id="hero_image" class="p-absolute dsn-hero-parallax-img over-hidden before-z-index z-index-1 full-width"
                data-dsn-ajax="img" data-overlay="6">
                <img src="{{ Storage::url($blog->images) }}" class="cover-bg-img transform-3d " alt=" {{ $blog->title }}"
                    data-dsn-position="50% 50%" sizes="(max-width: 2560px) 100vw, 2560px">
            </div>
            <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title align-items-end container">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="dsn_metas" class="p-relative d-flex justify-content-between ">
                                <div class="metas has-separate p-relative mb-10">
                                    <span>{{ $blog->category->name }}</span>
                                </div>
                            </div>
                            <div id="hero_title">
                                <h1 class="title text-upper" data-dsn-ajax="title">{{ $blog->title }}</h1>
                            </div>
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
    <!-- ========== End Header  ========== -->

    <div id="page_wrapper" class="wrapper">

        <div class="root-blog">
            <div class="container ">
                <div class="dsn-posts">
                    <div class="news-content mt-section">
                        <div class="news-content-inner">

                            <div class="post-content">
                                <p>
                                    <a href="#">As a leading UX design agency,</a>
                                    {{ $blog->short_description }}
                                    <br>
                                    {{ $blog->normal_description }}
                                </p>

                                <blockquote class="wp-block-quote">
                                    <p>
                                        <strong>
                                            <em>
                                                {{ $blog->short_description }}
                                                <br>
                                                {{ $blog->normal_description }}
                                            </em>
                                        </strong>
                                    </p>
                                </blockquote>

                                <p>
                                    <a href="#">As a leading UX design agency,</a>
                                    {{ $blog->short_description }}
                                    <br>
                                    {{ $blog->normal_description }}
                                </p>

                                <img class="w-100" src="{{ Storage::url($blog->images) }}" alt="{{ $blog->title }}">

                                <p>
                                    <a href="#">As a leading UX design agency,</a>
                                    <?php
                                    $var = html_entity_decode($blog->description);
                                    echo $var;
                                    ?>
                                </p>

                                <div class="post-tags p-relative">
                                    <a class="fz-16" href="#">
                                        <span class="post_tag post_tag">{{ $blog->title }}</span>
                                    </a>
                                    <a class="fz-16" href="#">
                                        <span class="post_tag post_tag">{{ $blog->category->name }}</span>
                                    </a>
                                </div>

                            </div>

                            <div class="pagination-post d-flex align-items-center border-style border-radius mt-section">

                                @if ($prevBlog)
                                    <div class="pagination-item w-100 p-20"><a
                                            href="{{ route('view.blog', ['slug' => $prevBlog->slug]) }}"><span
                                                class="mb-5">PREVIOUS</span>
                                            <h4 class="title-block word-wrap">{{ $prevBlog->title }}</h4>
                                        </a></div>
                                    <div class="icon p-20 border-right border-left">
                                        <a class="h-100 heading-color"
                                            href="{{ route('view.blog', ['slug' => $prevBlog->slug]) }}">
                                            <i class="fas fa-th-large" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                @endif

                                @if ($nextBlog)
                                    <div class="pagination-item w-100 p-20 text-right"><a
                                            href="{{ route('view.blog', ['slug' => $nextBlog->slug]) }}"><span
                                                class="mb-5">NEXT</span>
                                            <h4 class="title-block word-wrap">{{ $nextBlog->title }}</h4>
                                        </a></div>
                                        <div class="icon p-20 border-right border-left">
                                            <a class="h-100 heading-color"
                                                href="{{ route('view.blog', ['slug' => $nextBlog->slug]) }}">
                                                <i class="fas fa-th-large" aria-hidden="true"></i>
                                            </a>
                                        </div>
                                @endif
                            </div>

                            <div class="comments-post section-margin">
                                <div class="comments-area section-margin">
                                    <div class="comments-title">
                                        <h4 class="title-block line-shap line-shap-before">
                                            <span class="line-bg-right">Comments</span>
                                        </h4>
                                    </div>

                                    <ol class="comment-list">
                                        @foreach ($blog->comments as $comment)
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author">
                                                        <img alt="{{ $comment->name }}"
                                                            src="{{ asset('front_asset/assets/img/team/1.jpg') }}">
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="comment-info">
                                                            <h6 class="comment-name">{{ $comment->name }}</h6>
                                                        </div>
                                                        <div class="comment-date">
                                                            {{ $comment->created_at->format('F d, Y') }}</div>
                                                        <div class="text-holder">
                                                            <p>{{ $comment->comment }}</p>
                                                        </div>
                                                        <a class="comment-reply-link" href="#"><i
                                                                class="fas fa-reply"></i> reply</a>
                                                    </div>
                                                </div>

                                                @if ($comment->replies)
                                                    <ul class="children">
                                                        @foreach ($comment->replies as $reply)
                                                            <li class="comment">
                                                                <div class="comment-body">
                                                                    <div class="comment-author">
                                                                        <img alt="{{ $reply->name }}"
                                                                            src="{{ asset('front_asset/assets/img/team/1.jpg') }}">
                                                                    </div>
                                                                    <div class="comment-text">
                                                                        <div class="comment-info">
                                                                            <h6 class="comment-name">{{ $reply->name }}
                                                                            </h6>
                                                                        </div>
                                                                        <div class="comment-date">
                                                                            {{ $reply->created_at->format('F d, Y') }}
                                                                        </div>
                                                                        <div class="text-holder">
                                                                            <p>{{ $reply->comment }}</p>
                                                                        </div>
                                                                        <a class="comment-reply-link" href="#"><i
                                                                                class="fas fa-reply"></i> reply</a>
                                                                    </div>
                                                                </div>
                                                            </li>
                                                        @endforeach
                                                    </ul>
                                                @endif
                                            </li>
                                        @endforeach
                                    </ol>
                                </div>


                                <div class="comments-form dsn-form ">
                                    <div class="comments-title">
                                        <h4 class="title-block line-shap line-shap-before"><span
                                                class="line-bg-right">Comments</span></h4>
                                    </div>

                                    <form class="form w-100" action="{{ route('blog.comments.store', $blog->id) }}"
                                        method="post">
                                        @csrf
                                        <div class="messages"></div>
                                        <div class="input__wrap controls">
                                            <div class="d-grid grid-md-2">
                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">

                                                        <input id="form_name" type="text" name="name"
                                                            placeholder="Enter your name ..." required="required"
                                                            data-error="name is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>

                                                <div class="form-group dsn-up">
                                                    <div class="entry-box">

                                                        <input id="form_email" type="email" name="email"
                                                            placeholder="Enter your Email ..." required="required"
                                                            data-error="Valid email is required.">
                                                    </div>
                                                    <div class="help-block with-errors"></div>
                                                </div>
                                            </div>

                                            <div class="form-group dsn-up">
                                                <div class="entry-box">

                                                    <textarea id="form_message" class="form-control" name="comment" rows="7"
                                                        placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                                </div>
                                                <div class="help-block with-errors"></div>
                                            </div>

                                            <div class="d-flex dsn-up">
                                                <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                                    data-dsn="parallax">
                                                    <input type="submit" value="Post Comment">
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
