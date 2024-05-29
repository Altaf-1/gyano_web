@extends('auth.auth-master')
@section('content')
      <div class="container" style="background-color: #11408A; padding-bottom: 62px">
        <form method="POST" action="{{ route('register') }}">
        @csrf
        <div class="row align-items-center justify-content-center" style="padding-top: 30px;">
          <div class="col-md-7">
            <form action="#" class=" mb-4" method="post">
              <div class="form-group first mb-4">
                <input id="fname" type="text" name="fname" placeholder="Your First Name" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group first mb-4">
                <input id="lname" type="text" name="lname" placeholder="Your Last Name" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group first mb-4">
                <input id="email" type="email" name="email" placeholder="Your Email Address" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group first mb-4">
                <input id="phone" type="number" name="phone" placeholder="Your Phone Number" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group first mb-4">
                <input id="district" type="text" name="district" placeholder="District" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group first mb-4">
                <input id="dob" type="number" name="dob" placeholder="Date of Birth" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group last mb-3">
                <input id="password" type="password" name="password" placeholder="Passowrd" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <div class="form-group last mb-3">
                <input id="password_confirmation" type="password" name="password_confirmation" placeholder="confirmation Password" class="form-control rounded-3 shadow p-3" required/>
              </div>
              <button type="submit" class="btn text-white text-center mt-4 fw-bold fs-3 text-decoration-none"
                style="background-color: #fe8c00; width: 100%;">Register</button>
            </form>
          </div>
        </div>
        </form>
      </div>
@endsection
