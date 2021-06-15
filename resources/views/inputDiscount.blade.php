<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Input Discount</title>
</head>
<body>
<h1>Input Product Information</h1>
<form action="/inputDiscount" method="POST">
    @csrf
    <p>
        <input type="text" name="description" placeholder="Mô tả sản phẩm">
    </p>
    <p>
        <input type="number" name="listPrice" placeholder="Giá niêm yết">
    </p>
    <p>
        <input type="number" step="0.01" name="discountPercent" placeholder="Tỷ lệ chiết khấu">
    </p>
    <p>
        <button type="submit">Tính toán</button>
    </p>
</form>
</body>
</html>
