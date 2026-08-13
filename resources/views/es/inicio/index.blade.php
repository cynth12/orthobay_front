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


    <!-- smartdev_tab_contant_area -->
    <div class="smartdev_tab_contant_area" id="tab">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="witr_section_title">
                        <div class="witr_section_title_inner text-center">
                            <h2>Servicios Ortopédicos Integrales</h2>
                            <div class="witr_image_title">
                                <img src="assets/images/title-icon-1.png" alt="">
                            </div>
                            <h3>Puerto Vallarta México</h3>
                            <h1></h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 tab_top">
                    <div class="witr_adv_tab_area witr_taba_style1 tab_all_colora">
                        <div class="witr_adv_tab_menu">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link epo-4931cc5 active" data-toggle="tab"
                                        href="index-2.html#tx_tab_01">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-bone"></i>
                                        </span>
                                        <strong>Cirugia de Rodilla</strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link epo-1b77303" data-toggle="tab" href="index-2.html#tx_tab_02">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-user-alt-3"></i>
                                        </span>
                                        <strong>Cirugia de hombro</strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link epo-7b0660d" data-toggle="tab" href="index-2.html#tx_tab_03">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-bone"></i>
                                        </span>
                                        <strong>Cirugia de cadera</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>

                        <!-- smartdev_serivce_bg_area -->
                        <div id="rodilla" class="smartdev_serivce_bg_area serivce_bg">
                            <div class="container">
                                <div class="row service_top">
                                    <!-- smartdev_serivce_bg_01 -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service  text-left  ">
                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_rodilla.png" alt="">
                                            </div>
                                            <div class="text_box all_icon_color">

                                                <h3>🦵<a>Protesis de rodilla</a></h3>
                                                <p>
                                                <p style="text-align: justify;">
                                                    <br>

                                                    La prótesis de rodilla es una cirugía en la que se reemplaza la parte
                                                    desgastada de la articulación por un implante diseñado para devolver el
                                                    movimiento y disminuir el dolor. Se recomienda cuando el desgaste o la
                                                    artritis impiden caminar con normalidad.
                                                </p>

                                                <h5>Beneficios</h5>

                                                <ul>
                                                    <li>Alivia el dolor.</li>
                                                    <li>Mejora la movilidad.</li>
                                                    <li>Permite volver a caminar con mayor seguridad.</li>
                                                    <li>Ayuda a retomar las actividades de la vida diaria.</li>
                                                </ul>
                                                </p>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- smartdev_serivce_bg_02 -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service  text-left  ">
                                            <div class="service_top_image">
                                                <img src="assets/images/artroscopia_rodilla.png" alt="">
                                            </div>
                                            <div class="text_box all_icon_color">
                                                <h3>🔍 <a>Artroscopia de rodilla</a></h3>
                                                <p style="text-align: justify;">
                                                    <br>

                                                    La artroscopia de rodilla es un procedimiento mínimamente invasivo que
                                                    utiliza una pequeña cámara e instrumentos especiales para diagnosticar y
                                                    tratar
                                                    lesiones dentro de la articulación, como daños en los meniscos,
                                                    ligamentos o
                                                    cartílago.
                                                </p>

                                                <h5>Beneficios</h5>

                                                <ul class="list-unstyled">
                                                    <li> Incisiones
                                                        pequeñas y cicatrices discretas.</li>
                                                    <li>Menor dolor
                                                        después del procedimiento.</li>
                                                    <li> Recuperación más
                                                        rápida que una cirugía tradicional.</li>
                                                    <li>Permite regresar
                                                        antes a las actividades diarias.</li>
                                                </ul>
                                                <!--<div class="service-btn btn2">
                                           <a href="#">Read More<span class="ti-arrow-right"></span></a>
                                          </div>-->
                                            </div>
                                        </div>
                                    </div>
                                    <!-- smartdev_serivce_bg_03 -->
                                    <div id="cadera" class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service  text-left  ">
                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_cadera.png" alt="">
                                            </div>
                                            <div class="text_box all_icon_color">

                                                <h3>🦴 </a>Protesis de cadera</h3>
                                                <p style="text-align: justify;"><br>
                                                    La prótesis de cadera es una cirugía en la que se reemplaza la
                                                    articulación dañada por un implante artificial diseñado para eliminar el
                                                    dolor y
                                                    recuperar el movimiento. Se recomienda cuando el desgaste, la artritis o
                                                    una
                                                    lesión afectan la calidad de vida</p>
                                                <h5>Beneficios</h5>

                                                <ul class="list-unstyled">
                                                    <li> Disminuye o
                                                        elimina el dolor de la cadera.</li>
                                                    <li> Mejora la
                                                        movilidad y la estabilidad al caminar.</li>
                                                    <li> Permite retomar
                                                        las actividades diarias con mayor comodidad.</li>
                                                    <li> Mejora la
                                                        calidad de vida y la independencia del paciente.</li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- smartdev_serivce_bg_04 -->
                                    <div id="hombro" class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service  text-left  ">
                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_hombro.png" alt="">
                                            </div>
                                            <div class="text_box all_icon_color">
                                                <!--<i class="icofont-ambulance-crescent"></i>--->
                                                <h3>💪<a>Protesis de hombro</a></h3><br>
                                                <p style="text-align: justify;">La prótesis de hombro es una cirugía en la
                                                    que se reemplaza la
                                                    articulación
                                                    dañada por un implante artificial para aliviar el dolor y recuperar el
                                                    movimiento
                                                    del brazo. Se recomienda cuando existe un desgaste severo, artritis o
                                                    fracturas
                                                    que limitan las actividades diarias y afectan la calidad de vida.</p>

                                                <h5>Beneficios</h5>

                                                <ul class="list-unstyled">
                                                    <li> Reduce o elimina
                                                        el dolor del hombro.</li>
                                                    <li> Recupera la
                                                        movilidad y la función del brazo.</li>
                                                    <li> Facilita
                                                        realizar actividades cotidianas con mayor comodidad.</li>
                                                    <li> Mejora la
                                                        calidad de vida y la independencia del paciente.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- smartdev_serivce_bg_05 -->
                                    <div id="hombro" class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service  text-left  ">
                                            <div class="service_top_image">
                                                <img src="assets/images/artroscopia_hombro.png" alt="">
                                            </div>
                                            <div class="text_box all_icon_color">
                                                <!--<i class="icofont-heart-beat"></i>--->
                                                <h3>💪 <a>Artroscopia de hombro</a></h3><br>
                                                <p style="text-align: justify;">


                                                    La artroscopia de hombro es un procedimiento mínimamente invasivo que
                                                    utiliza
                                                    una pequeña cámara e instrumentos especializados para diagnosticar y
                                                    reparar
                                                    lesiones dentro de la articulación, como desgarros del manguito rotador,
                                                    lesiones del labrum, tendinitis o problemas de los ligamentos.
                                                </p>

                                                <h5>Beneficios</h5>

                                                <ul>
                                                    <li>Incisiones pequeñas y cicatrices discretas.</li>
                                                    <li>Menor dolor después del procedimiento.</li>
                                                    <li>Recuperación más rápida que una cirugía convencional.</li>
                                                    <li>Permite recuperar la movilidad y la función del hombro.</li>
                                                    <li>Facilita el regreso a las actividades diarias y deportivas.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>
                                    <!-- smartdev_serivce_bg_06 -->
                                </div>
                            </div>
                        </div>

                        <!-- Tab panes -->
                        <div class="witr_adv_tab_content">
                            <div class="tab-content">
                                <div class="tab-pane fade epo-4931cc5 active show" id="tx_tab_01">
                                    <div class="row tab_pane_bg">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="witr_tab_right">
                                                <div class="witr_section_title">
                                                    <div class="witr_section_title_inner text-left">
                                                        <h2>¿Por qué viajar para ver al Dr. Daniel?</h2>
                                                        <p>Viajar a México para una cirugía ortopédica puede ser
                                                            una opción rentable, ofreciendo servicios médicos de alta
                                                            calidad a
                                                            una fracción del precio encontrado en EE. UU.
                                                            y con tiempos de espera más cortos que en Canadá.</p>
                                                    </div>
                                                    <div class="witr_section_title_inner text-left">
                                                        <h2>Puerto Vallarta</h2>
                                                        <p>Puerto Vallarta, ubicado en la costa del Pacífico
                                                            de México, es conocido por sus impresionantes playas,
                                                            vibrante vida nocturna y rica historia cultural.
                                                            Este pintoresco destino ofrece una mezcla perfecta
                                                            de relajación y aventura, con actividades que van
                                                            desde la observación de ballenas hasta explorar
                                                            calles adoquinadas y galerías de arte locales.</p>
                                                    </div>
                                                </div>
                                                <div class="em-service2 sleft all_color_service border_top">
                                                    <div class="em_service_content ">
                                                        <div class="em_single_service_text width_height_link_0 ">
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
                                                                            <h2>Beneficios</h2><br>
                                                                            <ul class="menu">
                                                                                <li></i>Instalaciones de Última Generación
                                                                                </li>
                                                                                <li></i>Personal Bilingüe</li>
                                                                                <li></i>Tratamiento en Solo Unas Semanas
                                                                                </li>
                                                                                <li></i>Una Fracción del Costo en EE. UU.
                                                                                </li>
                                                                            </ul>
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="tab_title">
                                                    <h2>La cirugía con el Dr. Daniel puede ser hasta un 70% más barata que
                                                        realizar la misma cirugía en los Estados Unidos.</h2>
                                                </div>
                                                <div class="witr_button_area">
                                                    <div class="witr_btn_style mr">
                                                        <div class="witr_btn_sinner">
                                                            <!--<a href="index-2.html#" class="witr_btn">Leer mas
                                                                                        <div class="pluse_btn_icon">
                                                                                            <span class="fas fa-arrow-right"></span>
                                                                                        </div>
                                                                                    </a>-->
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="witr_play_vi witr_all_color_v">
                                                <div class="witr_videobg_image">
                                                    <img src="assets/images/hospital_ortopedia.png" alt="">
                                                    <!--<div class="play-overlay ">
                                                                                            <a class="video-popup video-vemo-icon venobox vbox-item"
                                                                                                data-vbtype="youtube" data-autoplay="true"
                                                                                                href="#">
                                                                                                <i class="fas fa-play"></i>
                                                                                            </a>
                                                                                        </div>-->
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <div class="tab-pane fade epo-1b77303" id="tx_tab_02">
                                    <div class="row tab_pane_bg">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="witr_play_vi witr_all_color_v">
                                                <div class="witr_videobg_image">
                                                    <img src="assets/images/hospital_ortopedia.png" alt="">
                                                    <!--<div class="play-overlay ">
                                                                                            <a class="video-popup video-vemo-icon venobox vbox-item"
                                                                                                data-vbtype="youtube" data-autoplay="true"
                                                                                                href="#">
                                                                                                <i class="fas fa-play"></i>
                                                                                            </a>
                                                                                        </div>-->
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
