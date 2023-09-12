<?php
    session_start();
    if(isset($_SESSION['role'])){
        header("Location: list.php");
    }
    require '../config/connectdb.php';
    if(isset($_POST['delete'])){
        $id = $_POST['delete'];
        $query = "DELETE FROM user WHERE ID = '$id'";
        if(mysqli_query($conn, $query)){
            echo "<script>
                alert('Delete User Success!');
                window.location.href='list.php';
            </script>";
        }
        else{
            echo "<script>
                    alert('Delete User Failed!');
                    window.location.href='list.php';
                </script>";
        }
    }
?>