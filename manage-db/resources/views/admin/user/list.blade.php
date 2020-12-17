@extends('admin.master')
@section('title', 'Danh sách thành viên')
@section('content')
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Quản lý thành viên</li>
            </ol>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <a class="btn btn-primary mb-3" href="{{ route('users.create') }}">Thêm thành viên</a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Thành viên
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>UseName</th>
                                <th>Password</th>
                                <th>Email</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($users as $user)
                            <tr>
                                <td>{{$user->usename}}</td>
                                <td>{{$user->password}}</td>
                                <td>{{$user->email}}</td>
                                <td><a href="{{route('users.edit',$user->id)}}">Edit</a></td>
                                <td><a href="{{route('users.destroy',$user->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>

                            </tr>
                            @endforeach

                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

@endsection
