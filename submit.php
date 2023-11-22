<?php
// Kết nối đến cơ sở dữ liệu MySQL
$servername = "localhost";
$username = "username"; // Thay username bằng tên đăng nhập MySQL của bạn
$password = "password"; // Thay password bằng mật khẩu MySQL của bạn
$dbname = "ten_database"; // Thay ten_database bằng tên cơ sở dữ liệu của bạn

$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy thông tin từ form
$productName = $_POST['productName'];
$productDescription = $_POST['productDescription'];
$productPrice = $_POST['productPrice'];

// Thêm thông tin sản phẩm vào cơ sở dữ liệu
$sql = "INSERT INTO products (name, description, price) VALUES ('$productName', '$productDescription', '$productPrice')";

if ($conn->query($sql) === TRUE) {
    echo "Sản phẩm đã được thêm vào cơ sở dữ liệu thành công";
} else {
    echo "Lỗi: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
