<?php
$conn = new mysqli('localhost', 'root', '', 'teacher_db');

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "DB connection sucessfully";
?>
<!-- ID.***-**-**** -->
<!-- Md. Tahmid Shah Tamim -->