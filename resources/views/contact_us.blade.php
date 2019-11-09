@extends('layout.master')
@section('title','contactus')
@section('content')
<section class="breadcrumb-blog-version-one img-area">
   <div class="single-bredcurms" style="background-image:url('/src/images/bercums/contact-page.jpg');">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>Contact</h2>
                  <ul>
                     <li><a href="index.html">Home</a></li>
                     <li class="active banner-fixed">Contact</a></li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="section-paddings">
   <div class="container">
      <div class="row">
         <div class="col-md-6 col-sm-6 col-xs-12" >
            <div class="contact-title">
               <h2>Our Office</h2>
            </div>
           <div class="address" style="border: 1px solid #000; border-radius: 10px;">
               <p>
                  <strong>Address</strong>
                  <br><i class="fa fa-map-marker" aria-hidden="true">
                  </i> 1 no. Kohora, Kaziranga National Park <br /> Regd. Assam Tourism, Govt.of Assam
               </p>
               <p>
                  <strong>Contact</strong>
                  <br> <i class="fa fa-phone" aria-hidden="true">
                  </i><a href="callto:+91-6001685490" style="color: #727272;"> +91 6001685490 / +91 8486951528</a>
               </p>
               <p>
                  <strong>Email</strong>
                  <br> <i class="fa fa-envelope-o" aria-hidden="true">
                </i><a href="mailto:info.sevensisters14@gmail.com" > info.sevensisters14@gmail.com</a>
               </p>
            </div>
         </div>
         <div class="col-md-6 col-sm-6 col-xs-12">
            <div class="contact-title">
               <h2>Contact</h2>
            </div>
            <div class="">
               <div id="contact">
                  <div id="message"></div>
                  <!-- Contact Form -->
                  <form class="form" method="post" action="" name="contactform" >
                     <div class="form-group">
                        <input type="text" placeholder="Enter Your Name" required="required" name="name" id="name" class="form-control cont" >
                     </div>
                     <div class="form-group">
                        <input type="email" placeholder="Enter Your Email" required="required" name="email" id="email" class="form-control cont">
                     </div>
                     <div class="form-group">
                        <input type="text" placeholder="Enter Your Country" required="required" name="country" aria-invalid="false"   id="autocomplete" onFocus="geolocate()" aria-required="true"  class="form-control cont">
                     </div>
                     <div class="form-group">
                        <input type="text" placeholder="Enter Your Phone No" required="required" name="phone" id="subject" class="form-control cont">
                     </div>
                     <!-- <div class="form-group">
                        <textarea name="message" rows="6" placeholder="Message" id="comments"></textarea>
                     </div> -->
                     <div class="form-group">
                        <button type="submit" class="btn btn-success "><i class="fa fa-send"></i>Submit</button>
                     </div>
                  </form>
                  <!--/ End Contact Form -->
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section>
   <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3567.7827368898693!2d93.39718641451361!3d26.591346280253283!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3744475816a285f5%3A0xc1612733e72068aa!2sKaziranga+National+Park!5e0!3m2!1sen!2sin!4v1562046434606!5m2!1sen!2sin" width="100%" height="450" frameborder="0" style="border:0" allowfullscreen></iframe>
</section>
@endsection
@section('script')
 <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDYl4dU25X_3gByUkn4kJ2W-6H3N8XX5U8&libraries=places&callback=initAutocomplete" async defer></script>
 <script>
var placeSearch, autocomplete;
var componentForm = {
  street_number: 'short_name',
  route: 'long_name',
  locality: 'long_name',
  administrative_area_level_1: 'short_name',
  country: 'long_name',
  postal_code: 'short_name'
};

function initAutocomplete() {
  // Create the autocomplete object, restricting the search to geographical
  // location types.
  autocomplete = new google.maps.places.Autocomplete(
    /** @type {!HTMLInputElement} */
    (document.getElementById('autocomplete')), {
      types: ['geocode']
    });

  // When the user selects an address from the dropdown, populate the address
  // fields in the form.
  autocomplete.addListener('place_changed', fillInAddress);
}

function fillInAddress() {
  // Get the place details from the autocomplete object.
  var place = autocomplete.getPlace();

  for (var component in componentForm) {
    document.getElementById(component).value = '';
    document.getElementById(component).disabled = false;
  }

  // Get each component of the address from the place details
  // and fill the corresponding field on the form.
  for (var i = 0; i < place.address_components.length; i++) {
    var addressType = place.address_components[i].types[0];
    if (componentForm[addressType]) {
      var val = place.address_components[i][componentForm[addressType]];
      document.getElementById(addressType).value = val;
    }
  }
}

// Bias the autocomplete object to the user's geographical location,
// as supplied by the browser's 'navigator.geolocation' object.
function geolocate() {
  if (navigator.geolocation) {
    navigator.geolocation.getCurrentPosition(function(position) {
      var geolocation = {
        lat: position.coords.latitude,
        lng: position.coords.longitude
      };
      var circle = new google.maps.Circle({
        center: geolocation,
        radius: position.coords.accuracy
      });
      autocomplete.setBounds(circle.getBounds());
    });
  }
}
</script>
   @endsection
