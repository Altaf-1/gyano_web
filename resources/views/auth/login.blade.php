@extends('auth.auth-master')
@section('content')
      <div class="container">
        <form method="POST" action="{{ route('login') }}">
        @csrf
        <div class="row align-items-center justify-content-center" style="padding-top: 100px;">
          <div class="col-md-7">
            <img src="{{asset('frontend/img/logo/light_logo.png')}}" class="pb-5" style="padding-left: 50px;" alt="Logo">
            <form action="#" class="mt-5 mb-4" method="post">
              <div class="form-group first mb-4">
                <label for="username" class="mb-2 text-white">Username</label>
                <input id="email" type="email" name="email" class="form-control rounded-3 shadow p-3" placeholder="your-email@gmail.com" :value="old('email')" required autofocus/>
                <x-input-error :messages="$errors->get('email')" class="mt-2" />
              </div>
              <div class="form-group last mb-3">
                <label for="password" class="m-2 text-white">Password</label>
                <input id="password" 
                            type="password"
                            name="password"
                            class="form-control rounded-3 shadow p-3" placeholder="Your Password" required/>
                            <x-input-error :messages="$errors->get('password')" class="mt-2" />
              </div>

              <div class="d-flex mb-5 justify-content-between">
                <label for="remember_me" class="inline-flex items-center">
                <input id="remember_me" type="checkbox" class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500" name="remember">
                <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
            </label>
                <span class="ml-auto"><a href="{{asset('/forgot-password')}}" class="forgot-pass text-white">Forgot Password</a></span>
              </div>
              <button type="submit" class="btn text-white text-center fw-bold fs-3 text-decoration-none"
                style="background-color: #fe8c00; width: 100%;">LOGIN</button>
            </form>
            <a href="{{asset('/register')}}"
              class="text-center text-white fw-bold d-flex justify-content-center pt-4 fs-5 text-decoration-none">Don't have
              an Account? &nbsp; &nbsp; <span class="text-danger fs-5"> Register Now</span></a>
          </div>

        </div>
        </form>
      </div>
@endsection