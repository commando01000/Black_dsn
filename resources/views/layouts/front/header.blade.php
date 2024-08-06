    <!-- ========== Menu ========== -->
    <header id="site_menu_header" class="site-header  dsn-container d-none dsn-hamburger">
        <div class="main-logo">
            <a aria-current='page' class='custom-logo-link main-brand effect-ajax' data-dsn-text='Blackdsn'
                href='{{ url('/') }}' rel='home'>
                <img src= "{{ asset('front_asset/assets/img/logo-light.png') }}" class="custom-logo logo-light"
                    alt="Blackdsn">
                <img src= "{{ asset('front_asset/assets/img/logo.png') }}" class="custom-logo logo-dark" alt="Blackdsn">
            </a>
        </div>
        <nav class="main-navigation ">
            <div class="menu-cover-title header-container dsn-container">MENU</div>
            <ul id="dsn-primary-list" class="primary-nav h2">
                <li class="nav-item has-sub-menu">
                    <a title="Home" href="{{ route('homepage') }}">
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
                            <a href='index.htm' title='Home'>
                                <span class="overflow">Main Demo</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Business' href='business.html' title='Business'>
                                <span class="overflow">Business</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Architecture' href='architecture.html' title='Architecture'>
                                <span class="overflow">Architecture</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Personal' href='personal.html' title='Personal'>
                                <span class="overflow">Personal</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Photographer' href='photographer.html' title='Photographer'>
                                <span class="overflow">Photographer</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Resume' href='resume.html' title='Resume'>
                                <span class="overflow">Resume</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Our Portfolio' href='metro-portfolio-1.html' title='Portfolio'>
                                <span class="overflow">Metro Portfolio 1</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Our Portfolio' href='metro-portfolio-2.html' title='Portfolio'>
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
                                    <a data-dsn-text='Our Portfolio' href='carousel-portfolio-1.html'
                                        title='Carousel Portfolio 1'>
                                        <span class="overflow">Carousel Portfolio 1</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='carousel-portfolio-2.html'
                                        title='Carousel Portfolio'>
                                        <span class="overflow">Carousel Portfolio 2</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='carousel-portfolio-3.html'
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
                                                href='fullscreen-distortion-horizontal.html' title='Slider'>
                                                <span class="overflow">Slider Distortion / H</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio'
                                                href='fullscreen-distortion-vertical.html' title='Slider'>
                                                <span class="overflow">Slider Distortion / V</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio'
                                                href='fullscreen-parallax-horizontal.html' title='Slider'>
                                                <span class="overflow">Slider Parallax / H</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='fullscreen-parallax-vertical.html'
                                                title='Slider'>
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
                                            <a data-dsn-text='Our Portfolio' href='padding-distortion-horizontal.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Distortion / H</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='padding-distortion-vertical.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Distortion / V</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='padding-parallax-horizontal.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Parallax / H</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='padding-parallax-vertical.html'
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
                                            <a data-dsn-text='Our Portfolio' href='half-distortion-horizontal.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Distortion / H</span>
                                            </a>
                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='half-distortion-vertical.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Distortion / V</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='half-parallax-horizontal.html'
                                                title='Slider'>
                                                <span class="overflow">Slider Parallax / H</span>
                                            </a>

                                        </li>
                                        <li class="nav-item">

                                            <a data-dsn-text='Our Portfolio' href='half-parallax-vertical.html'
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
                                    <a data-dsn-text='Our Portfolio' href='work-card-1.html' title='work card 1'>
                                        <span class="overflow">Work Card 1</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='work-card-2.html' title='work card 2'>
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
                                    <a data-dsn-text='Our Portfolio' href='work-classic-1.html'
                                        title='work classic 1'>
                                        <span class="overflow">Work classic 1</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='work-classic-2.html'
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
                                    <a data-dsn-text='Our Portfolio' href='work-list-1.html' title='work list 1'>
                                        <span class="overflow">Work List 1</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='work-list-2.html' title='work list 2'>
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
                                    <a data-dsn-text='Our Portfolio' href='metro-portfolio-1.html'
                                        title='work Metro 1'>
                                        <span class="overflow">Work Metro 1</span>
                                    </a>
                                </li>
                                <li class="nav-item ">
                                    <a data-dsn-text='Our Portfolio' href='metro-portfolio-2.html'
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
                            <a data-dsn-text='VISIONAID' href='project-1.html' title='VISIONAID'>
                                <span class="overflow">VISIONAID</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='MEN FASHION' href='project-2.html' title='MEN FASHION'>
                                <span class="overflow">MEN FASHION</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='AUDI RS' href='project-3.html' title='AUDI RS'>
                                <span class="overflow">AUDI RS</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='OPEN RUN' href='project-4.html' title='OPEN RUN'>
                                <span class="overflow">OPEN RUN</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='DOG CHOW' href='project-5.html' title='DOG CHOW'>
                                <span class="overflow">DOG CHOW</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='HEADPHONES' href='project-6.html' title='HEADPHONES'>
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
                            <a data-dsn-text='Stories' href='{{ route('see.all.blogs') }}' title='Stories'>
                                <span class="overflow">Stories</span>
                            </a>
                        </li>
                        <li class="nav-item ">
                            <a data-dsn-text='Single Post' href='single-post.html' title='Single Post'>
                                <span class="overflow">Single Post</span>
                            </a>
                        </li>


                    </ul>
                </li>
                <li class="nav-item ">
                    <a href='service.html' title='Service'>
                        <span class="overflow">Service</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href='{{ route('about-us') }}' title='Home'>
                        <span class="overflow">About</span>
                    </a>
                </li>
                <li class="nav-item ">
                    <a href='{{ route('contact') }}' title='Home'>
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
                                data-hover-text="+00 (2)012 3321">+00
                                (2)01004392260</a>
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
