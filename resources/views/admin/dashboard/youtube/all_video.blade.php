@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
          <div class="">
            <div class="clearfix"></div>

            <div class="row">
              <div class="col-md-12 col-sm-12 col-xs-12">
                <div class="x_panel">
                  <div class="x_title">
                    <h2>All Video Id</h2>
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
                            <th>Videos</th>
                            <th>Remove</th>
                        </tr>
                      </thead>
                      <tbody>
                        @if (count($data) > 0)

                            @foreach ($data as $value)

                                <tr>
                                    <td>{{$value->id}}</td>
                                    <td><a href="https://www.youtube.com/watch?v={{$value->youtubeId}}" target="_blank">Click Me</a> : {{$value->youtubeId}}</td>
                                    <td>
                                        <a href="{{ route('remove_video', ['videoId' => $value->id]) }}" class="btn btn-warning">Remove</a>
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