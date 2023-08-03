<?php
include "db_connn.php";

if(isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kamar =$_POST['kamar'];
    $gender =$_POST['gender'];
    
    $sql = "INSERT INTO `pendataan`(`id`, `nis`, `nama`, `kamar`, `gender`) VALUES (NULL,'$nis','$nama','$kamar','$gender')";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: index.php?msg=new record created successfully");
    }
    else {
        echo "failed:".mysqli_error($conn);
    }
}

?>











<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">


<!-- Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-9ndCyUaIbzAi2FUVXJi0CjmCapSmO7SnpJef0486qhLnuZ2cdeRhO02iuK6FUUVM" crossorigin="anonymous">

    <!-- fontawesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <title>php crud </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color:#000000;">
    <h3>PENDATAAN SABAR</h3>
</nav>
<div class="container">
       <div class="text-center mb-4">
        <h3>Add New User</h3>
        <p class="text-muted">complete the from below to add a new user</p>
       </div> 
       <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nis</label>
                    <input type="text" class="form-control" name="nis" placeholder="masukkan nis anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" placeholder="masukkan nama anda">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kamar:</label>
                    <input type="text" class="form-control" name="kamar" placeholder="masukkan asrama anda">
                </div>

                <div class="form-gruop mb-3">
                    <label>Gender:</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="male"value="male">
                    <label for="male"class="form-input-label">male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="famale"value="famale">
                    <label for="famale"class="form-input-label">famale</label>   
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Save</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
</form>
</div>
</div>

<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
