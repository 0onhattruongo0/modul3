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
                        <select name="category">
                            @foreach($categories as $category)
                                <option value="{{$category->id}}" {{($category->name==$typeofnews->category->name) ? "selected":""}}>{{$category->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Typeofnews</label>
                        <input type="text" class="form-control" value="{{$typeofnews->name}}" name="nameTypeOfNews"  placeholder="Enter TypeOfNews" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>
        </div>
    </div>
@endsection
