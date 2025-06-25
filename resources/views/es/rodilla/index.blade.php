@extends('layouts.app')

@section('title', '- Home')

@push('custom_css')
@endpush

@section('content')

<div class="breadcumb-area">
	<div class="container">				
		<div class="row">
			<div class="col-md-12 txtc  text-center ccase">
				<div class="brpt">
					<h2>About Style Two</h2>
				</div>
				<div class="breadcumb-inner">
					<ul>
						<li><a href="index.html">Home</a></li>
						<li><i class="fas fa-angle-right"></i></li>
						<li>About Style Two</li>
					</ul>						
				</div>
			</div>
		</div>
	</div>
</div>


@endsection