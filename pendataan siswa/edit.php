<?php
include "db_connn.php";
$id = $_GET['id'];

if(isset($_POST['submit'])){
    $nis = $_POST['nis'];
    $nama = $_POST['nama'];
    $kamar =$_POST['kamar'];
    $gender =$_POST['gender'];
    
    $sql = "UPDATE `pendataan` SET `nis`='$nis',`nama`='$nama',`kamar`='$kamar',`gender`='$gender' WHERE id=$id";
    $result = mysqli_query($conn, $sql);

    if($result) {
        header("location: index.php?msg=Data update successfully");
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
    <title> Pendataan Sabar Sukorejo </title>
</head>
<body>
    <nav class="navbar navbar-light justify-content-center fs-3 mb-5"
    style="background-color:#00ff5573;">
        PENDATAAN SABAR
</nav>

<div class="container">
       <div class="text-center mb-4">
        <h3>Edit Data Sabar</h3>
        <p class="text-muted">Clik update after changing any information</p>
       </div> 

       <?php
       $sql = "SELECT * FROM pendataan WHERE id = $id LIMIT 1";
       $result = mysqli_query($conn, $sql);
       $row = mysqli_fetch_assoc($result);
       ?>
       <div class="container d-flex justify-content-center">
        <form action="" method="post" style="width:50vw; min-width:300px;">
            <div class="row mb-3">
                <div class="col">
                    <label class="form-label">Nis</label>
                    <input type="text" class="form-control" name="nis" value="<?php echo $row['nis'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Nama:</label>
                    <input type="text" class="form-control" name="nama" value="<?php echo $row['nama'] ?>">
                </div>

                <div class="mb-3">
                    <label class="form-label">Kamar:</label>
                    <input type="text" class="form-control" name="kamar" value="<?php echo $row['kamar'] ?>">
                </div>

                <div class="form-gruop mb-3">
                    <label>Gender:</label>&nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="male"value="male"<?php echo ($row['gender']=='male')?"checked":"";?>>
                    <label for="male"class="form-input-label">male</label>
                    &nbsp;
                    <input type="radio" class="form-check-input" name="gender"
                    id="female"value="female"<?php echo ($row['gender']=='female')?"checked":"";?>>
                    <label for="famale"class="form-input-label">famale</label>   
                </div>

                <div>
                    <button type="submit" class="btn btn-success" name="submit">Update</button>
                    <a href="index.php" class="btn btn-danger">Cancel</a>
                </div>
</form>
</div>
</div>

<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
