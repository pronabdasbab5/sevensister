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
   <div class="single-bredcurms" style="background-image:url('/src/images/bercums/kazirangapark.jpg');">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>Kaziranga National Park</h2>
                  <ul>
                     <li><a href="{{('/')}}">Home</a></li>
                     <li class="active banner-fixed">Kaziranga National Park</li>
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
               <div class="single-blog single1">
                  <div class="blog-head">
                     <img src="{{('src/images/bercums/kazirangapark1.jpg')}}" alt="#" >
                  </div>
               </div>
               <!--/ End Single blog -->
            </div>
         </div>
         <div class="col-md-4 col-sm-12 col-xs-12">
            <!-- Blog Sidebar -->
            <div class="blog-sidebar">
               <!-- Single Sidebar -->
               <div class="single-sidebar category">
                  <h2>National Park In Assam</h2>
                  <ul>
                     <li><a href="{{url('kaziranganationalpark')}}"><i class="fa fa-angle-double-right"></i>Kaziranga Natinal Park</a>
                     </li>
                     <li><a href="{{url('manasnationalpark')}}"><i class="fa fa-angle-double-right"></i>Manas Natinal Park</a>
                     </li>
                     <li><a href="{{url('dibrusaikhowanationalpark')}}"><i class="fa fa-angle-double-right"></i>Dibru Saikhowa Natinal Park</a>
                     </li>
                     <li><a href="{{url('namerinationalpark')}}"><i class="fa fa-angle-double-right"></i>Nameri Natinal Park</a>
                     </li>
                     <li><a href="{{url('orangnationalpark')}}"><i class="fa fa-angle-double-right"></i>Orang Natinal Park</a>
                     </li>
                  </ul>
               </div>
               <!--/ End Single Sidebar -->
            </div>
            <!--/ End Blog Sidebar -->
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12">
            <div class="col-md-12">
               <div class="single-blog">
                  <div class="blog-content">
                     <h2>Kaziranga National Park, Assam - Home to the One Horned Rhino</h2>
                     <p class="paragraph">The etymology of the name Kaziranga is not certain, there exist a number of possible explanations derived from local legends and records. According to one legend, a girl named Rawnga, from a nearby village, and a youth named Kazi, from Karbi Anglong, fell in love. This match was not acceptable to their families, and the couple disappeared into the forest, never to be seen again, and the forest was named after them.</p>
                     <p class="paragraph">Kaziranga National Park is one of the prides of India. Kaziranga is the place where the nature unwinds its pristine form in millions of hues, where wildlife roams fearlessly, where man and nature meets together. This prestigious national park of India is situated in the north eastern part of the country in the district of Golaghat and Nagoan in the state of Assam. Let’s go back to the beginnings of the twentieth century in the year of 1904 when this beautiful wildlife sanctuary was created, and about 68 years later it was declared as National Park.</p>
                     <p class="paragraph">It is noteworthy to mention that it is the host for two third of world’s population of endangered Indian one-horned rhinoceros and also declared as a tiger reserve in 2006, holding the highest density of tigers in the world. The park is also a domicile for large breeding inhabitants of Elephants, wild water buffaloes and Swamp Deer. It has been declared as a forest reserve in the year of 1908 and wildlife sanctuary in the year of 1950. Covering an approximate area of 430 square kilometers, Kaziranga was declared as a World Heritage Site by UNESCO for its unique natural environment in the year of 1985. Apart from this, the park has been identified as an important bird area by Birdlife International Society as it is a home to various species of migrating and inhabitant birds. Situated on the banks of river Brahmaputra, the sanctuary is blessed with the four different kinds of vegetation. The Tropical moist mixed deciduous forests and tropical semi-evergreen forests is marked by the 41% of the tall grasses, 29% open jungle, 11% short grasses and rest is covered with the rivers and the water bodies. Its breathtaking array of flora and diverse fauna adds value to the scenic beauty of the park.</p>
                     <p class="paragraph">Kaziranga National Park is solitary among the foremost National Parks on the earth and also famous as the wonderful wildlife destination of the North East India. Situated in the intense geographical location, the park presents a massive range of natural beauty. Surrounded by Brahmaputra River on the North and the Karbi Anglong mounts in the South, the park offers a splendid scenic sight. The beautiful geographical vicinity of the park makes it heaven for wildlife enthusiasts and nature lovers. The title Kaziranga adopts its name to Karbi, which is the name of a woman who ruled here in ancient time. It is the only ancient park in Assam which wraps a vast region of numerous flora and fauna.</p>
                     <p><strong>Attractions of Kaziranga National Park</strong></p>
                     <p class="paragraph">Kaziranga National Park is one of the major wildlife tourist’s attractions in India. Thousands of travelers from different part of the country and world come here every year to unlock the doors of diverse wildlife and scout the exquisiteness of the natural empire. The perfect topography with a river and its varied grasslands winds through its entire length, Kaziranga promises an adventure that you will never forget. The tourism of Kaziranga is not just about spotting one of the many one-horned rhinoceros or tigers but also to watch the three giant herbivores that reside in the park called – The Asiatic Elephant, The Swamp Deer and the Asiatic Water Buffaloes. The park has also been demarcated as an important bird area by the Birdlife International in order to promote the conservation of endangered species.</p>
                     <p class="paragraph">One of the many Attractions in the Kaziranga National Park is exploring the hidden mystery of the dense jungle on elephants that are steered by the professional Mahout. It is a special treat to the travelers to move in the open grounds on these majestic animals. The other available options to see the national park is on booked jeep safari. These can be booked in advance from the online website link given.
                     </p>
                     <p><strong>More About Indian Rhino Found in Kaziranga National Park</strong></p>
                     <p class="paragraph">The great Indian Rhinoceros (Rhinoceros Unicoris) is also known by the name of Greater One-Horned rhinoceros and the Asian One-Horned Rhinoceros is kept among the list of endangered species. Basically native to the Indian subcontinent, it belongs to the Rhinocerotidae family. It’s most important habitat include the whole stretch of the Indo Gangetic plain i.e. the parts of north eastern India and in protected areas in the Terai of neighboring country Nepal, where inhabitants are confined to the reverie grasslands in the foothills of the Himalayas. Having weight between 2260 Kg 3000 Kg, Rhinos are the fourth largest mammal on earth with single horn, which measures 20 centimeters 50 centimeters in length.</p>
                     <p class="paragraph">According to a report published, about 3,000 Rhinos live in the wild, and around 2000 of which are found in Kazirnaga National Park. They can run at speed of up to 55 km/h for short period of time only. Interestingly they are very good swimmer. They have excellent senses of hearing and smell but relatively very poor eyesight. If we compare Indian rhinos in size, they are quite similar to that of white rhino found in Africa. Fully adult males are larger than females in the wild. A female Indian rhino weighs around 1600 kg as compared to male rhinos weighing from 2,200 kg to 3,000 kg. The length of Indian Rhinos is from 1.7 to 2 meter tall and can be up to 4 meter long. The Indian Rhinoceros has a single Horn found in both males and females but not in newborn infants. The horn, structured like human fingernails, is pure keratin and begins to show after about six years. In most of the grown up adults horn reaches a length of about 25 centimeters, but has been recorded up to 57.2 centimeters in length. And the horn is naturally black.
                     </p>
                     <p><strong>Best Time to Visit Kaziranga</strong></p>
                     <p class="paragraph">The Kaziranga remains open from October to April every year for the tourists to enjoy the wildlife safari. For the remaining time of the year, the park is closed for any tourism activity due to the rainy season. Due to the heavy rain in the area, the Kaziranga forest land gets under the flood water of the Brahmaputra as the most of the forest sprawled on and around the Brahmaputra river floodplains.</p>
                     <p class="paragraph">However, the park can be explored any day during November to April within the allowed visiting hour. The weather is moderate and pleasant during these months, except a bit high cold during the peak of the winter season. You have to be a bit cautious while visiting Kaziranga for the safari during winter season otherwise; the weather is enjoyable with the mild and pleasing atmosphere. After the rainy season, when the park opens for the tourism activity in October the climate of the park happens to be very pleasant. As the monsoon weather just ended, the entire forest got an amazing green cover along with the abundance of the water bodies which soothes the eyes with its fabulous raw beauty. From November to the March, the season is pleasant and considered as the best time to visit. The winter season starts from the month of December and lasts till the February and during this period, except the duration from mid-December to mid-January, the weather is cold but it is not so harsh but pleasantly cold. So, visiting Kaziranga during this period can be fun and no any extra preparation is needed. But, during the time between mid-December and mid-January, you have to carry the warm woolen clothes and other necessary things if you are sensitive to the cold weather. April is having the spring season with the moderate weather. During the day, you will feel a bit of warm weather, but it cools down as day descends. 
                     </p>
                     <p><strong>How To Reach In Kaziranga</strong></p>
                     <p>Below is the detailed information to reach Kaziranga-</p>
                     <p class="paragraph"><strong>By Air – </strong>There are two nearest airports to the park which are Guwahati International Airport and Jorhat Airport, located at the distance of 217 km and 97 km respectively from the park. There are well maintained connecting roads from both the airports to the park. The Lokpriya Gopinath Bordoloi International Airport, located in Guwahati, is the best option to arrive by air from any corner of India or abroad, you can further use the roadways to reach the park by hiring the taxi, cab or bus services.</p>
                     <p class="paragraph"><strong>By Train – </strong>The nearest railway station to Kaziranga Park is Furkating which is located at a distance of 75 km from the park. The station is well connected by many trains to the major railway stations like Guwahati, Kolkata, New Delhi, etc. However, travelers can also use the other nearest railway stations which are the Guwahati railway station and Jorhat railway station located at the distance of 240 km and 90 km respectively. Both these railway stations are the major railway stations of the Northeast railways. From the stations, you can further use the roadways to reach the park by hiring the taxi, cab or bus services.</p>
                     <p class="paragraph"><strong>By Road  – </strong>The main gate of the Kaziranga Park is situated in a small Kohora town lies on the National Highway NH 37 due to which Kohora is connected to all the major cities of Assam such a Guwahati, Tezpur, Jorhat, Nagaon, Golaghat, Dimapur, Tinisukia, Sivasagar, etc. by the state transport buses or the privately run buses and minibuses. Local transport services also run joining Kohora to other nearby small towns. The nearest major cities like Guwahati and Jorhat connect to the other parts of the country by the air, rail and road route. You can visit these cities and then hire the cab/taxi or take the public buses to reach the park conveniently.</p>
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
                     <p><strong>Elephant Safari </strong></p>
                     <p class="paragraph">It is recommended in Kaziranga National Park to spot the Great Indian One Horned Rhinoceros at close sight from the back of a domestic trained Asiatic elephant and lets you enjoy early morning wildlife activities, like birds chirping and the sunrise. You have seen nothing in Kaziranga if you have not done the elephant safari. Elephant safari is also the most demanded activity in Kaziranga National Park and its seats are very limited. The prices are given below.</p>
                     <div class="col-md-6 text-center">
                        <p >Time: Between 5 am to 7 am<br>
                           Duration: 45 minutes
                        </p>
                        <div class="panel panel-default panel-table">
                           <div class="panel-heading" >
                              <div class="tr" >
                                 <div class="td td_head">Indian</div>
                                 <div class="td td_head">Foreign Nationals</div>
                              </div>
                           </div>
                           <div class="panel-body">
                              <div class="tr">
                                 <div class="td">INR 900 + service charge / person</div>
                                 <div class="td">INR 1950 + service charge / person</div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <p><strong>Please read our terms & conditions – </strong>
                        <ul style="background-color: #fff;">
                           <li>a) Seven Sisters Tours & Travels is only responsible for booking the Jeep / Elephant Safari and collecting the payment from tourist. 
                           </li>
                           <li>b) The above rates may change without any prior notice.</li>
                           <li>c) Red dress is not allowed inside the Park. It is recommended to wear green or any other forest suitable colour during the safari. Bright colours not allowed.</li>
                           <li>d) Plastic bags and carrying food inside the Park is not allowed. Luggage not allowed.</li>
                           <li>e) The visitor needs to display their identity proof before starting the Jeep Safari</li>
                           <li>f) Camera charges will be extra.</li>
                           <li>g) Hotel pickup and drop service will charge extra.</li>
                        </ul>
                        </p>
                        <center>
                           <p><strong>Kaziranga National Orchid and Biodiversity Park<br>
                              The Largest Orchid Park in India
                              </strong>
                           </p>
                        </center>
                        <p class="paragraph">The Kaziranga National Orchid and Biodiversity Park is located at the distance of 2 km from the Central Range of Kaziranga, Kohora Chariali. The park is sprawling in the area of around 6 acres in the Durgapur village and is considered as the largest orchid park in the Northeast belt of India. The park has multiplied the glory of the Kaziranga in many folds. The Orchid Park boasts of having more than 500 varieties of wild orchids, 132 species of sour fruits and leafy vegetables, 46 species of bamboo, 12 species of cane and many other plants along with various species of local fishes.</p>
                        <p class="paragraph">kaziranga National Park is basically known to have the highest population of one horned Rhinoceros. But the missing link in the serenity of Kaziranga tourism has been now fulfilled by national orchid and Biodiversity Park. The Assam’s Kaziranga fauna landscape has definitely got a new picture with the introduction of the Kaziranga Orchid and Biodiversity Park. Apart from tea and petroleum, Assam is best known for an ample variety of orchids. Orchids belong to a cosmopolitan family plant with complex flowers that are often showy. It also acts as a symbol of our national heritage.</p>
                        <p class="paragraph">There are around 35000 varieties of orchids in the world with approximately 1314 verities found in India. And very interestingly, about 850 verities found in north-east India with 402 varieties found only in Assam.</p>
                        <p class="paragraph">The Kaziranga Orchid National park is an abode of more than 600 species of wild orchids collected from all across the north-east India region. This beautiful orchid have been placed amidst wild state in order to give complete natural ambience taking visitors as close to nature as possible. The whole variety is preserved in a greenhouse together with some hybrid varieties; some of them have been exclusively collected from local region of the state. It was established with two major intentions. </p>
                        <p class="paragraph">The very first reason is to preserve the great verities of Orchids and secondly to create awareness among the general public about this wonderful creation of nature. </p>
                        <p class="paragraph">This park gives full certificate to North-East India that it is a hub to very rare biodiversities found in India and should be protected and preserved.</p>
                        <p class="paragraph">Apart from these, park also boasts of a medicinal plant garden, rice museum along with a product distribution centre, a separate garden for local fruits and flowers and a dedicated space for native species of fishes. And dense forest area that have various native species of trees grown apart from its cultural centers. </p>
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
 