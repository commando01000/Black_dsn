@extends('layouts.front.app')

@section('content')
    <div id="dsn_preloader" class="preloader">
        <div class="dsnload p-absolute">
            <span class="dsnload__row">
                <span class="dsnload__img">
                    <img src="assets/img/logo-light-1.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy">
                    <img src="assets/img/logo-1.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy">
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="assets/img/logo-light-1.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy">
                    <img src="assets/img/logo-1.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy">
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="assets/img/logo-light-1.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy">
                    <img src="assets/img/logo-1.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy">
                </span>
            </span>
            <span class="dsnload__row dsnload__row--sibling">
                <span class="dsnload__img">
                    <img src="assets/img/logo-light-1.png" class="logo-dark" alt="Blackdsn" decoding="async" loading="lazy">
                    <img src="assets/img/logo-1.png" class="logo-light" alt="Blackdsn" decoding="async" loading="lazy">
                </span>
            </span>


        </div>
        <svg width="100%" height="100%" viewbox="0 0 100 100" class="v-middle" preserveaspectratio="xMinYMin meet"
            fill="none">
            <lineargradient id="linearColors" x1="0" y1="0" x2="1" y2="1">
                <stop offset="0%" stop-color="var(--theme-color)"></stop>
                <stop offset="50%" stop-color="var(--border-color)"></stop>
                <stop offset="100%" stop-color="var(--assistant-color)"></stop>
            </lineargradient>
            <path class="dsn-progress-path" d="M50,1 a49,49 0 0,1 0,98 a49,49 0 0,1 0,-98"></path>
        </svg>
        <div class="loading-circle v-middle">
            <p class="loading-count v-middle">0</p>
        </div>

        <span class="loading-text text-uppercase mt-30 dsn-container">Loading ...</span>
        <div class="bg-load background-section d-flex align-items-end">
            <svg class="dsn-separator-bottom dsn-icon-assistant-color" width="100%" height="100%" viewbox="0 0 100 10"
                preserveaspectratio="none">
                <path class="path-anim separator__path" data-dsn-to="M 0 0 C 40 0 55 0 100 0 L 0 0 Z"
                    vector-effect="non-scaling-stroke" d="M 0 0 C 40 16 75 10 100 0 L 0 0 Z"></path>
            </svg>
        </div>

    </div>

    <main id="main_root" class="main-root">

        <!-- ========== Menu ========== -->
        <header id="site_menu_header" class="site-header  dsn-container d-none dsn-hamburger">
            <div class="main-logo">
                <a aria-current='page' class='custom-logo-link main-brand effect-ajax' data-dsn-text='Blackdsn'
                    href='index-1.htm' rel='home'>
                    <img src="assets/img/logo-light-1.png" class="custom-logo logo-light" alt="Blackdsn">
                    <img src="assets/img/logo-1.png" class="custom-logo logo-dark" alt="Blackdsn">
                </a>
            </div>
            <nav class="main-navigation ">
                <div class="menu-cover-title header-container dsn-container">MENU</div>
                <ul id="dsn-primary-list" class="primary-nav h2">
                    <li class="nav-item has-sub-menu">
                        <a title="Home" href="#0">
                            <span class="overflow ">Home</span>
                        </a>
                        <ul class="nav-item">
                            <li class="dsn-back">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="text-toggle-back">
                                        <span class="text-name">Home</span>
                                        <span class="text-back">Back</span>
                                    </span>
                                </span>
                            </li>
                            <li class="nav-item ">
                                <a href='index-1.htm' title='Home'>
                                    <span class="overflow">Main Demo</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Business' href='business-1.html' title='Business'>
                                    <span class="overflow">Business</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Architecture' href='architecture-1.html' title='Architecture'>
                                    <span class="overflow">Architecture</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Personal' href='personal-1.html' title='Personal'>
                                    <span class="overflow">Personal</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Photographer' href='photographer-1.html' title='Photographer'>
                                    <span class="overflow">Photographer</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Resume' href='resume-1.html' title='Resume'>
                                    <span class="overflow">Resume</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Our Portfolio' href='metro-portfolio-1-1.html' title='Portfolio'>
                                    <span class="overflow">Metro Portfolio 1</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Our Portfolio' href='metro-portfolio-2-1.html' title='Portfolio'>
                                    <span class="overflow">Metro Portfolio 2</span>
                                </a>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a title="Home" href="#0">
                            <span class="overflow ">Portfolio</span>
                        </a>
                        <ul class="nav-item">
                            <li class="dsn-back">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="text-toggle-back">
                                        <span class="text-name">Portfolio</span>
                                        <span class="text-back">Back</span>
                                    </span>
                                </span>
                            </li>
                            <li class="nav-item has-sub-menu">
                                <a title="Carousel" href="#0" data-dsn-text="Business">
                                    <span class="overflow">Carousel</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">Carousel</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='carousel-portfolio-1-1.html'
                                            title='Carousel Portfolio 1'>
                                            <span class="overflow">Carousel Portfolio 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='carousel-portfolio-2-1.html'
                                            title='Carousel Portfolio'>
                                            <span class="overflow">Carousel Portfolio 2</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='carousel-portfolio-3-1.html'
                                            title='Carousel Portfolio 3'>
                                            <span class="overflow">Carousel Portfolio 3</span>
                                        </a>
                                    </li>
                                </ul>
                            </li>

                            <li class="nav-item has-sub-menu">
                                <a title="Carousel" href="#0" data-dsn-text="Business">
                                    <span class="overflow">Sliders</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">Sliders</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item has-sub-menu">
                                        <a title="Slider" href="#0" data-dsn-text="Our Portfolio">
                                            <span class="overflow">Fullscreen</span>
                                        </a>
                                        <ul class="nav-item">
                                            <li class="dsn-back">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="text-toggle-back">
                                                        <span class="text-name">Fullscreen</span>
                                                        <span class="text-back">Back</span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="nav-item ">
                                                <a data-dsn-text='Our Portfolio'
                                                    href='fullscreen-distortion-horizontal-1.html' title='Slider'>
                                                    <span class="overflow">Slider Distortion / H</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio'
                                                    href='fullscreen-distortion-vertical-1.html' title='Slider'>
                                                    <span class="overflow">Slider Distortion / V</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio'
                                                    href='fullscreen-parallax-horizontal-1.html' title='Slider'>
                                                    <span class="overflow">Slider Parallax / H</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio'
                                                    href='fullscreen-parallax-vertical-1.html' title='Slider'>
                                                    <span class="overflow">Slider Parallax / V</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub-menu">
                                        <a title="Slider" href="#0" data-dsn-text="Our Portfolio">
                                            <span class="overflow">Padding</span>
                                        </a>
                                        <ul class="nav-item">
                                            <li class="dsn-back">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="text-toggle-back">
                                                        <span class="text-name">Padding</span>
                                                        <span class="text-back">Back</span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="nav-item ">
                                                <a data-dsn-text='Our Portfolio'
                                                    href='padding-distortion-horizontal-1.html' title='Slider'>
                                                    <span class="overflow">Slider Distortion / H</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='padding-distortion-vertical-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Distortion / V</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='padding-parallax-horizontal-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Parallax / H</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='padding-parallax-vertical-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Parallax / V</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li class="nav-item has-sub-menu">
                                        <a title="Slider" href="#0" data-dsn-text="Our Portfolio">
                                            <span class="overflow">Halfscreen</span>
                                        </a>
                                        <ul class="nav-item">
                                            <li class="dsn-back">
                                                <span>
                                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                        <g>
                                                            <path
                                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                            </path>
                                                        </g>
                                                    </svg>
                                                    <span class="text-toggle-back">
                                                        <span class="text-name">Halfscreen</span>
                                                        <span class="text-back">Back</span>
                                                    </span>
                                                </span>
                                            </li>
                                            <li class="nav-item ">
                                                <a data-dsn-text='Our Portfolio' href='half-distortion-horizontal-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Distortion / H</span>
                                                </a>
                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='half-distortion-vertical-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Distortion / V</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='half-parallax-horizontal-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Parallax / H</span>
                                                </a>

                                            </li>
                                            <li class="nav-item">

                                                <a data-dsn-text='Our Portfolio' href='half-parallax-vertical-1.html'
                                                    title='Slider'>
                                                    <span class="overflow">Slider Parallax / V</span>
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>


                            </li>

                            <li class="nav-item has-sub-menu">
                                <a title="Card" href="#0" data-dsn-text="Portfolio">
                                    <span class="overflow">Card</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">Card</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-card-1-1.html' title='work card 1'>
                                            <span class="overflow">Work Card 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-card-2-1.html' title='work card 2'>
                                            <span class="overflow">Work Card 2</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item has-sub-menu">
                                <a title="Card" href="#0" data-dsn-text="Portfolio">
                                    <span class="overflow">Classic</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">Classic</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-classic-1-1.html'
                                            title='work classic 1'>
                                            <span class="overflow">Work classic 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-classic-2-1.html'
                                            title='work classic 2'>
                                            <span class="overflow">Work classic 2</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item has-sub-menu">
                                <a title="List" href="#0" data-dsn-text="Portfolio">
                                    <span class="overflow">List</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">List</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-list-1-1.html' title='work list 1'>
                                            <span class="overflow">Work List 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='work-list-2-1.html' title='work list 2'>
                                            <span class="overflow">Work List 2</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>

                            <li class="nav-item has-sub-menu">
                                <a title="Metro" href="#0" data-dsn-text="Portfolio">
                                    <span class="overflow">Metro</span>
                                </a>
                                <ul class="nav-item">
                                    <li class="dsn-back">
                                        <span>
                                            <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                                viewbox="0 0 400.004 400.004" xml:space="preserve">
                                                <g>
                                                    <path
                                                        d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                                    </path>
                                                </g>
                                            </svg>
                                            <span class="text-toggle-back">
                                                <span class="text-name">Metro</span>
                                                <span class="text-back">Back</span>
                                            </span>
                                        </span>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='metro-portfolio-1-1.html'
                                            title='work Metro 1'>
                                            <span class="overflow">Work Metro 1</span>
                                        </a>
                                    </li>
                                    <li class="nav-item ">
                                        <a data-dsn-text='Our Portfolio' href='metro-portfolio-2-1.html'
                                            title='work Metro 2'>
                                            <span class="overflow">Work Metro 2</span>
                                        </a>
                                    </li>

                                </ul>
                            </li>
                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a title="Home" href="#0">
                            <span class="overflow ">Works</span>
                        </a>
                        <ul class="nav-item">
                            <li class="dsn-back">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="text-toggle-back">
                                        <span class="text-name">Works</span>
                                        <span class="text-back">Back</span>
                                    </span>
                                </span>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='VISIONAID' href='project-1-1.html' title='VISIONAID'>
                                    <span class="overflow">VISIONAID</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='MEN FASHION' href='project-2-1.html' title='MEN FASHION'>
                                    <span class="overflow">MEN FASHION</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='AUDI RS' href='project-3-1.html' title='AUDI RS'>
                                    <span class="overflow">AUDI RS</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='OPEN RUN' href='project-4-1.html' title='OPEN RUN'>
                                    <span class="overflow">OPEN RUN</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='DOG CHOW' href='project-5-1.html' title='DOG CHOW'>
                                    <span class="overflow">DOG CHOW</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='HEADPHONES' href='project-6-1.html' title='HEADPHONES'>
                                    <span class="overflow">HEADPHONES</span>
                                </a>
                            </li>

                        </ul>
                    </li>
                    <li class="nav-item has-sub-menu">
                        <a title="Home" href="#0">
                            <span class="overflow ">Blog</span>
                        </a>
                        <ul class="nav-item">
                            <li class="dsn-back">
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="30px"
                                        viewbox="0 0 400.004 400.004" xml:space="preserve">
                                        <g>
                                            <path
                                                d="M382.688,182.686H59.116l77.209-77.214c6.764-6.76,6.764-17.726,0-24.485c-6.764-6.764-17.73-6.764-24.484,0L5.073,187.757 c-6.764,6.76-6.764,17.727,0,24.485l106.768,106.775c3.381,3.383,7.812,5.072,12.242,5.072c4.43,0,8.861-1.689,12.242-5.072 c6.764-6.76,6.764-17.726,0-24.484l-77.209-77.218h323.572c9.562,0,17.316-7.753,17.316-17.315 C400.004,190.438,392.251,182.686,382.688,182.686z">
                                            </path>
                                        </g>
                                    </svg>
                                    <span class="text-toggle-back">
                                        <span class="text-name">Blog</span>
                                        <span class="text-back">Back</span>
                                    </span>
                                </span>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Stories' href='stories-1.html' title='Stories'>
                                    <span class="overflow">Stories</span>
                                </a>
                            </li>
                            <li class="nav-item ">
                                <a data-dsn-text='Single Post' href='single-post-1.html' title='Single Post'>
                                    <span class="overflow">Single Post</span>
                                </a>
                            </li>


                        </ul>
                    </li>
                    <li class="nav-item ">
                        <a href='service-1.html' title='Service'>
                            <span class="overflow">Service</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href='about-us-1.html' title='Home'>
                            <span class="overflow">About</span>
                        </a>
                    </li>
                    <li class="nav-item ">
                        <a href='contact-1.html' title='Home'>
                            <span class="overflow">Contact</span>
                        </a>
                    </li>
                </ul>
                <div class="container-content  d-flex flex-column justify-content-center section-margin">
                    <div class="nav__info">
                        <div class="nav-content">
                            <h5 class="sm-title-block mb-10">Studio</h5>
                            26-30 New Damietta
                            El-Mahalla El-Kubra, SK1 66LM

                        </div>
                        <div class="nav-content mt-30">
                            <h5 class="sm-title-block mb-10">Contact</h5>
                            <p class="links over-hidden mb-1">
                                <a class="link-hover d-block" href="tel:00201004392260"
                                    data-hover-text="+00 (2)012 3321">+00 (2)01004392260</a>
                                <a class="link-hover" href="tel:00201024552406" data-hover-text="+00 (2)012 3321">+00
                                    (2)01024552406</a>
                            </p>
                            <p class="links over-hidden"><a class="link-hover" href="mailto:info@dsngrid.com"
                                    data-hover-text="info@dsngrid.com">info@dsngrid.com</a></p>

                        </div>
                    </div>
                    <div class="nav-social nav-content mt-30">
                        <div class="nav-social-inner p-relative">
                            <h5 class="sm-title-block mb-10">Follow us</h5>
                            <ul style="--dsn-li-name: dsn6;">
                                <li style="--dsn-li-index: 0;"><a href="#0" target="_blank"
                                        rel="nofollow noopener noreferrer">Dribbble.</a></li>
                                <li style="--dsn-li-index: 1;"><a href="#0" target="_blank"
                                        rel="nofollow noopener noreferrer">Behance.</a></li>
                                <li style="--dsn-li-index: 2;"><a href="#0" target="_blank"
                                        rel="nofollow noopener noreferrer">Linkedin.</a></li>
                                <li style="--dsn-li-index: 3;"><a href="#0" target="_blank"
                                        rel="nofollow noopener noreferrer">Twitter.</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </nav>
            <div id="navbar_toggle" class="navbar-toggle">
                <div class="toggle-icon">
                    <div class="toggle-line"></div>
                    <div class="toggle-line"></div>
                    <div class="toggle-line"></div>
                </div>
                <div class="toggle-text">
                    <div class="text-menu">Menu</div>
                    <div class="text-open">Open</div>
                    <div class="text-close">Close</div>
                </div>
            </div>
            <div class="bg-load background-main"></div>

            <svg width="100%" height="100%" viewbox="0 0 100 100" preserveaspectratio="none"
                class="bg-load dsn-svg-transition">
                <path vector-effect="non-scaling-stroke" d="M 0 100 V 100 Q 50 100 100 100 V 100 z"></path>
            </svg>

        </header>
        <!-- ========== End Menu ========== -->

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
                                        data-dsn-text='OUR PORTFOLIO' href='work-card-1-1.html'>
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
                            <form id="contact-form" class="form w-100" method="post" action="contact.php"
                                data-toggle="validator">
                                <div class="messages"></div>
                                <div class="input__wrap controls">
                                    <div class="d-grid grid-md-2" data-dsn-gap="0px 30px">
                                        <div class="form-group dsn-up">
                                            <div class="entry-box">

                                                <input id="form_name" type="text" name="name"
                                                    placeholder="Type your name" required="required"
                                                    data-error="name is required.">
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

                                            <textarea id="form_message" class="form-control" name="message" rows="7"
                                                placeholder="Tell us about you and the world" required="required" data-error="Please,leave us a message."></textarea>
                                        </div>
                                        <div class="help-block with-errors"></div>
                                    </div>

                                    <div class="d-flex dsn-up">
                                        <div class="image-zoom move-circle border-color-default border-style border-rdu"
                                            data-dsn="parallax">
                                            <input type="submit" value="Send Message">
                                        </div>
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
                                        <div class="dsn-icon"><i class="fas fa-map-marker-alt" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">Head Office:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>El-Mahalla El-Kubra
                                                    37<br>1776 Damietta Egypt</p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="service-item p-relative grid-item style-box  background-transparent">

                                    <div class="service-item-inner number-item h-100">
                                        <div class="dsn-icon"><i class="fas fa-phone-volume" aria-hidden="true"></i>
                                        </div>
                                        <div class="service-content p-relative">
                                            <h4 class="service_title  sm-title-block ">
                                                Phones:</h4>
                                            <div class="service_description mt-10 max-w570 dsn-auto">
                                                <p>+1 (850) 344 0
                                                    66</p>
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
                                                <p>info@dsngrid.com</p>
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

            <!-- ========== Footer ========== -->
            <footer id="dsn_footer" class="dsn-footer p-relative">
                <svg class="dsn-separator dsn-separator-up  dsn-icon-main-color" width="100%" height="100%"
                    viewbox="0 0 100 10" preserveaspectratio="none">
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
                                data-dsn-text='OUR PORTFOLIO' href='work-classic-2-1.html'>
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
                                            <img class="custom-logo logo-light" src="assets/img/logo-light-1.png"
                                                alt="Blackdsn">
                                            <img class="custom-logo logo-dark" src="assets/img/logo-1.png"
                                                alt="Blackdsn">
                                        </a>
                                    </div>
                                </div>
                                <ul class="dsn-socials box-social mt-20">
                                    <li><a href="#0" target="_blank" rel="nofollow"
                                            class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                                class="dsn-icon"><i
                                                    class="fab fa-facebook-f"></i></span><span>FB</span></a>
                                    </li>
                                    <li><a href="#0" target="_blank" rel="nofollow"
                                            class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                                class="dsn-icon"><i class="fab fa-twitter"></i></span><span>TW</span></a>
                                    </li>
                                    <li><a href="#0" target="_blank" rel="nofollow"
                                            class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                                class="dsn-icon"><i
                                                    class="fab fa-linkedin-in"></i></span><span>LN</span></a></li>
                                    <li><a href="#0" target="_blank" rel="nofollow"
                                            class="init-color move-circle border-color-default" data-dsn="parallax"><span
                                                class="dsn-icon"><i
                                                    class="fab fa-instagram"></i></span><span>IN</span></a>
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
                                            <a href="home.html" class="effect-ajax">HOME</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class='effect-ajax' href='work-classic-2-1.html'>PORTFOLIO</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class='effect-ajax' href='stories-1.html'>NEWS</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class='effect-ajax' href='about-us-1.html'>ABOUT</a>
                                        </li>
                                        <li class="menu-item">
                                            <a class='effect-ajax' href='contact-1.html'>CONTACT</a>
                                        </li>

                                    </ul>
                                </div>
                            </div>
                            <div class="grid-col-3">
                                <h4 class="subtitle p-relative line-shape  line-shape-after "><span
                                        class="background-revere ">CONTACT</span>
                                </h4>

                                <div class="col-contact">
                                    <p><strong>T</strong> : +001 225 3351</p>
                                    <p class="mt-10"><strong>F</strong> :+001 225 3351</p>
                                    <p class="over-hidden mt-10">
                                        <strong>E</strong> : <a class="link-hover" href="#"
                                            data-hover-text="info@dsngrid.com">info@dsngrid.com</a>
                                    </p>
                                </div>

                            </div>
                            <div class="grid-col-4">
                                <h4 class="subtitle p-relative line-shape  line-shape-after "><span
                                        class="background-revere ">ADDRESS</span>
                                </h4>
                                <div class="col-address">
                                    <p>
                                        El-Mahalla El-Kubra 37<br> 1776 Damietta<br>Egypt
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
            <!-- ========== End Footer ========== -->

        </div>


    </main>


    <!-- ========== Cursor ========== -->
    <div id="dsn_cursor" class="ball"></div>
    <div id="dsn_cursor_inner" class="ball"></div>
    <!-- ========== End Cursor ========== -->


    <!-- ==========  Social ========== -->
    <div class="social-side d-flex align-items-center flex-column justify-content-center">

        <ul class="socials d-flex flex-column-reverse">
            <li style="--dsn-index-animate : 0;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-facebook-f" aria-hidden="true"></i> <span>Fb</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 1;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-instagram" aria-hidden="true"></i><span>Instagram</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 2;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-twitter" aria-hidden="true"></i><span>Tw</span>
                </a>
            </li>
            <li style="--dsn-index-animate : 3;">
                <a href="#0" target="_blank" rel="nofollow">
                    <i class="fab fa-linkedin-in" aria-hidden="true"></i><span>Linkedin</span>
                </a>
            </li>
        </ul>
        <div class="icon">FOLLOW US</div>
    </div>
    <!-- ========== End Social ========== -->

    <!-- ========== Style Option Page ========== -->
    <div id="dsn_box_options" class="day-night">
        <div class="night active" data-dsn-theme="dark">
            <svg width="48" height="48" viewbox="0 0 48 48">
                <rect x="12.3" y="23.5" width="2.6" height="1"></rect>
                <rect x="16.1" y="15.3" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -6.8871 16.5732)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="12.3" width="1" height="2.6"></rect>
                <rect x="30.1" y="16.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -2.5145 27.0538)" width="2.6"
                    height="1"></rect>
                <rect x="33.1" y="23.5" width="2.6" height="1"></rect>
                <rect x="30.9" y="30.1" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -12.9952 31.4264)" width="1"
                    height="2.6"></rect>
                <rect x="23.5" y="33.1" width="1" height="2.6"></rect>
                <rect x="15.3" y="30.9" transform="matrix(0.7071 -0.7071 0.7071 0.7071 -17.3677 20.9457)" width="2.6"
                    height="1"></rect>
                <path
                    d="M24,18.7c-2.9,0-5.3,2.4-5.3,5.3s2.4,5.3,5.3,5.3s5.3-2.4,5.3-5.3S26.9,18.7,24,18.7z M24,28.3c-2.4,0-4.3-1.9-4.3-4.3s1.9-4.3,4.3-4.3s4.3,1.9,4.3,4.3S26.4,28.3,24,28.3z">
                </path>
            </svg>

        </div>
        <div class="moon" data-dsn-theme="night">
            <svg width="48" height="48" viewbox="0 0 48 48">
                <path
                    d="M24,33.9c-5.4,0-9.9-4.4-9.9-9.9c0-4.3,2.7-8,6.8-9.4l0.8-0.3l-0.1,0.9c-0.2,0.6-0.2,1.3-0.2,1.9c0,5.2,4.3,9.5,9.5,9.5c0.6,0,1.3-0.1,1.9-0.2l0.8-0.2L33.3,27C32,31.1,28.3,33.9,24,33.9z M20.4,15.9c-3.2,1.4-5.3,4.5-5.3,8.1c0,4.9,4,8.9,8.9,8.9c3.6,0,6.7-2.1,8.1-5.3c-0.4,0-0.8,0.1-1.3,0.1c-5.8,0-10.5-4.7-10.5-10.5C20.4,16.7,20.4,16.3,20.4,15.9z">
                </path>
            </svg>
        </div>
    </div>
    <!-- ========== End Style Option Page ========== -->

    <!-- ========== Line BG ========== -->
    <div id="line_head"><span class="container"></span></div>
    <!-- ========== End Line BG ========== -->
@endsection
