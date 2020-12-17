@extends('admin.master')
@section('title','Thêm thành viên')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Thêm mới thành viên</li>
            </ol>
            <div class="col-12">
                <form method="post" action="{{route('customer.store')}}" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" name="name"  placeholder="Enter usename" required>
                    </div>
                    <div class="form-group">
                        <label>UseName</label>
                        <input type="text" class="form-control" name="usename"  placeholder="Enter usename" required>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputEmail1">Password</label>
                        <input type="password" class="form-control" name="password" placeholder="Enter password" required>
                    </div>
                    <div class="form-group">
                        <label>Email</label>
                        <input type="email" class="form-control" name="email"  placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label>Address</label>
                        <input type="text" class="form-control" name="address"  placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label>image</label>
                        <input type="file" class="form-control" name="image"  placeholder="Enter email" required>
                    </div>
                    <div class="form-group">
                        <label>Status</label>
                        <input type="number" class="form-control" name="status"  placeholder="Enter address" required>
                    </div>
                    <div class="form-group">
                        <label>Roles</label><br>
                        @foreach($roles as $role)
                        <input type="checkbox" id="{{$role->name}}" name="roles[{{ $role->id }}]" value="{{$role->id}}">
                        <label for="{{$role->name}}" > {{$role->name}}</label><br>
                        @endforeach
                    </div>

                    <div class="form-group">
                        <label for="exampleInputEmail1">Birthday</label>
                        <input type="date" class="form-control" name="date" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
