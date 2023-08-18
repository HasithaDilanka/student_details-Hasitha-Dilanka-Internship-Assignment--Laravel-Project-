@extends('layouts.app')
@section('content')
@include('components.bg_img')
    <div class="container">
        <p style="background-image: url('img_girl.jpg');">
        <div class="row">
            <div class="col-lg-12  mt-5">
                <h2 class="page-title " style="color: blue; ">Student Registration</h2>
            </div>

            <div class="col-lg-12 mt-3">
                <form action="{{ route('student.store') }}" method="POST" enctype="multipart/form-data"
                    style="width: 400px; ">
                    @csrf
                    <div class="row">

                        <form>
                            <div class="form-group mt-3 ">
                                <label class="mb-2" style="font-family:Calibri; color: rgb(0, 0, 0);">Student ID :</label>
                                <input type="text" class="form-control"  name="student_id" required>
                            </div>

                            <div class="form-group mt-3">
                                <label class="mb-2" style="font-family:Calibri;color: rgb(0, 0, 0)">Student Name :</label>
                                <input type="text" class="form-control"  name="name" required>
                            </div>

                            <div class="form-group mt-3">
                                <label class="mb-2" style="font-family:Calibri;color: rgb(0, 0, 0)">Student Age :</label>
                                <input type="text" class="form-control"  name="age" required>
                            </div>

                            <div class="form-group mt-3">
                                <label class="mb-2 " style="font-family:Calibri;color: rgb(0, 0, 0)">Student Image
                                    :</label>
                                <input class="form-control" name="images" type="file"  required
                                    accept="image/jpg, image/jpeg, image/png">
                            </div>

                            <button type="submit" class="btn btn-primary mt-4" style=" margin-right: 90px">Submit</button>
                        </form>

                    </div>
                </form>
            </div>
        </div>
    </div>
@endsection
