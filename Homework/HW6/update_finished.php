<?php
// Add the database connection

include('database.php');

/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    // $id = $_POST['user_id'];
    $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
      $email = $_POST['email'];
       $password = $_POST['password'];
    
    
   // validate the input (chieck if the're empty
    $error = ['$update_query'];
    if ($error = ['$update_query']){
      //$error= 'error massage';
      echo 'it;s work';
        
    }
    
    else{ echo'doesnot work';
    
    // echo '$id';iu[]
        
    //    $update
    }

    
    $update_query = "UPDATE USER_LISAN SET first_name = '$first_name', 
                                            last_name = '$last_name',
                                            email = '$email',
                                            password = '$password'
                                        
                            WHERE user_id = $id;

/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query


$query = 'SELECT * FROM USER_LISAN';

// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    while($row = mysqli_fetch_array($query)){
        // Output the results
        echo 'working';
    }
} else {
    // Output an error
    echo 'not working';
}



}

 ?>



<!doctype html>
<html>
<head>
    <title>update my Crud</title>
</head>
<body>
    <h1>Update User</h1>
    
                  <!--Add a second password input so the user has to retype their password -->
    
       
      
    
    
    
     <form>
    
        
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" value="<?php echo $first_name;?>"><br>
                    
                    <!-- Adding value=" ?php echo $first_name;?>" to put them in placeholder to show*/ -->
                    
        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" value="<?php echo $last_name;?>"><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" value="<?php echo $email;?>"><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password" value="<?php echo $password;?>"><br>
        
              <!--Adding this to hid the id as 2nd way to do it. -->
        
        <input type="hidden" name = "user_id" value = "<?php echo $id; ?>">


        <!--Add a second password input so the user has to retype their password -->

        <button>Update</button>
    </form>

<!--<?php echo $row['user_id'] ; ?>-->


<!--    <h2>Output a List of Users</h2>-->
<!--    <table>-->
<!--        <thead>-->
<!--            <tr>-->
<!--                <th>First Name</th>-->
<!--                <th>Last Name</th>-->
<!--                <th>Email</th>-->
<!--                <th>Password</th>-->
<!--                <th>Edit</th>-->
<!--            </tr>-->
<!--        </thead>-->
<!--        <tbody>-->
              
<!--            <?php-->
<!--            foreach($rows as $row)-->
<!--            echo '<tr>-->
<!--                <td>'.$row['user_id'].'</td>-->
<!--                <td>'.$row['first_name'].'</td>-->
<!--                <td>'.$row['last_name'].'</td>-->
<!--                <td>'.$row['email'].'</td>-->
<!--                <td>'.$row['password'].'</td>-->
         
<!--                <td><a href = "update_crud.php " id="edit">Edit</a></td>-->
<!--            </tr>';-->
<!--            ?>-->
<!--            </tbody>-->
<!--    </table>-->
</body>
</html>