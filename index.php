<?php include 'db.php'; ?>
<!DOCTYPE html>
<html>
    <!-- MD. Tahmid Shah Tamim
        ID.***-**-*** -->
<head>
    <title>Teachers</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body class="container mt-5">
    <h2>Teachers Information</h2>
    <a href="add.php" class="btn btn-success mb-3">Add Teacher</a>
    <table class="table table-bordered">
        <tr>
            <th>Name</th><th>Email</th><th>Department</th><th>Action</th>
        </tr>
        <?php
        $result = $conn->query("SELECT * FROM teachers");
        while($row = $result->fetch_assoc()) {
            echo "<tr>
                <td>{$row['name']}</td>
                <td>{$row['email']}</td>
                <td>{$row['department']}</td>
                <td>
                    <a href='edit.php?id={$row['id']}' class='btn btn-warning btn-sm'>Edit</a>
                    <a href='delete.php?id={$row['id']}' class='btn btn-danger btn-sm'>Delete</a>
                </td>
            </tr>";
        }
        ?>
    </table>
    <div class="text-center p-3 mt-5"> ©MD. TAHMID SHAH TAMIM-1141.

    </div>
</body>
</html>
