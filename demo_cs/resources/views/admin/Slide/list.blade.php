@extends('admin.master')
@section('title', 'List Slide')
@section('content')
    <main>
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Slide</li>
            </ol>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <a class="btn btn-primary mb-3" href="{{route('slide.create')}}">Add Slice </a>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Slide
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr>
                                <th>ID</th>
                                <th>Name</th>
                                <th>Image</th>
                                <th>Content</th>
                                <th>Link</th>
                                <th>Edit</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                       @foreach($slides as $key => $slide)
                            <tr>
                                <td>{{$key+1}}</td>
                                <td>{{$slide->name}}</td>
                                <td><img src="{{asset('storage/'.substr($slide->image,7))}}" alt="" style="width: 100px; height:100px" ></td>
                                <td>{!!$slide->content!!}</td>
                                <td><a href="{{$slide->link}}">{{$slide->link}}</a></td>
                                <td><a href="{{route('slide.edit', $slide->id)}}">Edit</a></td>
                                <td><a href="{{route('slide.destroy', $slide->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Delete</a></td>
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
