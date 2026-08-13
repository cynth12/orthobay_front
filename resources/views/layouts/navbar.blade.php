<div class="em40_header_area_main">

    {{-- =========================================================
        HEADER TOP AREA
    ========================================================== --}}

    <div class="smartdev-header-top">

        <div class="container">

            <div class="row">

                {{-- TOP LEFT --}}
                <div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">

                    <div class="top-address text-left">

                        <p>

                            <span>
                                <i class="fas fa-map-marker-alt"></i>
                                Puerto Vallarta / Nuevo Nayarit, México
                            </span>

                            <a
                                href="mailto:orthobay.drponce@gmail.com"
                                aria-label="Enviar correo a Orthobay Vallarta"
                            >
                                <i class="fas fa-envelope"></i>
                                orthobay.drponce@gmail.com
                            </a>

                            <a
                                href="tel:+523224218769"
                                aria-label="Llamar a Orthobay Vallarta"
                            >
                                <i class="fas fa-phone"></i>
                                +52 322 421 8769
                            </a>

                        </p>

                    </div>

                </div>


                {{-- TOP RIGHT --}}
                <div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12">

                    <div class="top-right-menu">

                        <ul class="social-icons text-right text_m_center">

                            <li>
                                <a
                                    href="https://www.facebook.com/share/1AFnvTu7wm/?mibextid=wwXIfr"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Orthobay Vallarta en Facebook"
                                >
                                    <i class="fab fa-facebook-f"></i>
                                </a>
                            </li>

                            <li>
                                <a
                                    href="https://www.instagram.com/orthobay_drdanielponce/profilecard/?igsh=a3RtcHE3OHgzMW8y"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Orthobay Vallarta en Instagram"
                                >
                                    <i class="fab fa-instagram"></i>
                                </a>
                            </li>

                            <li>
                                <a
                                    href="https://www.youtube.com/shorts/uMhoaKaF1Z8"
                                    target="_blank"
                                    rel="noopener noreferrer"
                                    aria-label="Dr. Daniel Ponce en YouTube"
                                >
                                    <i class="fab fa-youtube"></i>
                                </a>
                            </li>

                        </ul>

                    </div>

                </div>

            </div>

        </div>

    </div>


    {{-- =========================================================
        MENU DESKTOP
    ========================================================== --}}

    <div class="tx_top2_relative">

        <div class="tx_relative_m">

            <div class="mainmenu_width_tx">

                <div class="smartdev-main-menu one_page hidden-xs hidden-sm witr_h_h10">

                    <div class="smartdev_nav_area scroll_fixed">

                        <div class="container">

                            <div class="row logo-left">


                                {{-- LOGO --}}
                                <div class="col-md-3 col-sm-3 col-xs-4">

                                    <div class="logo">

                                        <a
                                            class="main_sticky_main_l"
                                            href="{{ app()->getLocale() == 'es' ? url('/es') : url('/en') }}"
                                            title="Orthobay Vallarta - Dr. Daniel Ponce"
                                        >

                                            <img
                                                src="{{ asset('assets/images/logo_1_orto.png') }}"
                                                alt="Orthobay Vallarta - Dr. Daniel Ponce, cirujano ortopedista"
                                            >

                                        </a>


                                        <a
                                            class="main_sticky_l"
                                            href="{{ app()->getLocale() == 'es' ? url('/es') : url('/en') }}"
                                            title="Orthobay Vallarta - Dr. Daniel Ponce"
                                        >

                                            <img
                                                src="{{ asset('assets/images/logo_2.png') }}"
                                                alt="Orthobay Vallarta - Dr. Daniel Ponce"
                                            >

                                        </a>

                                    </div>

                                </div>



                                {{-- MENU --}}
                                <div class="col-md-9 col-sm-9 col-xs-8">

                                    <nav
                                        class="smartdev_menu"
                                        aria-label="{{ app()->getLocale() == 'es'
                                            ? 'Navegación principal'
                                            : 'Main navigation'
                                        }}"
                                    >

                                        <ul class="sub-menu">

                                            @if (app()->getLocale() == 'es')

                                                <li>
                                                    <a href="{{ url('/es') }}#inicio">
                                                        Inicio
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/es') }}#rodilla">
                                                        Rodilla
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/es') }}#cadera">
                                                        Cadera
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/es') }}#hombro">
                                                        Hombro
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/es') }}#nosotros">
                                                        Dr. Daniel Ponce
                                                    </a>
                                                </li>

                                                <li>
                                                    <a
                                                        href="{{ url('/en') }}"
                                                        lang="en"
                                                        hreflang="en"
                                                    >
                                                        English
                                                    </a>
                                                </li>

                                            @else

                                                <li>
                                                    <a href="{{ url('/en') }}#home">
                                                        Home
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/en') }}#knee">
                                                        Knee
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/en') }}#hip">
                                                        Hip
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/en') }}#shoulder">
                                                        Shoulder
                                                    </a>
                                                </li>

                                                <li>
                                                    <a href="{{ url('/en') }}#about">
                                                        Dr. Daniel Ponce
                                                    </a>
                                                </li>

                                                <li>
                                                    <a
                                                        href="{{ url('/es') }}"
                                                        lang="es"
                                                        hreflang="es"
                                                    >
                                                        Español
                                                    </a>
                                                </li>

                                            @endif

                                        </ul>

                                    </nav>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    LOGO MOBILE
========================================================== --}}

<div class="mobile_logo_area hidden-md hidden-lg">

    <div class="container">

        <div class="row">

            <div class="col-sm-12">

                <div class="mobile_menu_logo text-center">

                    <a
                        href="{{ app()->getLocale() == 'es' ? url('/es') : url('/en') }}"
                        title="Orthobay Vallarta - Dr. Daniel Ponce"
                    >

                        <img
                            src="{{ asset('assets/images/logo_ortobay_1.png') }}"
                            alt="Orthobay Vallarta - Dr. Daniel Ponce"
                        >

                    </a>

                </div>

            </div>

        </div>

    </div>

</div>



{{-- =========================================================
    MENU MOBILE
========================================================== --}}

<div class="home-2 mbm d-block d-lg-none header_area main-menu-area">

    <div class="menu_area mobile-menu">

        <nav
            class="smartdev_menu"
            aria-label="{{ app()->getLocale() == 'es'
                ? 'Navegación móvil'
                : 'Mobile navigation'
            }}"
        >

            <ul class="sub-menu">

                @if (app()->getLocale() == 'es')

                    <li>
                        <a href="{{ url('/es') }}#inicio">
                            Inicio
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/es') }}#rodilla">
                            Rodilla
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/es') }}#cadera">
                            Cadera
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/es') }}#hombro">
                            Hombro
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/es') }}#nosotros">
                            Dr. Daniel Ponce
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ url('/en') }}"
                            lang="en"
                            hreflang="en"
                        >
                            English
                        </a>
                    </li>

                @else

                    <li>
                        <a href="{{ url('/en') }}#home">
                            Home
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/en') }}#knee">
                            Knee
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/en') }}#hip">
                            Hip
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/en') }}#shoulder">
                            Shoulder
                        </a>
                    </li>

                    <li>
                        <a href="{{ url('/en') }}#about">
                            Dr. Daniel Ponce
                        </a>
                    </li>

                    <li>
                        <a
                            href="{{ url('/es') }}"
                            lang="es"
                            hreflang="es"
                        >
                            Español
                        </a>
                    </li>

                @endif

            </ul>

        </nav>

    </div>

</div>