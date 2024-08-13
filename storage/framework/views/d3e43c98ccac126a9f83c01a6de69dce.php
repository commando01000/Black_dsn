
<?php $__env->startSection('title', 'Blog Details'); ?>
<?php
    use Illuminate\Support\Str;
?>
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

<?php $__env->startSection('content'); ?>
    <?php if(session()->has('message')): ?>
        <div class="message-container">
            <div style="color: green !important" class="alert alert-success">
                <?php echo e(session()->get('message')); ?>

            </div>
        </div>
    <?php endif; ?>
    <!-- ========== Header  ========== -->
    <header id="dsn_header" class="dsn-header-animation  dsn-full-header v-dark-head">
        <div class="entry-header p-relative over-hidden">
            <div id="hero_image" class="p-absolute dsn-hero-parallax-img over-hidden before-z-index z-index-1 full-width"
                data-dsn-ajax="img" data-overlay="6">
                <img src="<?php echo e(Storage::url($blog->images)); ?>" class="cover-bg-img transform-3d " alt=" <?php echo e($blog->title); ?>"
                    data-dsn-position="50% 50%" sizes="(max-width: 2560px) 100vw, 2560px">
            </div>
            <div id="hero_content" class="d-flex p-relative h-100 dsn-hero-parallax-title align-items-end container">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">
                            <div id="dsn_metas" class="p-relative d-flex justify-content-between ">
                                <div class="metas has-separate p-relative mb-10">
                                    <span><?php echo e($blog->category->name); ?></span>
                                </div>
                            </div>
                            <div id="hero_title">
                                <h1 class="title text-upper" data-dsn-ajax="title"><?php echo e($blog->title); ?></h1>
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
                                    <?php echo e($blog->short_description); ?>

                                    <br>
                                    <?php echo e($blog->normal_description); ?>

                                </p>

                                <blockquote class="wp-block-quote">
                                    <p>
                                        <strong>
                                            <em>
                                                <?php echo e($blog->short_description); ?>

                                                <br>
                                                <?php echo e($blog->normal_description); ?>

                                            </em>
                                        </strong>
                                    </p>
                                </blockquote>

                                <p>
                                    <a href="#">As a leading UX design agency,</a>
                                    <?php echo e($blog->short_description); ?>

                                    <br>
                                    <?php echo e($blog->normal_description); ?>

                                </p>

                                

                                <p>
                                    <a href="#">As a leading UX design agency,</a>
                                    <?php
                                    $var = html_entity_decode($blog->description);
                                    echo $var;
                                    ?>
                                </p>

                                <div class="post-tags p-relative">
                                    <a class="fz-16" href="#">
                                        <span class="post_tag post_tag"><?php echo e($blog->title); ?></span>
                                    </a>
                                    <a class="fz-16" href="#">
                                        <span class="post_tag post_tag"><?php echo e($blog->category->name); ?></span>
                                    </a>
                                </div>

                            </div>

                            <div class="pagination-post d-flex align-items-center border-style border-radius mt-section">

                                <?php if($prevBlog): ?>
                                    <div class="pagination-item w-100 p-20"><a
                                            href="<?php echo e(route('view.blog', ['slug' => $prevBlog->slug])); ?>"><span
                                                class="mb-5">PREVIOUS</span>
                                            <h4 class="title-block word-wrap"><?php echo e($prevBlog->title); ?></h4>
                                        </a></div>
                                    <div class="icon p-20 border-right border-left">
                                        <a class="h-100 heading-color"
                                            href="<?php echo e(route('view.blog', ['slug' => $prevBlog->slug])); ?>">
                                            <i class="fas fa-th-large" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>

                                <?php if($nextBlog): ?>
                                    <div class="pagination-item w-100 p-20 text-right"><a
                                            href="<?php echo e(route('view.blog', ['slug' => $nextBlog->slug])); ?>"><span
                                                class="mb-5">NEXT</span>
                                            <h4 class="title-block word-wrap"><?php echo e($nextBlog->title); ?></h4>
                                        </a></div>
                                    <div class="icon p-20 border-right border-left">
                                        <a class="h-100 heading-color"
                                            href="<?php echo e(route('view.blog', ['slug' => $nextBlog->slug])); ?>">
                                            <i class="fas fa-th-large" aria-hidden="true"></i>
                                        </a>
                                    </div>
                                <?php endif; ?>
                            </div>

                            <div class="comments-post section-margin">
                                <div class="comments-area section-margin">
                                    <div class="comments-title">
                                        <h4 class="title-block line-shap line-shap-before">
                                            <span class="line-bg-right">Comments</span>
                                        </h4>
                                    </div>

                                    <ol class="comment-list">
                                        <?php $__currentLoopData = $blog->comments; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <li class="comment">
                                                <div class="comment-body">
                                                    <div class="comment-author">
                                                        <img alt="<?php echo e($comment->name); ?>"
                                                            src="<?php echo e(asset('front_asset/assets/img/team/1.jpg')); ?>">
                                                    </div>
                                                    <div class="comment-text">
                                                        <div class="comment-info">
                                                            <h6 class="comment-name"><?php echo e($comment->name); ?></h6>
                                                        </div>
                                                        <div class="comment-date">
                                                            <?php echo e($comment->created_at->format('F d, Y')); ?>

                                                        </div>
                                                        <div class="text-holder">
                                                            <p><?php echo e($comment->comment); ?></p>
                                                        </div>

                                                        
                                                        <div class="d-flex dsn-up align-items-center">
                                                            <a class="comment-reply-link" href="#"
                                                                data-target="#reply-form-<?php echo e($comment->id); ?>">
                                                                <i class="fas fa-reply"></i> Reply
                                                            </a>
                                                            <?php if($comment->replies->count()): ?>
                                                                <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                                                    data-dsn="parallax" style="margin-left: 15px;">
                                                                    <input type="button" style="color: #fff"
                                                                        class="toggle-replies-btn" value="View Replies"
                                                                        data-target="#replies-<?php echo e($comment->id); ?>">
                                                                </div>
                                                            <?php endif; ?>
                                                        </div>

                                                        
                                                        <div class="reply-form-container form-group dsn-up"
                                                            id="reply-form-<?php echo e($comment->id); ?>" style="display:none;">
                                                            <form class="reply-form"
                                                                action="<?php echo e(route('blog.comments.replies.store', $comment->id)); ?>"
                                                                method="POST">
                                                                <?php echo csrf_field(); ?>
                                                                <div class="entry-box">
                                                                    <input type="text" name="name"
                                                                        placeholder="Your Name" required="required">
                                                                    <textarea class="reply-textarea" name="reply" placeholder="Write your reply..." required="required"
                                                                        data-error="reply is required."></textarea>
                                                                </div>
                                                                <div class="d-flex dsn-up">
                                                                    <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                                                        data-dsn="parallax">
                                                                        <input type="submit" class="reply-submit-btn"
                                                                            value="Reply">
                                                                        <div class="help-block with-errors"></div>
                                                                    </div>
                                                                </div>
                                                            </form>
                                                        </div>

                                                        
                                                        <?php if($comment->replies->count()): ?>
                                                            <ul class="children" id="replies-<?php echo e($comment->id); ?>"
                                                                style="display:none;">
                                                                <?php $__currentLoopData = $comment->replies; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $reply): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                                    <li class="comment">
                                                                        <div class="comment-body">
                                                                            <div class="comment-author">
                                                                                <img alt="<?php echo e($reply->name); ?>"
                                                                                    src="<?php echo e(asset('front_asset/assets/img/team/1.jpg')); ?>">
                                                                            </div>
                                                                            <div class="comment-text">
                                                                                <div class="comment-info">
                                                                                    <h6 class="comment-name">
                                                                                        <?php echo e($reply->name); ?></h6>
                                                                                </div>
                                                                                <div class="comment-date">
                                                                                    <?php echo e($reply->created_at->format('F d, Y')); ?>

                                                                                </div>
                                                                                <div class="text-holder">
                                                                                    <p><?php echo e($reply->comment); ?></p>
                                                                                </div>
                                                                                <a class="comment-reply-link"
                                                                                    href="#"
                                                                                    data-target="#reply-form-<?php echo e($reply->id); ?>">
                                                                                    <i class="fas fa-reply"></i> Reply
                                                                                </a>
                                                                                <div class="reply-form-container form-group dsn-up"
                                                                                    id="reply-form-<?php echo e($reply->id); ?>"
                                                                                    style="display:none;">
                                                                                    <form class="reply-form"
                                                                                        action="<?php echo e(route('blog.comments.replies.store', $comment->id)); ?>"
                                                                                        method="POST">
                                                                                        <?php echo csrf_field(); ?>
                                                                                        <div class="entry-box">
                                                                                            <input type="text"
                                                                                                name="name"
                                                                                                placeholder="Your Name"
                                                                                                required="required">
                                                                                            <textarea class="reply-textarea" name="reply" placeholder="Write your reply..." required="required"
                                                                                                data-error="reply is required."></textarea>
                                                                                        </div>
                                                                                        <div class="d-flex dsn-up">
                                                                                            <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                                                                                data-dsn="parallax">
                                                                                                <input type="submit"
                                                                                                    class="reply-submit-btn"
                                                                                                    value="Post Comment">
                                                                                                <div
                                                                                                    class="help-block with-errors">
                                                                                                </div>
                                                                                            </div>
                                                                                        </div>
                                                                                    </form>
                                                                                </div>
                                                                            </div>
                                                                        </div>
                                                                    </li>
                                                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                                            </ul>
                                                        <?php endif; ?>
                                                    </div>
                                                </div>
                                            </li>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </ol>
                                </div>

                                
                                

                                <div class="comments-form dsn-form ">
                                    <div class="comments-title">
                                        <h4 class="title-block line-shap line-shap-before"><span
                                                class="line-bg-right">Comments</span></h4>
                                    </div>

                                    <form class="form w-100" action="<?php echo e(route('blog.comments.store', $blog->id)); ?>"
                                        method="post">
                                        <?php echo csrf_field(); ?>
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
<?php $__env->stopSection(); ?>

<?php $__env->startSection('css'); ?>
    <style>
        .reply-form-container {
            margin-top: 10px;
        }

        .reply-textarea,
        .entry-box input[type="text"] {
            width: 100%;
            padding: 10px;
            border: 1px solid #ccc;
            border-radius: 4px;
            resize: vertical;
        }

        .reply-submit-btn {
            display: block;
            margin-top: 10px;
            padding: 10px 20px;
            color: white !important;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        .reply-submit-btn:hover {}
    </style>
<?php $__env->stopSection(); ?>

<?php $__env->startSection('js'); ?>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            // Function to toggle visibility of elements
            function toggleVisibility(element) {
                if (element.style.display === 'none' || element.style.display === '') {
                    element.style.display = 'block';
                } else {
                    element.style.display = 'none';
                }
            }

            // Get all reply links and bind click events
            const replyLinks = document.querySelectorAll('.comment-reply-link');
            console.log("replyLinks: ", replyLinks);

            replyLinks.forEach(link => {
                link.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = link.getAttribute('data-target');
                    console.log("targetId: ", targetId);
                    const replyForm = document.querySelector(targetId);
                    console.log("replyForm: ", replyForm);
                    if (replyForm) {
                        toggleVisibility(replyForm);
                    }
                });
            });

            // Get all toggle replies buttons and bind click events
            const toggleButtons = document.querySelectorAll('.toggle-replies-btn');
            toggleButtons.forEach(button => {
                button.addEventListener('click', function(event) {
                    event.preventDefault();
                    const targetId = button.getAttribute('data-target');
                    const repliesList = document.querySelector(targetId);
                    if (repliesList) {
                        toggleVisibility(repliesList);
                        button.textContent = repliesList.style.display === 'none' ? 'View Replies' :
                            'Hide Replies';
                    }
                });
            });

            const loadMoreButton = document.getElementById('load-more-comments');

            if (loadMoreButton) {
                loadMoreButton.addEventListener('click', function() {
                    const nextPageUrl = this.getAttribute('data-next-page');

                    if (nextPageUrl) {
                        fetch(nextPageUrl)
                            .then(response => response.text())
                            .then(data => {
                                const parser = new DOMParser();
                                const newComments = parser.parseFromString(data, 'text/html')
                                    .querySelector('.comment-list').innerHTML;
                                const newButton = parser.parseFromString(data, 'text/html')
                                    .getElementById('load-more-comments');

                                document.querySelector('.comment-list').innerHTML += newComments;

                                if (newButton) {
                                    loadMoreButton.setAttribute('data-next-page', newButton
                                        .getAttribute('data-next-page'));
                                } else {
                                    loadMoreButton.remove();
                                }
                            })
                            .catch(error => console.log(error));
                    }
                });
            }
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/blog/view-blog.blade.php ENDPATH**/ ?>