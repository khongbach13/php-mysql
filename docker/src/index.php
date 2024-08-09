<?php
$servername = 'mysql-my'; // Tên biến môi trường
$username = 'phuonglv';
$password = 'Phuong@2000';
$dbname = 'web';

// Tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);

// Kiểm tra kết nối
if ($conn->connect_error) {
    die("Connect Failure: " . $conn->connect_error);
}

echo "<h1>Connect success!</h1>";

// Ví dụ về truy vấn dữ liệu
$sql = "SELECT id, name FROM users";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<table border='1'><tr><th>ID</th><th>Name</th></tr>";
    while($row = $result->fetch_assoc()) {
        echo "<tr><td>" . $row["id"]. "</td><td>" . $row["name"]. "</td></tr>";
    }
    echo "</table>";
} else {
    echo "0 kết quả";
}

$conn->close();
?>

