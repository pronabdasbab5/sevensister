@extends('admin.layouts.dbapp')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>Booking Details</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">

                    <section class="content invoice">
                      <!-- title row -->
                      <div class="row">
                        <div class="col-xs-12 invoice-header">
                            <h1>
                                <i class="fa fa-globe"></i> Invoice.
                                <small class="pull-right">Booking ID : {{ $bookingData[0]->orderId }}</small>
                            </h1>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- info row -->
                      <div class="row invoice-info">
                        <div class="col-sm-4 invoice-col">
                          <br><br>
                           <address>
                                Name : <b>{{ $bookingData[0]->personName }}</b>
                                <br>Mobile No : <b>{{ $bookingData[0]->mobileNo }}</b>
                                <br>Email : <b>{{ $bookingData[0]->email }}</b>
                                <br>Booking Date : <b>{{ $bookingData[0]->orderDate }}</b>
                                <br>Age : <b>{{ $bookingData[0]->age }}</b>
                            </address>
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                        <div class="col-sm-4 invoice-col">
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- Table row -->
                      <div class="row">
                        <div class="col-xs-12 table">
                          <table class="table table-striped">
                            <thead>
                              <tr>
                                <th>Sl No</th>
                                <th>Particular</th>
                                <th>Value</th>
                              </tr>
                            </thead>
                            <tbody>
                              <tr>
                                <td>1</td>
                                <td>Park</td>
                                <td>{{ $bookingData[0]->park }}</td>
                              </tr>
                              <tr>
                                <td>2</td>
                                <td>Range</td>
                                <td>{{ $bookingData[0]->range }}</td>
                              </tr>
                              <tr>
                                <td>3</td>
                                <td>Time</td>
                                <td>{{ $bookingData[0]->name }}
                                    @if(!empty($bookingData[0]->fromTime))
                                        ({{ $bookingData[0]->fromTime }} - {{ $bookingData[0]->toTime }})
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Nationality</td>
                                <td>
                                    @if(!empty($bookingData[0]->nationalityId == 1))
                                        Indian
                                    @else
                                        Foreigner
                                    @endif
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Mobile No</td>
                                <td>
                                    {{ $bookingData[0]->mobileNo }}
                                </td>
                              </tr>
                              <tr>
                                <td>4</td>
                                <td>Jeep Capacity</td>
                                <td>
                                    {{ $bookingData[0]->capacity }}
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Total Jeep</td>
                                <td>
                                    {{ $bookingData[0]->totalJeep }}
                                </td>
                              </tr>
                              <tr>
                                <td>5</td>
                                <td>Total Persons</td>
                                <td>
                                    {{ $bookingData[0]->totalPersons }}
                                </td>
                              </tr>
                            </tbody>
                          </table>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <div class="row">
                        <!-- accepted payments column -->
                        <div class="col-xs-6">
                        </div>
                        <!-- /.col -->
                        <div class="col-xs-6">
                          <p class="lead">Amount Due</p>
                          <div class="table-responsive">
                            <table class="table">
                              <tbody>
                                <tr>
                                  <th>Total Amount:</th>
                                  <td>{{ $bookingData[0]->totalPrice }}</td>
                                </tr>
                              </tbody>
                            </table>
                          </div>
                        </div>
                        <!-- /.col -->
                      </div>
                      <!-- /.row -->

                      <!-- this row will not appear when printing -->
                      <div class="row no-print">
                        <div class="col-xs-12">
                          <button class="btn btn-default" onclick="window.print();"><i class="fa fa-print"></i> Print</button>
                        </div>
                      </div>
                    </section>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection