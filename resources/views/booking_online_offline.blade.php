@extends('layout.master')
@section('title', 'booking')
@section('content')
<section class="breadcrumb-blog-version-one img-area">
   <div class="single-bredcurms" style="background-color: #020252;padding: 50px 0;">
      <div class="container">
         <div class="row">
            <div class="col-sm-12 col-md-12">
               <div class="bredcrums-content">
                  <h2>Jeep Safari Booking</h2>
                  <ul>
                     <li><a href="{{url('/')}}l">Home</a></li>
                     <li class="active banner-fixed">Jeep Safari Booking</li>
                  </ul>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<div class="container" style="margin-top: 70px; margin-bottom: 70px;">
   <div class="row">
      <div class="col-sm-12">
         <div class="section-title-version-2-black  text-center">
            <h2>Jeep Booking</h2>
            <p></p>
         </div>
      </div>
   </div>
   <center>
      <div class="row" >
         <div class="col-md-12">
            <form action="" data-toggle="validator">
               <div class="form-inline required">
                  <div class="col-md-6">
                     <div class="form-group has-feedback">
                        <label class="input-group">
                           <span class="input-group-addon">
                           <input type="radio" name="test" value="0" />
                           </span>
                           <div class="form-control form-control-static">
                              Offline Payment
                           </div>
                           <span class="glyphicon form-control-feedback "></span>
                        </label>
                     </div>
                  </div>
                  <div class="col-md-6">
                     <div class="form-group has-feedback ">
                        <label class="input-group">
                           <span class="input-group-addon">
                           <input type="radio" name="test" value="1" />
                           </span>
                           <div class="form-control form-control-static" >
                              Online Payment
                           </div>
                           <span class="glyphicon form-control-feedback "></span>
                        </label>
                     </div>
                  </div>
               </div>
            </form>
         </div>
         <div class="col-md-12" style="margin-top: 40px;">
            <div class="form-group has-feedback">
               <button type="button" class="btn btn-info btn-lg" id="online">Payment Now</button>
            </div>
         </div>
      </div>
   </center>
</div>
<!--model-->
<div class="container">
   <div class="modal fade" id="myModal" role="dialog">
      <div class="modal-dialog">
         <div class="modal-content">
            <div class="modal-header">
               <button type="button" class="close" data-dismiss="modal">&times;</button>
               <h5 class="modal-title">Contact Us - +91 6001685490 / +91 8486951528 for offline Payment</h5>
            </div>
            <div class="modal-body">
               <table class="table table-bordered" style="margin-top: 20px;">
                  <tbody>
                     <tr>
                        <td>Account No </td>
                        <td>35765118061 </td>
                     </tr>
                     <tr>
                        <td>Name</td>
                        <td>SEVEN SISTERS TOURS AND TRAVELS</td>
                     </tr>
                     <tr>
                        <td>Branch</td>
                        <td>KOHORA</td>
                     </tr>
                     <tr>
                        <td>Branch Code</td>
                        <td>09403</td>
                     </tr>
                     <tr>
                        <td>IFS Code</td>
                        <td>SBIN0009403</td>
                     </tr>
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>
@endsection
@section('script')
<script type="text/javascript">
   $(document).ready(function(){
       $('#online').click(function(){
           var inputValue = $("input[name='test']:checked").val();
           if (inputValue) {
             if (inputValue == 0) {
                 $("#myModal").modal('show');
             }else if(inputValue == 1){
               /// Here Write Code To Redirect Payment Gategay Page
               window.location.href = "{{url('tc')}}";
             }
           }       
          
       });
   });
</script>
@endsection