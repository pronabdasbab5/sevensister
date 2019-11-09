@extends('admin.layouts.app')

@section('content')
<form method="POST" action="{{ route('login') }}" autocomplete="off">
                        @csrf
    <h1>Login</h1>
        @error('email')
            <p>Invalid Authentication.</p>
        @enderror
              <div>
                <input type="email" class="form-control" placeholder="Enter Your Email" name="email" required autofocus/>
              </div>
              <div>
                <input id="password" type="password" class="form-control" placeholder="Enter Your Password" name="password" required/>
              </div>
              <div>
                <button type="submit" class="btn btn-default submit">{{ __('Login') }}</a>
              </div>

              <div class="clearfix"></div>

              <div class="separator">

                <div class="clearfix"></div>
                <br />

                <div>
                  <p>Developed By Web InfoTech</p>
                </div>
              </div>
            </form>
@endsection