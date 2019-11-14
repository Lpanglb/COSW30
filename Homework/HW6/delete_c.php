<?php

include('database.php');


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
    echo "$id";
    echo"working";
} else {
    header('Location:crud_update.php');
    exit;
}

$sql = "DELETE FROM USER_LISAN WHERE user_id = $id";
$result = mysqli_query($connection, $sql);
// header("crud_update.php");
if($result) {
        header('Location:crud_update.php');
        echo"delete";
}
?>
