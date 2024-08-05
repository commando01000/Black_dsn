
<?php $__env->startSection('title', 'Contact Us'); ?>
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
    <!-- ========== Header Normal========== -->
    <header id="dsn_header" class="dsn-header-animation header-normal v-dark-head">
        <div class="background-overlay bg-pattern p-absolute left-0 top-0 w-100 h-100"></div>

        <div class="entry-header p-relative over-hidden">
            <div id="hero_content"
                class="d-flex p-relative h-100 dsn-hero-parallax-title container align-items-center pb-section ">
                <div class="content p-relative ">
                    <div class="intro-project w-100">
                        <div class="intro-title ">

                            <div id="hero_title" class="mt-20">
                                <h1 class="title text-upper">
                                    Look around you<br> everything is changing.
                                </h1>
                            </div>
                            <p class="mt-20 max-w570">
                                What if the time has come for you to change? Starting a collaboration is easy! Order a
                                free consultation or call back. We are always in touch and happy to cooperate with you
                            </p>
                            <div class="dsn-def-btn dsn-hover-icon dsn-icon-heading-color mt-20 d-flex">
                                <a class='dsn-btn dsn-border border-color-default  background-section effect-ajax has-icon-left'
                                    data-dsn-text='OUR PORTFOLIO' href='work-card-1.html'>
                                    <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                                    </span>
                                    <span class="title-btn p-relative  z-index-1 ">See More Works</span>
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
        <!-- ========== Contact  ========== -->
        <div class="p-relative contact-form over-hidden section-padding">
            <div class="dsn-mask p-absolute w-70 left-0 top-0 h-100 background-section"></div>
            <div class="p-relative container d-grid grid-1-half" data-dsn-gap="30px 60px">
                <div class="box-form">
                    <h2 class="title-h2 ">
                        IF YOU HAVE QUESTIONS PLEASE <br>CONTACT US
                    </h2>
                    <p class="mt-10">Fill fields and find approximate your repair</p>
                    <div class="dsn-form mt-20 form-box d-flex flex-column">
                        <form class="form w-100" method="post" action="<?php echo e(route('contact_us.store')); ?>">
                            <?php echo csrf_field(); ?>
                            <div class="messages"></div>
                            <div class="input__wrap controls">
                                <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">

                                            <input id="form_name" type="text" name="name" placeholder="Type your name"
                                                required="required" data-error="name is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                    <div class="form-group dsn-up">
                                        <div class="entry-box">

                                            <input id="form_email" type="email" name="email"
                                                placeholder="Type your Email Address" required="required"
                                                data-error="Valid email is required.">
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>
                                </div>


                                <div class="form-group dsn-up">
                                    <div class="entry-box">

                                        <textarea id="form_message" class="form-control" name="comments" rows="7"
                                            placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                    </div>
                                    <div class="help-block with-errors"></div>
                                </div>


                            </div>
                            <div class="d-flex dsn-up">
                                <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                    data-dsn="parallax">
                                    <input type="submit" value="Send Message">
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="box-info p-30 background-theme ">
                    <div class="icon-left dsn-icon-heading-color d-flex align-items-center h-100">
                        <div class="d-grid dsn-service icon-left align-items-center">
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">Head Office:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p><?php echo e(Utility::getsettings('contact_address2')); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">
                                            Phones:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p><?php echo e(Utility::getsettings('contact_phone1')); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="service-item p-relative grid-item style-box  background-transparent">

                                <div class="service-item-inner number-item h-100">
                                    <div class="dsn-icon"><i class="fas fa-envelope" aria-hidden="true"></i></div>
                                    <div class="service-content p-relative">
                                        <h4 class="service_title  sm-title-block ">
                                            Write Us:</h4>
                                        <div class="service_description mt-10 max-w570 dsn-auto">
                                            <p><?php echo e(Utility::getsettings('contact_email')); ?></p>
                                            <p><?php echo e(Utility::getsettings('contact_phone1')); ?></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- ========== End Contact  ========== -->
        <!-- ========== Map  ========== -->
        <div class="map-custom hv-80" data-dsn-lat="51.5073509" data-dsn-len="-0.1277583" data-dsn-zoom="14"></div>
        <!-- ========== End Map  ========== -->
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.front.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH G:\xampp\htdocs\Black_dsn\resources\views/front/contact/index.blade.php ENDPATH**/ ?>