<?php
    session_start();
    if(!isset($_SESSION['username'])){
        header("Location: ../index.php");
    }
    require '../config/connectdb.php';
    if(isset($_POST['editBtn']) && $_SESSION['username']){
        $username = $_POST['editBtn'];
    }
    elseif(!isset($_POST['editBtn']) && $_SESSION['username']){
        $username = $_SESSION['username'];
    }
    $query = "SELECT username, password, fullname, email, pnumber from user where username = '$username'";
    $query_res = mysqli_query($conn, $query);
    $rows_arr = mysqli_fetch_array($query_res);
?>
<!doctype html>
<html lang="en">
  <head>
    <title>Information</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
    <?php
        include "header.php";
    ?>
    <div class = "container">
        <h2><center><br>Information</center></h2>
            <form action="update.php" method = "post" enctype="multipart/form-data">
                <!-- <div class="text-center">
                    <img class="img-fluid rounded-circle" src="avatars/<?php echo $rows['avatar'];?>" style="width: 150px;height: 150px;" title="avatar">
                </div> -->
                <div class = "form-group">
                    <label for='username'>Username</label>
                    <input type="text" name="username" id="username" class="form-control" value="<?php echo $username; ?>" readonly>
                </div>
                <div class="form-group">
                  <label for="password">Password</label>
                  <input type="text" name="password" id="password" class="form-control"  value="<?php echo $rows_arr['password'];?>" >
                </div>
                <div class="form-group">
                  <label for="fullname">Fullname</label>
                  <input type="text" name="fullname" id="fullname" class="form-control"  value="<?php echo $rows_arr['fullname'];?>" readonly>
                </div>
                <div class="form-group">
                  <label for="email">Email</label>
                  <input type="text" name="email" id="email" class="form-control"  value="<?php echo $rows_arr['email'];?>" >
                </div>
                <div class="form-group">
                  <label for="phone">Phone Number</label>
                  <input type="text" name="pnumber" id="pnumber" class="form-control"  value="<?php echo $rows_arr['pnumber'];?>" >
                </div>
                <!-- <div class="form-group">
                  <label for="avatar">Avatar</label>
                  <input type="file" name="avatar" id="avatar" class="form-control">
                </div> -->
                <button type="submit" class="btn btn-primary" name="update">Update</button>
                <br><br>
            </form>
    </div>
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>