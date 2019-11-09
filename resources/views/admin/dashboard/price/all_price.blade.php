@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Price</h2>
                    <ul class="nav navbar-right panel_toolbox">
                      <li><a class="collapse-link"><i class="fa fa-chevron-up"></i></a>
                      </li>
                      <li><a class="close-link"><i class="fa fa-close"></i></a>
                      </li>
                    </ul>
                    <div class="clearfix"></div>
                  </div>
                  <div class="x_content">
					
                    <table id="datatable-responsive" class="table table-striped table-bordered dt-responsive nowrap" cellspacing="0" width="100%">
                      <thead>
                        <tr>
                            <th>Sl No</th>
                            <th>Park Name</th>
                            <th>Range</th>
                            <th>Time</th> 
                            <th>Nationality</th>
                            <th>Price</th>                          
                            <th>Edit</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($data) > 0)

                            @foreach ($data as $value)

                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td>{{$value->park}}</td>
                                    <td>{{$value->range}}</td>
                                    <td>{{$value->timingName}}
                                        @if(!empty($value->fromTime))
                                             : ( {{$value->fromTime}} - {{$value->toTime}} )
                                        @endif
                                    </td>
                                    <td>
                                        @if($value->nationalityId == 1)
                                            {{ "Indian" }}
                                        @else
                                            {{ "Foreigner" }}
                                        @endif
                                    </td>
                                    <td>{{$value->price}}</td>
                                    <td>
                                        <a href="{{ route('single_record_price', ['priceId' => $value->id]) }}" class="btn btn-success">Edit Info.</a>
                                    </td>
                                </tr> 
                            @endforeach
                        @endif
                      </tbody>
                    </table>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
@endsection