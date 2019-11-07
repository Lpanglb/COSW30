<?php
// Add the database connection

include('database.php');

/*
*   CHECK IF THE FORM HAS BEEN SUBMITTED AND INSERT
*   NEW USER INTO THE DATABASE
*/
if($_SERVER['REQUEST_METHOD'] == 'POST') {
    $first_name = $_POST['first_name'];
     $last_name = $_POST['last_name'];
      $email = $_POST['email'];
       $password = $_POST['password'];
    
    
    //validate the input (chieck if the're empty
    $error = [];
    if (condition){
        $error[] = 'error massage';
        
    }
    
    if(empty($error)){
        
    //    $update
    }
    
    $update_query = "UPDATE USER_LISAN SET first_name = '$first_name', 
                                            last_name = '$last_name',
                                            email = '$email',
                                            password = '$password'
                                        
                            WHERE user_id = $id ";                
    
}
/*
*   QUERY THE DATABASE AND STORE ALL USERS INTO A VARIABLE
*/
// Create your query


$query = 'SELECT * FROM USER_LISAN';

// Run your query
$result = mysqli_query($connection, $query);
// Check if the database returned anything
if($result) {
    while($row = mysqli_fetch_array($result)){
        // Output the results
    }
} else {
    // Output an error
}
?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Update User</h1>
    
                  <!--Add a second password input so the user has to retype their password -->
    
    <form action="crud.php" id="<?php ?>" method="POST">
        

        
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

        <button>Register</button>
    </form>

    <h2>Output a List of Users</h2>
    <table>
        <thead>
            <tr>
                <th>First Name</th>
                <th>Last Name</th>
                <th>Email</th>
                <th>Password</th>
                <th>Edit</th>
            </tr>
        </thead>
        <tbody>
            <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <!--Add a link where it going to show that show id number -->
                <td><a href = "update_finished.php?id='.$row['user_id'].">Edit</a></td>
            </tr>
        </tbody>
    </table>
</body>
</html>