@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')

    <div class="witr_swiper_area">
        <div class="swiper-container witr_active_id5 ">
            <div class="swiper-wrapper">
                <div class="swiper-slide witr_swiper_height" style="background-image: url(assets/images/slider-2.jpg); ">
                    <div class="witr_sw_text_area text-left">
                        <div class="witr_swiper_content ">
                            <h1>Welcome To Ortobay! </h1>
                            <h2>Orthopedic Surgery in Puerto Vallarta, Mexico</h2>
                            <p>We take pride in welcoming patients from around the globe
                                to experience world-class orthopedic care
                                with Dr. Daniel Ponce in Puerto Vallarta.</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="index-2.html#">Make Appointment</a>
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
                            <h1>Quality Orthopedic Care</h1>
                            <h2>Orthopedic Surgery in Puerto Vallarta, Mexico</h2>
                            <p>Whether you're a local resident or visiting from abroad, you’ll receive professional,
                                personalized care tailored to your unique needs</p>
                            <!-- btn gradient style -->
                            <div class="slider_btn">
                                <div class="witr_btn_style">
                                    <div class="witr_btn_sinner">
                                        <a class="witr_btn" href="index-2.html#">Make Appointment</a>
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
    <div class="smartdev_about_area" id="about">
        <div class="container">
            <div class="row about_area">
                <div class="col-lg-6 col-md-12 col-sm-12">
                    <div class="single_image_area">
                        <div class="single_image  ">
                            <img src="assets/images/doctor_1.png" alt="">
                        </div>
                    </div>
                    <div class="row video_area">
                        <div class="col-lg-6 col-md-6 col-sm-12"></div>
                        <div class="col-lg-6 col-md-12 col-sm-12">
                            <div class="video-part">
                                <div class="video-overlay witr_all_color_v">
                                    <div class="video-item text-center">
                                        <a class="video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube"
                                            data-autoplay="true" href="https://www.youtube.com/shorts/uMhoaKaF1Z8">
                                            <i class="fas fa-play"></i>
                                        </a>
                                        <h3>Our Watch Video!</h3>
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
                                <h2>Meet the Doctor</h2>
                                <h3>Daniel Ponce Covarrubias</h3>
                                <p>Dr. Daniel Ponce is originally from Guadalajara, Mexico.
                                    He completed his medical degree at the University of Guadalajara, followed by specialty
                                    training at the Mexican Social Security Institute (IMSS),
                                    with rotations in Mexico City, the United States, and Latin America. </p>
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
                                                <h3>Your Trusted Expert in Orthopedic Surgery</h3>
                                            </div>
                                            <div class="em-service-desc text-justify">
                                                <p>His mission is to always provide the best patient care with kindness,
                                                    responsibility, and commitment, delivering excellence in every surgery.
                                                    With over 10 years of experience, he has specialized in joint
                                                    replacement
                                                    and arthroscopic surgery. His current medical practice is
                                                    focused on medical tourism, making world-class care more accessible to
                                                    international patients. </p>
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
                                            <div class="em-service-title"></div>
                                            <div class="em-service-desc">
                                                <p>Board Certified by the Mexican Orthopedic Council</p>
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
                                            <div class="em-service-title"></div>
                                            <div class="em-service-desc">
                                                <p>Active member of Femecot and speaker at various national congresses</p>
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
                                    <a class="nav-link epo-4931cc5" data-toggle="tab"
                                        href="index-2.html#tx_tab_01">
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
                                <li class="nav-item">
                                    <a class="nav-link epo-76ded62" data-toggle="tab" href="index-2.html#tx_tab_04">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-disabled"></i>
                                        </span>
                                        <strong>Back Surgery</strong>
                                    </a>
                                </li>
                            </ul>
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
                                                                                <li></i>A fraction of the cost compared to the U.S.
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
                                                    <h2>Surgery with Dr. Daniel can cost up to 70% less than the same procedure in the U.S.</h2>
                                                </div>
                                                <div class="witr_button_area">
                                                    <div class="witr_btn_style mr">
                                                        <div class="witr_btn_sinner">
                                                            <a href="index-2.html#" class="witr_btn">Read More Contant
                                                                <div class="pluse_btn_icon">
                                                                    <span class="fas fa-arrow-right"></span>
                                                                </div>
                                                            </a>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-lg-6 col-md-12 col-sm-12">
                                            <div class="witr_play_vi witr_all_color_v">
                                                <div class="witr_videobg_image">
                                                    <img src="assets/images/hospital_ortopedia.png" alt="">
                                                    <div class="play-overlay ">
                                                        <a class="video-popup video-vemo-icon venobox vbox-item"
                                                            data-vbtype="youtube" data-autoplay="true"
                                                            href="#">
                                                            <i class="fas fa-play"></i>
                                                        </a>
                                                    </div>
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
                                                    <div class="play-overlay ">
                                                        <a class="video-popup video-vemo-icon venobox vbox-item"
                                                            target="_blank" data-vbtype="youtube" data-autoplay="true"
                                                            href="#">
                                                            <i class="fas fa-play"></i>
                                                        </a>
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
    </div>

	<!-- smartdev_video_area -->
<div class="smartdev_video_area">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">				
				<div class="witr_play_vi witr_all_color_v">
					<div class="witr_videobg_image">
						<div class="play-overlay ">
							<a class="video-popup video-vemo-icon venobox vbox-item" data-vbtype="youtube" data-autoplay="true" href="#">
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
