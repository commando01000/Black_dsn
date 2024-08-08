


<?php $__env->startSection('title', 'Portfolio'); ?>


<?php $__env->startSection('content'); ?>
    <!-- ========== Portfolio ========== -->
    <div class="p-relative">
        <div class="p-relative dsn-style-cards dsn-align-center">
            <div class="root-posts">
                <div class="dsn-posts dsn-post-type-cards box-image-normal">
                    <div class="has-parallax-image dsn-swiper p-relative"
                        data-dsn-option='{"slidesPerView":1.5,"spaceBetween":60 , "mousewheel":true}'>
                        <div class="swiper-container">
                            <div class="swiper-wrapper v-dark-head">
                                <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <article
                                        class="dsn-item-post grid-item over-hidden p-relative box-hover-image swiper-slide">
                                        <div class="box-content d-flex">
                                            <a class='effect-ajax box-image-link bg-shadow' data-dsn-ajax='work'
                                                href="<?php echo e(route('design.show', $design->id)); ?>" title="<?php echo e($design->title); ?>">
                                                <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                    data-overlay="4">
                                                    <img class="cover-bg-img" src="<?php echo e(Storage::url($design->cover)); ?>"
                                                        alt="<?php echo e($design->title); ?>">
                                                </div>
                                            </a>
                                            <div class="post-content dsn-bg p-relative z-index-1 d-flex flex-column"
                                                data-swiper-parallax="100%" data-swiper-parallax-opacity="0">
                                                <div class="post-title-info">
                                                    <div class="post-meta max-w750">
                                                        <div
                                                            class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta">
                                                            <span data-separator="&"><?php echo e($design->category->name); ?></span>
                                                        </div>
                                                    </div>
                                                    <h2 class="post-title title">
                                                        <a class='effect-ajax' data-dsn-ajax='work'
                                                            href="<?php echo e(route('design.show', $design->id)); ?>">
                                                            <?php echo e($design->title); ?>

                                                        </a>
                                                    </h2>

                                                    <a class='effect-ajax dsn-post-link move-circle border-color-heading'
                                                        data-dsn-ajax='work' data-dsn='parallax'
                                                        href="<?php echo e(route('design.show', $design->id)); ?>">
                                                        <svg width="24" height="24"
                                                            xmlns="http://www.w3.org/2000/svg">
                                                            <path class="arrow-after"
                                                                d="M21.883 12l-7.527 6.235.644.765 9-7.521-9-7.479-.645.764 7.529 6.236h-21.884v1h21.883z">
                                                            </path>
                                                        </svg>
                                                    </a>
                                                </div>
                                            </div>
                                        </div>
                                    </article>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                        <div
                            class="dsn-swiper-paginate p-absolute dsn-nav-arrow d-flex p-relative w-100 h-100 mt-50 dsn-container justify-content-center dsn-icon-heading-color">
                            <div class="border-color-default swiper-prev background-section image-zoom move-circle dsn-nav-left"
                                data-dsn="parallax">
                                <div class="dsn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                                        <g>
                                            <polygon
                                                points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001">
                                            </polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                            <div class="border-color-default swiper-next background-section image-zoom move-circle dsn-nav-right"
                                data-dsn="parallax">
                                <div class="dsn-icon">
                                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 25 25">
                                        <g>
                                            <polygon
                                                points="24 12.001 2.914 12.001 8.208 6.706 7.501 5.999 1 12.501 7.5 19.001 8.207 18.294 2.914 13.001 24 13.001 24 12.001">
                                            </polygon>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- ========== End Portfolio ========== -->
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/portfolio/index.blade.php ENDPATH**/ ?>