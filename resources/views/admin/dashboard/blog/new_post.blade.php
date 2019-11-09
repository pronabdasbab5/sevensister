@extends('admin.layouts.dbapp')

@section('content')
<div class="right_col" role="main">
  <div class="clearfix"></div>
    <div class="row">
      <div class="col-md-12 col-sm-12 col-xs-12">
        <div class="x_panel">
          <div class="x_title">
            <h2>New Post</h2>
            <div class="clearfix"></div>
            <center>
                @if(session()->has('msg'))
                    {{ session()->get('msg') }}
                @endif
            </center>
          </div>
          <div class="x_content"><br />
            <!-- Section For New User registration -->
            <form method="POST" autocomplete="off" action="{{ route('add_post') }}" class="form-horizontal form-label-left" enctype="multipart/form-data">
                @csrf
                @method('PUT')
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Post Title : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="text" name="post_title" id="post_title"  class="form-control col-md-7 col-xs-12" placeholder="Post Title" required>
                    @error('post_title')
                        {{ $message }}
                    @enderror
                </div>
              </div>
              
              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Upload Image : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <input type="file" name="upload_image" id="upload_image"  class="form-control col-md-7 col-xs-12" required>
                    @error('upload_image')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="form-group">
                <label class="control-label col-md-2 col-sm-2 col-xs-12">Post Description : <span class="required">*</span></label>
                <div class="col-md-8 col-sm-8 col-xs-12">
                  <textarea name="post_desc" id="post_desc" required></textarea>
                    @error('post_desc')
                        {{ $message }}
                    @enderror
                </div>
              </div>

              <div class="ln_solid"></div>
                <div class="form-group">
                  <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                    <button type="submit" name="submit" class="btn btn-success">Add & Publish Post</button>
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
@section("script")
<script src="//cdn.ckeditor.com/4.13.0/standard/ckeditor.js"></script>
<script>
    CKEDITOR.replace( 'post_desc',{
        filebrowserUploadUrl: "{{route('ckeditor.upload', ['_token' => csrf_token() ])}}",
        filebrowserUploadMethod: 'form'
    });
</script>
@endsection