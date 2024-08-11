
<?php $__env->startSection('title', 'Blog'); ?>

<?php
    use Illuminate\Support\Str;
?>

<?php $__env->startSection('content'); ?>
    
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
        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <article class="blog-item p-relative pt-50 pb-50 border-bottom">
                <div class="blog-item-inner p-relative">
                    <div class="left-box">
                        <a href="<?php echo e(route('blog.show', $blog->id)); ?>" class="effect-ajax word-wrap" rel="bookmark">
                            <h4 class="title-block"><?php echo e($blog->title); ?></h4>
                        </a>
                        <div class="link mt-15">
                            <span class="font-caps heading-color"><?php echo e($blog->created_at->format('M d, Y')); ?></span>
                        </div>
                    </div>
                    <div class="right-box">
                        <p class="max-w570">
                            <?php echo e(Str::limit($blog->getTranslation('short_description', app()->getLocale()), 80)); ?>

                        </p>
                        <div class="metas has-separates fz-14 blog-category mt-5">
                            <span class="mt-10"><?php echo e($blog->category->name); ?></span>
                        </div>
                    </div>
                </div>
            </article>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        <div class="type-p-nav">
            <div class="dsn-pagination p-relative d-flex align-items-center">
                <?php echo e($blogs->links('front.pagination.custom-pagination')); ?>

            </div>
        </div>
    </div>
    <!-- ========== End Stories ========== -->


<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/blog/view-all-blogs.blade.php ENDPATH**/ ?>