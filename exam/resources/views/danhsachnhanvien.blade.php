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
<div class="container mt-5">
    <div class="container-fluid d-flex justify-content-between">
        <div><a href="{{route('nhanvien.addform')}}" class="btn btn-primary">Thêm mới</a></div>
        <div><form class="form-inline my-2 my-lg-0">
                <input class="form-control mr-sm-2" type="search" placeholder="Nhập từ cần tìm" aria-label="Search">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Tìm kiếm</button>
            </form>
        </div>
    </div>
    <div class="container-fluid mt-4">
        <div class="mb-4"><strong><h2>Danh sách nhân viên</h2></strong></div>
        <div>
            <table class="table">
                <thead>
                <tr>
                    <th scope="col">Mã Nhân Viên</th>
                    <th scope="col">Nhóm Nhân Viên</th>
                    <th scope="col">Họ Tên</th>
                    <th scope="col">Giới Tính</th>
                    <th scope="col">Số Điên thoại</th>
                    <th scope="col">Chức năng</th>

                </tr>
                </thead>
                <tbody>
                @foreach($nhanvien as $nhanvien1)
                <tr>
                    <th scope="row">{{$nhanvien1->Masinhvien}}</th>
                    <td>{{$nhanvien1->nhomnhanvien->TennhomNV}}</td>
                    <td>{{$nhanvien1->Ten}}</td>
                    <td>{{$nhanvien1->Gioitinh}}</td>
                    <td>{{$nhanvien1->Sodienthoai}}</td>
                    <td>
                        <a class="btn btn-info" href="{{route('nhanvienform.edit', $nhanvien1->id)}}"  >Sửa</a>
                        <a class="btn btn-danger" href="{{route('nhanvien.delete', $nhanvien1->id)}}" onclick="return confirm('Bạn chắc chắn muốn xóa?')">Xóa</a>
                    </td>
                </tr>
                @endforeach
                </tbody>
            </table>
        </div>
    </div>

</div>
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
