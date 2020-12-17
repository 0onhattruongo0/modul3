@extends('admin.master')
@section('title','Edit Category')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit Category</li>
            </ol>
            <div class="col-12">
                <form method="post" action="">
                    @csrf
                    <div class="form-group">
                        <label>Category</label>
                        <input type="text" class="form-control" value="{{$categories->name}}" name="nameCategory"  placeholder="Enter Category" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                    <button class="btn btn-secondary" onclick="window.history.go(-1); return false;">Hủy</button>
                </form>
            </div>
        </div>
    </div>
@endsection
