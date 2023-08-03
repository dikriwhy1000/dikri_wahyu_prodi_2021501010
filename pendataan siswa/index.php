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
    style="background-color:#808080;">
    <h3>PENDATAAN SABAR</h3>
</nav>

<div class="container">
    <?php
    if(isset($_GET['msg'])){
        $msg =$_GET['msg'];
        echo '<div class="alert alert-warning alert-dismissible fade show" role="alert">
        '.$msg.'
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
      </div>';
    }
    ?>
    <a href="add_new.php" class="btn btn-dark mb-3">Add Sabar</a>

    <table class="table table-hover text-center">
    <thead class= "table-dark">
        <tr>
        <th scope="col">ID</th>
        <th scope="col">Nis</th>
        <th scope="col">Nama</th>
        <th scope="col">Kamar</th>
        <th scope="col">Gender</th>
        <th scope="col">action</th>
        </tr>
    </thead>
        <?php
        include "db_connn.php";

          $sql ="SELECT * FROM pendataan" ;
          $result = mysqli_query($conn, $sql);
          $i=0;
            while ($row =mysqli_fetch_assoc($result)) {
                $i++;
                ?>
                <tbody>
                <tr>
                  <td><?php echo $i;?></td>
                  <td><?php echo $row['nis']?></td>
                  <td><?php echo $row['nama']?></td>
                  <td><?php echo $row['kamar']?></td>
                  <td><?php echo $row['gender']?></td>
                <td>
                    <a href="edit.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-pen-to-square fs-5 me-3"></i></a>
                    <a href="delete.php?id=<?php echo $row['id']?>" class="link-dark"><i class="fa-solid fa-trash fs-5"></i></a></td>
                </tbody>

                <?php
            }


        ?>
    
</table>
</div>

<!-- Bootstrap-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-geWF76RCwLtnZ8qwWowPQNguL3RmwHVBC9FhGdlKrxdiJJigb/j/68SIy3Te4Bkz" crossorigin="anonymous"></script>

</body>
</html>
