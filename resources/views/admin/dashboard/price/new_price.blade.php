@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Price</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <center>
                @if(session()->has('msg'))
                    {{ session()->get('msg') }}
                @endif
            </center>
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('add_price') }}" class="form-horizontal form-label-left">
                @csrf

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Park : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="parkId" id="parkId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Park</option>
                            @if (count($parkData) > 0)
                                @foreach ($parkData as $value)
                                    <option value="{{ $value->id }}">{{ $value->park }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('parkId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Range : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="rangeId" id="rangeId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Range</option>
                            @if (count($rangeData) > 0)
                                @foreach ($rangeData as $value)
                                    <option value="{{ $value->id }}">{{ $value->range }}</option>
                                @endforeach
                            @endif
                        </select>
                        @error('rangeId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Timing : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="timingId" id="timingId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Timing</option>
                            @if (count($timingData) > 0)
                                @foreach ($timingData as $value)
                                    <option value="{{ $value->id }}">{{ $value->name }}

                                        @if(!empty($value->fromTime))
                                            : ({{ $value->fromTime }} - {{ $value->toTime }})
                                        @endif
                                    </option>
                                @endforeach
                            @endif
                        </select>
                        @error('timingId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>

                <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Select Nationality : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                        <select name="nationalityId" id="nationalityId"  class="form-control col-md-7 col-xs-12" required>
                            <option selected disabled>Select Nationality</option>
                            <option value="1">Indian</option>
                            <option value="2">Foreigner</option>
                        </select>
                        @error('nationalityId')
                            {{ $message }}
                        @enderror
                    </div>
                </div>


              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Price : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" min="1" name="price" id="price"  class="form-control col-md-7 col-xs-12" placeholder="Price" required>
                    @error('price')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Add Price</button>
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