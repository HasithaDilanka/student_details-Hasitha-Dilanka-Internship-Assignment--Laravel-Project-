<form action="{{ route('edit.update', $student->id) }}" method="post" enctype="multipart/form">
    @csrf
    <div class="row">

        <div class="col-lg-12">
            <div class="form-group">

                <label class="form-label" style="font-size: 13px">Student ID</label>
                <input class="form-control" name="student_id" type="text" value="{{ $student->student_id }}"
                    placeholder="Enter student ID" required>

                <br>

                <label class="form-label" style="font-size: 13px">Student Name</label>
                <input class="form-control" name="name" type="text" value="{{ $student->name }}"
                    placeholder="Enter student Name" required>

                <br>

                <label class="form-label" style="font-size: 13px">Student Age</label>
                <input class="form-control" name="age" type="number" value="{{ $student->age }}"
                    placeholder="Enter student Age" required>

                <br>

                {{-- <label class="form-label" style="font-size: 13px">Upload Student Image</label>
                <input class="form-control" name="images" type="file" placeholder="Change Student Image" required
                    value="{{ $student->image_id }}" accept="image/jpg, image/jpeg, image/png"> --}}

            </div>
        </div>

        <div class="col-lg-4 mt-3 offset-4">
            <button type="submit" class="btn btn-success">Update</button>

        </div>
    </div>
</form>
