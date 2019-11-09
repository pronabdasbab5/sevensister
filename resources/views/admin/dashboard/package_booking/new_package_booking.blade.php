@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Package Booking</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="all_new_package_booking" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Package Name</th>
                            <th>Duration</th>
                            <th>Days</th>
                            <th>Person Name</th>
                            <th>Contact No</th>
                            <th>Address</th> 
                            <th>Days</th>
                            <th>Arrival Date</th>                          
                            <th>No. of Adult</th>
                            <th>No. of Kids</th>
                            <th>Tour Budget</th>
                            <th>Activities</th>
                            <th>Regions</th>
                            <th>Booking Date</th>
                            <th>Action</th>
                        </tr>
                      </thead>
                      <tbody>
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection

@section('script')
<script type="text/javascript">
    
$(document).ready(function(){

    $('#all_new_package_booking').DataTable({

        "processing": true,
        "serverSide": true,
        "ajax":{
            "url": "{{ route('package_booking_data') }}",
            "dataType": "json",
            "type": "POST",
            "data":{ 

                _token: "{{csrf_token()}}",
                "status" : "1"
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "packageName" },
            { "data": "duration" },
            { "data": "days" },
            { "data": "personName" },
            { "data": "contactNo" },
            { "data": "address" },
            { "data": "days" },
            { "data": "arrivalDate" },
            { "data": "noOfAdult" },
            { "data": "noOfKids" },
            { "data": "tourBudget" },
            { "data": "activities" },
            { "data": "regions" },
            { "data": "bookingDate" },
            { "data": "action" },
        ],    
    });
});
</script>
@endsection