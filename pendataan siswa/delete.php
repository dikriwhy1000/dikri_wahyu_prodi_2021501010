<?php
include "db_connn.php";
$id = $_GET['id'];
$sql = "DELETE FROM pendataan WHERE id = $id";
$result = mysqli_query($conn, $sql);
if($result){
    header("location: index.php?msg=Record delete successfully");
}
else{
    echo"Failed: " . mysqli_error($conn);
}
?>