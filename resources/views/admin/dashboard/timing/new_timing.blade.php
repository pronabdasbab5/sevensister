@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>Timing</h2>
            <div class="clearfix"></div>
          </div>
          <div class="x_content"><br />
            <center>
                @if(session()->has('msg'))
                    {{ session()->get('msg') }}
                @endif
            </center>
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('add_timing') }}" class="form-horizontal form-label-left">
                @csrf
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Name : <span class="required">*</span></label>
                <div class="input-group col-md-8 col-sm-8 col-xs-12">
                  <input type="text" name="name" id="name"  class="form-control col-md-7 col-xs-12" placeholder="Name" required>
                    @error('name')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">From : <span class="required">*</span></label>
                <div class="input-group date col-md-8 col-sm-8 col-xs-12" id="myDatepicker1">
                    <input type="text" name="from_time" placeholder="From" onkeyup="this.value=''" class="form-control col-md-8 col-xs-12">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    @error('from_time')
                        {{ $message }}
                    @enderror 
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">To : <span class="required">*</span></label>
                <div class="input-group date col-md-8 col-sm-8 col-xs-12" id="myDatepicker2">
                    <input type="text" name="to_time" placeholder="To" onkeyup="this.value=''" class="form-control col-md-8 col-xs-12">
                    <span class="input-group-addon">
                        <span class="glyphicon glyphicon-calendar"></span>
                    </span>
                    @error('to_time')
                        {{ $message }}
                    @enderror 
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Add Park</button>
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

@section('script')
<script type="text/javascript">
$('#myDatepicker1').datetimepicker({
    format: 'hh:mm A'
});
$('#myDatepicker2').datetimepicker({
    format: 'hh:mm A'
});
</script>
@endsection