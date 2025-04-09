<?php include 'db.php';

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    $conn->query("INSERT INTO teachers (name, email, department) VALUES (
        '{$_POST['name']}',
        '{$_POST['email']}',
        '{$_POST['department']}'
    )");clear
    header("Location: index.php");
}
?>
<!DOCTYPE html>
<html>
<head>
    <title>Add Teacher</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Add New Teacher</h2>
    <form method="POST">
        <input name="name" class="form-control mb-2" placeholder="Name" required>
        <input name="email" class="form-control mb-2" placeholder="Email" required>
        <input name="department" class="form-control mb-2" placeholder="Department" required>
        <button class="btn btn-primary">Add</button>
        <a href="index.php" class="btn btn-secondary">Back</a>
    </form>
    <div class="text-center p-3 mt-5"> ©MD. TAHMID SHAH TAMIM-1141. 
</div>
</body>
</html>
