
<?php $__env->startSection('title', 'Services'); ?>
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
                            <p class="dsn-heading-title d-inline-block circle-before">OUR SERVICES </p>
                            <div id="hero_title" class="mt-10">
                                <h1 class="title text-upper"> <?php echo e(Utility::getsettings('our-services.title')); ?>

                                </h1>
                            </div>
                            <p class="mt-20 max-w570">
                                <?php echo e(Utility::getsettings('our-services.description')); ?>

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
        <div class="box-under-img ">
            <div class="img-box-parallax before-z-index dsn-animate dsn-effect-down " data-dsn-triggerhook="bottom"
                data-dsn-grid="move-up" data-overlay="0">
                <img class="has-bigger-scale cover-bg-img has-direction"
                    src='<?php echo e(asset('front_asset/assets/img/portfolio/project6/2.gif')); ?>' alt=''>
            </div>
            <div class="content  section-padding h-100 dsn-container d-flex align-items-center">
                <div class="background-main box-padding">
                    <h3 class="title-h2 body-font text-upper">
                        Let’s Check <b>Our Services</b>
                    </h3>
                    <ul class="d-grid grid-sm-2 mt-30 dsn-list">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <li class="list-item grid-item d-flex align-items-center">
                                <span class="dsn-icon mr-15"><i class="far fa-circle" aria-hidden="true"></i></span>
                                <p class="dsn-heading-title  "><?php echo e($category->name); ?></p>
                            </li>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </ul>
                    <div class="icon-left dsn-icon-theme-color mt-30">
                        <div class="dsn-service  icon-left" data-dsn-iconsize="60px">

                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100 border-style p-20 border-rdu">
                                    <div class="dsn-icon">
                                        <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"
                                            id="Layer_1" x="0px" y="0px" width="50px" height="50px" viewbox="0 0 50 50"
                                            xml:space="preserve">
                                            <g>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M25.515,27.051c-0.371-0.159-0.756-0.298-1.117-0.483  c-6.626-3.398-13.254-6.794-19.865-10.221c-0.416-0.215-1.031-0.76-0.972-1.019c0.102-0.446,0.593-0.919,1.04-1.152  c6.651-3.461,13.312-6.904,20.007-10.279c0.516-0.259,1.414-0.177,1.955,0.099c3.589,1.828,7.11,3.788,10.689,5.634  c3.028,1.562,6.114,3.01,9.149,4.558c0.454,0.232,0.77,0.738,1.149,1.116c-0.358,0.331-0.665,0.76-1.082,0.977  c-6.629,3.457-13.272,6.887-19.914,10.319C26.234,26.765,25.895,26.888,25.515,27.051z M44.76,15.372  c-0.513-0.362-0.775-0.596-1.078-0.752c-5.791-2.994-11.577-5.999-17.402-8.927c-0.479-0.24-1.32-0.129-1.835,0.131  c-5.546,2.792-11.063,5.643-16.583,8.488c-0.508,0.262-0.983,0.59-1.696,1.021c6.433,3.309,12.539,6.471,18.68,9.562  c0.432,0.217,1.206,0.052,1.695-0.189c2.922-1.443,5.806-2.963,8.705-4.454C38.347,18.659,41.449,17.07,44.76,15.372z">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    style="--dsn-color-icon : var(--heading-color)"
                                                    d="M6.153,25.292c1.245,0.667,2.225,1.209,3.22,1.722  c5.014,2.583,10.02,5.182,15.065,7.701c0.544,0.272,1.446,0.323,1.973,0.059c5.826-2.926,11.61-5.933,17.403-8.924  c0.257-0.133,0.479-0.329,0.912-0.632c-1.152-0.605-2.191-1.057-3.114-1.681c-0.401-0.271-0.563-0.897-0.833-1.363  c0.501-0.038,1.084-0.26,1.489-0.081c1.456,0.645,2.868,1.395,4.266,2.163c1.333,0.732,1.365,1.37,0.078,2.036  c-6.755,3.495-13.519,6.975-20.308,10.403c-0.455,0.229-1.24,0.185-1.71-0.053c-6.743-3.407-13.462-6.859-20.174-10.326  c-1.297-0.67-1.284-1.349,0.015-2.057c1.454-0.792,2.922-1.563,4.431-2.241c0.35-0.157,0.885,0.097,1.334,0.162  c-0.185,0.413-0.256,0.999-0.575,1.206C8.602,24.052,7.487,24.577,6.153,25.292z">
                                                </path>
                                                <path fill-rule="evenodd" clip-rule="evenodd"
                                                    d="M44.767,35.25c-1.224-0.643-2.298-1.123-3.27-1.759  c-0.362-0.237-0.485-0.838-0.718-1.272c0.493-0.05,1.072-0.29,1.465-0.115c1.51,0.674,2.977,1.452,4.43,2.247  c1.189,0.651,1.184,1.312-0.063,1.957c-6.71,3.476-13.429,6.936-20.176,10.341c-0.502,0.253-1.354,0.251-1.857-0.002  c-6.748-3.402-13.468-6.859-20.181-10.33c-1.246-0.645-1.257-1.307-0.06-1.968c1.496-0.824,3.012-1.618,4.566-2.322  c0.339-0.154,0.877,0.129,1.323,0.211c-0.203,0.407-0.299,0.974-0.627,1.189c-0.968,0.637-2.028,1.135-3.331,1.838  c0.666,0.42,1.023,0.683,1.412,0.884c5.565,2.872,11.125,5.757,16.72,8.57c0.548,0.275,1.453,0.354,1.977,0.091  c5.83-2.921,11.619-5.925,17.416-8.912C44.055,35.763,44.287,35.572,44.767,35.25z">
                                                </path>
                                            </g>
                                        </svg>
                                    </div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title title-block">Best Practices from Industry Experts </h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p>
                                                We’ve designed a culture that allows our stewards to assimilate with our
                                                clients and bring.
                                            </p>
                                        </div>
                                    </div>
                                </div>
                            </div>


                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- ========== End About Section ========== -->

        <!-- ========== Info Service ========== -->
        
        <!-- ========== End Info Service ========== -->

        <!-- ==========  According ========== -->
        
        <!-- ========== End According ========== -->


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
            </div>

            <div class="list-with-number dsn-swiper icon-top dsn-container dsn-icon-theme-color"
                data-dsn-option='{"slidesPerView":2,"spaceBetween":5,"centeredSlides":false,"autoplay":{"delay":5000,"disableOnInteraction":false},"loop":false}'>
                <div class="dsn-service swiper-container">
                    <div class="swiper-wrapper">
                        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            <?php if($category): ?>
                                <div style="min-height: 400px; max-height: 400px !important" class="swiper-slide h-100">
                                    <div style="min-height: 400px; max-height: 400px !important"
                                        class="dsn-up service-item p-relative style-box">
                                        <div style="min-height: 400px; max-height: 400px !important"
                                            class="service-item-inner border-style number-item h-100">
                                            <div class="dsn-icon">
                                                <img style="width: 80px; height:80px;"
                                                    src="<?php echo e(Storage::url($category->cover)); ?>" alt="<?php echo e($category->name); ?>">
                                            </div>
                                            <div class="service-content p-relative">
                                                <h4 class="service_title title-block border-bottom pb-20 mb-20">
                                                    <?php echo e($category->name); ?></h4>
                                                <div class="service_description mt-20 max-w570 dsn-auto">
                                                    <p><?php echo e($category->description); ?></p>
                                                </div>
                                                <div class="d-flex mt-20 dsn-def-btn dsn-hover-icon">
                                                    <a class='effect-ajax dsn-btn dsn-border border-color-default background-section has-icon-right'
                                                        href='#'>
                                                        <span class="title-btn p-relative z-index-1 heading-color">LEARN
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
                                </div>
                            <?php endif; ?>
                        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                    </div>

                    <!-- Swiper Pagination and Navigation -->
                    <div
                        class="dsn-swiper-paginate d-flex p-relative w-100 h-100 mt-50 align-items-center dsn-container justify-content-between">
                        <div class="swiper-prev">
                            <div class="prev-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                                            stroke-miterlimit="10">
                                            <circle cx="12" cy="12" r="10.5"></circle>
                                        </g>
                                    </svg>
                                </div>
                            </div>
                        </div>
                        <div class="swiper-pagination mr-30 ml-30 heading-color" data-dsn-type="progressbar"></div>
                        <div class="swiper-next">
                            <div class="next-container">
                                <div class="container-inner">
                                    <div class="triangle"></div>
                                    <svg class="circle" xmlns="http://www.w3.org/2000/svg" width="24" height="24"
                                        viewBox="0 0 24 24">
                                        <g class="circle-wrap" fill="none" stroke-width="1" stroke-linejoin="round"
                                            stroke-miterlimit="10">
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
        <!-- ========== End Service ========== -->




        <!-- ========== Team ========== -->
        
        <!-- ========== End Team ========== -->

        <!-- ========== Brand ========== -->
        <div class="dsn-brand over-hidden mt-80 mb-80">
            <div class="dsn-grid-layout dsn-grid section-image section-move-image align-items-center use-horizontal-scroll-image"
                data-dsn-option='{"start":"100%","end":"0%","pin":false}'>

                <?php $__currentLoopData = $brands; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $brand): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    <div class="grid-item">
                        <div class="image-item">
                            <img class="cover-bg-img" src="<?php echo e(Storage::url($brand->cover)); ?>" alt="<?php echo e($brand->title); ?>">
                        </div>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>

            </div>
        </div>
        <!-- ========== End Brand ========== -->



        <!-- ========== testimonials ========== -->
        <div class="p-relative section-padding background-section ">

            <div class="container">
                <div class="section-title mb-70">
                    <h2 class="title-h2 body-font text-upper">
                        Relationships <b>based on trust.</b>
                    </h2>
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
                                            <div class="swiper-slide testimonial-inner-item background-main">
                                                <div class="avatar box-img dsn-auto">
                                                    <img src="<?php echo e(Storage::url($testimonial->image)); ?>"
                                                        class="cover-bg-img" alt="<?php echo e($testimonial->title); ?>">
                                                </div>
                                                <div class="testimonial-item">
                                                    <div class="testimonial-content mb-25">
                                                        <div class="quote">
                                                            <p class="max-w750 testimonial-content p-large justified-text">
                                                                <?php echo e($testimonial->description); ?>

                                                            </p>
                                                        </div>
                                                    </div>
                                                    <div class="content-inner border-top">
                                                        <div class="d-flex align-items-center ">
                                                            <div class="avatar box-img dsn-auto">
                                                                <img src="<?php echo e(Storage::url($testimonial->image)); ?>"
                                                                    class="cover-bg-img" alt="<?php echo e($testimonial->title); ?>">
                                                            </div>
                                                            <div class="label box-text">
                                                                <h4 class="testimonial-name sm-title-block">
                                                                    <?php echo e($testimonial->title); ?></h4>
                                                                <h5 class="testimonial-position">
                                                                    <?php echo e($testimonial->position); ?></h5>
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
                                class="dsn-swiper-paginate  d-flex p-relative w-100 h-100 mt-30 align-items-center container justify-content-between">
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
                                        </div>
                                    </div>
                                </div>
                                <div class="swiper-pagination  mr-30 ml-30 heading-color" data-dsn-type="bullets"></div>
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
        <!-- ========== End testimonials ========== -->

    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/services/index.blade.php ENDPATH**/ ?>