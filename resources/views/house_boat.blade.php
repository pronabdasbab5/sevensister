<!DOCTYPE html>
<html class="no-js" lang="zxx">
  <head>
    <meta charset="UTF-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="description" content="TRABBLE - Tour, Travel, Travel Agency Template">
    <meta name="keywords" content="Tour, Travel, Travel Agency Template">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Seven Sisters Tours & Travels
    </title>
    <link href="https://fonts.googleapis.com/css?family=Poppins:300,400,500,600,700" rel="stylesheet">
    <link rel="shortcut icon" type="image/x-icon" href="{{asset('src/images/favicon.ico')}}">
    <link rel="stylesheet" href="{{asset('src/css/bootstrap.min.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/animate.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/hover-min.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/jquery-ui.min.css')}}">
   <!-- <link rel="stylesheet" href="{{asset('src/css/meanmenu.min.css')}}">-->
    <link rel="stylesheet" href="{{asset('src/css/owl.carousel.min.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/slick.css')}}">
    <!--<link rel="stylesheet" href="{{asset('src/css/chosen.min.css')}}">-->
    <link rel="stylesheet" href="{{asset('src/css/jquery-customselect.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/font-awesome.min.css')}}">
    <!--<link rel="stylesheet" href="{{asset('src/css/magnific-popup.css')}}">-->
    <link rel="stylesheet" href="{{asset('src/css/assets/revolution/layers.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/assets/revolution/navigation.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/assets/revolution/settings.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/responsive.css')}}">
    <link rel="stylesheet" href="{{asset('src/css/style.css')}}">
    <!-- <link rel="stylesheet" href="{{asset('src/css/bootstrap-glyphicons.css')}}">-->
    <!--<script src="{{asset('src/js/vendor/modernizr-2.8.3.min.js')}}">
    </script>-->
    <link rel="stylesheet" href="{{asset('src/css/baguetteBox.min.css')}}">
  </head>
  <body>
    <header class="index-2">
      <!-- header top start -->
      <div class="header-top-area desktop">
        <div class="container">
          <div class="row">
            <div class="header-top-left">
              <div class="col-md-9 col-sm-9 col-xs-12">
                <ul class="header-top-contact">
                  <!-- <li><i class="fa fa-map-marker" aria-hidden="true"></i>Seventh Avenue New York</li> -->
                  <li>
                     <i class="fa fa-phone" aria-hidden="true">
                  </i><a href="callto:+91-6001685490" style="color: #fff"> +91 6001685490 / +91 8486951528</a>
                  </li>
                  <li>
                    <i class="fa fa-envelope-o" aria-hidden="true">
                </i><a href="mailto:info.sevensisters14@gmail.com" style="color: #fff"> info.sevensisters14@gmail.com</a>
                  </li>
                </ul>
              </div>
            </div>
            <div class="header-top-right text-right ">
              <div class="col-md-3 col-xs-12 book-tab">
                <div class="book-btn" style="background-color: transparent;">
                  <ul class="footer-social-link" style="display: flex;">
                    <li class="facebook">
                      <a href="https://www.facebook.com/sevensisters2014" target="_blank">
                        <i class="fa fa-facebook">
                        </i>
                      </a>
                    </li>
                    <li class="twitter">
                      <a href="#">
                        <i class="fa fa-twitter">
                        </i>
                      </a>
                    </li>
                    <li class="linkedin">
                      <a href="#">
                        <i class="fa fa-linkedin">
                        </i>
                      </a>
                    </li>
                    <li class="gplus">
                      <a href="#">
                        <i class="fa fa-google-plus">
                        </i>
                      </a>
                    </li>
                    <li class="youtube">
                      <a href="https://wa.me/+91-7086030335" target="_blank">
                        <i class="fa fa-whatsapp" aria-hidden="true">
                        </i>
                      </a>
                    </li>
                  </ul>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- header top end -->
      <div id="page" class="xsdevice">  
        <div class="wrap">
          <header id="header" class="row cf">
            <a href="{{url('/')}}">
              <img src="{{asset('src/images/logo2.png')}}" alt="" style=" margin-top: 25px;width: 78%; margin-left: -28px;">
            </a>
            <button id="primary-nav-button" type="button">Menu
            </button>
            <nav id="primary-nav" class="dropdown cf">
              <ul class="dropdown menu">
                <li>
                  <a href="{{url('/')}}">Home
                  </a>
                </li>
                <li>
                  <a href="{{route('aboutus')}}">About Us
                  </a>
                </li>
                <li>
                  <a href="#">Explore NorthEast
                  </a>
                  <ul class="sub-menu">
                    <li >
                      <a href="{{url('aboutnortheast')}}">About Northeast
                      </a>
                    </li>
                    <li>
                      <a href="#">Destination Of Northeast
                      </a>
                      <ul class="sub-menu">
                        <li>
                          <a href="{{url('assam')}}">Assam
                          </a>
                        </li>
                        <li>
                          <a href="{{url('arunachlpradesh')}}">Arunachl Pradesh
                          </a>
                        </li>
                        <li>
                          <a href="{{url('meghalaya')}}">Meghalaya
                          </a>
                        </li>
                        <li>
                          <a href="{{url('nagaland')}}">Nagaland
                          </a>
                        </li>
                        <li>
                          <a href="{{url('manipur')}}">Manipur
                          </a>
                        </li>
                        <li>
                          <a href="{{url('mizoram')}}">Mizoram
                          </a>
                        </li>
                        <li>
                          <a href="{{url('tripura')}}">Tripura
                          </a>
                        </li>
                        <li>
                          <a href="{{url('sikkim')}}">Sikkim
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{url('festivalnortheast')}}">Festival of Northeast
                      </a>
                    </li>
                    <li>
                      <a href="#">National Parks
                      </a>
                      <ul class="sub-menu">
                        <li >
                          <a href="{{url('kaziranganationalpark')}}">Kaziranga
                          </a>
                        </li>
                        <li>
                          <a href="{{url('manasnationalpark')}}">Manas 
                          </a>
                        </li>
                        <li>
                          <a href="{{url('dibrusaikhowanationalpark')}}">Dibru Saikhowa
                          </a>
                        </li>
                        <li>
                          <a href="{{url('namerinationalpark')}}">Nameri 
                          </a>
                        </li>
                        <li>
                          <a href="{{url('orangnationalpark')}}">Orang
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{url('wildlifesanctuaries')}}">Wildlife Sanctuaries
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="#">Package
                  </a>
                  <ul class="sub-menu">
                    @foreach($newPackageData['newPackageDuraData'] as $value)
                    <li>
                      <a href="{{url('package')}}/{{ $value->no_of_days }}">{{ $value->duration }}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li>
                  <a href="#">Jeep Safari
                  </a>
                  <ul class="sub-menu">
                    <li >
                      <a href="{{url('kaziranga_jeep_safari')}}">Kaziranga National Park
                      </a>
                    </li>
                    <li>
                      <a href="{{url('manas_jeep_safari')}}">Manas National Park
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{url('house_boat')}}">House_Boat
                  </a>
                </li>
                <li>
                  <a href="{{url('single_blog')}}">Blog
                  </a>
                </li>
                <li>
                  <a href="{{url('contactus')}}">Contact Us
                  </a>
                </li>
              </ul>
            </nav>
            <!-- / #primary-nav -->
          </header>
        </div>
      </div>
      <div id="navbar" class="desktop">
        <nav class="navbar navbar-default navbar-static-top" role="navigation" style="padding: 10px;padding-bottom: 0px;">
          <div class="container">
            <div class="navbar-header">
              <button type="button " class="navbar-toggle " data-toggle="collapse" data-target="#navbar-collapse-1">
                <span class="sr-only">Toggle navigation
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
                <span class="icon-bar">
                </span>
              </button>
              <a href="{{url('/')}}">
                <img src="{{asset('src/images/logo2.png')}}" alt="" style=" margin-top: 2px;width: 340px;">
              </a>
            </div>
            <div class="collapse navbar-collapse" id="navbar-collapse-1" style="float: right;">
              <ul class="nav navbar-nav">
                <li>
                  <a href="{{url('/')}}">Home
                  </a>
                </li>
                <li>
                  <a href="{{route('aboutus')}}">About Us
                  </a>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Explore NorthEast 
                    <b class="caret">
                    </b>
                  </a>
                  <ul class="dropdown-menu">
                    <li >
                      <a href="{{url('aboutnortheast')}}">About Northeast
                      </a>
                    </li>
                    <li class="dropdown dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">Destination Of Northeast
                      </a>
                      <ul class="dropdown-menu">
                        <li>
                          <a href="{{url('assam')}}">Assam
                          </a>
                        </li>
                        <li>
                          <a href="{{url('arunachlpradesh')}}">Arunachl Pradesh
                          </a>
                        </li>
                        <li>
                          <a href="{{url('meghalaya')}}">Meghalaya
                          </a>
                        </li>
                        <li>
                          <a href="{{url('nagaland')}}">Nagaland
                          </a>
                        </li>
                        <li>
                          <a href="{{url('manipur')}}">Manipur
                          </a>
                        </li>
                        <li>
                          <a href="{{url('mizoram')}}">Mizoram
                          </a>
                        </li>
                        <li>
                          <a href="{{url('tripura')}}">Tripura
                          </a>
                        </li>
                        <li>
                          <a href="{{url('sikkim')}}">Sikkim
                          </a>
                        </li>
                      </ul>
                    </li>
                    <li>
                      <a href="{{url('festivalnortheast')}}">Festival of Northeast
                      </a>
                    </li>
                    <li class="dropdown dropdown-submenu">
                      <a href="#" class="dropdown-toggle" data-toggle="dropdown">National Parks
                      </a>
                      <ul class="dropdown-menu">
                        <li >
                          <a href="{{url('kaziranganationalpark')}}">Kaziranga
                          </a>
                        </li>
                        <li>
                          <a href="{{url('manasnationalpark')}}">Manas 
                          </a>
                        </li>
                        <li>
                          <a href="{{url('dibrusaikhowanationalpark')}}">Dibru Saikhowa
                          </a>
                        </li>
                        <li>
                          <a href="{{url('namerinationalpark')}}">Nameri 
                          </a>
                        </li>
                        <li>
                          <a href="{{url('orangnationalpark')}}">Orang
                          </a>
                        </li>
                      </ul>
                    </li>
                    <!-- <li class="dropdown dropdown-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">National Parks</a>
<ul class="dropdown-menu">
<li class="dropdown dropdown-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Assam</a>
<ul class="dropdown-menu">
<li ><a href="{{url('kaziranganationalpark')}}">Kaziranga</a></li>
<li><a href="{{url('manasnationalpark')}}">Manas </a></li>
<li><a href="{{url('dibrusaikhowanationalpark')}}">Dibru Saikhowa</a></li>
<li><a href="{{url('namerinationalpark')}}">Nameri </a></li>
<li><a href="{{url('orangnationalpark')}}">Orang</a></li>
</ul>
</li>
<li class="dropdown dropdown-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Arunachl Pradesh</a>
<ul class="dropdown-menu">
<li><a href="#">Namdhapa(Tiger Project), Miao</a></li>
<li><a href="#">Mouling, Jengging</a></li>
<li><a href="#">Sessa Orchid Sanctuary, Tipi</a></li>
<li><a href="#">Dihang-Debang Biosphere Reserve,<br> Dibang Valley</a></li>
</ul>
</li>
<li class="dropdown dropdown-submenu">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Meghalaya</a>
<ul class="dropdown-menu">
<li><a href="#">Balpakram</a></li>
</ul>
</li>
</ul>
</li> -->
                    <li>
                      <a href="{{url('wildlifesanctuaries')}}">Wildlife Sanctuaries
                      </a>
                    </li>
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Package
                    <b class="caret">
                    </b>
                  </a>
                  <ul class="dropdown-menu">
                    @foreach($newPackageData['newPackageDuraData'] as $value)
                    <li>
                      <a href="{{url('package')}}/{{ $value->no_of_days }}">{{ $value->duration }}
                      </a>
                    </li>
                    @endforeach
                  </ul>
                </li>
                <li class="dropdown">
                  <a href="#" class="dropdown-toggle" data-toggle="dropdown">Jeep Safari 
                    <b class="caret">
                    </b>
                  </a>
                  <ul class="dropdown-menu">
                    <li >
                      <a href="{{url('kaziranga_jeep_safari')}}">Kaziranga National Park
                      </a>
                    </li>
                    <li>
                      <a href="{{url('manas_jeep_safari')}}">Manas National Park
                      </a>
                    </li>
                  </ul>
                </li>
                <li>
                  <a href="{{url('house_boat')}}">House_Boat
                  </a>
                </li>
                <li>
                  <a href="{{url('single_blog')}}">Blog
                  </a>
                </li>
                <li>
                  <a href="{{url('contactus')}}">Contact Us
                  </a>
                </li>
              </ul>
            </div>
            <!-- /.navbar-collapse -->
          </div>
        </nav>
      </div>
    </header>
    <!-- header area end here -->

<section class="breadcrumb-blog-version-one img-area">
   <div class="single-bredcurms" style="background-image:url('/src/images/bercums/house_boat.jpg');">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>House Boat</h2>
                  <ul>
                     <li><a href="{{('/')}}">Home</a></li>
                     <li class="active banner-fixed">House Boat</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- blog breadcrumb version one end here -->
<!-- Start blog -->
<section id="blog" class="section-paddings single section page">
   <div class="container">
      <div class="row">
         <div class="col-md-8 col-sm-12 col-xs-12">
            <div class="col-md-12">
               <!-- Single blog -->
               <div class="single-blog ">
                  <div class="blog-head">
                     <img src="{{('src/images/blog/boat.jpg')}}" alt="#" >
                  </div>
               </div>
               <div class="single-blog">
                  <div class="blog-content">
                     <h2>About lumpongdeng House Boat</h2>
                     <p class="paragraph">Meghalaya, the abode of clouds has always been known for its beautiful weather, stunning landscapes,awesome hills and the beautiful music. Amidst all this is an amazing reservoir of freshwater, Lake Umiam,which very well resembles some Scotland Loch with it's stunning blue waters and calm surroundings,surrounded by hills and ceilinged with clouds floating by.In the </p>
                  </div>
               </div>
            </div>

         </div>
         <div class="col-md-4 col-sm-12">
            <aside>
               <div class="booking-form">
                  <div class="booking-title">
                     <h2 class="text-center" style="text-decoration: underline;">Book House Boat</h2>
                     <center>
                        <p>
                            <b>
                                @if(session()->has('msg'))
                                    {{ session()->get('msg') }}
                                @endif
                            </b>
                        </p>
                    </center>
                  </div>
                   <div class="col-md-12 text-center">
                    <h5>Cheek in: 12 O' clock</h3>
                    <h5>Cheek out: 12 O' clock</h3>
                 </div>
                  <form action="{{ route('add_book_house_boat') }}" method="POST" autocomplete="off">
                    @csrf
                    <div class="col-md-6" style="margin-top: 20px;">
                     <div class="form-group">
                        <input type="text" class="form-control" id="person_name" name="person_name" placeholder="Name" required>
                        @error('person_name')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>

                     <div class="col-md-6" style="margin-top: 20px;">
                  <div class="form-group">
                        <input type="number" class="form-control" min="10" id="mobile_no" name="mobile_no" placeholder="Contact Number" required>
                        <span style="color: red;" id="msg_number"></span>
                        @error('mobile_no')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="email" class="form-control" id="confirm_email" name="confirm_email" placeholder="Confirm E-mail" required>
                        @error('confirm_email')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                       <div class="form-group">
                        <select class="form-control" id="total_person" name="total_person" required>
                          <option selected disabled>Select Person</option>
                          <option value="1">1</option>
                          <option value="2">2</option>
                          <option value="3">3</option>
                          <option value="4">4</option>
                          <option value="5">5</option>
                          <option value="6">6</option>
                       </select>
                       @error('total_person')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <select class="form-control" id="meal_plan" name="meal_plan" required>
                          <option selected disabled>Select Meal Plan</option>
                          <option value="Breakfast Only">Breakfast Only</option>
                          <option value="Breakfast + Dinner">Breakfast + Dinner</option>
                          <option value="Breakfast + Lunch + Dinner">Breakfast + Lunch + Dinner</option>
                       </select>
                       @error('meal_plan')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="display: flex;">
                     <div class="col-md-5">
                     <label style="margin-top: 10px;">Cheek in:</label>
                  </div>
                  <div class="col-md-7">
                        <input type="date" class="form-control" name="check_in_date" required>
                        @error('check_in_date')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="display: flex;">
                     <div class="col-md-5">
                     <label style="margin-top: 10px;">Cheek out:</label>
                  </div>
                  <div class="col-md-7">
                        <input type="date" class="form-control" name="check_out_date" placeholder="check_out_date" required>
                        @error('check_out_date')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>
                  </div>
                     <div class="form-group">
                       <button class="booking-confirm hvr-shutter-out-horizontal" type="submit">Book Now</button>
                     </div>
                  </form>
               </div>
            </aside>

         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12">
               <div class="single-blog">
                  <div class="blog-content">
                     <p class="paragraph" style="margin-top: -20px;">stunning blue waters of Umiam Lake sits a boathouse,anchored to the Lumpongdeng island.Surrounded by coniferous trees,with a panoramic view of the surrounding mountains,it is just the kind of retreat where you would want to disappear to, for the weekend.</p>
                     <p class="paragraph">There are beautiful wooden interiors, a large comfortable bed and an attached bath, it has everything you need for a comfortable stay.There is also a patio surrounding the house where you can laze around, far away from the hustle and bustle of the city. Solar panels will keep the gadgets like cameras and phones running. On the island, you can indulge in fishing, photography, trekking, bird watching, boating etc. The management will provide a cook and a caretaker to look after your needs. Apart from the bed,they can also arrange for two extra mattresses so the boathouse can easily accommodate 4 - 6 people.</p>
                     <p class="paragraph">There are beautiful wooden interiors, a large comfortable bed and an attached bath, it has everything you need for a comfortable stay.There is also a patio surrounding the house where you can laze around, far away from the hustle and bustle of the city. Solar panels will keep the gadgets like cameras and phones running. On the island, you can indulge in fishing, photography, trekking, bird watching, boating etc. The management will provide a cook and a caretaker to look after your needs. Apart from the bed,they can also arrange for two extra mattresses so the boathouse can easily accommodate 4 - 6 people.</p>
                     <p class="paragraph">You need to park your car at the Water Sports Complex,Umiam Lake, Shillong. From there ,you can rent a boat to get to the boathouse.Boat charges may differ according to the number of people and size of the boat. </p>
                     <p class="paragraph">From Guwahati it takes around 1 hour 36 mins via NH 40 to reach Lumpongdeng island.From Shillong it will again take around 50 minutes(approx) to reach the Water Sports Complex,Umiam. </p>
                     <p class="paragraph">It is advisable to book a few days in advance. </p>
                     <p class="paragraph">At this price we wonder how many places would offer such a beautiful time at the heart of nature, away from mundane city life. Go enjoy !!! </p>
                     </div>
               </div>
               <!--/ End Single blog -->
            </div>
         </div>
      </div>
   </div>
</section>
<!-- footer start here -->
<footer class="footer-area">
   <div class="container">
     <div class="row tab-layout">
       <!-- footer left -->
       <div class="col-md-3 col-sm-6">
         <div class="single-footer">
           <div class="footer-title">
             <a href="#">
               <img class="lazy" data-src="{{asset('src/images/flogo.png')}}" style="width: 100%" alt="">
             </a>
           </div>
           <div class="footer-left">
             <div class="footer-logo">
               <p style="text-align: justify;">Choosing the right company to handle your travel arrangements in North East is utmost importance. North – East India is where one can explore the rich diversity, culture, traditions, dashing destinations and unforgettable hospitality. "Seven Sisters Tours & Travels" based in Kaziranga National Park, Assam plays a very vital role to make your travel successful and memorable.
               </p>
             </div>
           </div>
         </div>
       </div> 
       <!-- footer left -->
       <!-- footer latest news -->
       <div class="col-md-2 col-sm-6">
         <div class="single-footer">
           <div class="single-recent-post">
             <div class="footer-title">
               <h3>Quick Links
               </h3>
             </div>
             <ul class="recent-post">
               <li>
                 <a href="{{url('/')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">
                     Home
                   </span>
                 </a>
               </li>
               <li>
                 <a href="{{route('aboutus')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">
                     About Us
                   </span>
                 </a>
               </li>
               <li>
                 <a href="{{url('aboutnortheast')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">
                     About Northeast
                   </span>
                 </a>
               </li>
               <li>
                 <a href="{{url('single_blog')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">
                     Blog
                   </span>
                 </a>
               </li>
               <li>
                 <a href="{{url('contactus')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">Contact Us
                   </span>
                 </a>
               </li>
               <li>
                 <a href="{{url('tc')}}">
                   <i class="fa fa-check" aria-hidden="true" style="color: #37b721;">
                   </i>
                   <span style="color: #fff;">
                     Privacy Policy & TC
                   </span>
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div> 
       <!-- footer latest news -->
       <!-- footer destination -->
       <div class="col-md-3 col-sm-6 f-phone-responsive">
         <div class="single-footer">
           <div class="footer-title">
             <h3>Location
             </h3>
           </div>
           <iframe class="lazy" data-src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d14271.42520752373!2d93.407983!3d26.5889861!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa2723f942b6d8237!2sSeven%20Sister%20Tours%20and%20Travels!5e0!3m2!1sen!2sin!4v1571897861787!5m2!1sen!2sin" width="100%" height="210" frameborder="0" style="border:0;" allowfullscreen=""></iframe>
           <!--<iframe src="https://www.facebook.com/plugins/page.php?href=https%3A%2F%2Fwww.facebook.com%2Fsevensisters2014%2F&tabs=timeline&width=670&height=500&small_header=true&adapt_container_width=true&hide_cover=false&show_facepile=true&appId" width="100%" height="210" style="border:none;overflow:hidden" scrolling="no" frameborder="0" allowTransparency="true" allow="encrypted-media">-->
           <!--</iframe>-->
         </div>
       </div> 
       <!-- footer destination -->
       <!-- footer contact -->
       <div class="col-md-4 col-sm-6 f-phone-responsive">
         <div class="single-footer">
           <div class="footer-title">
             <h3>Quick Contact
             </h3>
           </div>
           <div class="footer-left">
             <ul class="footer-contact">
               <li>
                 <i class="fa fa-map-marker" aria-hidden="true">
                 </i> 1 no. Kohora, Kaziranga National Park
                 <br>
                 Regd. Assam Tourism, Govt.of Assam
               </li>
                <li>
                 <i class="fa fa-phone" aria-hidden="true">
                 </i><a href="callto:+91-6001685490" style="color: #fff"> +91 6001685490 / +91 8486951528</a>
               </li>
               <li>
                 <i class="fa fa-envelope-o" aria-hidden="true">
                 </i><a href="mailto:info.sevensisters14@gmail.com" style="color: #fff"> info.sevensisters14@gmail.com</a>
               </li>
             </ul>
           </div>
           <div class="footer-social-media" style="margin-top: 10px;margin-left: 10px;">
             <div class="social-footer-title">
               <h3>Follow Us
               </h3>
             </div>
             <ul class="footer-social-link">
               <li class="facebook">
                 <a href="https://www.facebook.com/sevensisters2014" target="_blank">
                   <i class="fa fa-facebook">
                   </i>
                 </a>
               </li>
               <li class="twitter">
                 <a href="#">
                   <i class="fa fa-twitter">
                   </i>
                 </a>
               </li>
               <li class="linkedin">
                 <a href="#">
                   <i class="fa fa-linkedin">
                   </i>
                 </a>
               </li>
               <li class="gplus">
                 <a href="#">
                   <i class="fa fa-google-plus">
                   </i>
                 </a>
               </li>
               <li class="youtube">
                 <a href="https://wa.me/+91-6001685490" target="_blank">
                   <i class="fa fa-whatsapp" aria-hidden="true">
                   </i>
                 </a>
               </li>
             </ul>
           </div>
         </div>
       </div> 
       <!-- footer contact -->
     </div>
     <div class="row">
       <div class="footer-bottom">
         <div class="col-md-6">
           <div class="copyright">
             <p>&copy;  2019 Seven Sisters Tours & Travels All Rights Reserved. Design By 
               <a href="http://webinfotech.net.in/" target="_blank">
                 <span>Web Infotech
                 </span>
               </a>
             </p>
           </div>
         </div>
         <div class="col-md-6">
           <ul class="payicon pull-right">
             <li>We Accept
             </li>
             <li>
               <img src="{{asset('src/images/payicon02.png')}}" alt="">
             </li>
             <li>
               <img src="{{asset('src/images/payicon03.png')}}" alt="">
             </li>
             <li>
               <img src="{{asset('src/images/payicon06.png')}}" alt="">
             </li>
           </ul>
         </div>
       </div>
     </div>
   </div>
 </footer> 
 <!-- end footer -->
 <section>
   <div class="icon-float">
     <ul>
       <li>
         <a href="https://www.facebook.com/sevensisters2014" target="_blank" class="fb1">
           <i class="fa fa-facebook" aria-hidden="true">
           </i>
         </a> 
       </li>
       <li>
         <a href="https://wa.me/+91-6001685490" target="_blank" class="wa1">
           <i class="fa fa-whatsapp" aria-hidden="true">
           </i>
         </a> 
       </li>
       <li>
         <a href="#" class="tw1">
           <i class="fa fa-twitter" aria-hidden="true">
           </i>
         </a> 
       </li>
       <li>
         <a href="#" class="gp1">
           <i class="fa fa-google-plus" aria-hidden="true">
           </i>
         </a> 
       </li>
       <li>
         <a href="#" class="li1">
           <i class="fa fa-linkedin" aria-hidden="true">
           </i>
         </a> 
       </li>
     </ul>
   </div>
 </section>
 <!-- ============================
 JavaScript Files
 ============================= -->
 
 <!-- jquery latest version -->
 <script src="{{asset('src/js/vendor/jquery-3.2.0.min.js')}}">
 </script>
 <!-- bootstrap js -->
 <script src="{{asset('src/js/bootstrap.min.js')}}">
 </script>
 <!-- owl.carousel js -->
 <script src="{{asset('src/js/owl.carousel.min.js')}}">
 </script>
 <!-- slick js -->
 <script src="{{asset('src/js/slick.min.js')}}">
 </script>
 <!-- meanmenu js -->
 {{-- 
 <script src="{{asset('src/js/jquery.meanmenu.min.js')}}">
 </script> --}}
 <!-- jquery-ui js -->
 <script src="{{asset('src/js/jquery-ui.min.js')}}">
 </script>
 <!-- wow js -->
 <script src="{{asset('src/js/wow.min.js')}}">
 </script>
 <!-- counter js -->
 <script src="{{asset('src/js/jquery.counterup.min.js')}}">
 </script>
 <!-- Countdown js -->
 <script src="{{asset('src/js/jquery.countdown.min.js')}}">
 </script>
 <!-- waypoints js -->
 {{-- <script src="{{asset('src/js/jquery.waypoints.min.js')}}">
 </script> --}}
 <!-- Isotope js -->
 {{-- <script src="{{asset('src/js/isotope.pkgd.min.js')}}">
 </script> --}}
 <!-- magnific js -->
 {{-- <script src="{{asset('src/js/jquery.magnific-popup.min.js')}}">
 </script> --}}
 <!-- Image loaded js -->
 {{-- <script src="{{asset('src/js/imagesloaded.pkgd.min.js')}}">
 </script> --}}
 <!-- chossen js -->
 {{-- <script src="{{asset('src/js/chosen.jquery.min.js')}}">
 </script> --}}
 <script src="{{asset('src/js/assets/revolution/jquery.themepunch.revolution.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/jquery.themepunch.tools.min.js')}}">
 </script>
 <!-- Revolution Extensions -->
 {{-- <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.actions.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.carousel.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.kenburn.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.layeranimation.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.migration.min.js')}}">
 </script>
 <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.navigation.min.js')}}">
 </script> --}}
 {{-- <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.parallax.min.js')}}">
 </script> --}}
 {{-- <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.slideanims.min.js')}}">
 </script> --}}
 {{-- <script src="{{asset('src/js/assets/revolution/extensions/revolution.extension.video.min.js')}}">
 </script> --}}
 <script src="{{asset('src/js/assets/revolution/revolution.js')}}">
 </script>
 <!-- Jquery plugin -->
 <script src="{{asset('src/js/plugins.js')}}">
 </script>
 <!-- select2 js plugin -->
 {{-- <script src="{{asset('src/js/select2.min.js')}}">
 </script>   --}}  
 <script src="{{asset('src/js/colors.js')}}">
 </script>
 <!-- Jquery plugin -->
 <script src="{{asset('src/js/jquery-customselect.js')}}">
 </script>
 <!-- main js -->
 <script src="{{asset('src/js/custom.js')}}">
 </script>
 <script>
   window.onscroll = function() {
     myFunction()};
   var navbar = document.getElementById("navbar");
   var sticky = navbar.offsetTop;
   function myFunction() {
     if (window.pageYOffset >= sticky) {
       navbar.classList.add("sticky")
     }
     else {
       navbar.classList.remove("sticky");
     }
   }
 </script>
 <!--index carousel-->
 <script>
   $('.multi-item-carousel').carousel({
     interval: false
   }
                                     );
   $('.multi-item-carousel .item').each(function(){
     var next = $(this).next();
     if (!next.length) {
       next = $(this).siblings(':first');
     }
     next.children(':first-child').clone().appendTo($(this));
     if (next.next().length>0) {
       next.next().children(':first-child').clone().appendTo($(this));
     }
     else {
       $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     }
   }
                                       );
 </script>
 <script>
   $('.multi-item-carousel1').carousel({
     interval: false
   }
                                      );
   $('.multi-item-carousel1 .item').each(function(){
     var next = $(this).next();
     if (!next.length) {
       next = $(this).siblings(':first');
     }
     next.children(':first-child').clone().appendTo($(this));
     if (next.next().length>0) {
       next.next().children(':first-child').clone().appendTo($(this));
     }
     else {
       $(this).siblings(':first').children(':first-child').clone().appendTo($(this));
     }
   }
                                        );
 </script>
 <script >
   /**
  * jquery.responsive-menu.js
  * jQuery + CSS Multi Level Responsive Menu
  */
   jQuery(function($) {
     $.fn.responsivenav = function(args) {
       // Default settings
       var defaults = {
         responsive: true,
         width: 480,                           // Responsive width
         button: $(this).attr('id')+'-button', // Menu button id
         animation: {
           // Menu animation
           effect: 'slide',                    // Accepts 'slide' or 'fade'
           show: 150,
           hide: 100
         }
         ,
         selected: 'selected',                 // Selected class
         arrow: 'downarrow'                    // Dropdown arrow class
       };
       var settings = $.extend(defaults, args);
       // Initialize the menu and the button
       init($(this).attr('id'), settings.button);
       function init(menuid, buttonid) {
         setupMenu(menuid, buttonid);
         // Add a handler function for the resize and orientationchange event
         $(window).bind('resize orientationchange', function(){
           resizeMenu(menuid, buttonid);
         }
                       );
         // Trigger initial resize
         resizeMenu(menuid, buttonid);
       }
       function setupMenu(menuid, buttonid) {
         var $mainmenu = $('#'+menuid+'>ul');
         var $headers = $mainmenu.find("ul").parent();
         // Add dropdown arrows
         $headers.each(function(i) {
           var $curobj = $(this);
           $curobj.children('a:eq(0)').append('<span class="'+settings.arrow+'"></span>');
         }
                      );
         if ( settings.responsive ) {
           // Menu button click event
           // Displays top-level menu items
           $('#'+buttonid).click(function(e) {
             e.preventDefault();
             if ( isSelected($('#'+buttonid)) ) {
               // Close menu
               collapseChildren('#'+menuid);
               animateHide($('#'+menuid), $('#'+buttonid));
             }
             else {
               // Open menu
               animateShow($('#'+menuid), $('#'+buttonid));
             }
           }
                                );
         }
       }
       function resizeMenu(menuid, buttonid) {
         var $ww = document.body.clientWidth;
         // Add mobile class to elements for CSS use
         // instead of relying on media-query support
         if ( $ww > settings.width || !settings.responsive) {
           $('#'+menuid).removeClass('mobile');
           $('#'+buttonid).removeClass('mobile');
         }
         else {
           $('#'+menuid).addClass('mobile');
           $('#'+buttonid).addClass('mobile');
         }
         var $headers = $('#'+menuid+'>ul').find('ul').parent();
         $headers.each(function(i) {
           var $curobj = $(this);
           var $link = $curobj.children('a:eq(0)');
           var $subul = $curobj.find('ul:eq(0)');
           // Unbind events
           $curobj.unbind('mouseenter mouseleave');
           $link.unbind('click');
           animateHide($curobj.children('ul:eq(0)'));
           if ( $ww > settings.width  || !settings.responsive ) {
             // Full menu
             $curobj.hover(function(e) {
               var $targetul = $(this).children('ul:eq(0)');
               var $dims = {
                 w: this.offsetWidth,
                 h: this.offsetHeight,
                 subulw: $subul.outerWidth(),
                 subulh: $subul.outerHeight()
               };
               var $istopheader = $curobj.parents('ul').length == 1 ? true : false;
               $subul.css($istopheader ? {
               }
                          : {
                 top: 0 }
                         );
               var $offsets = {
                 left: $(this).offset().left, 
                 top: $(this).offset().top
               };
               var $menuleft = $istopheader ? 0 : $dims.w;
               $menuleft = ( $offsets.left + $menuleft + $dims.subulw > $(window).width() ) ? ( $istopheader ? -$dims.subulw + $dims.w : -$dims.w ) : $menuleft;
               $targetul.css({
                 left:$menuleft+'px', 
                 width:$dims.subulw+'px' 
               }
                            );
               animateShow($targetul);
             }
                           ,
                           function(e) {
               var $targetul = $(this).children('ul:eq(0)');
               animateHide($targetul);
             }
                          );
           }
           else {
             // Compact menu
             $link.click(function(e) {
               e.preventDefault();
               var $targetul = $curobj.children('ul:eq(0)');
               if ( isSelected($curobj) ) {
                 collapseChildren($targetul);
                 animateHide($targetul);
               }
               else {
                 //collapseSiblings($curobj);
                 animateShow($targetul);
               }
             }
                        );
           }
         }
                      );
         collapseChildren('#'+menuid);
         if ( settings.responsive && isSelected($('#'+buttonid)) ) {
           //collapseChildren('#'+menuid);
           $('#'+menuid).hide();
           $('#'+menuid).removeAttr('style');
           $('#'+buttonid).removeClass(settings.selected);
         }
       }
       function collapseChildren(elementid) {
         // Closes all submenus of the specified element
         var $headers = $(elementid).find('ul');
         $headers.each(function(i) {
           if ( isSelected($(this).parent()) ) {
             animateHide($(this));
           }
         }
                      );
       }
       function collapseSiblings(element) {
         var $siblings = element.siblings('li');
         $siblings.each(function(i) {
           collapseChildren($(this));
         }
                       );
       }
       function isSelected(element) {
         return element.hasClass(settings.selected);
       }
       function animateShow(menu, button) {
         if ( !button ) {
           var button = menu.parent();
         }
         button.addClass(settings.selected);
         if ( settings.animation.effect == 'fade' ) {
           menu.fadeIn(settings.animation.show);
         }
         else if ( settings.animation.effect == 'slide' ) {
           menu.slideDown(settings.animation.show);
         }
         else {
           menu.show();
           menu.removeClass('hide');
         }
       }
       function animateHide(menu, button) {
         if ( !button ) {
           var button = menu.parent();
         }
         if ( settings.animation.effect == 'fade' ) {
           menu.fadeOut(settings.animation.hide, function() {
             menu.removeAttr('style');
             button.removeClass(settings.selected);
           }
                       );
         }
         else if ( settings.animation.effect == 'slide' ) {
           menu.slideUp(settings.animation.hide, function() {
             menu.removeAttr('style');
             button.removeClass(settings.selected);
           }
                       );
         }
         else {
           menu.hide();
           menu.addClass('hide');
           menu.removeAttr('style');
           button.removeClass(settings.selected);
         }
       }
     };
   }
         );
   jQuery(function ($) {
     $('#primary-nav').responsivenav();
     $('#top-nav').responsivenav({
       responsive:false}
                                );
   }
         );
 </script>
 <script src="{{asset('src/js/vendor/modernizr-2.8.3.min.js')}}">
     </script>
 <!-- {{--   <script type="text/javascript" src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.min.js')}}"></script>-->
 <!--    <script type="text/javascript" src="{{asset('//cdnjs.cloudflare.com/ajax/libs/jquery.lazy/1.7.9/jquery.lazy.plugins.min.js')}}"></script>-->
 <!--<script>-->
 <!--     $(function() {-->
 <!--        $('.lazy').Lazy();-->
 <!--    });-->
 <!--</script>--}}-->
 
 <script src="https://cdn.jsdelivr.net/npm/vanilla-lazyload@12.2.0/dist/lazyload.min.js"></script>
 <script>
     var lazyLoadInstance = new LazyLoad({
     elements_selector: ".lazy"
 
 });
 </script>
 </body>
 </html>
 
<script type="text/javascript">
$(document).ready(function(){
    $('#mobile_no').keyup(function(){
        if ($('#mobile_no').val().length > 10) {
            $('#mobile_no').val("");
            $('#msg_number').text("Enter only 10 digit number");
        } else
            $('#msg_number').text("");
    });
});
</script>