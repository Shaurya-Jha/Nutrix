<?php
include '../backend/db_conn.php';

$sql = "select * from signup_tbl";
$query = mysqli_query($conn, $sql);
// $row = mysqli_fetch_assoc($query);

?>

<h2>Users</h2>

<table class="table">
    <thead>
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Username</th>
            <th scope="col">User email</th>
            <th scope="col">Actions</th>
        </tr>
    </thead>

    <tbody>
        <?php
        while($row = mysqli_fetch_assoc($query)){
            ?>
            <tr>
                <td><?php echo $row['su_id'] ?></th>
                <td><?php echo $row['su_username'] ?></td>
                <td><?php echo $row['su_email'] ?></td>
                <td>@</td>
                <td>@</td>
            </tr>
            <?php
        }
        ?>
    </tbody>
    <!-- <tbody>
        <tr>
            <th scope="row">1</th>
            <td>Mark</td>
            <td>Otto</td>
            <td>@mdo</td>
        </tr>
        <tr>
            <th scope="row">2</th>
            <td>Jacob</td>
            <td>Thornton</td>
            <td>@fat</td>
        </tr>
        <tr>
            <th scope="row">3</th>
            <td colspan="2">Larry the Bird</td>
            <td>@twitter</td>
        </tr>
    </tbody> -->
</table>