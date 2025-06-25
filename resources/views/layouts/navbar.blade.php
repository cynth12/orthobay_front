<div class="em40_header_area_main">
    <!-- HEADER TOP AREA -->
    <div class="smartdev-header-top">
        <div class="container">
            <div class="row">
                <!-- TOP LEFT -->
                <div class="col-xs-12 col-lg-9 col-xl-9 col-md-9 col-sm-12">
                    <div class="top-address text-left">
                        <p>
                            <span><i class="fas fa-home"></i>Puerto Vallarta, Jalisco</span>
                            <a href="index.html#"><i class="fas fa-envelope"></i>info@orthobay.com</a>
                        </p>
                    </div>
                </div>
                <!-- TOP RIGHT -->
                <div class="col-xs-12 col-lg-3 col-xl-3 col-md-3 col-sm-12 ">
                    <div class="top-right-menu">
                        <ul class="social-icons text-right text_m_center">
                            <li><a href="https://www.facebook.com/share/1AFnvTu7wm/?mibextid=wwXIfr"><i class="fab fa-facebook-f"></i></a></li>
                            <li><a href="https://www.instagram.com/orthobay_drdanielponce/profilecard/?igsh=a3RtcHE3OHgzMW8y"><i class="fab fa-instagram"></i></a></li>
                            <li><a href="https://www.youtube.com/shorts/uMhoaKaF1Z8"><i class="fab fa-youtube"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- END HEADER TOP AREA -->


    <div class="tx_top2_relative">
        <div class="">
            <div class="tx_relative_m">
                <div class="">
                    <div class="mainmenu_width_tx">
                        <div class="smartdev-main-menu one_page hidden-xs hidden-sm witr_h_h10">
                            <div class="smartdev_nav_area scroll_fixed">
                                <div class="container">
                                    <div class="row logo-left">
                                        <!-- LOGO -->
                                        <div class="col-md-3 col-sm-3 col-xs-4">
                                            <div class="logo">
                                                <a class="main_sticky_main_l" href="index.html" title="smartdev">
                                                    <img src="{{ asset('assets/images/logo_1_orto.png') }}"
                                                        alt="smartdev">
                                                </a>
                                                <a class="main_sticky_l" href="index.html" title="smartdev">
                                                    <img src="{{ asset('assets/images/logo_2.png') }}" alt="smartdev">
                                                </a>
                                            </div>
                                        </div>
                                        <div class="col-md-9 col-sm-9 col-xs-8">
                                            <nav class="smartdev_menu">
                                                <ul class="sub-menu">
                                                    @if (app()->getLocale() == 'es')
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/#inicio')}}">Inicio</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/rodilla')}}">Rodilla</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/cadera')}}">Cadera</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/hombro')}}">Hombro</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/espalda')}}">Espalda</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/es/nosotros')}}">Nosotros</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/en') }}">Ingles</a></li>
                                                    
                                            @else
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/#home') }}">Home</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/knee')}}">Knee</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/hip')}}">Hip</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/shoulder')}}">Shoulder</a></li>
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/back')}}">Back</a></li>  
                                                    <li class="menu-item-has-children"><a href="{{ url('/en/about')}}">About</a></li>  
                                                    <li class="menu-item-has-children"><a href="{{ url('/es') }}">Spanish</a></li> 
                                                    
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
    </div>
</div>


<!-- MOBILE MENU Logo AREA -->
<div class="mobile_logo_area hidden-md hidden-lg">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="mobile_menu_logo text-center">
                    <a href="index.html" title="smartdev">
                        <img src="{{ asset('assets/images/logo_ortobay_1.png') }}" alt="smartdev">
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>

<!-- MOBILE MENU AREA -->
<div class="home-2 mbm d-block d-lg-none header_area main-menu-area">
    <div class="menu_area mobile-menu">
        <nav class="smartdev_menu">
            <ul class="sub-menu">
                @if (app()->getLocale() == 'es')
                    <li class="menu-item-has-children"><a href="{{ url('/es/#inicio') }}">Inicio</a></li>
                    <li class="menu-item-has-children"><a href="/es/#rodilla">Rodilla</a></li>
                    <li class="menu-item-has-children"><a href="/es/#cadera">Cadera</a></li>
                    <li class="menu-item-has-children"><a href="/es/#hombro">Hombro</a></li>
                    <li class="menu-item-has-children"><a href="/es/#espalda">Espalda</a></li>
                    <li class="menu-item-has-children"><a href="/es/#nosotros">Nosotros</a></li>
                    <li class="menu-item-has-children"><a href="{{ url('/en') }}">Ingles</a></li>
                @else
                    <li class="menu-item-has-children"><a href="{{ url('/en/#home') }}">Home</a></li>
                    <li class="menu-item-has-children"><a href="/en/#knee">Knee</a></li>
                    <li class="menu-item-has-children"><a href="/en/#hip">Hip</a></li>
                    <li class="menu-item-has-children"><a href="/en/#shoulder">Shoulder</a></li>
                    <li class="menu-item-has-children"><a href="/en/#back">Back</a></li>
                    <li class="menu-item-has-children"><a href="/en/#about">About</a></li>
                    <li class="menu-item-has-children"><a href="{{ url('/es') }}">Spanish</a></li>
                @endif
            </ul>
        </nav>
    </div>
</div>
