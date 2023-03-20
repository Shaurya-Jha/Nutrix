<?php

session_start();

include_once './db_conn.php';

if(isset($_POST['login'])){
    $log_user = $_REQUEST['username'];
    $log_pass = $_REQUEST['password'];

    $sql = "select * from signup_tbl where su_username='$log_user' AND su_password='$log_pass'";

    if($conn->query($sql) > 0){
        $_SESSION['log_user'] = $log_user; 
        header("location: ../pages/home.php");
        ?>
            <script>
                window.alert("Login Successfull");
            </script>
        <?php
        
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