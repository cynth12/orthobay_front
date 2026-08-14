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
    {{-- =========================================================
    ORTHOPEDIC SERVICES
========================================================== --}}

<div class="smartdev_tab_contant_area" id="services">

    <div class="container">

        <div class="row">

            <div class="col-lg-12">

                <div class="witr_section_title">

                    <div class="witr_section_title_inner text-center">

                        <h2>
                            Orthopedic Services
                        </h2>

                        <div class="witr_image_title">

                            <img
                                src="{{ asset('assets/images/title-icon-1.png') }}"
                                alt="Orthopedic and trauma surgery services at Orthobay Vallarta"
                            >

                        </div>

                        <h3>
                            Knee, Hip and Shoulder Surgery in Puerto Vallarta and Nuevo Nayarit
                        </h3>

                    </div>

                </div>

            </div>



            <div class="col-lg-12 tab_top">

                <div class="witr_adv_tab_area witr_taba_style1 tab_all_colora">


                    {{-- =====================================================
                        SERVICE NAVIGATION
                    ====================================================== --}}

                    <div class="witr_adv_tab_menu">

                        <ul class="nav nav-tabs">

                            <li class="nav-item">

                                <a
                                    class="nav-link epo-4931cc5 active"
                                    href="{{ url('/en') }}#knee"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-bone"></i>
                                    </span>

                                    <strong>
                                        Knee Surgery
                                    </strong>

                                </a>

                            </li>


                            <li class="nav-item">

                                <a
                                    class="nav-link epo-7b0660d"
                                    href="{{ url('/en') }}#hip"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-bone"></i>
                                    </span>

                                    <strong>
                                        Hip Surgery
                                    </strong>

                                </a>

                            </li>


                            <li class="nav-item">

                                <a
                                    class="nav-link epo-1b77303"
                                    href="{{ url('/en') }}#shoulder"
                                >

                                    <span class="witr_tab_icona">
                                        <i class="icofont-user-alt-3"></i>
                                    </span>

                                    <strong>
                                        Shoulder Surgery
                                    </strong>

                                </a>

                            </li>

                        </ul>

                    </div>



                    {{-- =====================================================
                        PROCEDURES
                    ====================================================== --}}

                    <div class="smartdev_serivce_bg_area serivce_bg">

                        <div class="container">

                            <div class="row service_top">


                                {{-- =================================================
                                    KNEE REPLACEMENT
                                ================================================== --}}

                                <div
                                    id="knee"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_rodilla.png') }}"
                                                alt="Knee replacement surgery in Puerto Vallarta with Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Knee Replacement
                                            </h3>

                                            <p>
                                                Knee replacement is a surgical
                                                procedure in which damaged parts
                                                of the knee joint are replaced
                                                with an implant designed to
                                                improve movement and reduce pain.
                                            </p>

                                            <p>
                                                It may be recommended when joint
                                                degeneration, osteoarthritis, or
                                                other conditions significantly
                                                affect mobility and quality of life.
                                            </p>


                                            <h4>
                                                Benefits
                                            </h4>

                                            <ul>

                                                <li>
                                                    Helps reduce knee pain.
                                                </li>

                                                <li>
                                                    Improves mobility.
                                                </li>

                                                <li>
                                                    Supports safer and more
                                                    stable walking.
                                                </li>

                                                <li>
                                                    Helps patients return to
                                                    daily activities.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    KNEE ARTHROSCOPY
                                ================================================== --}}

                                <div
                                    id="knee-arthroscopy"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/artroscopia_rodilla.png') }}"
                                                alt="Knee arthroscopy in Puerto Vallarta with Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Knee Arthroscopy
                                            </h3>

                                            <p>
                                                Knee arthroscopy is a minimally
                                                invasive procedure that uses a
                                                small camera and specialized
                                                instruments to diagnose and treat
                                                problems inside the knee joint.
                                            </p>

                                            <p>
                                                It may be used to treat injuries
                                                involving the meniscus, ligaments,
                                                cartilage, and other structures
                                                of the knee.
                                            </p>


                                            <h4>
                                                Benefits
                                            </h4>

                                            <ul>

                                                <li>
                                                    Small incisions and
                                                    discreet scars.
                                                </li>

                                                <li>
                                                    Less tissue disruption
                                                    during the procedure.
                                                </li>

                                                <li>
                                                    Recovery is often faster
                                                    than with traditional open
                                                    surgery.
                                                </li>

                                                <li>
                                                    Supports a progressive
                                                    return to daily activities.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    HIP REPLACEMENT
                                ================================================== --}}

                                <div
                                    id="hip"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_cadera.png') }}"
                                                alt="Hip replacement surgery in Puerto Vallarta with Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Hip Replacement
                                            </h3>

                                            <p>
                                                Hip replacement is a surgical
                                                procedure in which a damaged hip
                                                joint is replaced with an
                                                artificial implant designed to
                                                reduce pain and restore movement.
                                            </p>

                                            <p>
                                                It may be recommended when
                                                degeneration, osteoarthritis,
                                                fractures, or other conditions
                                                significantly affect mobility
                                                and quality of life.
                                            </p>


                                            <h4>
                                                Benefits
                                            </h4>

                                            <ul>

                                                <li>
                                                    Helps reduce or relieve
                                                    hip pain.
                                                </li>

                                                <li>
                                                    Improves mobility and
                                                    walking stability.
                                                </li>

                                                <li>
                                                    Helps patients return to
                                                    everyday activities.
                                                </li>

                                                <li>
                                                    May improve independence
                                                    and quality of life.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    SHOULDER REPLACEMENT
                                ================================================== --}}

                                <div
                                    id="shoulder"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/protesis_hombro.png') }}"
                                                alt="Shoulder replacement surgery in Puerto Vallarta with Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Shoulder Replacement
                                            </h3>

                                            <p>
                                                Shoulder replacement is a
                                                surgical procedure in which all
                                                or part of a damaged shoulder
                                                joint is replaced with an
                                                artificial implant.
                                            </p>

                                            <p>
                                                It may be recommended for severe
                                                joint degeneration, arthritis,
                                                fractures, or other conditions
                                                that cause pain and limit arm
                                                movement.
                                            </p>


                                            <h4>
                                                Benefits
                                            </h4>

                                            <ul>

                                                <li>
                                                    Helps reduce shoulder pain.
                                                </li>

                                                <li>
                                                    Supports recovery of arm
                                                    movement and function.
                                                </li>

                                                <li>
                                                    Makes everyday activities
                                                    easier.
                                                </li>

                                                <li>
                                                    May improve independence
                                                    and quality of life.
                                                </li>

                                            </ul>

                                        </div>

                                    </div>

                                </div>



                                {{-- =================================================
                                    SHOULDER ARTHROSCOPY
                                ================================================== --}}

                                <div
                                    id="shoulder-arthroscopy"
                                    class="col-lg-4 col-md-6 col-sm-12"
                                >

                                    <div class="service-item all_color_service text-left">

                                        <div class="service_top_image">

                                            <img
                                                src="{{ asset('assets/images/artroscopia_hombro.png') }}"
                                                alt="Shoulder arthroscopy in Puerto Vallarta with Dr. Daniel Ponce"
                                            >

                                        </div>


                                        <div class="text_box all_icon_color">

                                            <h3>
                                                Shoulder Arthroscopy
                                            </h3>

                                            <p>
                                                Shoulder arthroscopy is a
                                                minimally invasive procedure
                                                that uses a small camera and
                                                specialized instruments to
                                                diagnose and treat problems
                                                inside the shoulder joint.
                                            </p>

                                            <p>
                                                It may be used for rotator cuff
                                                injuries, labral tears, tendon
                                                problems, ligament injuries, and
                                                other conditions affecting
                                                shoulder function.
                                            </p>


                                            <h4>
                                                Benefits
                                            </h4>

                                            <ul>

                                                <li>
                                                    Small incisions and
                                                    discreet scars.
                                                </li>

                                                <li>
                                                    Less tissue disruption.
                                                </li>

                                                <li>
                                                    Supports progressive
                                                    recovery of mobility and
                                                    function.
                                                </li>

                                                <li>
                                                    Helps patients return to
                                                    daily and athletic activities
                                                    depending on each case.
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
    MEDICAL TOURISM / WHY CHOOSE ORTHOBAY
========================================================== --}}

<div class="witr_adv_tab_content">

    <div class="tab-content">

        <div class="tab-pane fade active show">

            <div class="row tab_pane_bg">


                {{-- =====================================================
                    INFORMATION
                ====================================================== --}}

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="witr_tab_right">

                        <div class="witr_section_title">


                            {{-- WHY TRAVEL --}}
                            <div class="witr_section_title_inner text-left">

                                <h2>
                                    Why Travel to Puerto Vallarta for Orthopedic Surgery?
                                </h2>

                                <p>
                                    Puerto Vallarta and Nuevo Nayarit have
                                    become attractive destinations for
                                    patients seeking specialized medical care
                                    in a location that is easily accessible
                                    and well connected to the United States
                                    and Canada.
                                </p>

                                <p>
                                    Dr. Daniel Ponce Covarrubias provides
                                    orthopedic care for local and international
                                    patients, offering personalized evaluations,
                                    specialized orthopedic surgery, and
                                    follow-up throughout the recovery process.
                                </p>

                            </div>



                            {{-- PUERTO VALLARTA --}}
                            <div class="witr_section_title_inner text-left">

                                <h2>
                                    Orthopedic Care in Puerto Vallarta and Nuevo Nayarit
                                </h2>

                                <p>
                                    Orthobay Vallarta provides specialized
                                    care for knee, hip, and shoulder surgery,
                                    including joint replacement and
                                    arthroscopic procedures.
                                </p>

                                <p>
                                    The main office is located at Núcleo
                                    Médico Joya in Nuevo Nayarit, within a
                                    hospital area near Puerto Vallarta and
                                    Puerto Vallarta International Airport.
                                </p>

                            </div>

                        </div>



                        {{-- =================================================
                            BENEFITS
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
                                                        Benefits for International Patients
                                                    </h3>

                                                    <ul class="menu">

                                                        <li>
                                                            Personalized care
                                                            with a board-certified
                                                            orthopedic surgeon.
                                                        </li>

                                                        <li>
                                                            Assistance for
                                                            international patients.
                                                        </li>

                                                        <li>
                                                            Specialized hospital
                                                            facilities.
                                                        </li>

                                                        <li>
                                                            Knee, hip, and
                                                            shoulder surgery
                                                            options.
                                                        </li>

                                                        <li>
                                                            Individualized
                                                            evaluation and
                                                            treatment planning.
                                                        </li>

                                                        <li>
                                                            Communication via
                                                            WhatsApp before and
                                                            during your stay.
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
                            COSTS / QUOTE
                        ================================================== --}}

                        <div class="tab_title">

                            <h3>
                                Ask About Treatment Options and Costs for Your Orthopedic Surgery
                            </h3>

                            <p>
                                Each procedure is quoted according to the
                                patient's individual needs, the type of
                                surgery, and the hospital services required.
                            </p>

                        </div>



                        {{-- =================================================
                            CALL TO ACTION
                        ================================================== --}}

                        <div class="witr_button_area">

                            <div class="witr_btn_style mr">

                                <div class="witr_btn_sinner">

                                    <a
                                        href="{{ url('/en') }}#contact"
                                        class="witr_btn"
                                    >
                                        Request Information
                                    </a>

                                </div>

                            </div>

                        </div>

                    </div>

                </div>



                {{-- =====================================================
                    IMAGE
                ====================================================== --}}

                <div class="col-lg-6 col-md-12 col-sm-12">

                    <div class="witr_play_vi witr_all_color_v">

                        <div class="witr_videobg_image">

                            <img
                                src="{{ asset('assets/images/hospital_ortopedia.png') }}"
                                alt="Orthopedic surgery facilities in Puerto Vallarta and Nuevo Nayarit, Mexico"
                            >

                        </div>

                    </div>

                </div>


            </div>

        </div>

    </div>

</div>


{{-- =========================================================
    END OF ORTHOPEDIC SERVICES SECTION
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
