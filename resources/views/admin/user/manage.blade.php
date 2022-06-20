@extends("admin.master")

@section("title")
    Manage User
@endsection

@section("content")

    <div class="row">
        <div class="col-12">
            <div class="card">
                <div class="card-body">

                    <h4 class="card-title">All User Info</h4>

                    <table id="datatable" class="table table-bordered dt-responsive nowrap" style="border-collapse: collapse; border-spacing: 0; width: 100%;">
                        <thead>
                        <tr class="text-center">
                            <th>S/N</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>Password</th>
                            <th>Image</th>
                            <th>Action</th>
                        </tr>
                        </thead>

                        <tbody>
                        @foreach($users as $user)
                        <tr>
                            <td>{{$loop->iteration}}</td>
                            <td>{{$user->name}}</td>
                            <td>{{$user->email}}</td>
                            <td>{{$user->password}}</td>
                            <td>
                                <img src="{{asset($user->image)}}" alt="" height="60" width="90">
                            </td>
                            <td>
                                <a href="{{route("user.edit", ["id" => $user->id])}}" class="btn btn-success">
                                    <i class="fa fa-edit"></i>
                                </a>
                                <a href="{{route("user.delete", ["id" => $user->id])}}" class="btn btn-danger" onclick="return confirm('Are You Sure??')">
                                    <i class="fa fa-trash"></i>
                                </a>
                            </td>
                        </tr>
                        @endforeach
                        </tbody>
                    </table>

                </div>
            </div>
        </div> <!-- end col -->
    </div> <!-- end row -->

@endsection
