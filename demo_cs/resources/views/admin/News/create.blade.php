@extends('admin.master')
@section('title','Add News')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Add News</li>
            </ol>
            <div class="col-12">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >
                        <label>News</label>
                        <select name="typeofnews">
                            <option disabled selected multiple="">--Chọn--</option>
                            @foreach($typeofnews as $typeofnew)
                                <option value="{{$typeofnew->id}}" >{{$typeofnew->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="" name="Title"  placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea type="text" class="form-control ckeditor" value="" name="Summary"  placeholder="Enter Content" id="ckeditor" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea type="text" class="form-control ckeditor" value="" name="Content"  placeholder="Enter Content" id="ckeditor1" required></textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" value="" name="Image">
                    </div>
                    <div class="form-group">
                        <label>Highlights</label>
                        <input type="number" class="form-control" value="" name="Highlights"  placeholder="Enter Highlights" required>
                    </div>
                    <div class="form-group">
                        <label>View</label>
                        <input type="number" class="form-control" value="" name="View"  placeholder="Enter View" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
