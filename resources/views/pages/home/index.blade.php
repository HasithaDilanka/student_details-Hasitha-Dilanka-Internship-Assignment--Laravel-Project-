@extends('layouts.app')
@section('content')

    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center">

            </div>

            <div class="row">
                <div class="col-6" style="margin-top: 90px">

                    <div class="p-1 bg-primary" style="border-radius: 5px; width: 90px; "></div>

                    <h1 class="page-title  mb-5" style="color: #0d6efd;">Back To School</h1>

                    <h5 style="color: rgb(34, 32, 32); margin-bottom: 20px">Welcome to our student data Collection..!</h5>

                    <p style="color: gray">"Welcome Back to school at As the new academic year unfolds, we're excited to
                        offer you a centralized
                        hub for all your student data needs. Whether you're a student, parent, or educator, our platform is
                        here to support your journey."</p>


                    <br>

                    <a class="btn" href="{{ route('student') }}" style="color: green; font-size: 18px; ">Registration
                        &nbsp; <i class="fas fa-arrow-right "></i></a>

                    <br>

                    <a class="btn" href="{{ route('edit') }}"style="color: rgb(248, 8, 0); font-size: 18px; ">Students
                        <i class="fas fa-arrow-right" style="margin-left: 35px"></i></a>

                </div>

                <div class="col-4">

                    <img src="https://cdn.icon-icons.com/icons2/2474/PNG/512/education_cap_graduate_award_icon_149711.png"
                        width="400" height="400"class="d-inline-block align-top"
                        style="margin-top: 75px; margin-left:100px;" alt="">

                </div>
            </div>
        </div>
    </div>
@endsection

@push('css')
    <style>
        .page-title {
            padding-top: 1vh;
            font-size: 2rem;
            color: blue;
        }

        .banner-image {
            max-height: 15rem;
        }
    </style>
@endpush
