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

<div class="container-fluid mt-4">
    <div class="mb-4"><strong><h2>Thêm mới nhân viên</h2></strong></div>
    @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
    <form class="d-flex" action="" method="post">
        @csrf
        <div class="col-6">
            <div class="form-group">
                <label>Mã Nhân Viên</label>
                <input type="number" class="form-control" name="IdStaff" placeholder="Nhap MaNhanVien">
            </div>
            <div class="form-group">
                <label >Nhóm Nhân Viên</label>
                <select name="GroupStaff">
                    <option disabled selected multiple="">--Chọn--</option>
                    @foreach($groupstaffs as $groupstaff)
                        <option value="{{$groupstaff->id}}" >{{$groupstaff->name}}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label >Họ Tên</label>
                <input type="text" class="form-control" name="name" placeholder="Nhập Họ Tên">
            </div>
            <div class="form-group">
                <label >Ngày sinh</label>
                <input type="date" class="form-control" name="birthday" >
            </div>
            <div class="form-group">
                <label>Giới Tính</label><br>
                <label>
                    <input type="radio" name="gender" value="1" >Nam
                </label>
                <label>
                    <input type="radio" name="gender" value="0">Nữ
                </label>
            </div>
        </div>
        <div class="col-6">
            <div class="form-group">
                <label >Số điện thoại</label>
                <input type="number" class="form-control" name="phone" placeholder="Nhập Số điện thoại">
            </div>
            <div class="form-group">
                <label >Số CMND</label>
                <input type="number" class="form-control" name="CMND" placeholder="Nhập Số CMND">
            </div>
            <div class="form-group">
                <label >Email</label>
                <input type="text" class="form-control" name="email" placeholder="Nhập Email">
            </div>
            <div class="form-group">
                <label>Địa chỉ</label>
                <textarea type="text" name="address"></textarea>
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
