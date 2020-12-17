@extends('admin.master')
@section('title','Edit News')
@section('content')
    <div class="col-12 col-md-12">
        <div class="row">
            <ol class="container-fluid breadcrumb mb-4">
                <li class="breadcrumb-item active">Edit News</li>
            </ol>
            <div class="col-12">
                <form method="post" action="" enctype="multipart/form-data">
                    @csrf
                    <div class="form-group" >
                        <label>News</label>
                        <select name="typeofnews">
                            <option disabled selected multiple="">--Chọn--</option>
                            @foreach($typeofnews as $typeofnew)
                                <option value="{{$typeofnew->id}}"
                                {{($typeofnew->id == $news->typeofnews_id) ? "selected":''}}
                                >{{$typeofnew->name}}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group">
                        <label>Title</label>
                        <input type="text" class="form-control" value="{{$news->title}}" name="Title"  placeholder="Enter Title" required>
                    </div>
                    <div class="form-group">
                        <label>Summary</label>
                        <textarea type="text" class="form-control ckeditor" value="{{($news->summary)}}" name="Summary"  placeholder="Enter Content" id="ckeditor2" required>{{($news->summary)}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Content</label>
                        <textarea type="text" class="form-control ckeditor" value="" name="Content"  placeholder="Enter Content" id="ckeditor3" required>{{$news->content}}</textarea>
                    </div>
                    <div class="form-group">
                        <label>Image</label>
                        <input type="file" class="form-control" value="" name="Image" >
                    </div>
                    <div class="form-group">
                        <label>Highlights</label>
                        <input type="number" class="form-control" value="{{$news->highlights}}" name="Highlights"  placeholder="Enter Highlights" required>
                    </div>
                    <div class="form-group">
                        <label>View</label>
                        <input type="number" class="form-control" value="{{$news->view}}" name="View"  placeholder="Enter View" required>
                    </div>
                    <button type="submit" class="btn btn-primary">Submit</button>
                </form>
            </div>

        </div>
    </div>



    <main class="mt-5">
        <div class="container-fluid">
            <ol class="breadcrumb mb-4">
                <li class="breadcrumb-item active">Comments</li>
            </ol>
            <div class="col-12">
                @if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
            </div>
            <div class="card mb-4">
                <div class="card-header">
                    <i class="fas fa-table mr-1"></i>
                    Comment
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                            <thead>
                            <tr >
                                <th>ID</th>
                                <th>Content</th>
                                <th>User</th>
                                <th>Create_at</th>
                                <th>Update_at</th>
                                <th>Delete</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($news->commentss as $key => $comments)
                                <tr id="mid{{$comments->id}}">
                                    <td>{{$key+1}}</td>
                                    <td>{!! $comments->content !!}</td>
                                    <td>{{$comments->user->name}}</td>
                                    <td>{{$comments->created_at}}</td>
                                    <td>{{$comments->update_at}}</td>
                                    <td><a href="{{route('comments.destroy',$comments->id)}}" onclick="">Delete</a></td>
                                </tr>
                            @endforeach
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </main>

{{--    <script type="text/javascript">--}}

{{--            function DeleteComment(id) {--}}
{{--                if (confirm("Bạn chắc chắn muốn xóa?")) {--}}
{{--                    $.ajax({--}}
{{--                        url: 'admin/comments' + id + 'destroy',--}}
{{--                        type: 'GET',--}}
{{--                        data: {--}}
{{--                            _token: $("input[name=_token]").val()--}}
{{--                        },--}}
{{--                        success: function (response) {--}}
{{--                            $("#mid" + id).remove();--}}

{{--                        }--}}
{{--                    })--}}
{{--                }--}}
{{--            }--}}
{{--    </script>--}}
@endsection
