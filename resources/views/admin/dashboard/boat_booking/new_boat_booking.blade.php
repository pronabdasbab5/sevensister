@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>New Boat Booking</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="all_new_boat_booking" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Name</th>
                            <th>Contact No</th>
                            <th>Email</th>                         
                            <th>Total Persons</th>
                            <th>Meal Plan</th>
                            <th>Check In Date</th>
                            <th>Check Out Date</th>
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

    $('#all_new_boat_booking').DataTable({

        "processing": true,
        "serverSide": true,
        "ajax":{
            "url": "{{ route('boat_booking_data') }}",
            "dataType": "json",
            "type": "POST",
            "data":{ 

                _token: "{{csrf_token()}}",
                "status" : "1"
            }
        },
        "columns": [
            { "data": "id" },
            { "data": "personName" },
            { "data": "contactNo" },
            { "data": "email" },
            { "data": "totalPersons" },
            { "data": "mealPlan" },
            { "data": "checkInDate" },
            { "data": "checkOutDate" },
            { "data": "bookingDate" },
            { "data": "action" },
        ],    
    });
});
</script>
@endsection