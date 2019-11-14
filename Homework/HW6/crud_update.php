<?php
// Add the database connection

include('database.php');
include('header_c.php');
/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/

    $first_name = "";
    $last_name = "";
    $email = "";
    $password = "";
    $confirm_password = "";
       
       
     
if($_SERVER['REQUEST_METHOD'] == 'POST') {
     $id = $_POST['user_id'];
     $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
     $email = $_POST['email'];
     $password = $_POST['password'];
     $confirm_password = $_POST['confirm_password'];
       
       
        if(empty($email)) {   //email is empty
            //Output an error message
            $error = 'Email must be entered';
        }
        if(empty($password)) {   //password is empty
            //Output an error message
            $error_password = 'Password must be entered';
        }
        if(empty($confirm_password)) {   //confirm password is empty
            //Output an error message
            $error_confirmpassword = 'Comfrim Password must be entered';
        }
        if($confirm_password != $password) {
            //Output an error message
            //$error_pswds = 'Passwords do not match';
               
               echo '<div class="alert alert-warning alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Success!</strong> Passwords do not match!!
  </div>';;
            
        }
        else
        {
        $insert_query = "INSERT INTO USER_LISAN(first_name,last_name,email, password)
                            VALUES ('$first_name', '$last_name', '$email','$password')";
        $result = mysqli_query($connection, $insert_query);        
        if($result){
           echo '<div class="alert alert-success alert-dismissible">
    <button type="button" class="close" data-dismiss="alert">×</button>
    <strong>Success!</strong> Adding user is complete!
  </div>';
        }
            else {
                echo'error';
            }
      
        }
}

    $query = 'SELECT * FROM USER_LISAN';


// Run your query
    $result = mysqli_query($connection, $query);

// Check if the database returned anything
    if($result) {
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results
      //  print_r($rows);
      

                }

    else {
    // Output an error
        echo'This is not working';
        }
?>

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
     <h1>Create a New User</h1>
    <form action="crud_update.php" id="<?php ?>" method="POST">
        <label for="first_name" class=" ">First Name</label>
        <input type="text" id="first_name" name="first_name" class="" value="<?php echo $first_name;?>" required><br>

        <label for="last_name" class=" ">Last Name</label>
        <input type="text" id="last_name" name="last_name" class="" value="<?php echo $last_name;?>"required><br>

        <label for="email" class=" ">Email    </label>
        <input type="email" id="email" name="email" class=" " value="<?php echo $email;?>" required ><br>

        <label for="password" class="">Password  </label>
        <input type="password" id="password" name="password" class=" " required ><br>
        <label for="password" class="">Comfirm Password  </label>
        <input type="password" id="confirm_password" name="confirm_password" class=" " required ><br>
  
        <!--Add a second password input so the user has to retype their password -->

        <button>Register</button>
          
    </form>
    </div> <!--  closing form col-->
    
    <div class= "col col_form_left"> 
    <p></p>
     </div>  <!--closing col col_form_left-->
     
  
    </div> <!--closing row row2-->
    </div> <!--closing container-->
    
  <div class ="container list_btm text-center">
           
    <h2>Output a List of Users</h2>
    
    <table class= "table table-striped">
        <thead>
            <tr>
                <th>ID</th>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
                <th>Delete</th>
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $row)
            echo '
            <tr>
                <td>'.$row['user_id'].'</td>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
                <td><button type="button" class="btn btn-outline-primary"> <a href="update_c.php?id='.$row['user_id'].'">Edit</a></button></td>
                <td><button type="button" class="btn btn-outline-primary"> <a href="delete_c.php?id='.$row['user_id'].'"  >Delete</a></button></td>
                
            </tr>';
            
            ?> 
            
        </tbody>
    </table>
    </div>
</body>
</html>