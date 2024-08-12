
<?php $__env->startSection('title', 'About Us'); ?>

<?php $__env->startSection('content'); ?>
    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation header-normal">
        <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>

        <div class="entry-header p-relative over-hidden">

            <div id="hero_content"
                class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">

                            <div id="hero_title" class="mt-20">
                                <h1 class="title text-upper"><?php echo e(Utility::getsettings('about-us.title')); ?></h1>
                            </div>
                            <p class="mt-20 max-w570">
                                <?php echo e(Utility::getsettings('about-us.description')); ?>

                            </p>
                            <div class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex">
                                <a class='dsn-btn dsn-border border-color-default  background-section effect-ajax has-icon-left'
                                    data-dsn-text='Contact Us' href='<?php echo e(route('contact')); ?>'>
                                    <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                                    </span>
                                    <span class="title-btn p-relative  z-index-1 ">Get Started Now</span>
                                </a>
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
    <!-- ========== End Header Normal ========== -->


    <div id="page_wrapper" class="wrapper">

        <!-- ========== About Section ========== -->

        <div class="box-under-bottom-img mb-section">
            <div class="img-box-parallax before-z-index dsn-animate dsn-effect-down h-v-80" data-dsn-triggerhook="bottom"
                data-dsn-grid="move-up" data-overlay="0">
                <img class="has-bigger-scale cover-bg-img has-direction"
                    src= "<?php echo e(asset('front_asset/assets/img/about-5.jpg')); ?>" alt=''>
            </div>
            <div class="p-relative content container background-theme box-padding border-rdu text-center">
                <h3 class="title-block-lg text-upper"> <?php echo e(Utility::getsettings('about-us.content.title')); ?> </h3>
                <p class="dsn-heading-title mt-20 max-w750">
                    <?php echo e(Utility::getsettings('about-us.content.description')); ?>

                </p>
            </div>
        </div>
        <!-- ========== End About Section ========== -->


        <!-- ========== Service ========== -->
        <div class="container section-margin">
            <div class="section-title d-flex justify-content-center  mb-70">
                <div class="sub-section-title text-center">
                    <p class="description d-inline-block  circle-before mb-10">advantages</p>
                    <h2 class="title-h2 dsn-heading-title p-relative title-block-lg d-block heading-color">
                        Let’s Check Our Services
                    </h2>
                </div>
            </div>
            <div class="list-with-number icon-top dsn-icon-theme-color text-center">
                <div class="dsn-service d-grid grid-lg-3 grid-sm-2" data-dsn-iconsize="80px">
                    <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="dsn-up service-item p-relative grid-item style-box">
                            <div class="service-item-inner border-style number-item h-100">
                                <div class="dsn-icon">
                                    <img style="width: 80px; height:80px;" src="<?php echo e(Storage::url($service->cover)); ?>"
                                        alt="<?php echo e($service->title); ?>">
                                </div>
                                <div class="service-content p-relative">
                                    <h4 class="service_title title-block"><?php echo e($service->title); ?></h4>
                                    <div class="service_description mt-10 max-w570 dsn-auto">
                                        <p><?php echo e($service->short_description); ?></p>
                                    </div>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>
                <div style="border-top: 0px !important" class="type-p-nav">
                    <div class="dsn-pagination p-relative d-flex align-items-center">
                        <?php echo e($services->links('front.pagination.custom-pagination')); ?>

                    </div>
                </div>

            </div>
        </div>
        <!-- ========== End Service ========== -->


        <!-- ========== Team ========== -->
        <div class="dsn-container dsn-right-container over-hidden background-section section-padding">
            <div class="section-title d-flex mb-70">
                <div class="sub-section-title">
                    <p class="description d-inline-block circle-before mb-10">Our Team</p>
                    <h2 class="title-h2 dsn-heading-title p-relative title-block-lg d-block heading-color">
                        The best team ever!
                    </h2>
                </div>
            </div>
            <div class="d-grid grid-md-3 grid-sm-2 dsn-team">
                <?php $__currentLoopData = $testimonials; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $testimonial): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="team-item p-relative grid-item box-hover-image">
                        <div class="team-item-inner background-main">
                            <div class="avatar box-img" data-overlay="4">
                                <img class="cover-bg-img" src="<?php echo e(Storage::url($testimonial->image)); ?>" alt="">
                            </div>
                            <div class="team-content border-before text-center">
                                <h4 class="text-name sm-title-block"><?php echo e($testimonial->title); ?></h4>
                                <span class="text-position"><?php echo e($testimonial->position); ?></span>
                                <ul class="team-socials dsn-socials box-social">
                                    <li>
                                        <a href="#0" target="_blank" rel="nofollow">
                                            <i class="fab fa-facebook-f"></i>
                                            <span>Facebook</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" target="_blank" rel="nofollow">
                                            <i class="fab fa-instagram"></i>
                                            <span>Instagram</span>
                                        </a>
                                    </li>
                                    <li>
                                        <a href="#0" target="_blank" rel="nofollow">
                                            <i class="fab fa-linkedin-in"></i>
                                            <span>LinkedIn</span>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            </div>
        </div>

        <!-- ========== End Team ========== -->


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
                                    viewbox="0 0 509 396.83" enable-background="new 0 0 509 396.83" xml:space="preserve">
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
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">

                                            </svg>
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination"></div>
                                <div class="swiper-next">
                                    <div class="next-container">
                                        <div class="container-inner">
                                            <div class="triangle"></div>
                                            <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
                                                <g class="circle-wrap" fill="none" stroke-width="1"
                                                    stroke-linejoin="round" stroke-miterlimit="10">
                                                    <circle cx="12" cy="12" r="10.5"></circle>
                                                </g>
                                            </svg>
                                            <svg class="arrow" xmlns="http://www.w3.org/2000/svg" viewbox="0 0 24 24">
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

        <!-- ========== Brand Slider ========== -->
        <div class="p-relative container section-margin">
            <div class="section-title d-flex justify-content-center mb-70">
                <div class="sub-section-title text-center">
                    <p class="description d-inline-block circle-before mb-10">Our Partners</p>
                    <h2 class="title-h2 dsn-heading-title p-relative title-block-lg d-block heading-color">
                        Partners of Success
                    </h2>
                </div>
            </div>
            <div class="dsn-style-classic dsn-container dsn-center-container">
                <div class="root-posts">
                    <div class="dsn-posts dsn-post-type-classic h-350">
                        <div class="has-parallax-image dsn-swiper p-relative"
                            data-dsn-option='{"slidesPerView":2.5,"spaceBetween":30,"centeredSlides":false, "autoplay": {"delay": 5000, "disableOnInteraction": false}}'>
                            <div class="swiper-container">
                                <div class="swiper-wrapper">
                                    <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                        <div
                                            class="dsn-item-post grid-item over-hidden p-relative box-hover-image swiper-slide">
                                            <div class="box-content d-flex">
                                                <div class="brand-item-inner over-hidden p-relative">
                                                    <img style="max-width: 400px;max-height: 200px;"
                                                        class="object-fit-cover" src="<?php echo e(Storage::url($brand->cover)); ?>"
                                                        alt="<?php echo e($brand->title); ?>">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                                </div>
                                <div
                                    class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between">
                                    <div class="swiper-prev">
                                        <div class="prev-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
                                                    <g class="circle-wrap" fill="none" stroke-width="1"
                                                        stroke-linejoin="round" stroke-miterlimit="10">
                                                        <circle cx="12" cy="12" r="10.5"></circle>
                                                    </g>
                                                </svg>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="swiper-pagination mr-30 ml-30 heading-color" data-dsn-type="progressbar">
                                    </div>
                                    <div class="swiper-next">
                                        <div class="next-container">
                                            <div class="container-inner">
                                                <div class="triangle"></div>
                                                <svg class="circle" xmlns="http://www.w3.org/2000/svg"
                                                    viewBox="0 0 24 24">
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
        <!-- ========== End Brand Slider ========== -->

    </div>

<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/about-us/index.blade.php ENDPATH**/ ?>