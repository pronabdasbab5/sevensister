@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel"><br />
            <center>
                @if(session()->has('msg'))
                    {{ session()->get('msg') }}
                @endif
            </center>
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('add_package_details', ['packageId' => $packageId]) }}" class="form-horizontal form-label-left">
                @csrf

                @for($i = 1; $i <= $noOfDays; $i++)
                    <div class="form-group">
                        <label class="control-label col-md-2 col-sm-2 col-xs-12">Days : <span class="required">*</span></label>
                        <div class="col-md-8 col-sm-8 col-xs-12">
                          <input type="text" name="days[]" id="days" value="Day {{ $i }}" class="form-control col-md-7 col-xs-12" placeholder="Days" style="font-weight: bolder;" required readonly>
                            @error('days')
                                {{ $message }}
                            @enderror
                        </div>
                      </div>

                  <div class="form-group">
                    <label class="control-label col-md-2 col-sm-2 col-xs-12">Description : <span class="required">*</span></label>
                    <div class="col-md-8 col-sm-8 col-xs-12">
                      <textarea name="description[]" class="description" placeholder="Description" required></textarea>
                        @error('description')
                            {{ $message }}
                        @enderror
                    </div>
                  </div>
                @endfor

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Add Package Details</button>
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
