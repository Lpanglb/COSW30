<?php 
// Add the database connection

include('database.php');
include('header_c.php');

if (!$connection) {
    die("Connection failed: " . mysqli_connect_error());

            echo "Not connection";
 
}

$query = 'SELECT * FROM USER_LISAN';
// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    $rows =mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results
     print_r($rows);
}

else {
    // Output an error
    echo'This is not working';
}

 if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
      $email = $_POST['email'];
       $password = $_POST['password'];
       $confirm_password = $_POST['confirm_password'];
       
$update_query = "UPDATE INTO USER_LISAN SET first_name = '$first_name', 
                                            last_name = '$last_name',
                                            email = '$email',
                                            password = '$password'
                                        
                            WHERE user_id = 1 ";     
                            
        echo"Good";
}

?>


<!doctype html>
<html>
<head>
    <title>update my Crud</title>
</head>
<body>
     <div class="row row1">
         <div class= "col-*-*" col1">
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
    <form action="update_c.php" id="<?php ?>" method="POST">
        <label for="first_name" class=" ">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>"><br>

        <label for="last_name" class=" ">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>"><br>

        <label for="email" class=" ">Email    </label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>"><br>

        <label for="password" class="">Password  </label>
       <input type="password" id="password" name="password" value="<?php echo $password;?>"><br>
  
        <!--Add a second password input so the user has to retype their password -->

        <button type="button" class="btn btn-outline-primary"> <a href ="crud_update.php"  >Update</a></button>
          
    </form>
    </div> <!--  closing form col-->
    
    <div class= "col col_form_left"> 
    <p></p>
    </div>
    </div>
   <div class="row  ">
    <div class="col text-center">
     <button type="button" class="btn btn-outline-primary"> <a href ="crud_update.php"  >Back to Index</a></button>
</div>
</div>


</body>
</html>