<?php
include 'db.php';
$id = $_GET['id'];
$conn->query("DELETE FROM teachers WHERE id=$id");
header("Location: index.php");
?>
<!-- MD. TAHMID SHAH TAMIM-->
 <!-- ID. ***-**-*** -->