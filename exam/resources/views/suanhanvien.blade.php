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
{{--{{dd($nhomnhanvien)}}--}}
<div class="container-fluid mt-4">
    <div class="mb-4"><strong><h2>Sửa thông tin nhân viên</h2></strong></div>
    <form class="d-flex" action="{{route('nhanvien.addform')}}" method="post">
        @csrf
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputMaNv">Mã Nhân Viên</label>
                <input type="number" value="{{$nhanvien->Masinhvien}}" class="form-control" name="manhanvien" id="exampleInputMaNv"  placeholder="Nhap MaNhanVien">
            </div>
            <div class="form-group">
                <label for="exampleInputNhomNv">Nhóm Nhân Viên</label>
                <select name="nhomnhanvien">
                    <option disabled selected multiple="">--Chọn--</option>
                    @foreach($nhomnhanvien as $nhomnhanvien1)
                        <option value="{{$nhomnhanvien1->id}}" >{{$nhomnhanvien1->TennhomNV}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="exampleInputName">Họ Tên</label>
                <input type="text" value="{{$nhanvien->Ten}}" class="form-control" name="hoten" id="exampleInputName"  placeholder="Nhập Họ Tên">
            </div>
            <div class="form-group">
                <label for="exampleInputdate">Ngày sinh</label>
                <input type="date" class="form-control" value="{{$nhanvien->ngaysinh}}" name="ngaysinh" id="exampleInputdate" >
            </div>
            <div class="form-group">
                <label>Giới Tính</label><br>
                <label>
                    <input type="radio" name="gioitinh" value="1" >Nam
                </label>
                <label>
                    <input type="radio" name="gioitinh" value="0">Nữ
                </label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label for="exampleInputSdt">Số điện thoại</label>
                <input type="number" class="form-control" value="{{$nhanvien->Sodienthoai}}" name="sodienthoai" id="exampleInputSdt"  placeholder="Nhập Số điện thoại">
            </div>
            <div class="form-group">
                <label for="exampleInputCMND">Số CMND</label>
                <input type="number" class="form-control" value="{{$nhanvien->SoCMND}}" name="cmnd" id="exampleInputCMND"  placeholder="Nhập Số CMND">
            </div>
            <div class="form-group">
                <label for="exampleInputEmail">Email</label>
                <input type="text" class="form-control" value="{{$nhanvien->email}}" name="email" id="exampleInputEmail"  placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <label for="exampleInputdiachi">Địa chỉ</label>
                <textarea type="text"  name="diachi">{{$nhanvien->Diachi}}</textarea>
            </div>
            <div class="d-flex justify-content-end"><button type="submit" class="btn btn-primary ">Submit</button></div>
        </div>

    </form>
</div>

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

