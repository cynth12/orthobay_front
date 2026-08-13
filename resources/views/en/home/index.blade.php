@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')

    <div id="home" class="witr_swiper_area">
        <div class="swiper-container witr_active_id5 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide witr_swiper_height"
                    style="background-image: url('assets/images/daniel_ponce.png'); background-size: contain; background-repeat: no-repeat; 
			background-position: right center; background-color: #dff3f2; ">
                    <div class="witr_sw_text_area text-left">
                        <div class="witr_swiper_content ">
                            <h1>
                            Orthopedic Surgeon in Puerto Vallarta
                        </h1>

                        <h2>
                            Dr. Daniel Ponce Covarrubias
                        </h2>
                            <p> Specialized orthopedic care including joint
                            replacement and arthroscopic surgery of the knee,
                            hip, and shoulder for local and international
                            patients in Puerto Vallarta and Nuevo Nayarit.</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="#contacto">Make Appointment</a>
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
                             <h2>
                            Specialized Orthopedic Care
                        </h2>

                        <h3>
                            Knee, Hip and Shoulder Surgery in Puerto Vallarta
                        </h3>

                            <p>Receive professional and personalized orthopedic
                            care with treatment options adapted to your needs,
                            whether you live in the region or are traveling
                            to Mexico from abroad.</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="#contacto">Make Appointment</a>
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
                                <i class="fas fa-wheelchair"></i>
                            </div>
                            <h3>Warmth</h3>
                            <p>We treat you and care for your integrity and health like family</p>
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
                            <h3>Trust</h3>
                            <p>We get the job done right the first time, taking care of every detail.</p>
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
                                <i class="fas fa-flask"></i>
                            </div>
                            <h3>Quality</h3>
                            <p>We use only the best materials, in top-tier specialized facilities.</p>
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
{{-- =========================================================
    ABOUT DR. DANIEL PONCE
========================================================== --}}

<div id="about" class="smartdev_about_area">

    <div class="container">

        <div class="row about_area">


            {{-- DOCTOR PHOTO --}}
            <div class="col-lg-6 col-md-12 col-sm-12">

                <div class="single_image_area">

                    <div class="single_image">

                        <img
                            src="{{ asset('assets/images/doctor_1.png') }}"
                            alt="Dr. Daniel Ponce Covarrubias, orthopedic surgeon in Puerto Vallarta and Nuevo Nayarit"
                        >

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
                                        aria-label="Watch a video about Dr. Daniel Ponce"
                                    >
                                        <i class="fas fa-play"></i>
                                    </a>

                                    <h3>
                                        Meet Dr. Daniel Ponce
                                    </h3>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>

            </div>



            {{-- DOCTOR INFORMATION --}}
            <div class="col-lg-6 col-md-12 col-sm-12">

                <div class="witr_section_right">


                    <div class="witr_section_title">

                        <div class="witr_section_title_inner text-justify">

                            <h2>
                                Dr. Daniel Ponce Covarrubias
                            </h2>

                            <h3>
                                Board-Certified Orthopedic Surgeon
                            </h3>

                            <p>
                                Dr. Daniel Ponce Covarrubias is a physician
                                specializing in orthopedics and traumatology.
                                He completed his medical training at the
                                University of Guadalajara and later completed
                                his specialty training within the Mexican
                                Social Security Institute (IMSS), with
                                rotations in Mexico City, the United States,
                                and Latin America.
                            </p>

                        </div>

                    </div>



                    {{-- EXPERIENCE --}}
                    <div class="em-service2 sleft all_color_service">

                        <div class="em_service_content">

                            <div class="em_single_service_text">

                                <div class="service_top_image"></div>


                                <div class="text_box witr_s_flex">

                                    <div class="service_top_text all_icon_color"></div>


                                    <div class="em-service-inner">

                                        <div class="em-service-title">

                                            <h3>
                                                Experience in Orthopedic Surgery
                                            </h3>

                                        </div>


                                        <div class="em-service-desc text-justify">

                                            <p>
                                                With more than 10 years of
                                                experience, his practice has
                                                focused on joint replacement
                                                surgery and arthroscopic surgery,
                                                including procedures of the knee,
                                                hip, and shoulder.
                                            </p>

                                            <p>
                                                He currently provides care to
                                                local and international patients
                                                in Puerto Vallarta and Nuevo
                                                Nayarit, with an emphasis on
                                                personalized care, safety, and
                                                functional recovery.
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- CERTIFICATIONS AND TRAINING --}}
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
                                                Certifications and Training
                                            </h3>

                                        </div>


                                        <div class="em-service-desc">

                                            <p>
                                                Certified by the Mexican Board
                                                of Orthopedics and Traumatology.
                                            </p>

                                            <p>
                                                <strong>Medical License:</strong>
                                                9390291
                                                (University of Guadalajara)
                                            </p>

                                            <p>
                                                <strong>Specialty License:</strong>
                                                11578894
                                                (University of Guanajuato)
                                            </p>

                                            <p>
                                                <strong>Mexican Board of
                                                Orthopedics and Traumatology
                                                Certification:</strong>
                                                18/4860/24
                                            </p>

                                        </div>

                                    </div>

                                </div>

                            </div>

                        </div>

                    </div>



                    {{-- MEDICAL ASSOCIATIONS --}}
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
                                                Medical Associations
                                            </h3>

                                        </div>


                                        <div class="em-service-desc">

                                            <p>
                                                Active member of FEMECOT and
                                                AMECRA. He has also participated
                                                as a speaker at national medical
                                                conferences.
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
                            <h2>Orthopedic Services</h2>
                            <div class="witr_image_title">
                                <img src="assets/images/title-icon-1.png" alt="">
                            </div>
                            <h3></h3>
                            <h1>Puerto Vallarta, Mexico</h1>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 tab_top">
                    <div class="witr_adv_tab_area witr_taba_style1 tab_all_colora">
                        <div class="witr_adv_tab_menu">
                            <ul class="nav nav-tabs">
                                <li class="nav-item">
                                    <a class="nav-link epo-4931cc5" data-toggle="tab" href="index-2.html#tx_tab_01">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-bone"></i>
                                        </span>
                                        <strong>Knee Surgery</strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link epo-1b77303" data-toggle="tab" href="index-2.html#tx_tab_02">
                                        <span class="witr_tab_icona">
                                            <i class=""></i>
                                        </span>
                                        <strong>Shoulder Surgery</strong>
                                    </a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link epo-7b0660d" data-toggle="tab" href="index-2.html#tx_tab_03">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-bone"></i>
                                        </span>
                                        <strong>Hip Surgery</strong>
                                    </a>
                                </li>
                            </ul>
                        </div>
                        <!-- Tab panes -->
                        <!-- smartdev_serivce_bg_area -->
                        <div id="knee" class="smartdev_serivce_bg_area serivce_bg">
                            <div class="container">
                                <div class="row service_top">

                                    <!-- Knee Replacement -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service text-left">
                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_rodilla.png" alt="">
                                            </div>

                                            <div class="text_box all_icon_color">

                                                <h3>🦵 <a>Knee Replacement</a></h3>

                                                <p style="text-align: justify;">
                                                    <br>

                                                    Knee replacement is a surgical procedure in which the damaged
                                                    parts of the knee joint are replaced with an artificial implant
                                                    designed to relieve pain and restore movement. It is recommended
                                                    when arthritis or joint wear makes walking and daily activities
                                                    difficult.
                                                </p>

                                                <h5>Benefits</h5>

                                                <ul>
                                                    <li>Relieves knee pain.</li>
                                                    <li>Improves mobility.</li>
                                                    <li>Helps you walk more comfortably and safely.</li>
                                                    <li>Allows you to return to everyday activities.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Knee Arthroscopy -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">
                                        <div class="service-item all_color_service text-left">

                                            <div class="service_top_image">
                                                <img src="assets/images/artroscopia_rodilla.png" alt="">
                                            </div>

                                            <div class="text_box all_icon_color">

                                                <h3>🔍 <a>Knee Arthroscopy</a></h3>

                                                <p style="text-align: justify;">
                                                    <br>

                                                    Knee arthroscopy is a minimally invasive procedure that uses a
                                                    small camera and specialized instruments to diagnose and treat
                                                    injuries inside the knee joint, including damage to the meniscus,
                                                    ligaments, or cartilage.
                                                </p>

                                                <h5>Benefits</h5>

                                                <ul>
                                                    <li>Small incisions with minimal scarring.</li>
                                                    <li>Less pain after surgery.</li>
                                                    <li>Faster recovery than traditional surgery.</li>
                                                    <li>Earlier return to daily activities.</li>
                                                </ul>

                                            </div>
                                        </div>
                                    </div>

                                    <!-- Hip Replacement -->
                                    <div id="hip" class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="service-item all_color_service text-left">

                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_cadera.png" alt="">
                                            </div>

                                            <div class="text_box all_icon_color">

                                                <h3>🦴 <a>Hip Replacement</a></h3>

                                                <p style="text-align: justify;">
                                                    <br>

                                                    Hip replacement is a procedure in which the damaged hip joint is
                                                    replaced with an artificial implant to relieve pain and restore
                                                    movement. It is recommended when arthritis, joint wear, or injury
                                                    affects mobility and quality of life.
                                                </p>

                                                <h5>Benefits</h5>

                                                <ul>
                                                    <li>Relieves or eliminates hip pain.</li>
                                                    <li>Improves mobility and walking stability.</li>
                                                    <li>Helps you return to your daily routine.</li>
                                                    <li>Improves overall quality of life.</li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- Shoulder Replacement -->
                                    <div id="shoulder" class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="service-item all_color_service text-left">

                                            <div class="service_top_image">
                                                <img src="assets/images/protesis_hombro.png" alt="">
                                            </div>

                                            <div class="text_box all_icon_color">

                                                <h3>💪 <a>Shoulder Replacement</a></h3>

                                                <br>

                                                <p style="text-align: justify;">

                                                    Shoulder replacement is a surgical procedure in which the damaged
                                                    shoulder joint is replaced with an artificial implant to relieve
                                                    pain and restore arm movement. It is recommended for severe
                                                    arthritis, fractures, or advanced joint damage that limits daily
                                                    activities.

                                                </p>

                                                <h5>Benefits</h5>

                                                <ul>
                                                    <li>Reduces or eliminates shoulder pain.</li>
                                                    <li>Restores arm mobility and function.</li>
                                                    <li>Makes everyday activities easier.</li>
                                                    <li>Improves quality of life and independence.</li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>

                                    <!-- Shoulder Arthroscopy -->
                                    <div class="col-lg-4 col-md-6 col-sm-12">

                                        <div class="service-item all_color_service text-left">

                                            <div class="service_top_image">
                                                <img src="assets/images/artroscopia_hombro.png" alt="">
                                            </div>

                                            <div class="text_box all_icon_color">

                                                <h3>💪 <a>Shoulder Arthroscopy</a></h3>

                                                <br>

                                                <p style="text-align: justify;">

                                                    Shoulder arthroscopy is a minimally invasive procedure that uses
                                                    a small camera and specialized instruments to diagnose and repair
                                                    injuries inside the shoulder joint, including rotator cuff tears,
                                                    labrum injuries, tendon problems, and ligament damage.

                                                </p>

                                                <h5>Benefits</h5>

                                                <ul>
                                                    <li>Small incisions with minimal scarring.</li>
                                                    <li>Less pain after the procedure.</li>
                                                    <li>Faster recovery than traditional surgery.</li>
                                                    <li>Restores shoulder mobility and function.</li>
                                                    <li>Helps you return sooner to daily and sports activities.</li>
                                                </ul>

                                            </div>

                                        </div>

                                    </div>
                                    <!-- smartdev_serivce_bg_06 -->
                                </div>
                            </div>
                        </div>

                        <div class="witr_adv_tab_content">
                            <div class="tab-content">
                                <div class="tab-pane fade epo-4931cc5 active show" id="tx_tab_01">
                                    <div class="row tab_pane_bg">
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="witr_tab_right">
                                                <div class="witr_section_title">
                                                    <div class="witr_section_title_inner text-left">
                                                        <h2>Why Travel to See Dr. Daniel?</h2>
                                                        <p>Traveling to Mexico for orthopedic surgery can be a
                                                            cost-effective option, offering high-quality medical
                                                            services at a fraction of U.S. prices, with shorter wait times
                                                            than in Canada.</p>
                                                    </div>
                                                    <div class="witr_section_title_inner text-left">
                                                        <h2>Puerto Vallarta</h2>
                                                        <p>Puerto Vallarta, located on Mexico’s Pacific coast, is known for
                                                            its stunning beaches, vibrant nightlife, and rich cultural
                                                            history. This picturesque destination offers the perfect balance
                                                            between relaxation and adventure, from whale watching to
                                                            strolling through cobblestone streets and art galleries.</p>
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
                                                                            <h2> Benefits</h2><br>
                                                                            <ul class="menu">
                                                                                <li></i>State-of-the-art facilities</li>
                                                                                <li></i>Bilingual staff</li>
                                                                                <li></i>Treatment within just a few weeks
                                                                                </li>
                                                                                <li></i>A fraction of the cost compared to
                                                                                    the U.S.
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
                                                    <h2>Surgery with Dr. Daniel can cost up to 70% less than the same
                                                        procedure in the U.S.</h2>
                                                </div>
                                                <div class="witr_button_area">
                                                    <div class="witr_btn_style mr">
                                                        <div class="witr_btn_sinner">
                                                            <!--<a href="index-2.html#" class="witr_btn">Read More Contant
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
                                                    <!-- <div class="play-overlay ">
                                                            <a class="video-popup video-vemo-icon venobox vbox-item"
                                                                target="_blank" data-vbtype="youtube" data-autoplay="true"
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
