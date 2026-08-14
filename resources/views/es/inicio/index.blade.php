@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')

    <div id="inicio" class="witr_swiper_area">
        <div class="swiper-container witr_active_id5 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide witr_swiper_height"
                    style="background-image: url('assets/images/daniel_ponce.png'); background-size: contain; background-repeat: no-repeat;
              background-position: right center; background-color: #dff3f2;">
                    <div class="witr_sw_text_area text-left">
                        <div class="witr_swiper_content ">
                            <h1>Cirujano Ortopedista en Puerto Vallarta</h1>
                            <h2> Dr. Daniel Ponce Covarrubias</h2>
                            <p>Atención especializada en cirugía ortopédica,
                            reemplazo articular y artroscopia de rodilla,
                            cadera y hombro para pacientes locales e
                            internacionales en Puerto Vallarta y Nuevo Nayarit</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="#contacto">Agenda tu cita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide witr_swiper_height"
                    style="background-image: url('assets/images/daniel_ponce.png'); background-size: contain; background-repeat: no-repeat; 
				background-position: right center; background-color: #dff3f2;">
                    <div class="witr_sw_text_area text-left">
                        <div class="witr_swiper_content ">
                            <h2>Atención Ortopédica Especializada</h2>
                             <h3>
                            Cirugía de rodilla, cadera y hombro en Puerto Vallarta
                            </h3>
                            <p>Recibe atención profesional y personalizada con
                            opciones de tratamiento adaptadas a tus necesidades,
                            ya sea que vivas en la región o visites México
                            desde el extranjero.</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="#contacto">Agenda tu cita</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


            </div>
            <!-- Add Pagination -->
            <div class="swiper-scrollbar"></div>
            <div class="swiper-button-next "></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>




    <!-- smartdev_features_area -->
    <div class="smartdev_features_area">
        <div class="container">
            <div class="row features">
                <!-- smartdev_features_01 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="all_feature_color single_feature2 text-left">
                        <div class="witr_feature2">
                            <div class="witr_fea2_icon_top">
                                <i class="fas fa-heart"></i>
                            </div>
                            <h3>Calidez</h3>
                            <p>Te tratamos y cuidamos tu integridad y salud como familia </p>
                            <div class="witr_feature2_icon">
                                <i class="fas fa-wheelchair"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- smartdev_features_02 -->
                <div class="col-lg-4 col-md-6 col-sm-12 pdlf">
                    <div class="all_feature_color single_feature2 text-left">
                        <div class="witr_feature2">
                            <div class="witr_fea2_icon_top">
                                <i class="fas fa-briefcase-medical"></i>
                            </div>
                            <h3>Confianza</h3>
                            <p>Hacemos bien el trabajo a la primera y cuidamos cada detalle</p>
                            <div class="witr_feature2_icon">
                                <i class="fas fa-briefcase-medical"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- smartdev_features_03 -->
                <div class="col-lg-4 col-md-6 col-sm-12 pdlf">
                    <div class="all_feature_color single_feature2 text-left">
                        <div class="witr_feature2">
                            <div class="witr_fea2_icon_top">
                                <i class="fas fa-check"></i>
                            </div>
                            <h3>Calidad</h3>
                            <p>Solo utilizamos los mejores materiales, en las mas especializadas instalaciones.</p>
                            <div class="witr_feature2_icon">
                                <i class="fas fa-flask"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- smartdev_about_area -->
    <div id="nosotros" class="smartdev_about_area">
        <div class="container">
            <div class="row about_area">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single_image_area">
                        <div class="single_image  ">
                            <img src="assets/images/doctor_1.png" 
                            alt="Dr. Daniel Ponce Covarrubias, cirujano ortopedista 
                            en Puerto Vallarta y Nuevo Nayarit">
                        </div>
                    </div>
                    <div class="row video_area">
                        <div class="col-lg-6 col-md-6 col-sm-12"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="video-part">
                                <div class="video-overlay witr_all_color_v">
                                    <div class="video-item text-center">
                                         <a
                                        class="video-popup video-vemo-icon venobox vbox-item"
                                        data-vbtype="youtube"
                                        data-autoplay="true"
                                        href="https://www.youtube.com/shorts/uMhoaKaF1Z8"
                                        aria-label="Ver video del Dr. Daniel Ponce"
                                    >
                                        <i class="fas fa-play"></i>
                                    </a>
                                        <h3> Conoce al Dr. Daniel Ponce </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="witr_section_right">
                        <div class="witr_section_title">
                            <div class="witr_section_title_inner text-justify">
                                <h2>Dr. Daniel Ponce Covarrubias</h2>
                                <h3> Cirujano Ortopedista Certificado</h3>
                                <p> El Dr. Daniel Ponce Covarrubias es médico
                                especialista en ortopedia y traumatología.
                                Realizó su formación médica en la Universidad
                                de Guadalajara y posteriormente cursó su
                                especialidad dentro del Instituto Mexicano
                                del Seguro Social (IMSS), con rotaciones en
                                Ciudad de México, Estados Unidos y Latinoamérica.
                                </p>
                            </div>
                        </div>
                        <div class="em-service2 sleft all_color_service">
                            <div class="em_service_content ">
                                <div class="em_single_service_text">
                                    <div class="service_top_image"></div>
                                    <div class="text_box witr_s_flex">
                                        <div class="service_top_text all_icon_color">
                                        </div>
                                        <div class="em-service-inner">
                                            <div class="em-service-title">
                                                <h3>Experiencia en cirugía ortopédica</h3>
                                            </div>
                                            <div class="em-service-desc text-justify">
                                                 <p>
                                                Con más de 10 años de experiencia,
                                                su práctica se ha enfocado en
                                                cirugía de reemplazo articular y
                                                cirugía artroscópica, incluyendo
                                                procedimientos de rodilla, cadera
                                                y hombro.
                                            </p>

                                            <p>
                                                Actualmente atiende pacientes
                                                locales e internacionales en
                                                Puerto Vallarta y Nuevo Nayarit,
                                                con un enfoque en atención
                                                personalizada, seguridad y
                                                recuperación funcional.
                                            </p>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="em-service2 sleft all_color_service">
                            <div class="em_service_content ">
                                <div class="em_single_service_text width_height_link_0 ">
                                    <div class="service_top_image"></div>
                                    <div class="text_box witr_s_flex">
                                        <div class="service_top_text all_icon_color">
                                            <div class="em-service-icon">
                                                <i class="fas fa-check"></i>
                                            </div>
                                        </div>
                                        <div class="em-service-inner">

                                        <div class="em-service-title">

                                            <h3>
                                                Certificaciones y formación
                                            </h3>

                                        </div>
                                        <div class="em-service-desc">

                                            <p>
                                                Médico certificado por el
                                                Consejo Mexicano de Ortopedia
                                                y Traumatología.
                                            </p>

                                            <p>
                                                <strong>Cédula Profesional:</strong>
                                                9390291
                                                (Universidad de Guadalajara)
                                            </p>

                                            <p>
                                                <strong>Cédula de Especialidad:</strong>
                                                11578894
                                                (Universidad de Guanajuato)
                                            </p>

                                            <p>
                                                <strong>Certificación del Consejo Mexicano
                                                de Ortopedia y Traumatología:</strong>
                                                18/4860/24
                                            </p>

                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                        <div class="em-service2 sleft all_color_service">

                        <div class="em_service_content">

                            <div class="em_single_service_text width_height_link_0">

                                <div class="service_top_image"></div>


                                <div class="text_box witr_s_flex">

                                    <div class="service_top_text all_icon_color">

                                        <div class="em-service-icon">

                                            <i class="fas fa-check"></i>

                                        </div>

                                    </div>


                                    <div class="em-service-inner">

                                        <div class="em-service-title">

                                            <h3>
                                                Asociaciones médicas
                                            </h3>

                                        </div>


                                        <div class="em-service-desc">

                                            <p>
                                                Miembro activo de FEMECOT y
                                                socio de AMECRA. Ha participado
                                                como ponente en congresos
                                                médicos nacionales.
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

    </div>

</div>


{{-- =========================================================
    SERVICIOS ORTOPÉDICOS
========================================================== --}}

<div class="smartdev_tab_contant_area" id="servicios">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="witr_section_title">

                    <div class="witr_section_title_inner text-center">

                        <h2>
                            Servicios Ortopédicos
                        </h2>

                        <div class="witr_image_title">

                            <img
                                src="{{ asset('assets/images/title-icon-1.png') }}"
                                alt="Servicios de ortopedia y traumatología en Orthobay Vallarta"
                            >

                        </div>

                        <h3>
                            Cirugía de rodilla, cadera y hombro en Puerto Vallarta y Nuevo Nayarit
                        </h3>

                    </div>

                </div>

            </div>



            <div class="col-lg-12 tab_top">

                <div class="witr_adv_tab_area witr_taba_style1 tab_all_colora">


                    {{-- =====================================================
                        NAVEGACIÓN DE SERVICIOS
                    ====================================================== --}}

                    <div class="witr_adv_tab_menu">

                        <ul class="nav nav-tabs">

                            <li class="nav-item">

                                <a
                                    class="nav-link epo-4931cc5 active"
                                    href="{{ url('/es') }}#rodilla"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-bone"></i>
                                    </span>

                                    <strong>
                                        Cirugía de rodilla
                                    </strong>

                                </a>

                            </li>


                            <li class="nav-item">

                                <a
                                    class="nav-link epo-7b0660d"
                                    href="{{ url('/es') }}#cadera"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-bone"></i>
                                    </span>

                                    <strong>
                                        Cirugía de cadera
                                    </strong>

                                </a>

                            </li>


                            <li class="nav-item">

                                <a
                                    class="nav-link epo-1b77303"
                                    href="{{ url('/es') }}#hombro"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-user-alt-3"></i>
                                    </span>

                                    <strong>
                                        Cirugía de hombro
                                    </strong>

                                </a>

                            </li>

                        </ul>

                    </div>



                    {{-- =====================================================
                        PROCEDIMIENTOS
                    ====================================================== --}}

                    <div class="smartdev_serivce_bg_area serivce_bg">

                        <div class="container">

                            <div class="row service_top">


                                {{-- =================================================
                                    PRÓTESIS DE RODILLA
                                ================================================== --}}

                                <div
                                    id="rodilla"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_rodilla.png') }}"
                                                alt="Cirugía de prótesis de rodilla en Puerto Vallarta con el Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Prótesis de rodilla
                                            </h3>


                                            <p>
                                                La prótesis de rodilla es una
                                                cirugía en la que se reemplaza
                                                la parte desgastada de la
                                                articulación por un implante
                                                diseñado para recuperar el
                                                movimiento y disminuir el dolor.
                                            </p>

                                            <p>
                                                Puede recomendarse cuando el
                                                desgaste de la articulación,
                                                la artrosis u otras lesiones
                                                afectan significativamente la
                                                movilidad y la calidad de vida.
                                            </p>


                                            <h4>
                                                Beneficios
                                            </h4>

                                            <ul>

                                                <li>
                                                    Ayuda a disminuir el dolor.
                                                </li>

                                                <li>
                                                    Mejora la movilidad de la rodilla.
                                                </li>

                                                <li>
                                                    Permite caminar con mayor
                                                    estabilidad y seguridad.
                                                </li>

                                                <li>
                                                    Facilita el regreso a las
                                                    actividades de la vida diaria.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    ARTROSCOPIA DE RODILLA
                                ================================================== --}}

                                <div
                                    id="artroscopia-rodilla"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/artroscopia_rodilla.png') }}"
                                                alt="Artroscopia de rodilla en Puerto Vallarta con el Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Artroscopia de rodilla
                                            </h3>


                                            <p>
                                                La artroscopia de rodilla es un
                                                procedimiento mínimamente invasivo
                                                que utiliza una pequeña cámara e
                                                instrumentos especializados para
                                                diagnosticar y tratar lesiones
                                                dentro de la articulación.
                                            </p>

                                            <p>
                                                Puede utilizarse para tratar
                                                problemas de meniscos, ligamentos,
                                                cartílago y otras estructuras de
                                                la rodilla.
                                            </p>


                                            <h4>
                                                Beneficios
                                            </h4>

                                            <ul>

                                                <li>
                                                    Incisiones pequeñas y
                                                    cicatrices discretas.
                                                </li>

                                                <li>
                                                    Menor agresión de los tejidos
                                                    durante el procedimiento.
                                                </li>

                                                <li>
                                                    Recuperación generalmente más
                                                    rápida que con procedimientos
                                                    abiertos tradicionales.
                                                </li>

                                                <li>
                                                    Facilita el regreso progresivo
                                                    a las actividades cotidianas.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    PRÓTESIS DE CADERA
                                ================================================== --}}

                                <div
                                    id="cadera"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_cadera.png') }}"
                                                alt="Cirugía de prótesis de cadera en Puerto Vallarta con el Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Prótesis de cadera
                                            </h3>


                                            <p>
                                                La prótesis de cadera es una
                                                cirugía en la que se reemplaza
                                                la articulación dañada por un
                                                implante artificial diseñado
                                                para reducir el dolor y recuperar
                                                el movimiento.
                                            </p>

                                            <p>
                                                Puede recomendarse cuando el
                                                desgaste, la artrosis, una
                                                fractura u otra lesión afectan
                                                considerablemente la movilidad
                                                y la calidad de vida.
                                            </p>


                                            <h4>
                                                Beneficios
                                            </h4>

                                            <ul>

                                                <li>
                                                    Ayuda a disminuir o eliminar
                                                    el dolor de la cadera.
                                                </li>

                                                <li>
                                                    Mejora la movilidad y la
                                                    estabilidad al caminar.
                                                </li>

                                                <li>
                                                    Facilita la realización de
                                                    actividades cotidianas.
                                                </li>

                                                <li>
                                                    Puede mejorar la independencia
                                                    y calidad de vida del paciente.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    PRÓTESIS DE HOMBRO
                                ================================================== --}}

                                <div
                                    id="hombro"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_hombro.png') }}"
                                                alt="Cirugía de prótesis de hombro en Puerto Vallarta con el Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Prótesis de hombro
                                            </h3>


                                            <p>
                                                La prótesis de hombro es una
                                                cirugía en la que se reemplaza
                                                total o parcialmente la
                                                articulación dañada por un
                                                implante artificial.
                                            </p>

                                            <p>
                                                Puede recomendarse ante desgaste
                                                severo, artrosis, fracturas u
                                                otras lesiones que producen dolor
                                                y limitan el movimiento del brazo.
                                            </p>


                                            <h4>
                                                Beneficios
                                            </h4>

                                            <ul>

                                                <li>
                                                    Ayuda a disminuir el dolor
                                                    del hombro.
                                                </li>

                                                <li>
                                                    Favorece la recuperación de
                                                    la movilidad y función del brazo.
                                                </li>

                                                <li>
                                                    Facilita actividades
                                                    cotidianas.
                                                </li>

                                                <li>
                                                    Puede mejorar la independencia
                                                    y calidad de vida.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    ARTROSCOPIA DE HOMBRO
                                ================================================== --}}

                                <div
                                    id="artroscopia-hombro"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/artroscopia_hombro.png') }}"
                                                alt="Artroscopia de hombro en Puerto Vallarta con el Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Artroscopia de hombro
                                            </h3>


                                            <p>
                                                La artroscopia de hombro es un
                                                procedimiento mínimamente invasivo
                                                que utiliza una pequeña cámara e
                                                instrumentos especializados para
                                                diagnosticar y tratar lesiones
                                                dentro de la articulación.
                                            </p>

                                            <p>
                                                Puede utilizarse en lesiones del
                                                manguito rotador, labrum, tendones,
                                                ligamentos y otros problemas que
                                                afectan la función del hombro.
                                            </p>


                                            <h4>
                                                Beneficios
                                            </h4>

                                            <ul>

                                                <li>
                                                    Incisiones pequeñas y
                                                    cicatrices discretas.
                                                </li>

                                                <li>
                                                    Menor agresión a los tejidos.
                                                </li>

                                                <li>
                                                    Recuperación progresiva de
                                                    la movilidad y función.
                                                </li>

                                                <li>
                                                    Facilita el regreso a las
                                                    actividades cotidianas y
                                                    deportivas según cada caso.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>


                            </div>

                        </div>

                    </div>
                        </div>

                        <!-- Tab panes -->
                        {{-- =========================================================
    TURISMO MÉDICO / POR QUÉ ELEGIR ORTHOBAY
========================================================== --}}

<div class="witr_adv_tab_content">

    <div class="tab-content">

        <div class="tab-pane fade active show">

            <div class="row tab_pane_bg">


                {{-- =====================================================
                    INFORMACIÓN
                ====================================================== --}}

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="witr_tab_right">

                        <div class="witr_section_title">


                            {{-- POR QUÉ VIAJAR --}}
                            <div class="witr_section_title_inner text-left">

                                <h2>
                                    ¿Por qué viajar a Puerto Vallarta para una cirugía ortopédica?
                                </h2>

                                <p>
                                    Puerto Vallarta y Nuevo Nayarit se han
                                    convertido en destinos atractivos para
                                    pacientes que buscan atención médica
                                    especializada mientras disfrutan de una
                                    ubicación accesible y bien conectada con
                                    Estados Unidos y Canadá.
                                </p>

                                <p>
                                    El Dr. Daniel Ponce Covarrubias brinda
                                    atención ortopédica a pacientes locales e
                                    internacionales, ofreciendo valoración
                                    personalizada, cirugía ortopédica
                                    especializada y seguimiento durante el
                                    proceso de recuperación.
                                </p>

                            </div>



                            {{-- PUERTO VALLARTA --}}
                            <div class="witr_section_title_inner text-left">

                                <h2>
                                    Atención ortopédica en Puerto Vallarta y Nuevo Nayarit
                                </h2>

                                <p>
                                    Orthobay Vallarta ofrece atención para
                                    cirugía de rodilla, cadera y hombro,
                                    incluyendo reemplazo articular y
                                    procedimientos artroscópicos.
                                </p>

                                <p>
                                    El consultorio principal se encuentra en
                                    Núcleo Médico Joya, en Nuevo Nayarit,
                                    dentro de una zona hospitalaria cercana
                                    a Puerto Vallarta y al Aeropuerto
                                    Internacional de Puerto Vallarta.
                                </p>

                            </div>

                        </div>



                        {{-- =================================================
                            BENEFICIOS
                        ================================================== --}}

                        <div class="em-service2 sleft all_color_service border_top">

                            <div class="em_service_content">

                                <div class="em_single_service_text width_height_link_0">

                                    <div class="service_top_image"></div>


                                    <div class="text_box witr_s_flex">

                                        <div class="service_top_text all_icon_color">

                                            <div class="em-service-icon">
                                                <i class="icofont-rounded-double-right"></i>
                                            </div>

                                        </div>


                                        <div class="em-service-inner">

                                            <div class="em-service-title">

                                                <div class="witr_section_title_inner text-left">

                                                    <h3>
                                                        Ventajas para pacientes internacionales
                                                    </h3>

                                                    <ul class="menu">

                                                        <li>
                                                            Atención personalizada
                                                            con un cirujano
                                                            ortopedista certificado.
                                                        </li>

                                                        <li>
                                                            Personal con atención
                                                            para pacientes
                                                            internacionales.
                                                        </li>

                                                        <li>
                                                            Instalaciones
                                                            hospitalarias
                                                            especializadas.
                                                        </li>

                                                        <li>
                                                            Opciones de cirugía
                                                            de rodilla, cadera
                                                            y hombro.
                                                        </li>

                                                        <li>
                                                            Valoración y plan de
                                                            tratamiento
                                                            individualizado.
                                                        </li>

                                                        <li>
                                                            Comunicación por
                                                            WhatsApp antes y
                                                            durante su estancia.
                                                        </li>

                                                    </ul>

                                                </div>

                                            </div>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>



                        {{-- =================================================
                            COSTOS / COTIZACIÓN
                        ================================================== --}}

                        <div class="tab_title">

                            <h3>
                                Consulta opciones de tratamiento y costos para tu cirugía ortopédica
                            </h3>

                            <p>
                                Cada procedimiento se cotiza de acuerdo con
                                las necesidades del paciente, el tipo de
                                cirugía y los servicios hospitalarios
                                requeridos.
                            </p>

                        </div>



                        {{-- =================================================
                            CTA
                        ================================================== --}}

                        <div class="witr_button_area">

                            <div class="witr_btn_style mr">

                                <div class="witr_btn_sinner">

                                    <a
                                        href="{{ url('/es') }}#contacto"
                                        class="witr_btn"
                                    >
                                        Solicitar información
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    IMAGEN
                ====================================================== --}}

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="witr_play_vi witr_all_color_v">

                        <div class="witr_videobg_image">

                            <img
                                src="{{ asset('assets/images/hospital_ortopedia.png') }}"
                                alt="Instalaciones para cirugía ortopédica en Puerto Vallarta y Nuevo Nayarit"
                            >

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    CIERRE DE LA SECCIÓN DE SERVICIOS
========================================================== --}}

                </div>
            </div>
        </div>
    </div>
</div>
    <!-- smartdev_video_area -->
    <div class="smartdev_video_area">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_play_vi witr_all_color_v">
                        <div class="witr_videobg_image">
                            <div class="play-overlay ">
                                <a class="video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                    data-autoplay="true" href="#">
                                    <i class="fas fa-play"></i>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


@endsection
