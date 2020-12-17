@extends('admin.master')
@section('title','Edit Category')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Add Slide</li>
            </ol>
            <div class="col-12">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group">
                        <label>Name</label>
                        <input type="text" class="form-control" value="{{$slides->name}}" name="Name"  placeholder="Enter Name" required>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" value="" name="Image">
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea type="text" class="form-control ckeditor" value="" name="Content"  placeholder="Enter Content" id="ckeditor" required>{{$slides->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Link</label>
                        <input type="text" class="form-control" value="{{$slides->link}}" name="Link"  placeholder="Enter Link">
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
