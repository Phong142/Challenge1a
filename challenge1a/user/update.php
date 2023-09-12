<?php
    session_start();
    require "../config/connectdb.php";
    if(!isset($_SESSION['username'])){
        header("Location: list.php");
    }
    if(isset($_POST['update'])){
        $username = $_POST['username'];
        $password = $_POST['password'];
        // $fullname = $_POST['fullname'];
        $email = $_POST['email'];
        $pnumber = $_POST['pnumber'];
        if (empty($password) || empty($email) || empty($pnumber)){
            echo "<script>
                    alert('Update failed');
                    window.location.href = 'list.php';
                </script>";
        }
        else{
            $query = "UPDATE user SET password = '$password', email = '$email', pnumber = '$pnumber' WHERE username = '$username'";
            if(mysqli_query($conn, $query)){
                echo "<script>
                    alert('Update Success!');
                    window.location.href = 'list.php';
                </script>";
            }
            else{
                echo "<script>
                    alert('Update failed');
                    window.location.href = 'list.php';
                </script>";
            }
        }
    }
?>