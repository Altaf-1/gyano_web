@extends('frontend.master')
@section('content')
<main class="main-area fix">
        <!-- banner-area -->
        @include('frontend.components.banner')

        <!-- banner-area-end -->
        <!-- course-area -->
        @include('frontend.components.course')
        <!-- course-area-end -->

        <!-- Modal -->
        <div class="modal fade" style="margin-top: 140px;" id="exampleModal" tabindex="-1"
            aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog">
                <div class="modal-content pt-4">
                    <div class="modal-body justify-content-center">
                        <h4 class="text-danger">Select Class</h4>
                        <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                            <input type="radio" class="btn-check" name="btnradio" id="btnradio1" autocomplete="off"
                                checked>
                            <label style="font-size: 18px; background-color: #B6D1FB;"
                                class="btn text-dark btn-outline-danger" for="btnradio1">Class VIII</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio2" autocomplete="off">
                            <label style="font-size: 18px; background-color: #B6D1FB;"
                                class="btn text-dark btn-outline-danger" for="btnradio2">Class IX</label>

                            <input type="radio" class="btn-check" name="btnradio" id="btnradio3" autocomplete="off">
                            <label style="font-size: 18px; background-color: #B6D1FB;"
                                class="btn text-dark btn-outline-danger" for="btnradio3">Class X</label>
                        </div>

                        <div class="pt-4">
                            <h4 class="text-danger">Select Board</h4>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio4" autocomplete="off"
                                    checked>
                                <label style="font-size: 18px; background-color: #B6D1FB;"
                                    class="btn text-dark btn-outline-danger" for="btnradio4">SEBA</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio5" autocomplete="off">
                                <label style="font-size: 18px; background-color: #B6D1FB;"
                                    class="btn text-dark btn-outline-danger" for="btnradio5">CBSE</label>
                            </div>
                        </div>

                        <div class="pt-4">
                            <h4 class="text-danger">Select Language</h4>
                            <div class="btn-group" role="group" aria-label="Basic radio toggle button group">
                                <input type="radio" class="btn-check" name="btnradio" id="btnradio6" autocomplete="off">
                                <label style="font-size: 18px; background-color: #B6D1FB;"
                                    class="btn btn-outline-danger text-dark" for="btnradio6">Assamese</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio7" autocomplete="off">
                                <label style="font-size: 18px; background-color: #B6D1FB;"
                                    class="btn btn-outline-danger text-dark" for="btnradio7">Boro</label>

                                <input type="radio" class="btn-check" name="btnradio" id="btnradio8" autocomplete="off">
                                <label style="font-size: 18px; background-color: #B6D1FB;"
                                    class="btn btn-outline-danger text-dark" for="btnradio8">English</label>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a href="{{asset('/single_course')}}" class="bg-danger text-white p-3 rounded-3">Search Course</a>
                    </div>
                </div>
            </div>
        </div>

        <!-- materials-area-end -->
        @include('frontend.components.materials')
        <!-- materials-area-end -->

        <!--Why Choose Us-->
        @include('frontend.components.choose')
        
        <!--Count-->
        @include('frontend.components.count')

        <!-- online-area -->
        @include('frontend.components.online')
        <!-- online-area-end -->

        <!-- blog-area -->
        @include('frontend.components.blog')
        <!-- blog-area-end -->

        <!-- app-area -->
        @include('frontend.components.app')
        <!-- app-end -->

        <!-- testimonial-area -->
        @include('frontend.components.testimonial')

    </main>
@endsection