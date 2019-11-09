@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Jeep</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <center>
                @if(!empty($msg))
                    {{ $msg }}
                @endif
            </center>
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('edit_jeep', ['jeepId' => $data->id]) }}" class="form-horizontal form-label-left">
                @csrf

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Park : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="parkId" id="parkId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Park</option>
                            @if (count($parkData) > 0)
                                @foreach ($parkData as $value)
                                    @if($value->id == $data->parkId)
                                        <option value="{{ $value->id }}" selected>{{ $value->park }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->park }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        @error('parkId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Capacity : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" min="1" name="capacity" id="capacity" value="{{ $data->capacity }}" class="form-control col-md-7 col-xs-12" placeholder="Capacity" required>
                    @error('capacity')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Save Jeep</button>
                    <a href="{{ route('all_jeep') }}" class="btn btn-warning">Back</a>
                  </div>
                </div>
            </form>
            <!-- End New User registration -->
            </div>
          </div>
        </div>
      </div>
</div>
@endsection