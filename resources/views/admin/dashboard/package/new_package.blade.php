@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>New Package</h2>
            <div class="clearfix"></div>
            <center>
                @if(session()->has('msg'))
                    {{ session()->get('msg') }}
                @endif
            </center>
          </div>
          <div class="x_content"><br />
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('add_package') }}" class="form-horizontal form-label-left">
                @csrf
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Package Name : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="text" name="package_name" id="package_name"  class="form-control col-md-7 col-xs-12" placeholder="Package Name" required>
                    @error('package_name')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Duration : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="text" name="duration" id="duration"  class="form-control col-md-7 col-xs-12" placeholder="Duration" required>
                    @error('duration')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">No. of Days : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="number" min="1" name="no_of_days" id="no_of_days"  class="form-control col-md-7 col-xs-12" placeholder="No. of Days" required>
                    @error('no_of_days')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Tour Description : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <textarea name="tour_desc" class="description" required></textarea>
                    @error('tour_desc')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Add Package</button>
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
<script src="{{ asset('js/ckeditor/ckeditor.js') }}"></script>
    <script src="{{ asset('js/ckeditor/jquery.js') }}"></script>
    
    <script>
        // $('.description').ckeditor();
        CKEDITOR.replaceClass="description";
    </script>
@endsection