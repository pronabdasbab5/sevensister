@extends('layout.master')
@section('title','package')

@section('content')
<section class="breadcrumb-blog-version-one img-area">
	<div class="single-bredcurms" style="background-image:url('/src/images/bercums/package.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12 col-md-12">
					<div class="bredcrums-content">
						<h2>Package</h2>
						<ul>
							<li><a href="{{url('/')}}">Home</a>
							</li>
							<li class="active"><a href="">Package</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<!--<section class="blog-contents-version-one pt-100 pb-70 popular-packages">
	<div class="container">
		@foreach($packageBasicDetails as $value)
			<div class="row">
				<div class="col-md-1"></div>
				<div class="col-md-10 col-sm-6 single-package one-night">
					<div class="col-md-3">
						<div class="package-image">
							<a href="#">
								<img src="{{asset('src/images/packages/4.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-5 place">
						<div class="package-content">
							<h3>{{ $value->packageName }}</h3>
							<p>{{ $value->duration }}</p>
							{{-- <p><span class="package-price"><i class="fa fa-rupee"></i> 4000</span>
							</p> --}}
						</div>
					</div>
					<div class="col-md-4 star-1st">
						<div class="package-calto-action">
							<ul class="ct-action">
								<li class="star-2nd">	<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
									<i class="fa fa-star"></i>
								</li>
								<li><a href="{{url('packagedetails')}}/{{$value->id}}" class="travel-booking-btn hvr-shutter-out-horizontal">View Details</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
			</div>
		@endforeach

		{{ $packageBasicDetails->links() }}
	</div>
</section>-->
<section class="blog-contents-version-one pt-100 pb-70 popular-packages">
	<div class="container">
		@foreach($packageBasicDetails as $value)
			<div class="row">
			<div class="col-md-12">
				<div class="col-md-1" style="margin-left: -58px;"></div>
				<div class="col-md-5 col-sm-6 single-package one-night">
					<div class="col-md-6">
						<div class="package-image">
							<a href="#">
								<img src="{{asset('src/images/packages/4.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 place">
						<div class="package-content">
							<h3>{{ $value->packageName }}</h3>
							<p>{{ $value->duration }}</p>
							{{-- <p><span class="package-price"><i class="fa fa-rupee"></i> 4000</span>
							</p> --}}
						</div>
						<div class="package-calto-action">
							<ul class="ct-action">
								
								<li><a href="{{url('packagedetails')}}/{{$value->id}}" class="travel-booking-btn hvr-shutter-out-horizontal">View Details</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
				<div class="col-md-1"></div>
				<div class="col-md-5 col-sm-6 single-package one-night">
					<div class="col-md-6">
						<div class="package-image">
							<a href="#">
								<img src="{{asset('src/images/packages/4.jpg')}}" alt="">
							</a>
						</div>
					</div>
					<div class="col-md-6 place">
						<div class="package-content">
							<h3>{{ $value->packageName }}</h3>
							<p>{{ $value->duration }}</p>
							{{-- <p><span class="package-price"><i class="fa fa-rupee"></i> 4000</span>
							</p> --}}
						</div>
						<div class="package-calto-action">
							<ul class="ct-action">
								
								<li><a href="{{url('packagedetails')}}/{{$value->id}}" class="travel-booking-btn hvr-shutter-out-horizontal">View Details</a>
								</li>
							</ul>
						</div>
					</div>
				</div>
			</div>
			</div>
		@endforeach

		{{ $packageBasicDetails->links() }}
	</div>
</section>
@endsection