@extends('admin.master')
@section('title','Update User')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Update User</li>
            </ol>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>UseName</label>
                        <input type="text" class="form-control" value="{{$user->name}}" name="name"  placeholder="Enter usename" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" value="{{$user->email}}" name="email"  placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div>
                        <label>Role</label><br>
                        <label>
                            <input type="radio" name="role" value="1" {{($user->role==1)?"checked":""}}>Admin
                        </label>
                        <label>
                            <input type="radio" name="role" value="0" {{($user->role==0)?"checked":""}}>User
                        </label>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
