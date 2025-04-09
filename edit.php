<?php
include 'db.php';
$id = $_GET['id'];
$teacher = $conn->query("SELECT * FROM teachers WHERE id=$id")->fetch_assoc();

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn->query("UPDATE teachers SET
        name='{$_POST['name']}',
        email='{$_POST['email']}',
        department='{$_POST['department']}'
        WHERE id=$id
    ");
    header("Location: index.php");
}
// ID. ***-**-***
?>
<!DOCTYPE html>
<html>
<head>
    <title>Edit Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Edit Teacher</h2>
    <form method="POST">
        <input name="name" class="form-control mb-2" value="<?= $teacher['name'] ?>" required>
        <input name="email" class="form-control mb-2" value="<?= $teacher['email'] ?>" required>
        <input name="department" class="form-control mb-2" value="<?= $teacher['department'] ?>" required>
        <button class="btn btn-primary">Update</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
    <div class="text-center p-3 mt-5"> ©MD. TAHMID SHAH TAMIM-1141. 
</div>
</body>
</html>
