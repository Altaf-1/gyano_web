@extends('student.master')
@section('content')
@include('student.components.sidebar')
<main id="main" class="main">
        <section class="section dashboard">
            <div style="background-color: #053A8C;" class="rounded-3">
                <div class="container">
                    <div class="row pt-4">
                        <div class="col-lg-6 col-sm-12" style="padding-left: 40px;padding-bottom: 40px;">
                            <h2 class=" fw-bold text-white pt-4">Welcome back, John</h2>
                            <h5 class="fw-bold text-white pb-5">Always Stay Updated in your student portal</h5>
                            <a href="{{route('dashboard')}}" class="p-3 text-white fw-bold rounded-pill" style="margin-right: 15px; background-color: #d52626;">All Courses</a>
                            <a href="" class="bg-light p-3 text-dark fw-bold rounded-pill">Notifications</a>
                        </div> 
                        <div class="col-lg-6 col-sm-12">
                            <img src="{{asset('img/student/Frame 28.png')}}" width="500"  alt="" />
                        </div>
                    </div>
                </div>
            </div>
            <div class="mt-3 rounded-3" style="background-color: #BCD6FF; padding-bottom: 10px;">
                <div class="container p-4">
                    <div class="row">
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <span class="counter-value">525</span>
                                <h2 class="fw-bold">Class Notes</h2>
                                <div class="counter-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                            </div>
                            <a href=""><h3 class="text-center text-white p-2 rounded-pill fw-bold" style="background-color: #e38120;">VIEW</h3></a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter purple">
                                <span class="counter-value">496</span>
                                <h2 class="fw-bold">Quiz</h2>
                                <div class="counter-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                            </div>
                            <a href="">
                                <h3 class="text-center text-white p-2 rounded-pill fw-bold" style="background-color: #e38120;">VIEW</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter">
                                <span class="counter-value">525</span>
                                <h2 class="fw-bold">Assignments</h2>
                                <div class="counter-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                            </div>
                            <a href="">
                                <h3 class="text-center text-white p-2 rounded-pill fw-bold" style="background-color: #e38120;">VIEW</h3>
                            </a>
                        </div>
                        <div class="col-md-3 col-sm-6">
                            <div class="counter purple">
                                <span class="counter-value">496</span>
                                <h2 class="fw-bold">Class Videos</h2>
                                <div class="counter-icon">
                                    <i class="bi bi-bar-chart"></i>
                                </div>
                            </div>
                            <a href="">
                                <h3 class="text-center text-white p-2 rounded-pill fw-bold" style="background-color: #e38120;">VIEW</h3>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
            
        </section>

    </main><!-- End #main -->
@endsection