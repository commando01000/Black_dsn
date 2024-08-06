


<?php $__env->startSection('content'); ?>
    <div id="dsn-scrollbar">
        <!-- ========== Slider Parallax ========== -->
        <header class="v-dark-head dsn-section-padding dsn-header-animation">
            <div class="main-slider v-dark-head-mobile has-horizontal active-nav-slider dsn-webgl has-paginate"
                data-dsn-webgl='{"displacement" : "assets/img/displacement/8.jpg"}'
                data-dsn-option='{"direction":"horizontal","allowTouchMove":true,"watchSlidesProgress":true,"grabCursor":true,"mousewheel":false}'>

                <div class="content-slider slide-inner h-100 over-hidden">
                    <div class="bg-container p-absolute dsn-hero-parallax-img w-100 h-100 z-index-1 dsn-hero-parallax-img">
                        <div class="swiper-container h-100">
                            <div class="swiper-wrapper">
                                <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="slide-item swiper-slide over-hidden">
                                        <div class="image-bg cover-bg w-100 h-100 before-z-index" data-overlay="4">
                                            <img class="cover-bg-img dsn-swiper-parallax-transform"
                                                src="<?php echo e(Storage::url($design->cover)); ?>" alt="<?php echo e($design->title); ?>"
                                                data-dsn-position="50% 50%">
                                        </div>
                                        <div class="slide-content p-absolute">
                                            <div
                                                class="p-relative head-meta swiper-animate-head d-flex justify-content-between mb-20">
                                                <div class="circle-before metas mb-10">
                                                    <span><?php echo e($design->category->name); ?></span>
                                                </div>
                                            </div>
                                            <h2 class="title has-box-mod p-relative">
                                                <a class='effect-ajax' data-dsn-ajax='slider' data-dsn-split='chars'
                                                    href='<?php echo e(url("project/{$design->id}")); ?>'>
                                                    <?php echo e($design->title); ?>

                                                </a>
                                            </h2>
                                            <p class="description swiper-animate-head max-w570 mt-20">
                                                <?php echo e($design->description); ?>

                                            </p>
                                            <div class="d-flex mt-20 dsn-def-btn dsn-border-style">
                                                <a class='mr-15 dsn-btn dsn-border border-color-default background-main has-icon-left'
                                                    data-dsn-ajax='slider' data-dsn='parallax'
                                                    href='<?php echo e(url("project/{$design->id}")); ?>'>
                                                    <span
                                                        class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                                        <i class="fas fa-angle-right"></i>
                                                    </span>
                                                    <span class="title-btn p-relative z-index-1 heading-color">
                                                        VIEW CASE
                                                    </span>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                    <div class="dsn-container d-flex align-items-end dsn-slider-content dsn-hero-parallax-title"></div>
                </div>

                <div class="dsn-swiper-paginate">
                    <div class="swiper-pagination dsn-swiper-circle mr-30 ml-30 heading-color"></div>
                </div>

                <div class="control-nav w-100 d-flex dsn-container align-items-center justify-content-between">
                    <div class="prev-paginate dsn-paginate-arrow box-shadow"></div>

                    <div class="dsn-pagination p-relative d-flex align-items-end">
                        <span class="slider-current-index h2">01</span>
                        <span class="sm-title-block">/ </span><span class="total sm-title-block">
                            <?php echo e($designs->count()); ?></span>
                    </div>

                    <div class="next-paginate dsn-paginate-arrow box-shadow"></div>
                </div>
            </div>
        </header>
        <!-- ========== End Slider Parallax ========== -->



        <!-- ========== Service Icon Left ========== -->
        <div id="page_wrapper" class="wrapper">
            <div class="container icon-left pt-30 pb-30">
                <div class="d-grid grid-md-3 grid-sm-2 dsn-service" data-dsn-iconsize="60px">
                    <?php $__currentLoopData = $statistics; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $stat): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="service-item p-relative grid-item<?php echo e($loop->index > 0 ? ' border-left' : ''); ?>">
                            <div class="service-item-inner align-items-center number-item h-100">
                                <div class="dsn-icon">
                                    <img style="width: 50px; height: 50px" src="<?php echo e(Storage::url($stat->cover)); ?>"
                                        alt="<?php echo e($stat->title); ?>">
                                </div>
                                <div class="service-content p-relative">
                                    <h4 class="service_title sm-title-block text-upper"><?php echo e($stat->title); ?></h4>
                                    <div class="service_description mt-10 max-w570 dsn-auto">
                                        <?php echo e($stat->description); ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
            </div>
            <!-- ========== End Service Icon Left ========== -->


            <!-- ========== About Section One ========== -->
            <section class="about-section about-one p-relative section-padding background-section">
                <div class="p-relative container">
                    <div class="bg-mask background-main w-70 h-55 v-middle"></div>
                    <div class="d-grid grid-md-2">
                        <div class="box-info">
                            <h2 class="title">
                                <span class="letter-stroke d-block"
                                    data-dsn-animation='{"from":{"paddingLeft":"10%"},"to":{"paddingLeft":"20%"},"responsive":["tablet","desktop"]}'>
                                    WE ARE
                                </span>
                                <span>BLACK DSN</span>
                                <span class="text-right w-100">AGENCY</span>
                            </h2>
                            <div class="d-grid grid-half-1 align-items-center mt-10">
                                <div class="dsn-def-btn dsn-hover-icon ">
                                    <a class="dsn-btn background-main effect-ajax has-icon-left"
                                        href="https://dsngrid.com/blackdsn/about-us/" data-dsn-text="About Us"
                                        data-dsn="parallax">
                                        <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                            <i class="fas fa-angle-right"></i>
                                        </span>
                                        <span class="title-btn p-relative  z-index-1 heading-color">ABOUT US</span>
                                    </a>
                                </div>
                                <div class="p-large text-right">
                                    <p class="max-w350">
                                        We build and activate brands through cultural insight, strategic vision, and the
                                        power
                                        of emotion across every element of its expression.
                                    </p>
                                </div>
                            </div>


                        </div>
                        <div class="box-img">
                            <img decoding="async" class="cover-bg-img"
                                src= "<?php echo e(asset('front_asset/assets/img/about-1.jpg')); ?>" title="" alt="">
                        </div>
                    </div>
                    <div class="p-relative box-img-bottom hv-50">
                        <img class="cover-bg-img" decoding="async" src="<?php echo e(asset('front_asset/assets/img/about-2.jpeg')); ?>"
                            title="" alt="">
                    </div>
                </div>


            </section>
            <!-- ========== End About Section One ========== -->

            <!-- ========== Service ========== -->
            <div class="container section-margin">
                <div class="section-title mb-70 d-grid grid-md-2 ">
                    <div class=" d-flex">
                        <div class="sub-section-title ">
                            <p class="description d-inline-block p-relative circle-before mb-10">
                                <span>advantages</span>
                            </p>
                            <span class="title-h2 title-block-lg d-block heading-color">
                                <span>Let’s Check <b>Our Services</b></span>
                            </span>
                        </div>
                    </div>
                    <div class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end">
                        <a class="dsn-btn dsn-border border-color-default  background-section effect-ajax effect-ajax  move-circle has-icon-left"
                            href="<?php echo e(route('services')); ?>" data-dsn-text="Service" data-dsn="parallax">
                            <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"><i
                                    class="fas fa-angle-right"></i></span> <span
                                class="title-btn p-relative  z-index-1 heading-color">VIEW ALL SERVICES</span> </a>
                    </div>
                </div>
                <div class="list-with-number icon-top dsn-icon-theme-color">
                    <div class="dsn-service d-grid grid-lg-3 grid-sm-2 dsn-masonry-grid dsn-masonry-grid-2 dsn-isotope "
                        data-dsn-iconsize="80px">

                        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div class="dsn-up service-item p-relative grid-item style-box">
                                <div class="service-item-inner border-style number-item h-100">
                                    <div class="dsn-icon">
                                        <img style="width: 80px; height:80px;" src="<?php echo e(Storage::url($service->cover)); ?>"
                                            alt="">
                                    </div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  title-block border-bottom pb-20 mb-20">
                                            <?php echo e($service->title); ?></h4>
                                        <div class="service_description mt-20 max-w570 dsn-auto">
                                            <p>
                                                <?php echo e($service->short_description); ?>

                                            </p>
                                        </div>
                                        <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                            <a class='effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-right'
                                                href='service.html'>
                                                <span class="title-btn p-relative  z-index-1 heading-color">LEARN
                                                    MORE</span>
                                                <span
                                                    class="dsn-icon dsn-bg-before btn-icon-right heading-color z-index-1">
                                                    <i class="fas fa-angle-right"></i>
                                                </span>
                                            </a>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>
                </div>

            </div>
            <!-- ========== End Service ========== -->

            <!-- ========== About Section One ========== -->
            <div class="container  section-margin">
                <div class="d-grid grid-lg-2 d-grid-no-space">
                    <div class="left-box-image mb-section">
                        <div class="box-img w-100"
                            data-dsn-animation='{"to":{"y":"120px"},"option":{"scrub":"0","start":"80%","end":"30%"},"responsive":["desktop"]}'>
                            <div class="img-box-parallax h-v-80 before-z-index w-100" data-overlay="1">
                                <img class="cover-bg-img" src= " <?php echo e(Storage::url($about->cover)); ?> " alt="">
                            </div>
                        </div>
                    </div>
                    <div class="box-info background-section p-80 mt-section">
                        <div class="section-title d-flex">
                            <div class="sub-section-title">
                                <p class="description d-inline-block p-relative  circle-before  mb-10">
                                    <span><?php echo e($about->title); ?></span>
                                </p>
                                <span
                                    class="title-h2 dsn-heading-title p-relative title-block-lg d-block    heading-color">
                                    <span>How is your <br>visual <b>identity?</b></span>
                                </span>
                            </div>
                        </div>
                        <p class="mt-20">
                            <?php echo e($about->description); ?>

                        </p>
                        <ul class="d-grid dsn-list mt-20" data-dsn-gap="10px 15px">
                            <?php $__currentLoopData = $about->details; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $detail): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li class="list-item d-flex align-items-center background-main">
                                    <span class="dsn-icon mr-15"><i class="fas fa-check" aria-hidden="true"></i></span>
                                    <p class="dsn-heading-title heading-color "><?php echo e($detail->advantage); ?></p>
                                </li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                        <div class="dsn-def-btn dsn-icon-heading-color mt-20 d-flex">
                            <a class='dsn-btn dsn-border border-color-default background-main effect-ajax has-icon-left'
                                data-dsn-text='<?php echo e($about->title); ?>' href='<?php echo e(route('design.show', $about->id)); ?>'>
                                <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="title-btn p-relative  z-index-1 ">LEARN MORE</span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== End About Section One ========== -->


            <!-- ========== Portfolio ========== -->
            <div class="p-relative mt-section background-section section-padding">
                <div class="background-overlay bg-1"></div>
                <div class="container section-title mb-70 d-grid grid-md-2 ">
                    <div class=" d-flex">
                        <div class="sub-section-title ">
                            <p class="description d-inline-block p-relative circle-before mb-10">
                                <span>OUR WORK</span>
                            </p>
                            <span class="title-h2 title-block-lg d-block heading-color">
                                <span>Our latest <br><b>AWESOME DESIGNS </b></span>
                            </span>
                        </div>
                    </div>
                    <div class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end">
                        <a class="dsn-btn dsn-border border-color-default  background-main effect-ajax effect-ajax  move-circle has-icon-left"
                            href="work-col-3.html" data-dsn-text="Service" data-dsn="parallax"> <span
                                class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"><i
                                    class="fas fa-angle-right"></i></span> <span
                                class="title-btn p-relative  z-index-1 heading-color">VIEW ALL Work</span> </a>
                    </div>
                </div>
                <div class="p-relative dsn-style-classic dsn-container dsn-right-container">
                    <div class="root-posts">
                        <div class="dsn-posts dsn-post-type-classic h-350">
                            <div class="has-parallax-image dsn-swiper p-relative"
                                data-dsn-option='{"slidesPerView":2.5,"spaceBetween":30,"centeredSlides":false}'>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $designs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $design): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <article
                                                class="dsn-item-post grid-item over-hidden p-relative box-hover-image swiper-slide">
                                                <div class="box-content d-flex">
                                                    <a class='effect-ajax box-image-link bg-shadow' data-dsn-ajax='work'
                                                        href="#" title="<?php echo e($design->title); ?>">
                                                        <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                            data-overlay="4">
                                                            <img class="cover-bg-img"
                                                                src="<?php echo e(Storage::url($design->cover)); ?>"
                                                                alt="<?php echo e($design->title); ?>">
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="post-content dsn-bg p-relative z-index-1 d-flex flex-column">
                                                        <div class="post-title-info">
                                                            <div class="post-meta max-w750">
                                                                <div
                                                                    class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta">
                                                                    <span
                                                                        data-separator=" & "><?php echo e($design->category->name); ?></span>
                                                                </div>
                                                            </div>
                                                            <h2 class="post-title title-block">
                                                                <a class='effect-ajax' data-dsn-ajax='work'
                                                                    href="#">
                                                                    <?php echo e($design->title); ?>

                                                                </a>
                                                            </h2>
                                                        </div>

                                                        <div class="post-description-info">
                                                            <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                                                <a class='effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-left'
                                                                    data-dsn-ajax='work' href="#">
                                                                    <span
                                                                        class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                                                        <i class="fas fa-angle-right"></i>
                                                                    </span>
                                                                    <span
                                                                        class="title-btn p-relative  z-index-1 heading-color">
                                                                        View Case
                                                                    </span>
                                                                </a>
                                                            </div>
                                                        </div>

                                                    </div>
                                                </div>
                                            </article>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div
                                        class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between">
                                        <div class="swiper-prev">
                                            <div class="prev-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 24 24">
                                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <circle cx="12" cy="12" r="10.5"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination mr-30 ml-30 heading-color"
                                            data-dsn-type="progressbar"></div>
                                        <div class="swiper-next">
                                            <div class="next-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewbox="0 0 24 24">
                                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <circle cx="12" cy="12" r="10.5"></circle>
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
                </div>

            </div>
            <!-- ========== End Portfolio ========== -->


            <!-- ========== background Box Image ========== -->
            <div class="p-relative section-padding v-dark-head">

                <div class="container">
                    <h3 class="title-h2">
                        Need help with professional <br>photography? <b>Let's work together!</b>
                    </h3>
                    <p class="mt-30 max-w570">
                        In my work, I try to find the right balance between form and function. From technical drawings,
                        all
                        the way to the photographic renders, and the actual representations of my work as a designer, my
                        philosophy is that of simplicity.
                        <span class="mb-10 d-block"></span>
                        At the same time, my style is distinctly mine – uncluttered, with clean shapes and modern
                        space-saving solutions.
                    </p>
                    <div class="dsn-def-btn d-flex dsn-border-style dsn-icon-heading-color mt-30">
                        <a class='dsn-btn dsn-border border-color-default background-section  move-circle has-icon-left'
                            data-dsn-text='Contact Us' data-dsn='parallax' href='<?php echo e(route('contact')); ?>'>
                            <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                <i class="far fa-envelope-open"></i>
                            </span>
                            <span class="title-btn p-relative  z-index-1 ">CONTACT US</span>
                        </a>
                    </div>
                </div>
                <div class="dsn-bg-section p-absolute w-100 h-100 over-hidden top-0 left-0" style="z-index: -1;">
                    <div class="h-100 img-box-parallax before-z-index " data-dsn-grid="move-up" data-overlay="4">
                        <img src= "<?php echo e(asset('front_asset/assets/img/about-4.jpg')); ?>" class="cover-bg-img has-direction"
                            alt="">
                    </div>

                </div>
            </div>
            <!-- ========== End background Box Image ========== -->


            <!-- ========== testimonials ========== -->
            <div class="p-relative section-padding background-section ">
                <div class="background-overlay bg-1"></div>
                <div class="container">
                    <div class="section-title mb-70 d-grid grid-md-2">
                        <div class="d-flex">
                            <div class="sub-section-title">
                                <p class="description d-inline-block p-relative circle-before mb-10">
                                    <span>testimonials</span>
                                </p>
                                <span class="title-h2 title-block-lg d-block heading-color">
                                    What People <b>are <br>Saying</b>
                                </span>
                            </div>
                        </div>
                        <div class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end">
                            <a class='dsn-btn dsn-border border-color-default background-main effect-ajax move-circle has-icon-left'
                                data-dsn-text='Contact Us' data-dsn='parallax' href='<?php echo e(route('contact')); ?>'>
                                <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                    <i class="fas fa-angle-right"></i>
                                </span>
                                <span class="title-btn p-relative z-index-1 heading-color">Get Started Now</span>
                            </a>
                        </div>
                    </div>
                    <div class="elementor-widget-dsn_testimonial" data-widget_type="dsn_testimonial.default">
                        <div class="dsn-testimonials dsn-swiper p-relative has-parallax-image"
                            data-dsn-option='{"spaceBetween":30,"centeredSlides":false,"slidesPerView":2}'>

                            <div class="testimonials-content">
                                <div class="testimonial-inner">
                                    <svg version="1.1" xmlns="http://www.w3.org/2000/svg" x="0px" y="0px"
                                        viewbox="0 0 509 396.83" enable-background="new 0 0 509 396.83"
                                        xml:space="preserve">
                                        <g>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M105.098,396.83c-2.062,0-4.122,0-6.183,0 c0.123-48.731,0.116-97.466,0.493-146.195c0.062-7.844-3.65-8.881-10.09-8.843c-29.772,0.182-59.545,0.047-89.318,0.026 C0,161.382,0,80.947,0,0c81.742,0,163.484,0,245.227,0c0.023,83.874,0.496,167.752-0.071,251.624 c-0.436,64.131-47.354,121.936-109.503,136.974C125.404,391.076,115.279,394.073,105.098,396.83z M127.891,360.509 c6.063-1.545,10.049-2.226,13.799-3.568c42.174-15.098,74.277-58.896,74.735-104.55c0.718-71.273,0.187-142.558,0.454-213.837 c0.03-7.696-2.596-10.07-10.136-10.038c-55.961,0.236-111.927,0.287-167.887-0.042c-8.413-0.049-10.398,3.014-10.363,10.831 c0.254,54.408,0.317,108.815-0.047,163.22c-0.061,8.994,3.321,10.93,11.452,10.803c25.744-0.405,51.505,0.184,77.245-0.329 c8.78-0.174,10.986,2.931,10.911,11.301c-0.363,40.63-0.164,81.264-0.163,121.897C127.891,350.262,127.891,354.325,127.891,360.509 z">
                                            </path>
                                            <path fill-rule="evenodd" clip-rule="evenodd"
                                                d="M368.871,396.83c-2.061,0-4.122,0-6.184,0 c0.057-48.133-0.099-96.267,0.354-144.395c0.081-8.996-3.268-10.854-11.386-10.722c-26.047,0.42-52.108-0.083-78.152,0.299 c-7.577,0.108-10.083-2.194-10.053-9.942c0.294-77.357,0.262-154.713,0.322-232.07C345.353,0,426.929,0,509,0 c0,89.562,0,179.125,0,268.687c-1.256,3.464-2.793,6.854-3.73,10.401c-15.376,58.112-51.126,95.756-109.9,110.431 C386.48,391.735,377.7,394.382,368.871,396.83z M391.554,360.501c5.951-1.528,9.958-2.176,13.686-3.57 c43.103-16.135,74.464-59.44,74.864-105.611c0.616-70.931,0.138-141.869,0.404-212.803c0.03-7.722-2.58-10.037-10.111-10.005 c-55.963,0.24-111.926,0.285-167.889-0.036c-8.406-0.048-10.429,3.048-10.392,10.853c0.245,54.405,0.31,108.813-0.049,163.216 c-0.059,9.03,3.45,10.9,11.528,10.778c25.741-0.39,51.504,0.193,77.245-0.325c8.785-0.178,10.956,2.917,10.878,11.284 c-0.368,40.629-0.167,81.263-0.165,121.897C391.554,350.25,391.554,354.318,391.554,360.501z">
                                            </path>
                                        </g>
                                    </svg>
                                    <div class="swiper-container">
                                        <div class="swiper-wrapper">
                                            <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                                <div class="swiper-slide testimonial-inner-item border-style">
                                                    <div class="avatar box-img dsn-auto">
                                                        <img src='<?php echo e(Storage::url($testimonial['image'])); ?>'
                                                            class="cover-bg-img" alt='<?php echo e($testimonial['title']); ?>'>
                                                    </div>
                                                    <div class="testimonial-item">
                                                        <div class="testimonial-content mb-25">
                                                            <div class="quote">
                                                                <p class="max-w750 testimonial-content p-large">
                                                                    <?php echo e($testimonial['description']); ?>

                                                                </p>
                                                            </div>
                                                        </div>
                                                        <div class="content-inner border-top">
                                                            <div class="d-flex align-items-center">
                                                                <div class="avatar box-img dsn-auto">
                                                                    <img src='<?php echo e(Storage::url($testimonial['image'])); ?>'
                                                                        class="cover-bg-img"
                                                                        alt='<?php echo e($testimonial['title']); ?>'>
                                                                </div>
                                                                <div class="label box-text">
                                                                    <h4 class="testimonial-name sm-title-block">
                                                                        <?php echo e($testimonial['title']); ?></h4>
                                                                    <h5 class="testimonial-position">
                                                                        <?php echo e($testimonial['position']); ?></h5>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                        </div>
                                    </div>
                                </div>
                                <div
                                    class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-30 align-items-center container justify-content-between">
                                    <div class="swiper-prev">
                                        <div class="prev-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24">
                                                    <g class="circle-wrap" fill="none" stroke-width="1"
                                                        stroke-linejoin="round" stroke-miterlimit="10">
                                                        <circle cx="12" cy="12" r="10.5"></circle>
                                                    </g>
                                                </svg>
                                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24">

                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination"></div>
                                    <div class="swiper-next">
                                        <div class="next-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24">
                                                    <g class="circle-wrap" fill="none" stroke-width="1"
                                                        stroke-linejoin="round" stroke-miterlimit="10">
                                                        <circle cx="12" cy="12" r="10.5"></circle>
                                                    </g>
                                                </svg>
                                                <svg class="arrow" xmlns="http://www.w3.org/2000/svg"
                                                    viewbox="0 0 24 24">
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="dsn-testimonial-background dsn-swiper-parallax-img">
                                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                    <div class="dsn-item-testimonial swiper-slide p-relative">
                                        <div class="cover-bg-img cover-bg-v" data-swiper-parallax="50%"
                                            data-swiper-parallax-scale="1.2"
                                            data-dsn-bg="<?php echo e(Storage::url($testimonial['image'])); ?>"></div>
                                    </div>
                                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- ========== End testimonials ========== -->


            <!-- ========== Stories ========== -->
            <div class="p-relative section-margin">
                <div class="container section-title mb-70 d-grid grid-md-2 ">
                    <div class=" d-flex">
                        <div class="sub-section-title ">
                            <p class="description d-inline-block p-relative circle-before mb-10">
                                <span>Latest News </span>
                            </p>
                            <span class="title-h2 title-block-lg d-block heading-color">
                                <span>Latest and <b><br>greatest post</b></span>
                            </span>
                        </div>
                    </div>
                    <div class="dsn-def-btn dsn-icon-heading-color align-self-end justify-self-end">
                        <a class='dsn-btn dsn-border border-color-default  background-section effect-ajax effect-ajax  move-circle has-icon-left'
                            data-dsn-text='Our Stories' data-dsn='parallax' href='stories.html'> <span
                                class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1"><i
                                    class="fas fa-angle-right"></i></span> <span
                                class="title-btn p-relative  z-index-1 heading-color">VIEW ALL NEWS</span> </a>
                    </div>
                </div>
                <div class="p-relative dsn-style-classic dsn-under-img dsn-container dsn-right-container">
                    <div class="root-posts">
                        <div class="dsn-posts dsn-post-type-classic h-350">
                            <div class="has-parallax-image dsn-swiper p-relative"
                                data-dsn-option='{"slidesPerView":2.5,"spaceBetween":30,"centeredSlides":false}'>
                                <div class="swiper-container">
                                    <div class="swiper-wrapper">
                                        <?php $__currentLoopData = $blogs; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $blog): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                            <article
                                                class="dsn-item-post grid-item over-hidden p-relative box-hover-image v-dark-head background-section swiper-slide">
                                                <div class="box-content d-flex">
                                                    <a class='effect-ajax box-image-link bg-shadow'
                                                        data-dsn-text='<?php echo e($blog->title); ?>'
                                                        href='<?php echo e(url("blog/{$blog->id}")); ?>'>
                                                        <div class="box-image-bg before-z-index dsn-swiper-parallax-transform"
                                                            data-overlay="4">
                                                            <img src="<?php echo e(Storage::url($blog->images)); ?>"
                                                                class="cover-bg-img" alt="<?php echo e($blog->title); ?>">
                                                        </div>
                                                    </a>
                                                    <div
                                                        class="post-content dsn-bg p-relative z-index-1 d-flex flex-column">
                                                        <div class="post-title-info">
                                                            <div class="post-meta max-w750">
                                                                <div class="entry-date d-inline-block entry-meta mb-10">
                                                                    <?php echo e($blog->created_at->format('F d, Y')); ?>

                                                                </div>
                                                                <span class="mr-5 ml-5 separator-between"> ..</span>
                                                                <div
                                                                    class="p-relative d-inline-block dsn-category dsn-bg metas mb-10 entry-meta">
                                                                    <span
                                                                        data-separator=" & "><?php echo e($blog->category->name); ?></span>
                                                                </div>
                                                            </div>
                                                            <h2 class="post-title dsn-bg title-block">
                                                                <a class='effect-ajax'
                                                                    data-dsn-text='<?php echo e($blog->title); ?>'
                                                                    href='<?php echo e(url("blog/{$blog->id}")); ?>'>
                                                                    <?php echo e($blog->title); ?>

                                                                </a>
                                                            </h2>
                                                        </div>
                                                        <div class="post-description-info">
                                                            <p class="section_description mt-15 max-w570">
                                                                <?php echo e($blog->short_description); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                </div>
                                            </article>
                                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                    </div>
                                    <div
                                        class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between">
                                        <div class="swiper-prev">
                                            <div class="prev-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                        viewbox="0 0 24 24">
                                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <circle cx="12" cy="12" r="10.5"></circle>
                                                        </g>
                                                    </svg>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="swiper-pagination mr-30 ml-30 heading-color"
                                            data-dsn-type="progressbar"></div>
                                        <div class="swiper-next">
                                            <div class="next-container">
                                                <div class="container-inner">
                                                    <div class="triangle"></div>
                                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24"
                                                        height="24" viewbox="0 0 24 24">
                                                        <g class="circle-wrap" fill="none" stroke-width="1"
                                                            stroke-linejoin="round" stroke-miterlimit="10">
                                                            <circle cx="12" cy="12" r="10.5"></circle>
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
                </div>

            </div>
            <!-- ========== End Stories ========== -->


            <!-- ========== Brand ========== -->
            <div class="p-relative  background-section section-padding">

                <div class="container d-grid grid-half-1 align-items-center">
                    <div class="experience">
                        <span class="exp-number dsn-animate-number">
                            <span class="animate-number">25</span>
                        </span>
                        <h5 class="title-block mt-30">
                            YEARS OF <br>DIGITAL EXPERIENCE
                        </h5>
                    </div>
                    <div class="d-grid grid-sm-4 d-grid-no-space dsn-brand">
                        <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <div
                                class="brand-item border-bottom <?php echo e(!$loop->last && $loop->index % 4 != 3 ? 'border-right' : ''); ?>">
                                <div class="brand-item-inner over-hidden p-relative">
                                    <img src="<?php echo e(Storage::url($brand->cover)); ?>" alt="<?php echo e($brand->name); ?>">
                                </div>
                            </div>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                </div>
            </div>
            <!-- ========== End Brand ========== -->
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/home/index.blade.php ENDPATH**/ ?>