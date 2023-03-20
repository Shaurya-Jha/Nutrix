<?php

$hostname = "localhost";
$username = "root";
$password = "";
$database = "nutrix";

$conn = new mysqli($hostname,$username,$password,$database);

// if($conn === false){
//     die("Error: Could not connect . ".mysqli_connect_error());
// }

// echo "Connected successfully to $database";

if($conn){
    ?>

    <!-- <script>
        window.alert("Connection successfull");
    </script> -->

    <?php
}
else{
    ?>

    <script>
        window.alert("Connection Unsuccessfull");
    </script>

    <?php
}

?>