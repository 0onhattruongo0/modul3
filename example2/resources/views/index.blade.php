<!doctype html>
<html lang="en">
<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
          integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
</head>
<body>

<div class="mt-4 mb-4"><a class="btn btn-primary" href="{{route('formCreateProduct')}}">Thêm san pham</a></div>
@if (Session::has('success'))
                    <p class="text-success">
                        <i class="fa fa-check" aria-hidden="true"></i>{{ Session::get('success') }}
                    </p>
                @endif
<table class="table">
    <thead>
    <tr>
        <th scope="col">Name</th>
        <th scope="col">Price</th>
        <th scope="col">Description</th>
        <th scope="col">Category</th>
        <th scope="col">Active</th>
        <th scope="col">Edit</th>


    </tr>
    </thead>
    <tbody>
    @foreach($products as $product )
        <tr>
            <th scope="row">{{$product->name}}</th>
            <td>{{$product->price}}</td>
            <td>{{$product->description}}</td>
            <td>{{$product->category->title}}</td>
            <td>{{($product->active)==1 ? "Active" : "Unactive"}}</td>

            <td>
                <a href="{{route('formEditProduct',$product->id)}}" class="btn btn-info">Edit</a>
            </td>
        </tr>
    @endforeach
    </tbody>
</table>
<a href="{{route('active')}}" class="btn btn-primary">Product Active</a>
<a href="{{route('unactive')}}" class="btn btn-primary">Product Inactive</a>
<a href="{{route('productlist')}}" class="btn btn-primary">Home</a>



<!-- Optional JavaScript -->
<!-- jQuery first, then Popper.js, then Bootstrap JS -->
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
        crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM"
        crossorigin="anonymous"></script>
</body>
</html>
