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
   <div class="single-bredcurms banner_kaziranga_safari" >
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>Jeep Safari</h2>
                  <ul>
                     <li><a href="{{('/')}}">Home</a></li>
                     <li class="active banner-fixed">Jeep Safari</li>
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
                     <img src="{{('src/images/blog/1.jpg')}}" alt="#" >
                  </div>
               </div>
               <div class="single-blog">
                  <div class="blog-content">
                     <h2>Kaziranga National Park, Assam - Home to the One Horned Rhino</h2>
                     <p class="paragraph">The etymology of the name Kaziranga is not certain, there exist a number of possible explanations derived from local legends and records. According to one legend, a girl named Rawnga, from a nearby village, and a youth named Kazi, from Karbi Anglong, fell in love. This match was not acceptable to their families, and the couple disappeared into the forest, never to be seen again, and the forest was named after them.</p>
                  </div>
               </div>
            </div>

         </div>
         <div class="col-md-4 col-sm-12">
            <aside>
               <div class="booking-form">
                  <div class="booking-title">
                    <h2>Book Jeep Safari Trip</h2>
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
                  <form method="POST" autocomplete="off" action="{{ route('add_k_booking', ['parkId' => 1]) }}" >
                    @csrf
                    <div class="col-md-6">
                     <div class="form-group">
                        <input type="text" class="form-control" name="person_name" id="name" placeholder="Name" required>
                        @error('person_name')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>
                   <div class="col-md-6">
                     <div class="form-group">
                        <input type="number" class="form-control" name="person_age" id="age" placeholder="Age" required>
                        @error('person_age')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-6">
                  <div class="form-group">
                        <input type="number" class="form-control" id="number" name="person_contact_no" placeholder="Contact Number" required>
                        @error('person_contact_no')
                            {{ $message }}
                        @enderror
                        <span id="msg_number" style="color: blue; font-weight: bold;"></span>
                     </div>
                  </div>
                  
                  <div class="col-md-6">
                     <div class="form-group">
                        <input type="email" class="form-control" id="confirm_email" name="person_confirm_email" placeholder="Confirm E-mail" required>
                        @error('confirm_email')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                     <div class="form-group">
                        <input type="text"  class="form-control" id="person" name="persons" placeholder="Enter Persons" required />
                        @error('persons')
                            {{ $message }}
                        @enderror
                        <span id="msg_person" style="color: blue; font-weight: bold;"></span>
                     </div>
                  </div>

                  <div class="col-md-12">
                     <div class="form-group">
                        <select class="form-control" id="forest_range" name="forest_range" required>
                          <option selected disabled>Select Forest Range</option>
                           @if (count($rangeData) > 0)
                                @foreach ($rangeData as $value)
                                    <option value="{{ $value->rangeId }}">{{ $value->range }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('forest_range')
                            {{ $message }}
                        @enderror
                        <span id="msg_forest_range" style="color: blue; font-weight: bold;"></span>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control" id="nationality" name="nationalityId" required>
                          <option selected disabled>Select Nationality</option>
                          <option value="1">Indian</option>
                          <option value="2">Foreign</option>
                        </select>
                        @error('nationalityId')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group">
                        <select class="form-control" id="booking_time" name="booking_time" required>
                          <option selected disabled>Jeep Safari Time</option>
                          @if (count($timingData) > 0)
                                @foreach ($timingData as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}

                                        @if(!empty($value->fromTime))
                                            : ({{ $value->fromTime }} - {{ $value->toTime }})
                                        @endif
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        @error('booking_time')
                            {{ $message }}
                        @enderror
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="display: flex;">
                     <div class="col-md-6">
                     <label style="margin-top: 10px;">Total Jeep :</label>
                  </div>
                  <div class="col-md-6">
                        <input type="number" class="form-control" id="total_jeep" name="total_jeep" placeholder="Total Jeep" required readonly style="font-weight: bolder;">
                        @error('total_jeep')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>
                  </div>
                  <div class="col-md-12">
                    <div class="form-group" style="display: flex;">
                     <div class="col-md-6">
                     <label style="margin-top: 10px;">Total Price :</label>
                  </div>
                  <div class="col-md-6">
                        <input type="number" step="0.01" class="form-control" id="total_price" name="total_price" placeholder="Total Price" required readonly style="font-weight: bolder;">
                        @error('total_price')
                            {{ $message }}
                        @enderror
                     </div>
                     </div>
                  </div>
                     <div class="form-group">
                       <button class="booking-confirm hvr-shutter-out-horizontal" type="submit" name="submit">Book Now</button>
                     </div>
                  </form>
               </div>
            </aside>

         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12">
               <div class="single-blog">
                  <div class="blog-content">
                     <p class="paragraph">Kaziranga National Park is one of the prides of India. Kaziranga is the place where the nature unwinds its pristine form in millions of hues, where wildlife roams fearlessly, where man and nature meets together. This prestigious national park of India is situated in the north eastern part of the country in the district of Golaghat and Nagoan in the state of Assam. Let’s go back to the beginnings of the twentieth century in the year of 1904 when this beautiful wildlife sanctuary was created, and about 68 years later it was declared as National Park.</p>
                     
                     
                     <p><strong>SAFARI IN KAZIRANGA</strong></p>
                     <p class="paragraph">Kaziranga National Park forest department offers Jeep Safari and Elephant Safari for the wildlife lovers to explore the forest conveniently. The magnificent natural sumptuousness and wonderful wildlife of the Kaziranga draw huge tourist flow for the safari. The park offers two types of safari- one is Jeep Safari and other is elephant safari. The park that is sprawling in the area of around 430 sq km which is divided into the four tourism circuit for the better tourism management. All the tourism circuits have its own charm with the distinguished wildlife and landscape beauty. The four circuits and their entry point for the Jeep Safari are followings-</p>
                     <p><strong>Safari Zones in Kaziranga National Park</strong></p>
                     <p class="paragraph">Spread its wings in the 430 sq km of the countryside land, the Kaziranga National Park is one of the prominent wildlife destinations in India. Known as the Hub of the Biodiversity, the Kaziranga forest is the protected natural home to the various endangered wild animal species. The park is declared as the World Heritage Site due to its amazing wildlife that has the highest number of the one-horned Rhinoceros in the world. The large grasslands of the Kaziranga forest and the amiable surroundings are the perfect habitats for the survival of the endangered one-horned Rhino.</p>
                     <p class="paragraph">The Kaziranga National Park is also known for having the five big wild animals in its vicinity which are one-horned Rhinoceros, Asian elephant, Royal Bengal tigers, Wild Buffalos and the Swamp Deer. The other wild animals which are the native to this forest are Sloth Bear, Leopards, Hog Deer, Wild Boar, Hog Badger, Hoolock Gibbons, Capped Langur, Golden Jackal, Indian Grey Mongoose, Fishing Cat, Large and Small Indian Civet, Bengal Fox, Indian and Chinese Pangolin, etc.</p>
                     <p class="paragraph">The Kaziranga Park is also a prime wildlife tourism hub in the Northeastern India and the various tourism activities are organized by the forest department. The Jeep safari and the Elephant safari are organized for the tourists to explore the rich wildlife of the park and get the sighting of the majestic wild animals of the forest. The Kaziranga National Park is divided into the four tourism ranges which are ….
                     <ul >
                        <li>i) Central or Kohora Range</li>
                        <li>ii) Western or Bagori Range</li>
                        <li>iii) Eastern or Agaratoli Range</li>
                        <li>iv) Burapahar Range</li>
                     </ul>
                     </p>
                     <p class="paragraph">The Jeep Safari is organized in every ranges while the Elephant Safari is organized only in the Central  and the Western Range.</p>
                     <p class="paragraph">The timings of the Elephant Safari and their safari routes may vary with the change of seasons and weather conditions. The park management has the rights to decide and change the Elephant safari timing, Safari route, number of Elephant safari and the number of shifts allowed in the park. All the four ranges of the park have the enriched and distinct wildlife with the dense forests, large grasslands, diverse range of wild animals and exotic birds along with the mesmerizing and picturesque beauty of the landscape. Safari in any range will take you to the deep in the forest so that you can extensively explore the wild flora and get the sighting of the wild fauna of the forest. As every range is the part of the same Kaziranga forest so there is no any good zone or bad zone.</p>
                     <p><strong>Central Safari Range, Kohora Kaziranga:</strong></p>
                     <p class="paragraph">The entry gate to the central range of the Kaziranga Park is located in the small town of Kohora, around 2 km from the bus stop at the National Highway. The central zone starts from the Mihimukh riding tower, which is the Elephant safari point. Tourists who have booked for the Elephant safari will ride the Elephant from this point for the one-hour elephant safari in the central range of the park. Both the jeep safari and elephant safari are organized in this range.</p>
                     <p><strong>Western Safari Range, Bagori Kaziranga:</strong></p>
                     <p class="paragraph">The entry gate to the western range of the Kaziranga Park is located at the place named Bagori at the Kaziranga. The Bagori tourism office is the starting point of this range from where tourists can take the ride of Elephant safari and Jeep safari to explore the forest. The western zone is the most preferred tourism range in Kaziranga for the elephant safari as the landscape of this range provides the opportunity to get the very close sight of the one-horned Rhino.</p>
                     <p><strong>Eastern Safari Range, Agaratoli Kaziranga:</strong></p>
                     <p class="paragraph">The entry gate of the eastern range of the Kaziranga Park is situated in the small town of Agaratoli which is located on the National Highway. The Agaratoli tourism office is the starting point of this range and the Jeep safari is organized in this range. The eastern range is home to numerous exotic water birds which can be viewed perfectly using the binocular.</p>
                     <p><strong>Burapahar Safari Range, Ghorakati Kaziranga:</strong></p>
                     <p class="paragraph">The entry gate of the Burapahar range of the Kaziranga Park is located at the Ghorakati village. The Rhinoland Park is the starting point for the Jeep Safari in this range. The Burapahar tourism range is the hilly terrain with beautiful scenery of Nature, and also considered best for birding. The range also offers the trekking in the forest on the designated route which can be a very enriching experience to explore the dense forest so close by walking on your foot and get the feeling of closeness to Nature.</p>
                     <p><strong>Jeep Safari Fees:</strong>
                     <h5 style="margin-top: -20px; color: gray">(Kind Note: Maximum 6 Persons are allowed by the forest department in one Jeep.)</h5>
                     </p>
                     <div class="panel panel-default panel-table">
                        <div class="panel-heading" >
                           <div class="tr" >
                              <div class="td td_head">Forest Range</div>
                              <div class="td td_head">Indian Nationals</div>
                              <div class="td td_head">Foreign Nationals</div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Kohora (central) Range</div>
                              <div class="td">INR 3,400/-</div>
                              <div class="td">INR 6,700/- </div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Bagori (western) Range</div>
                              <div class="td">INR 3,700/-</div>
                              <div class="td">INR 7,000/- </div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Agaratoli (eastern) Range </div>
                              <div class="td">INR 4,000/-</div>
                              <div class="td">INR 7,500/- </div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Burapahar (ghorakati) Range</div>
                              <div class="td">INR 4,500/-</div>
                              <div class="td">INR 8,000/- </div>
                           </div>
                        </div>
                     </div>
                     <p ><strong style="margin-left: 148px;">Advance Booking Procedure</strong>
                     <h5 style="margin-top: -20px; color: green; margin-left: 50px;">(For booking request please provide us the following details:)</h5>
                     </p>
                     <p >
                     <ul style="background-color: #fff;">
                        <li>a) The full name, age, sex of each visitor as printed same on the identity cards to be provided along with the
                           confirmatory amount
                        </li>
                        <li>b) Preferred travelling date & Safari timing (Morning/Afternoon)</li>
                        <li>c) Preferred travelling date & Safari timing (Morning/Afternoon)</li>
                        <li>d) Specific ID card number of your ( Voter Id, Aaadhar No, Driving license No etc)</li>
                        <li>e) Safari charges paid in advance</li>
                        <li>f) Safari charges paid in advance</li>
                        <li>g) Please carry the same ID card submitted during online booking</li>
                        <li>h) Passport details are mandatory for making reservation of foreign tourists</li>
                        <li>i) Passport details are mandatory for making reservation of foreign tourists</li>
                        <li>j) Safari is allotted on first come first serve basis (subject to availability)</li>
                     </ul>
                     </p>
                     <p><strong>Jeep Safari Timing:</strong>
                     <h5 style="margin-top: -20px; color: gray">(The safari is conducted by the forest department in two different shifts)</h5>
                     </p>
                     <div class="panel panel-default panel-table">
                        <div class="panel-heading" >
                           <div class="tr" >
                              <div class="td td_head">Forest Range</div>
                              <div class="td td_head">Morning Shift</div>
                              <div class="td td_head">Afternoon Shift</div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Kohora (central) Range</div>
                              <div class="td">07:00 AM - 9:00 AM</div>
                              <div class="td">01:00 PM - 03:00 PM</div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Bagori (western) Range</div>
                              <div class="td">07:00 AM - 9:00 AM</div>
                              <div class="td">01:00 PM - 03:00 PM</div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Agaratoli (eastern) Range </div>
                              <div class="td">07:00 AM - 9:00 AM</div>
                              <div class="td">01:00 PM - 03:00 PM</div>
                           </div>
                        </div>
                        <div class="panel-body">
                           <div class="tr">
                              <div class="td">Burapahar (ghorakati) Range</div>
                              <div class="td">07:00 AM - 9:00 AM</div>
                              <div class="td">01:00 PM - 03:00 PM</div>
                           </div>
                        </div>
                     </div>
               
                    
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
    $('#person').keyup(function(){
        if ($('#person').val() < 1) {
            $('#person').val("");
            $('#total_jeep').val("");
            $('#msg_person').text("Please enter greater than 0");
        } else {
            $('#msg_person').text("");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });

            $.ajax({
                method: "GET",
                url   : "{{ url('/jeep/jeep_checking/1') }}/"+$('#person').val()+"",
                success: function(response) {

                    $('#total_jeep').val(response);
                }
            });
        }
    });

    $('#number').keyup(function(){
        if ($('#number').val().length > 10) {
            $('#number').val("");
            $('#msg_number').text("Enter only 10 digit number");
        } else
            $('#msg_number').text("");
    });

    $('#nationality').change(function(){

        var forest_range = $('#forest_range').val();
        var nationality  = $('#nationality').val();
        var person       = $('#person').val();

        if (forest_range == null || person == "") {

            if(person == "")
                $('#msg_person').text("Please ! enter persons");
            if(forest_range == null)
                $('#msg_forest_range').text("Please ! select forest range");
        }
        else {
            $('#msg_forest_range').text("");
            $('#msg_person').text("");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });

            $.ajax({
                method: "GET",
                url   : "{{ url('/jeep/calculate_k_jeep_amount/') }}/1/"+$('#forest_range').val()+"/"+$('#nationality').val()+"/"+$('#person').val()+"",
                success: function(response) {

                    $('#total_price').val(response);
                }
            });
        }
    });

    $('#nationality').focusout(function(){

        var forest_range = $('#forest_range').val();
        var nationality  = $('#nationality').val();
        var person       = $('#person').val();

        if (forest_range == null || person == "") {

            if(person == "")
                $('#msg_person').text("Please ! enter persons");
            if(forest_range == null)
                $('#msg_forest_range').text("Please ! select forest range");
        }
        else {
            $('#msg_forest_range').text("");
            $('#msg_person').text("");

            $.ajaxSetup({
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
            });

            $.ajax({
                method: "GET",
                url   : "{{ url('/jeep/calculate_k_jeep_amount/') }}/1/"+$('#forest_range').val()+"/"+$('#nationality').val()+"/"+$('#person').val()+"",
                success: function(response) {

                    $('#total_price').val(response);
                }
            });
        }
    });
});
</script>