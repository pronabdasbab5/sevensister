@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Edit Price</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <center>
                @if(!empty($msg))
                    {{ $msg }}
                @endif
            </center>
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('edit_price', ['priceId' => $data->id]) }}" class="form-horizontal form-label-left">
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

                @if(!empty($data->rangeId))
                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Range : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="rangeId" id="rangeId"  class="form-control col-md-7 col-xs-12">
                            <option selected disabled>Select Range</option>
                            <option value="">No Range</option>
                            @if (count($rangeData) > 0)
                                @foreach ($rangeData as $value)
                                    @if($value->id == $data->rangeId)
                                        <option value="{{ $value->id }}" selected>{{ $value->range }}</option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->range }}</option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        @error('rangeId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>
                @endif

                @if(!empty($data->timingId))

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Timing : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="timingId" id="timingId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Timing</option>
                            @if (count($timingData) > 0)
                                @foreach ($timingData as $value)
                                    @if($value->id == $data->timingId)
                                        <option value="{{ $value->id }}" selected>{{ $value->name }}

                                            @if(!empty($value->fromTime))
                                                : ({{ $value->fromTime }} - {{ $value->toTime }})
                                            @endif
                                        </option>
                                    @else
                                        <option value="{{ $value->id }}">{{ $value->name }}

                                            @if(!empty($value->fromTime))
                                                : ({{ $value->fromTime }} - {{ $value->toTime }})
                                            @endif
                                        </option>
                                    @endif
                                @endforeach
                            @endif
                        </select>
                        @error('timingId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                @endif

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Nationality : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="nationalityId" id="nationalityId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Nationality</option>
                            @if($data->nationalityId == 1)
                                <option value="1" selected>Indian</option>
                                <option value="2">Foreigner</option>
                            @else
                                <option value="1">Indian</option>
                                <option value="2" selected>Foreigner</option>
                            @endif
                        </select>
                        @error('nationalityId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>


              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Price : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" min="1" name="price" id="price" value="{{ $data->price }}" class="form-control col-md-7 col-xs-12" placeholder="Price" required>
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Save Price</button>
                    <a href="{{ route('all_price') }}" class="btn btn-warning">Back</a>
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