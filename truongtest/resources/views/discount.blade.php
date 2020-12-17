<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>productDiscountCalculate</title>
</head>
<body>
<h1>Product Discount Calculator</h1>
<form action="/discount" method="POST">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Product_description">
    </p>
    <p>
        <input type="text" name="price" placeholder="List Price">
    </p>
    <p>
        <input type="text" name="Percent" placeholder="Percent">
    </p>
    <p>
        <button type="submit">Discount Amount</button>
    </p>
</form>
</body>
</html>

