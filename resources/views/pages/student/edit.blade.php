@extends('layouts.app')
@section('content')
    @include('components.bg_img')
   
    <div class="container">
        <div class="row">
            <div class="col-lg-12 text-center mt-5">

            </div>
            <h2 class="page-title mb-5 " style="color: blue">Registered Students</h2>

            <table class="table table-bordered border-secondary" style="text-align: center; ">
                <thead class="table-info border-secondary">
                    <tr>
                        <th scope="col">NO</th>
                        <th scope="col">Student ID</th>
                        <th scope="col">Name</th>
                        <th scope="col">Age</th>
                        <th scope="col">Image</th>
                        <th scope="col">Status</th>
                        <th scope="col">Action</th>

                    </tr>
                </thead>

                <tbody>
                    @foreach ($students as $key => $student)
                        <tr>
                            <th scope="row">{{ ++$key }}</th>
                            <td>{{ $student->student_id }}</td>
                            <td>{{ $student->name }}</td>
                            <td>{{ $student->age }}</td>
                            <td><img src="{{ config('images.access_path') }}/{{ $student->images->name }}" alt=""
                                    width="50px" height="40px"></td>
                            <td>
                                @if ($student->done == 0)
                                    <span class="badge bg-warning">Not Verified</span>
                                @else
                                    <span class="badge bg-success">Verified</span>
                                @endif
                            </td>
                            <td>
                                <a href="{{ route('edit.delete', $student->id) }}" class="btn btn-danger"><i
                                        class="fa fa-trash" aria-hidden="true"></i></a> &nbsp;
                                <a href="{{ route('edit.done', $student->id) }}" class="btn btn-success"><i
                                        class="fa fa-check-circle" aria-hidden="true"></i></a>&nbsp;

                                <a href="javascript:void(0)" class="btn btn-info"><i class="far fa-edit"
                                        onclick="modelViewStudent({{ $student->id }})"></i></a>
                            </td>
                        </tr>
                </tbody>
                @endforeach
            </table>
        </div>
    </div>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="StudentModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Edit Student Details</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body" id="model-content">
                    ...
                </div>

            </div>
        </div>
    </div>
@endsection


@push('js')
    <script>
        function modelViewStudent(student_id) {
            var data = {
                student_id: student_id,
            };
            $.ajax({
                url: "{{ route('edit.model') }}",
                headers: {
                    'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')
                },
                type: 'GET',
                data: data,
                dataType: '',
                success: function(response) {
                    console.log(response);
                    $('#StudentModal').modal('show');
                    $('#model-content').html(response);
                }
            });
        }
    </script>
@endpush




