@extends('admin.master')
@section('title','Thêm thành viên')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Thêm mới thành viên</li>
            </ol>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>UseName</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter usename" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div>
                        <label>Role</label><br>
                        <label>
                            <input type="radio" name="role" value="1">Admin
                        </label>
                        <label>
                            <input type="radio" name="role" value="0">User
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
