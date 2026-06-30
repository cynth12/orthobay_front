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
							<h1>Bienvenidos a Orthobay!</h1>
							<h2>Cirugía Ortopédica en Puerto Vallarta, México</h2>
							<p>Nos enorgullece dar la bienvenida a pacientes de todo el mundo para experimentar atención 
								ortopédica de clase mundial con el Dr. Daniel Ponce en Puerto Vallarta</p>
							<!-- btn gradient style -->
							<div class="slider_btn">
								<div class="witr_btn_style">
									<div class="witr_btn_sinner">
										<a class="witr_btn" href="index-2.html#">Agenda tu cita</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
				<div class="swiper-slide witr_swiper_height" style="background-image: url('assets/images/daniel_ponce.png'); background-size: contain; background-repeat: no-repeat; 
				background-position: right center; background-color: #dff3f2;">
					<div class="witr_sw_text_area text-left">
						<div class="witr_swiper_content ">
							<h1>Calidad en Atención Ortopédica</h1>
							<h2>Cirugía Ortopédica en Puerto Vallarta, México</h2>
							<p>Ya sea que vivas en Puerto Vallarta o estés de visita desde el extranjero, 
								recibirás atención profesional y personalizada adaptada a tus necesidades únicas.</p>
							<!-- btn gradient style -->
							<div class="slider_btn">
								<div class="witr_btn_style">
									<div class="witr_btn_sinner">
										<a class="witr_btn" href="index-2.html#">Agenda tu cita</a>
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
                                        <h3>Mira nuestro Video! </h3>
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
                                <h2>Conoce al doctor</h2>
                                <h3>Daniel Ponce Covarrubias</h3>
                                <p>El doctor Daniel Ponce es originario de la ciudad de Guadalajara, México, 
									su formación médica la realizó en la Universidad de Guadalajara y 
									posteriormente sus estudios de especialidad los realizó 
									dentro del Instituto Mexicano del Seguro Social (IMSS), 
								rotando en Ciudad de México así como en USA y Latinoamérica. 
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
                                                <h3>Tu Experto de Confianza en Cirugía Ortopédica</h3>
                                            </div>
                                            <div class="em-service-desc text-justify">
                                                <p>Su visión es siempre ofrecer la mejor atención para el paciente, 
													bajo un esquema de amabilidad, responsabilidad y compromiso y dar lo mejor en cada cirugía.
													Durante su experiencia de más de 10 años se ha especializado en cirugía 
													de reemplazo articular así como cirugía artroscopica, y actualmente 
													su práctica médica está enfocada 
													al turismo médico y ampliar sus conocimientos a la población mundial a costos accesibles!.</p>
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
                                                <p>El Dr Ponce es un médico certificado ante el consejo Mexicano de Ortopedia</p>
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
                                                <p>Miembro activo de Femecot y ha sido ponente en varios congresos nacionales.  </p>
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
                                <li class="nav-item">
                                    <a class="nav-link epo-76ded62" data-toggle="tab" href="index-2.html#tx_tab_04">
                                        <span class="witr_tab_icona">
                                            <i class="icofont-disabled"></i>
                                        </span>
                                        <strong>Cirugia de espalda</strong>
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
                                                            <a href="index-2.html#" class="witr_btn">Leer mas
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

<!-- smartdev_serivce_bg_area -->
<div class="smartdev_serivce_bg_area serivce_bg" id="service">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>Our Service</h2>		
						<div class="witr_image_title">								
							<img src="assets/images/title-icon-1.png" alt="">
						</div>
						<h3>Smartdev  Digital Services for</h3>		
						<h1>Your Company?  </h1>		
					</div>
				</div>					
			</div>					
		</div>
		<div class="row service_top">
			<!-- smartdev_serivce_bg_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service-item all_color_service  text-left  ">
					<div class="service_top_image">
						<img src="assets/images/service-1.png" alt="">
					</div>
					<div class="text_box all_icon_color">
						<i class="icofont-paralysis-disability"></i>
						<h3><a href="index-2.html#">Paralysis Disability</a></h3>
						<p>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text the medical. </p>		
						<div class="service-btn btn2">
							<a href="index-2.html#">Read More<span class="ti-arrow-right"></span></a>
						</div>
					</div> 							
				</div>
			</div>
			<!-- smartdev_serivce_bg_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service-item all_color_service  text-left  ">
					<div class="service_top_image">
						<img src="assets/images/service-2.png" alt="">
					</div>
					<div class="text_box all_icon_color">
						<i class="icofont-brain-alt"></i>
						<h3><a href="index-2.html#">Brain Disability</a></h3>
						<p>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text the medical. </p>		
						<div class="service-btn btn2">
							<a href="index-2.html#">Read More<span class="ti-arrow-right"></span></a>
						</div>
					</div> 							
				</div>
			</div>
            <!-- smartdev_serivce_bg_area -->
<div class="smartdev_serivce_bg_area serivce_bg" id="service">
	<div class="container">	
		<div class="row">
			<div class="col-lg-12">
				<div class="witr_section_title">
					<div class="witr_section_title_inner text-center">
						<h2>Our Service</h2>		
						<div class="witr_image_title">								
							<img src="assets/images/title-icon-1.png" alt="">
						</div>
						<h3>Smartdev  Digital Services for</h3>		
						<h1>Your Company?  </h1>		
					</div>
				</div>					
			</div>					
		</div>
		<div class="row service_top">
			<!-- smartdev_serivce_bg_01 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service-item all_color_service  text-left  ">
					<div class="service_top_image">
						<img src="assets/images/service-1.png" alt="">
					</div>
					<div class="text_box all_icon_color">
						<i class="icofont-paralysis-disability"></i>
						<h3><a href="index-2.html#">Paralysis Disability</a></h3>
						<p>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text the medical. </p>		
						<div class="service-btn btn2">
							<a href="index-2.html#">Read More<span class="ti-arrow-right"></span></a>
						</div>
					</div> 							
				</div>
			</div>
			<!-- smartdev_serivce_bg_02 -->
			<div class="col-lg-4 col-md-6 col-sm-12">
				<div class="service-item all_color_service  text-left  ">
					<div class="service_top_image">
						<img src="assets/images/service-2.png" alt="">
					</div>
					<div class="text_box all_icon_color">
						<i class="icofont-brain-alt"></i>
						<h3><a href="index-2.html#">Brain Disability</a></h3>
						<p>Lorem Ipsum, you need to be sure there isn't anything embarrassing hidden in the middle of text the medical. </p>		
						<div class="service-btn btn2">
							<a href="index-2.html#">Read More<span class="ti-arrow-right"></span></a>
						</div>
					</div> 							
				</div>
			</div>




@endsection
