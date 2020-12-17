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
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Marcellus&display=swap');

        html,
        body {
            height: 100%
        }

        * {
            padding: 0px;
            margin: 0px
        }

        body {
            background-color: #ffffff;
            display: grid;
            place-items: center
        }

        .card {
            border-radius: 15px;
            color: #6f707d
        }

        .div1 {
            background: url('https://i.imgur.com/sTfvzrM.jpg');
            background-repeat: no-repeat;
            background-size: cover;
            background-attachment: local;
            border-radius: 16px 16px 0 0
        }

        .div2 {
            height: 30px;
            background-color: #9fe0fa;
            border-radius: 0 0 15px 15px
        }

        h1 {
            font-size: 65px
        }

        sup {
            font-size: 17px;
            position: relative;
            top: -2rem
        }

        *:focus {
            outline: none
        }
    </style>
</head>

<body>
<form action="" method="get">
    <h1>Chon thanh pho</h1>
    <select name="select" id="select-city">
        <option>Chọn thành phố</option>
        <option value="HaNoi">Hà Nội</option>
        <option value="Hue">Huế</option>
        <option value="DaLat">Đà Lạt</option>
    </select>
</form>

<div class="container-fluid">
    <div class="row justify-content-center">
        <div class="col-12 col-md-5 col-sm-12 col-xs-12">
            <div class="card text-white">
                <div class="div1 p-4 p-md-5 ">
                    <h5>{{$data->name}}</h5>
                    <h1>{{($data->main->temp)-273}}<sup>°C </sup> </h1>
                    <p class="my-0">{{$data->sys->country}}</p>
                    <h4 class="my-0">{{$time->format('d-m-Y H:i')}}</h4>
                </div>
                <div class="div2"> </div>
            </div>
        </div>
    </div>
</div>
<script>
    document.getElementById("select-city").onchange = function () {
        choosencity();
    };
    function choosencity(){
        var local=document.getElementById("select-city");
        window.location.href= local.value;
    }
</script>

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
