@extends('student.master')
@section('content')

<main class="container" style="padding-top: 60px;">
        <section class="section dashboard">
            <div style="background-color: #053A8C;" class="rounded-3">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-lg-6 col-sm-12" style="padding-left: 40px;padding-bottom: 40px;">
                            <h2 class=" fw-bold text-white pt-4">Welcome back, John</h2>
                            <h5 class="fw-bold text-white pb-5">Always Stay Updated in your student portal</h5>
                            <a href="" class="p-3 text-white fw-bold rounded-pill" style="margin-right: 15px; background-color: #d57e26;">Go To Home</a>
                            <a href="" class="bg-light p-3 text-dark fw-bold rounded-pill" style="margin-right: 10px;">View Orders</a>
                            <a href="" class="bg-light p-3 text-dark fw-bold rounded-pill">Update My Details</a>
                        </div>
                        <div class="col-lg-6 col-sm-12">
                            <img src="{{asset('img/student/Frame 28.png')}}" width="500" alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div style="background-color: #BCD6FF;" class="rounded-3 pb-3 pt-3 mt-5">
                <div class="mt-3 mb-3 rounded-3 bg-white shadow "
                    style="margin: 40px; margin: 40px; padding-top: 10px; padding-bottom: 10px;">
                    <div class="row">
                        <div class="col-lg-3 justify-content-center text-center">
                            <img src="{{asset('img/courses/single.png')}}" height="100px" alt="img">
                        </div>
                        <div class="col-lg-5 justify-content-center align-items-center">
                            <h3 class="text-center text-dark fw-bold">Bundle Course | Class IX</h3>
                            <h4 class="text-center text-dark">BORO | SEBA</h4>
                        </div>
                        <div class="col-lg-3">
                            <a href="{{route('student_pannel')}}">
                                <h3 class="text-center align-items-center mt-4 p-2 rounded-pill text-white"
                                    style="background-color: #d57e26;">View Course</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>

    </main><!-- End #main -->
@endsection