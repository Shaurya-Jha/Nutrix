<?php

session_start();

include_once './db_conn.php';

if(isset($_POST['login'])){
    $loggedUser = $_REQUEST['username'];
    $loggedPass = $_REQUEST['password'];

    $sql = "select * from signup_tbl where su_username='$loggedUser' AND su_password='$loggedPass'";

    if($conn->query($sql) > 0){
        $_SESSION['loggedUser'] = $loggedUser; 
        header("location: ../pages/home.php");
        ?>
            <!-- <script>
                window.alert("Login Successfull");
            </script> -->
        <?php
        
    }
    elseif($conn->query($sql) > 0 and $loggedUser="admin" and $loggedPass="admin"){
        header("location: ../admin/dashboard.php");
    }
    else{
        ?>
            <script>
                window.alert("Username or password incorrect");
            </script>
        <?php
    }
}
elseif(isset($_POST['signup'])){
    header("location: ../pages/signup.php");
}
else{
    header("location: ../pages/home.php");
}

?>