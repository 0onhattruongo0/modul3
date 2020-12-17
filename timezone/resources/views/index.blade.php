<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
<form action="" method="get">
<h1>Ứng dụng xem múi giờ trên thế giới</h1>
<select name="select" id="select-city">
    <option>Chọn thành phố</option>
    <option value="America-Chihuahua">America-Chihuahua</option>
    <option value="America-Costa_Rica">America-Costa_Rica</option>
    <option value="America-Havana">America-Havana</option>
    <option value="Asia-Hong_Kong">Hồng Kông</option>
    <option value="Asia-Ho_Chi_Minh">Hồ Chí Minh, Việt Nam</option>
</select>
</form>
<script>
    document.getElementById("select-city").onchange = function () {
        choosencity();
    };
    function choosencity(){
        var time_zone=document.getElementById("select-city");
        window.location.href= time_zone.value;

    }
</script>
</body>
</html>
