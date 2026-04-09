<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <title>Ðăng Ký</title>
    <link rel="stylesheet" href="create.css">
</head>
<body>

<div class="container">
    <h2>Trang Ðăng Ký Tài Khoản</h2>

    <form method="POST" onsubmit="return validateForm()">
        <input type="text" name="account" id="account" placeholder="Nhập Email Hoặc SĐT Của Bạn">
        <div class="password-box">
    <input type="password" name="password" id="password" placeholder="Mật Khẩu">
    <span class="eye" onclick="togglePass('password', this)">👁️‍🗨️</span>
</div>

<div class="password-box">
    <input type="password" name="repassword" id="repassword" placeholder="Nhập Lại Mật Khẩu">
    <span class="eye" onclick="togglePass('repassword', this)">👁️‍🗨️</span>
</div>

        <div id="error"></div>

        <button name="register">Tạo Tài Khoản</button>
    </form>

    <p>Bạn Đã Có Tài Khoản Rồi Sao?? <a href="login.php">Ðăng Nhập</a></p>
</div>

<script src="create.js"></script>
</body>
</html>

<?php
if (isset($_POST['register'])) {
    $account = $_POST['account'];
    $pass = password_hash($_POST['password'], PASSWORD_DEFAULT);


    $check = $conn->query("SELECT * FROM users WHERE username='$account'");
    if ($check->num_rows > 0) {
        echo "<script>alert('Tài Khoản Đã Tồn Tại');</script>";
    } else {
        $conn->query("INSERT INTO users(username, password) VALUES('$account','$pass')");
        echo "<script>alert('Ðăng ký thành công'); window.location='login.php';</script>";
    }
}
?>
