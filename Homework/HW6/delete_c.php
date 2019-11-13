<?php

include('database.php');

$sql = "DELETE FROM USER_LISAN WHERE user_id= 2 ";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
$sql = "DELETE FROM USER_LISAN WHERE user_id= 28 ";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
$sql = "DELETE FROM USER_LISAN WHERE user_id= 29 ";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}
$sql = "DELETE FROM USER_LISAN WHERE user_id= 30 ";

if (mysqli_query($connection, $sql)) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . mysqli_error($connection);
}

//header("crud_update.php");

?>
<!DOCTYPE HTML>
<html>
<head>
    
    
</head>    


<body>
    <button type="button" class="btn btn-outline-primary"> <a href ="crud_update.php?"  >Home</a></button>
    
</body>
</html>
