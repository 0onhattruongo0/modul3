@extends('admin.master')
@section('title', 'List News')
@section('content')
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">News</li>
            </ol>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <a class="btn btn-primary mb-3" href="{{route('news.create')}}">AddNews </a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    News
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Title</th>
                                <th>Summary</th>
                                <th>Image</th>
                                <th>Name_TypeofNews</th>
                                <th>Name_Category</th>
                                <th>Highlights</th>
                                <th>View</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                       @foreach($news as $key => $new)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$new->title}}</td>
                                <td>{!! $new->summary !!}</td>
                                <td><img src="{{asset('storage/'.substr($new->image,7))}}" alt="" style="width: 100px; height:100px" ></td>
                                <td>{{isset($new->TypeOfNews->name) ? $new->TypeOfNews->name : ""}} </td>
                                <td>{{isset($new->typeofnews->category->name) ? $new->typeofnews->category->name : ""}}</td>
                                <td>{{$new->highlights}}</td>
                                <td>{{$new->view}}</td>
                                <td><a href="{{route('news.edit', $new->id)}}">Edit</a></td>
                                <td><a href="{{route('news.destroy', $new->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
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
