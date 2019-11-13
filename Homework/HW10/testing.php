<?php
include('database.php');

$query = 'SELECT * FROM USER_LISAN';
$data= mysqli_query($connection, $query);
while ($result = mysqli_fethc_assoc($data))
{
    echo"what";
 echo"   <tr>
 <td>".$result['user_id']."</td>
 
 </tr>";
    
}



?>





<?php





?>

<?php
 if($_GET['edit']) {
 
 $id = $_GET['user_id'];
 $first_name = $_GET['first_name'];
 $last_name = $_GET['last_name'];
 
 if ($id!="" && $first_name!= "" && $last_name!="" )
 {
 $query = "INSERT INTO USER_LISAN VALUE('$id', '$last_name', '$first_name')";
 $data = mysqli_query($connection, $query);
 
 if($data)
 {
 echo "data inster into database";
 
 }
 else{
 echo "all find are requireed";
 }

 }

}
?>