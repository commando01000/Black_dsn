<footer id="dsn_footer" class="dsn-footer p-relative footer-animate svg-animate background-main">
    <svg class="dsn-separator dsn-separator-up  dsn-icon-assistant-color" width="100%" height="100%" viewbox="0 0 100 10"
        preserveaspectratio="none">
        <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
            vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
    </svg>
    <div class="footer-content p-relative mt-section">

        <div class="text-center container">
            <h2 class="title-h2 ">
                LET'S BUILD SOMETHING
                <span class="d-block"><b><i>AMAZING </i></b>TOGETHER</span>
            </h2>
            <div class="dsn-icon-heading-color dsn-def-btn d-flex justify-content-center mt-30">
                <a class='dsn-btn dsn-border border-color-default  background-section  effect-ajax has-icon-left'
                    data-dsn-text='START A PROJECT' href='contact.html'>
                    <span class="dsn-icon dsn-bg-before btn-icon-left heading-color z-index-1">
                        <i class="fas fa-angle-right" aria-hidden="true"></i>
                    </span>
                    <span class="title-btn p-relative  z-index-1 ">START A PROJECT</span>
                </a>
            </div>

        </div>
        <div class="dsn-container pt-60">
            <div class="d-grid grid-lg-4 grid-md-2 ">
                <div class="grid-col-1">
                    <div class="dsn-logo main-logo">
                        <div class="main-logo">
                            <a href="https://dsngrid.com/blackdsn/" data-dsn-text="Blackdsn"
                                class="custom-logo-link main-brand effect-ajax" rel="home">
                                <img class="custom-logo logo-light"
                                    src= "<?php echo e(asset('front_asset/assets/img/logo-light.png')); ?>" alt="Digital Media Factory">
                                <img class="custom-logo logo-dark" src= "<?php echo e(asset('front_asset/assets/img/logo.png')); ?>"
                                    alt="Digital Media Factory">
                            </a>
                        </div>
                    </div>
                    <ul class="dsn-socials box-social mt-20 dsn-icon-heading-color">
                        <li><a href="<?php echo e(Utility::getsettings('contact_facebook')); ?>" target="_blank" rel="nofollow"
                                class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                    class="dsn-icon"><i class="fab fa-facebook-f"></i></span><span>FB</span></a>
                        </li>
                        <li><a href="<?php echo e(Utility::getsettings('contact_twitter')); ?>" target="_blank" rel="nofollow"
                                class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                    class="dsn-icon"><i class="fab fa-twitter"></i></span><span>TW</span></a>
                        </li>
                        <li><a href="<?php echo e(Utility::getsettings('contact_linkedin')); ?>" target="_blank" rel="nofollow"
                                class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                    class="dsn-icon"><i class="fab fa-linkedin-in"></i></span><span>LN</span></a></li>
                        <li><a href="<?php echo e(Utility::getsettings('contact_instagram')); ?>" target="_blank" rel="nofollow"
                                class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                    class="dsn-icon"><i class="fab fa-instagram"></i></span><span>IN</span></a>
                        </li>
                    </ul>
                </div>
                <div class="grid-col-2">
                    <h4 class="subtitle p-relative line-shape  line-shape-after "><span
                            class="background-revere ">NAVIGATION</span>
                    </h4>
                    <div class="menu-footer-menu-container">
                        <ul id="menu-footer-menu" class="menu">
                            <li class="menu-item">
                                <a href="<?php echo e(route('homepage')); ?>" class="effect-ajax">HOME</a>
                            </li>
                            <li class="menu-item">
                                <a class='effect-ajax' href='<?php echo e(route('our-portfolio')); ?>'>PORTFOLIO</a>
                            </li>
                            <li class="menu-item">
                                <a class='effect-ajax' href='<?php echo e(route('see.all.blogs')); ?>'>NEWS</a>
                            </li>
                            <li class="menu-item">
                                <a class='effect-ajax' href='<?php echo e(route('about-us')); ?>'>ABOUT</a>
                            </li>
                            <li class="menu-item">
                                <a class='effect-ajax' href='<?php echo e(route('contact')); ?>'>CONTACT</a>
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="grid-col-3">
                    <h4 class="subtitle p-relative line-shape  line-shape-after "><span
                            class="background-revere ">CONTACT</span>
                    </h4>

                    <div class="col-contact">
                        <p><strong>T</strong> : +<?php echo e(Utility::getsettings('contact_phone1')); ?></p>
                        <p class="mt-10"><strong>T</strong> : <?php echo e(Utility::getsettings('contact_phone2')); ?></p>
                        <p class="over-hidden mt-10">
                            <strong>E</strong> : <a class="link-hover" href="#"
                                data-hover-text="info@dsngrid.com"><?php echo e(Utility::getsettings('contact_email')); ?></a>
                        </p>
                    </div>

                </div>
                <div class="grid-col-4">
                    <h4 class="subtitle p-relative line-shape  line-shape-after "><span
                            class="background-revere ">ADDRESS</span>
                    </h4>
                    <div class="col-address">
                        <p>
                            <?php echo e(Utility::getsettings('contact_address2')); ?>

                        </p>
                    </div>
                </div>
            </div>
            <div class="footer-bottom mt-60 pt-30 border-top pb-30 text-center">
                <p class="over-hidden">
                    © 2022 Digital Agency Designed by
                    <a href="#0" class="link-hover" data-hover-text="DSN Grid" target="_blank">DSN
                        Grid</a>
                </p>
            </div>
        </div>
    </div>
</footer>
<?php /**PATH C:\Users\dell\source\repos\Black_dsn\resources\views/layouts/front/footer.blade.php ENDPATH**/ ?>