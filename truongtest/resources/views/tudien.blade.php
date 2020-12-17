<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Từ điển</title>
</head>
<body>
<h1>Từ điển</h1>
<form action="/tudien" method="POST">
    @csrf
    <p>
        <input type="text" name="search" placeholder="Nhập từ">
    </p>
    <p>
        <button type="submit">Dịch</button>
    </p>
</form>
</body>
</html>
