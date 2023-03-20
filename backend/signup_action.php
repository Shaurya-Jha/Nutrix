<?php

include_once './db_conn.php';

if(isset($_POST['create'])){
    $username = $_REQUEST['username'];
    $email = $_REQUEST['email'];
    $password = md5($_REQUEST['password']);

    $sql = "Insert into signup_tbl(su_username, su_email, su_password) values ('$username', '$email', '$password')";

    if($conn->query($sql) === TRUE){
        ?>
        <script>
            window.alert("Data inserted");
        </script>
        <?php

        header("location: ../pages/login.php");
    }
    else{
        ?>
        <script>
            window.alert("Data not inserted");
        </script>
        <?php
    }
}
elseif(isset($_POST['login'])){
    header("location: ../pages/login.php");
}
else{
    header("location: ../pages/home.php");
}

?>