@extends('layout.master')
@section('title','festivalnortheast')
@section('content')
<section class="breadcrumb-blog-version-one img-area">
   <div class="single-bredcurms" style="background-image:url('/src/images/bercums/festival.jpg');">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>Festival of Northeast</h2>
                  <ul>
                     <li><a href="{{('/')}}">Home</a></li>
                     <li class="active banner-fixed">Festival of Northeast</li>
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
         <div class="col-md-12 col-sm-12 col-xs-12 ">
            <div class="col-md-12">
               <div class="single-blog">
                  <div class="blog-content">
                     <div class="section-title-version-2-black  text-center">
                        <h2>Traditional festivals of Northeast</h2>
                        <p></p>
                     </div>
                     <div class="col-md-6">
                        <p class="paragraph">Northeast India is home to over 200 tribes. Each tribal community have their own distinct culture and traditions. They speak different languages, have different religious practices, wear clothes with distinct patterns and also have different ways of celebrating. These celebrations form a part of their festivals where these communities performs clourful dances, showcase their traditional cuisines and source of livelihood like their agrarian practices and their handlooms and handicrafts. </p>
                        <p class="paragraph">TIn addition to the traditonal festivals like the Jonbeel Mela Festival, the Hornbill Festival, the Ambubachi Mela Festival, the Dree Festival and many more there are other modern festivities that are unique to North East India. From the likes of the Ziro Festival of Music in Arunachal Pradesh, the Brahmaputra Beach Festival in Assam, the Bihu Festivals in Assam, the Shillong Autumn Festival in Meghalaya and many of these hosted across across the year, the festivities in India's 'Paradise Unexplored' cease to end !!</p>
                     </div>
                     <div class="col-md-6">
                        <div id="myCarousel" class="carousel slide" data-ride="carousel">
                           <!-- Indicators -->
                           <ol class="carousel-indicators">
                              <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                              <li data-target="#myCarousel" data-slide-to="1"></li>
                              <li data-target="#myCarousel" data-slide-to="2"></li>
                              <li data-target="#myCarousel" data-slide-to="3"></li>
                              <li data-target="#myCarousel" data-slide-to="4"></li>
                           </ol>
                           <!-- Wrapper for slides -->
                           <div class="carousel-inner">
                              <div class="item active">
                                 <img src="{{asset('src/images/festival/1.jpg')}}" alt="1">
                              </div>
                              <div class="item">
                                 <img src="{{asset('src/images/festival/2.jpg')}}" alt="2">
                              </div>
                              <div class="item">
                                 <img src="{{asset('src/images/festival/3.jpg')}}" alt="3">
                              </div>
                              <div class="item">
                                 <img src="{{asset('src/images/festival/4.jpg')}}" alt="4">
                              </div>
                              <div class="item">
                                 <img src="{{asset('src/images/festival/5.jpg')}}" alt="5">
                              </div>
                           </div>
                           <!-- Left and right controls -->
                            <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                            <i class="fa fa-chevron-left" style="margin-top: 245%"></i>
                           </a>
                           <a class="right carousel-control" href="#myCarousel" data-slide="next">
                           <i class="fa fa-chevron-right" style="margin-top: 245%"></i>
                           </a>
                        </div>
                     </div>
                     <div class="col-md-12">
                        <p class="paragraph">Team seven sisters welcomes you to the visit India’s Paradise Unexplored – the North East India and be a part of the festivities that are celebrated to showcase the exotic cultures and rich traditions of the indigenous communities of this region.</p>
                        <p class="paragraph">Festivals in North East India flaunt its rich culture. Most of the festivals here are either related to agriculture, Buddhism or beginning of a New Year. There are many festivals that extend over a number of days and include folk/tribal dance and music. These festivals also present a wonderful opportunity for the people belonging to different tribes to bond. The sumptuous delicacies, interesting costumes, soulful music, warm hospitality and the lively ambiance give one enough reasons to be a part of the festivity in the North East.</p>
                        <p class="paragraph">Let us find out some of the most popular festivals in the North Eastern states right here:</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-sm-12 col-xs-12 fes">
            <div class="panel-group" id="accordion">
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse1">Bihu Festival, Assam<i class="more-less glyphicon glyphicon-minus accordion"></i>
                        </a>
                     </h4>
                  </div>
                  <div id="collapse1" class="panel-collapse collapse in">
                     <div class="panel-body paragraph">
                        <p class="para">Celebrated to welcome the Assamese New Year, Bohag Bihu is one of the most important festival of assam. To be precise, the Assamese celebrate Bihu thrice in a year namely, Bohag or Rongali Bihu, Kaati or Kongali Bihu and Maagh or Bhogali Bihu. The Bohag Bihu calls for huge celebration beginning from April 14 each year. Although the festival is observed for 7 days, the celebration extends for about a month. The first day of Bohag Bihu is called Goru Bihu, in which cow and bulls are bathed and fed. The main festival is observed on the second day; people greet each other and present their relatives with Gamosa (hand-woven cotton towels). On this day, young Assamese men and women form groups and perform Bihu Dance. Assamese delicacies are prepared out of which Pitha (dish made of rice powder, wheat flour, coconut, sesame and jaggery) is the specialty. Stages are set in different parts of the state, where Bihu Dance is performed on a regular basis for a month.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse2">Losar, Arunachal Pradesh<i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse2" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">It is a major festival in Arunachal Pradesh as it marks the Tibetan New Year. Tribes like Monpa, Sherdukpens, Memba, Khamba and Nah following the Mahayana sect of Buddhism celebrate this festival with all pomp. This three-day festival begins on February 11 each year. On the first day of the festival, the priests make offering to the highest priest called the Dharmapala or Palden Lhamo, whereas the masses visit friends and family and wish them Tashi Delek (best wishes). Also according to the local tradition, sprouted barley seeds and buckets of tsampa (roasted barley flour with butter) and other grains are offered on home altars to ensure a good harvest. On the second day of the festival, which is also called Gyalpo Losar, national leaders and kings are honoured. On the third and final day of the festival known as Choe-Kyong Losar, people make offerings to Dharmapala and tie prayer flags on rooftops and across the locality. Although the spiritual observance ends on the third day, the celebration can extend for 10 to 15 days.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse3">Saga Dawa, Sikkim<i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse3" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Saga Dawa is one of the major Buddhist festivals in Sikkim and is celebrated in the Tibetan lunar month. The full moon day that falls in the middle of the lunar month is known as Saga Dawa and it is considered as an auspicious day by the Buddhists. Saga Dawa is called the ‘Month of Merits’ and is celebrated between May and June. The festival commemorates the birth, enlightment and death of the Buddha. On the occasion of Saga Dawa in Sikkim, people gather at the monasteries and offer water, incense sticks and dhog. Also, many participate in the circumambulation of the Gompas, where they chant mantras, carry the religious text and turn the prayer wheels.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse4">Ambubachi Mela, Assam<i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse4" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Reckoned to be one of the major festivals in Northeast India, Ambubachi Mela is held in Guwahati, Assam. The festival is celebrated during the month of June in the Kamakhya Temple. Thousands of devotees from all over India and abroad throng the temple; thus this mela can rightly be called the ‘Mahakumbh of the East’. It is believed that during this time of each year Goddess Kamakhya goes through her annual menstrual cycle. The temple remains closed for three days and is considered unclean, however the devotees throng the temple’s premises to seek Goddess’ blessing even though the doors are closed. It is also during this time of the year when the Tantrik Cult is seen performing various unusual rites. After three days the temple re-opens and the devotees are allowed to offer prayer to the deity.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse5">Dree Festival, Arunachal Pradesh<i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse5" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Although Dree is the festival of the Apatani Tribe, it has gained in popularity amongst other tribes in Arunachal Pradesh as well. The festival takes place on July 5 each year; however celebrations associated with the festival begin from July 4 itself. Dree is the biggest festival of the Ziro Valley and is celebrated to ensure a good harvest. During the festival, people offer prayers to four Gods namely, Tamu, Harniang, Metii, and Danyi. Traditional dance is performed and as a symbol of good harvest cucumber is distributed to all. Women brew wine and people also savour various delicacies and rice/millet beer.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse6">Moatsu Mong, Nagaland<i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse6" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">This festival of the Ao tribe in Nagaland marks the completion of the sowing season. It is a three-day festival that is celebrated from May 1 to 3 each year. Held in Mokokchung district, Moatsu Mong festival  begins with the cleaning of wells and the brewing of beer. During the festival people savour the taste of local delicacies and enjoy cultural programs. Where men perform traditional warrior dance, women sing songs that praise Aovillages. Moatsu Mong is a very colourful festival and is also the symbol of the rich Naga culture.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse7">Anthurium, Mizoram <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse7" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Named after a famous flower, Anthurium is a major festival in Mizoram. Anthurium is celebrated with an objective of promoting tourism and it is held in the month of September each year. A small village called Reiek (about 70kms from capital city Aizawl) is the venue for this fest. Folk dance, music and cuisine are the highlight of this festival.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse8">Lui-ngai-ni, Manipur <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse8" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Lui-Ngai-Ni is celebrated by almost all the tribes of the Nagas; thus it is celebrated not only in Nagaland but in Manipur (Naga inhabited areas) as well. The festival takes place on February 15 each year and marks the seedsowing season. Known for strengthening the bond between the Naga tribes, Lui-Ngai-Ni is celebrated with much pomp. During the festival, traditional dances are performed; different delicacies are prepared rituals of lighting fire and blessing the seeds that will be sown are also performed. Lui-Ngai-Ni festival gives out the message of peace and harmony.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse9">Hornbill Festival, Kohima Nagaland <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse9" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Named after a bird, Hornbill Festival is a major festival in Nagaland. Like many festivals in the state, Hornbill festival is also related to agriculture. It is a 7 to 10 days festival that begins with immense zeal from December 1 every year. Held in Kisama Heritage Village, this festival is attended by all the major tribes in Nagaland. Hornbill is a good time to witness the cultural vividness; it also gives the opportunity to bond with different communities. The warrior log drums, colorful headgear, and soulful war cry, exquisite costumes are the highlights of the festival. The Kohima Night Bazaar and contests like pork eating and King Chilly add tingly flavour to the festive mood.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse10">Losoong, Sikkim <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse10" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Losoong is the Sikkimese New Year and is celebrated each year in the month of December. It is also that time of the year when the farmers celebrate their harvest. Although Losoong Festival is a traditional celebration of the Bhutia tribe, the Lepchas also celebrate it with equal vigour and zeal. Dances are performed (Cham Dance and Black Hat Dance) at the monasteries and the people drink the locally brewed wine called Chaang. Archery competition is also organized to further enhance the festival spirit.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse11">Nongkrem Dance Festival, Meghalaya <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse11" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Nongkrem Dance Festival is a way of celebrating the harvest. The festival is celebrated in the month of November each year by the Khasi Tribe, who sacrifices goats as a thanksgiving offering to Goddess Ka Blei Synshar. It is a five day festival in which young men and women dressed in interesting traditional costume perform tribal dance. Nongkrem Dance Festival is held in Smit, which is about 15kms from the famed city of Shillong.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse12">Kharchi Puja, Tripura <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse12" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Kharchi is a popular festival in Tripura. The Puja (worship) was once performed only by the royal households; however with changing times, Kharchi became common to all the houses in Tripura. It is a 10-day long festival that is marked by animal sacrifice and worshipping 14 gods as instructed by Lord Shiva. The festival takes place in the month of July each year in Old Agartala or Puran Haveli, where there is a temple that houses 14 deities. Thousands of people throng Tripura during the festival and enjoy cultural programmes and fairs.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse13">Chapchar Kut, Mizoram <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse13" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Chapar Kut is an agriculture festival in Mizoram. Celebrated in the month of March every year, Chapar Kut marks the time for planting in the state. The highlight of this festival is the bamboo dance called Cheraw. Apart from this special dance, different style of dances (Khuallam, Chheihlam, Chai and Sarlamkai) are also performed during the festival, traditional songs are sung amidst the cymbal clashes, beats of the drums and sound of the gongs. Handicraft, art and flower show along with food festival and music competitions are organized during the festival. Chapchar Kut is celebrated in Mizoram, Lunglei and Saiha.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse14">Wangala Festival, Meghalaya <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse14" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Wangala is a winter festival in Meghalaya that is mainly celebrated by the Garo tribe. It is held in the second week of November each year in Asanang village near Tura in the Garo Hills and is considered to be a post-harvest celebration. The festival is celebrated in the honor of Misi Saljong, who is considered to be a generous giver. The village chief called Nokma performs rituals a day before the festival begins during which freshly brewed rich beer, cooked rice and vegetables are offered to Misi Saljong. Wangala Festival is also called ‘100 Drum Wangala Festival’; the main attraction of this celebration is the music. Drums, orchestra and flutes offer a wonderful and mesmerizing ambiance that amplifies the festive mood. The feathered head gear is yet another attraction that is worn by everyone celebrating the festival.</p>
                     </div>
                  </div>
               </div>
               <div class="panel panel-default">
                  <div class="panel-heading">
                     <h4 class="panel-title">
                        <a data-toggle="collapse" data-parent="#accordion" href="#collapse15">Kang Chingba, Manipur <i class="more-less glyphicon glyphicon-plus accordion"></i></a>
                     </h4>
                  </div>
                  <div id="collapse15" class="panel-collapse collapse">
                     <div class="panel-body paragraph">
                        <p class="para">Kang Chingba is the biggest Hindu festival in Manipur. The Kang Chingba festival is celebrated in the month of July each year and is similar to Puri Rath Yatra. It is an 8-day festival, which celebrates the journey of Lord Jagannath, his brother Balabhadra, and sister Subhadra. Thousands of devotees throng Imphal during the festival and help pull the massive chariots that carry the deities. Large feasts are organized and people dance all through the night. The Yatra begins from Sri Sri Govindajee Temple in Imphal and the car in which Lord Jagannath is carried is called ‘Kang’.</p>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
@section('script')
<script>
   /*******************************
   * ACCORDION WITH TOGGLE ICONS
   *******************************/
      function toggleIcon(e) {
           $(e.target)
               .prev('.panel-heading')
               .find(".more-less")
               .toggleClass('glyphicon-plus glyphicon-minus');
         console.log($(e.target).prev('panel-heading'));
       }
       $('.panel-group').on('hidden.bs.collapse', toggleIcon);
       $('.panel-group').on('shown.bs.collapse', toggleIcon);
    
</script>
@endsection