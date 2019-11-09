@extends('admin.layouts.dbapp')

@section('content')
<!-- page content -->
        <div class="right_col" role="main">
          <div class="">
            <div class="row top_tiles">
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count">
                    @if(!empty($jeepbookingCnt))
                        {{ $jeepbookingCnt }}
                    @else
                        {{ 0 }}
                    @endif
                  </div>
                  <h3>Total</h3>
                  <p>Jeep Booking</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count">
                    @if(!empty($boatCnt))
                        {{ $boatCnt }}
                    @else
                        {{ 0 }}
                    @endif
                  </div>
                  <h3>Total</h3>
                  <p>Boat Booking</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count">
                    @if(!empty($packagebookingCnt))
                        {{ $packagebookingCnt }}
                    @else
                        {{ 0 }}
                    @endif
                  </div>
                  <h3>Total</h3>
                  <p>Package Booking</p>
                </div>
              </div>
              <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
                <div class="tile-stats">
                  <div class="icon"><i class="fa fa-list-alt"></i></div>
                  <div class="count">
                    @if(!empty($packageCnt))
                        {{ $packageCnt }}
                    @else
                        {{ 0 }}
                    @endif
                  </div>
                  <h3>Total</h3>
                  <p>Package</p>
                </div>
              </div>
            </div>
          </div>

            </br>
            </br>

          <div class="row">
            <div class="col-md-12 col-sm-12 col-xs-12">
                <div style="color: red; font-weight: bold; font-size: 20px;">Jeep Capacity</div>
                <table class="table table-striped jambo_table bulk_action">
                  <thead>
                    <tr>
                      <th>Sl</th>
                      <th>Park</th>
                      <th>Capacity</th>
                    </tr>
                  </thead>
                  <tbody>
                    @if(count($jeepData) > 0)
                        @php
                            $cnt = 0;
                        @endphp
                        @foreach($jeepData as $value)

                            <tr>
                                <td>{{ ++$cnt }}</td>
                                <td>{{ $value->park }}</td>
                                <td>{{ $value->capacity }}</td>
                            </tr>
                        @endforeach
                    @endif
                  </tbody>
                </table>
                </br>
            </div>
            <div class="col-md-12 col-sm-12 col-xs-12">
            </div>
          </div>
        </div>
        <!-- /page content -->
@endsection
