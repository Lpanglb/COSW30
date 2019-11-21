<?php 
// Add the database connection

include('database.php');
include('header_c.php');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());
     echo "Not connection";
}


if(isset($_GET['id'])) {
    $id = $_GET['id'];
    
   // echo "$id";
  //  echo"working";
} else {
    header('Location:crud_update.php');
    exit;
}

// if(isset($_GET['password'])){
//     $oldpassword = $_GET['password'];
//     echo "$oldpassword";
// }


if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $id = $_GET['user_id'];
    $first_name = $_POST['first_name'];
    $last_name = $_POST['last_name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
      
       
if(empty($email) && empty($first_name) && empty(last_name) && empty($password)) {   //email is empty
            //Output an error message
            echo '<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Success!</strong> Please make sure to fill out all the blank space
  </div>';;
        }
        else{
        
    $update_query = "UPDATE USER_LISAN SET first_name = '$first_name', 
                                            last_name = '$last_name',
                                            email = '$email',
                                            password = '$password'
                            WHERE user_id = $id ";

    $result = mysqli_query($connection, $update_query);
    // Check if the database returned anything
    if($result) {
        header('Location:crud_update.php');
    // $rows =mysqli_fetch_all($result, MYSQLI_ASSOC);
    //         // Output the results
    //     print_r($rows);
    } else {
        echo "Error from adding stuff";
    }
}
} // END OF $_SERVER['REQUEST_METHOD'] == 'POST'


// This part is always running because of the previous page
// grab the data FROM USER_LISAN WHERE user_id= $id";
$query = "SELECT * FROM USER_LISAN WHERE user_id= $id"; 
// Establish the connection and added to the $sq varible. 
$sq = mysqli_query($connection, $query);
// if the $sq work, it will store to the those array. 
if($sq){
    $user = mysqli_fetch_assoc($sq);
    $first_name = $user['first_name'];
    $last_name  = $user['last_name'];
    $email = $user['email'];
    $password = $user['password'];
}
?>


<!doctype html>
<html>
<head>
    <title>update my Crud</title>
</head>
<body>
     <div class="row row1">
         <div class="col col1">
             <!--closing padding top -->
         </div>
         </div>
        
    <div class="row ">
  <div class="col text-center">
    
    </div>
    </div> <!--closing col col text-->
    
     <div class="container-fluid">
     <div class= "row row2">
     <div class= "col col_form_right">
     <p></p>
     </div>
     <div class="col col_form col_border text-center">
     <h1>Update User</h1>
    <form action="update_c.php?id=<?php echo $id; ?>" method="POST">
        <label for = "id">ID Number:</label>
        <label for = "id"><?php echo $id; ?></label><br>
        <label for="first_name" class=" ">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>"><br>

        <label for="last_name" class=" ">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>"><br>

        <label for="email" class=" ">Email    </label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>"><br>

        <label for="password" class="">Password  </label>
       <input type="password" id="password" name="password" value="<?php echo $password;?>"><br>
  
        <!--Add a second password input so the user has to retype their password -->

        <button class="btn btn-outline-primary">Update</button>
          
    </form>
   
    </div> <!--  closing form col-->
    
    <div class= "col col_form_left"> 
    <p></p>
    </div>
    </div>
   <div class="row  ">
    <div class="col text-center">
     <button  class="btn btn-outline-primary"> <a href ="crud_update.php"  >Back to Index</a></button>
</div>
</div>


</body>
</html>