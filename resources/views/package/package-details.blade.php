@extends('layout.master')
@section('title','package')

@section('content')
<section class="breadcrumb-blog-version-one img-area">
	<div class="single-bredcurms" style="background-image:url('/src/images/bercums/package1.jpg');">
		<div class="container">
			<div class="row">
				<div class="col-sm-12">
					<div class="bredcrums-content">
						<h2>Package</h2>
						<ul>
							<li><a href="index.html">Home</a>
							</li>
							<li class="active"><a href="single-package.html">Package Details</a>
							</li>
						</ul>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="section-paddings single-package-area">
	<div class="container">
		<div class="row">
			<!-- single package tab with details -->
			<div class="col-md-8 col-sm-12">
				<div class="single-package-details">
					<div class="single-package-title">
						<h2>{{ $packageData[0]->packageName }}</h2>
					</div>
					<ul class="package-content">
						<li>{{ $packageData[0]->duration }}</li>
					<!--	<li>
							<span>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							   <i class="fa fa-star"></i>
							 </span> (3 Reviews)
						</li>-->
						<li></li>
						{{-- <li>₹500</li> --}}
					</ul>
					<div class="package-features-image">
						<img src="images/packages/13.jpg" alt="" class="img-responsove border-raduis-3">
					</div>
				</div><!-- tab menu strat -->

				<div class="package-tab-menu">
					<ul class="package-tab-menu" role="tablist" id="tab7">
						{{-- <li role="presentation" class="active"><a href="#description" aria-controls="description" role="tab" data-toggle="tab">Description</a>
						</li> --}}
						<li role="presentation" class="active"><a href="#itinerary" aria-controls="itinerary" role="tab" data-toggle="tab">Tour Itinerary</a>
						</li>
					</ul>
				</div><!-- tab menu end -->

				<!-- tab content start -->
				<div class="row">
					<!-- tabs content -->
					<div class="tab-content">
						{{-- <div role="tabpanel" class="tab-pane fade in active" id="description">
							<div class="row">
								<div class="col-md-12 col-sm-8">
									<div class="tour-description">
										<h4>Tour Description</h4>
										<p>{!! $packageData[0]->tourDesc !!}</p>
									</div>
								</div>
							</div>
						</div> --}}

						<div role="tabpanel" class="tab-pane fade in active" id="itinerary">
							<div class="row">
								<div class="col-md-12 col-sm-12">
									<div class="tour-description">
										<h4>Tour Itinerary</h4>
										<div class="main-timeline">
											@php
												$i = 1;
											@endphp
											@foreach($packageDetails as $value)
											<!-- single timeline -->
											<div class="timeline">
												<div class="timeline-content left">
													<span class="timeline-icon">{{ $i++ }}</span>
													{!! $value->description !!} 
												</div>
											</div><!-- single timeline -->
											@endforeach
										</div>
									</div>
								</div>
							</div>
						</div>
					</div><!-- tabs content-->
				</div><!-- tab content end -->
			</div><!-- single package tab with details -->

			<!-- booking form start here -->
			<div class="col-md-4 col-sm-12">
				<aside>
					<div class="booking-form">
						<div class="booking-title">
							<h2>Book This Tour</h2>
							<center>
				                @if(session()->has('msg'))
				                    <b>{{ session()->get('msg') }}</b>
				                @endif
				            </center>
						</div>
						<form method="POST" autocomplete="off" action="{{ route('add_p_booking', ['packageId' => $packageData[0]->id]) }}">
							@csrf
							<div class="form-group">
								<input type="date" class="form-control" name="tentative_arrival_date" placeholder="Tentative Arrival *" required>
								@error('tentative_arrival_date')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group" style="display: flex;">
								<div>
								<input type="number" min="1" class="form-control" name="duration" placeholder="Duration *" required>
								@error('duration')
		                            {{ $message }}
		                        @enderror
							</div>
							<div style="margin-top: 10px;margin-left: 20px;">Day</div>
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="name" placeholder="Your Name *" required>
								@error('name')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<input type="number" class="form-control" name="contact_no" placeholder="Contact Number *" required>
								@error('contact_no')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<input type="text" class="form-control" name="address" placeholder="Address *" required>
								@error('address')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<input type="number" min="0" class="form-control" name="adult" placeholder="Number of adult *" required>
								@error('adult')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<input type="number" min="0" class="form-control" name="kids" placeholder="Number of kids *">
								@error('kids')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<select class="form-control" name="budget" style="height: 42px;" required>
		                          <option selected disabled>Select Tour Budget</option>
		                          <option value="Budget">Budget</option>
		                          <option value="Standard">Standard</option>
		                          <option value="Deluxe">Deluxe</option>
		                        </select>
		                        @error('budget')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<select class="form-control" name="activities" style="height: 42px;" required>
		                          <option selected disabled>Select Activities</option>
		                          <option value="wildlife">Wildlife</option>
		                          <option value="adventure">Adventure</option>
		                          <option value="cultural">Cultural</option>
		                          <option value="heritage">Heritage</option>
		                        </select>
		                        @error('activities')
		                            {{ $message }}
		                        @enderror
							</div>
							<div class="form-group">
								<select class="form-control" name="destination" style="height: 42px;" required>
		                          <option selected disabled>Select Regions / Destination</option>
		                          <option value="assam">Assam</option>
		                          <option value="arunachl_pradesh">Arunachl Pradesh</option>
		                          <option value="meghalaya">Meghalaya</option>
		                          <option value="nagaland">Nagaland</option>
		                          <option value="manipur">Manipur</option>
		                          <option value="mizoram">Mizoram</option>
		                          <option value="tripura">Tripura</option>
		                          <option value="sikkim">Sikkim</option>
		                        </select>
		                        @error('destination')
		                            {{ $message }}
		                        @enderror
							</div>
							
							<div class="form-group">
								<button type="submit" class="booking-confirm hvr-shutter-out-horizontal">Book Now</button>
							</div>
						</form>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>


@endsection
@section('script')

@endsection