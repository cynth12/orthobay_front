@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')


<div class="witr_swiper_area">
	<div class="swiper-container witr_active_id5 ">
		<div class="swiper-wrapper">
			<div class="swiper-slide  witr_swiper_height " style="background-image: url({{ asset('assets/images/slider-3.jpg') }});">
				<div class="witr_sw_text_area text-left">
					<div class="witr_swiper_content ">
						<h1>Welcome To Family Doctor! </h1>
						<h2>Best Health Care For Family Doctor.</h2>
						<p>We will help you to feel better and enjoy every single day of your life. may be the fastest growing health.</p>
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

@endsection



