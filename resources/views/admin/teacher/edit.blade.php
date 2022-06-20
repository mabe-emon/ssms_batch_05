@extends("admin.master")

@section("title")
    Edit Teacher
@endsection

@section("content")

    <div class="row">
        <div class="col-lg-12">
            <div class="card">
                <div class="card-body">
                    <h4 class="card-title mb-4">Edit Teacher Form</h4>
                    @if($message = Session::get("message"))
                        <div class="alert alert-secondary alert-dismissible fade show" role="alert">
                            {{$message}}
                            <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                <span aria-hidden="true">&times;</span>
                            </button>
                        </div>
                    @endif
                    <form action="{{route("teacher.update", ['id' => $teacher->id])}}" method="POST" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group row mb-4">
                            <label for="horizontal-firstname-input" class="col-sm-3 col-form-label">Full name</label>
                            <div class="col-sm-9">
                                <input type="text" class="form-control" name="name" value="{{$teacher->name}}" id="horizontal-firstname-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-email-input" class="col-sm-3 col-form-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" readonly name="email" value="{{$teacher->email}}" id="horizontal-email-input">
                            </div>
                        </div>
                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input" class="col-sm-3 col-form-label">Password</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" id="horizontal-password-input">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input1" class="col-sm-3 col-form-label">Phone Number</label>
                            <div class="col-sm-9">
                                <input type="number" class="form-control" name="phone_no" value="{{$teacher->phone_no}}" id="horizontal-password-input1">
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input2" class="col-sm-3 col-form-label">Address</label>
                            <div class="col-sm-9">
                                <textarea type="" class="form-control" name="address" id="horizontal-password-input2">{{$teacher->address}}</textarea>
                            </div>
                        </div>

                        <div class="form-group row mb-4">
                            <label for="horizontal-password-input3" class="col-sm-3 col-form-label">Image</label>
                            <div class="col-sm-9">
                                <input type="file" class="form-control-file" name="image" value="{{$teacher->name}}" id="horizontal-password-input3">
                                <img src="{{asset($teacher->image)}}" alt="" height="100" width="150" class="py-2">
                            </div>
                        </div>

                        <div class="form-group row justify-content-end">
                            <div class="col-sm-9">
                                <div>
                                    <button type="submit" class="btn btn-primary w-md">Update Teacher Info</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

@endsection
