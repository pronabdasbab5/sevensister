@extends('layout.master')
@section('title','block')
@section('content')
<section class="breadcrumb-blog-version-one img-area">
   <div class="single-bredcurms banner_blog">
      <div class="container">
         <div class="row">
            <div class="col-sm-12">
               <div class="bredcrums-content">
                  <h2>Blog</h2>
                  <ul>
                     <li><a href="{{('/')}}">Home</a></li>
                     <li class="active banner-fixed">Blog</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<section class="blog-contents-version-one pt-100 pb-70">
   <div class="container">
      <div class="row">

        @if(count($blogData) > 0)
            @foreach($blogData as $value)
                 <!-- single travel blog-->
                 <div class="col-md-4 col-sm-6 col-xs-12">
                    <div class="single-travel-blog">
                       <div class="blog-image">
                          <a href="#"><img src="{{ route('post_images', ['postImg' => $value->blogImg]) }}" alt="">
                          </a>
                       </div>
                       <div class="blog-content">
                          <div class="blog-meta">
                             <div class="post-date">
                                @php
                                    $date = explode(" ", $value->created_at);
                                @endphp
                                <a href="#"><span>{{ current($date) }}</span></a>
                             </div>
                          </div>
                          <div class="blog-post-content">
                             <a href="#"><h4>{{ $value->blogTitle }}</h4></a>
                             <p>{{ substr($value->blogTitle, 0, 100) }}</p>
                             <a href="{{ url('blog_details') }}/{{$value->id}}">Read More <i class="fa fa-angle-right"></i></a>
                          </div>
                       </div>
                    </div>
                 </div><!-- single travel guide & security end-->
            @endforeach
        @endif
      </div>
      <div class="row">
         <!-- pagination start here -->
         <div class="col-sm-12 text-center">
            {{ $blogData->links() }}
            {{-- <ul class="pagination">
               <li class="active"><a href="#">1 <span class="sr-only">(current)</span></a>
               </li>
               <li><a href="#">2</a>
               </li>
               <li><a href="#">3</a>
               </li>
            </ul> --}}
         </div><!-- pagination end here -->
      </div>
   </div>
</section>
@endsection