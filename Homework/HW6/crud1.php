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
       
       
       
        $insert_query = "INSERT INTO USERS_LISAN(first_name,last_name,email, password)
                            VALUE($first_name, $last_name, $email,$password)";
        $result = mysqli_query($connection, $insert_query);        
        
        if($result){
            echo 'New user added to the database';
            
        }
            else
            {echo'error';
            }
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
    $rows = mysqli_fetch_all($result, MYSQLI_ASSOC);
        // Output the results
        print_r($rows);
    
}

else {
    // Output an error
    echo'This is not working';
}

?>

<!doctype html>
<html>
<head>
    <title>My First CRUD</title>
</head>
<body>
    <h1>Create a New User</h1>
    <form action="crud1.php" method="POST">
        <label for="first_name">First Name</label>
        <input type="text" id="first_name" name="first_name" required><br>

        <label for="last_name">Last Name</label>
        <input type="text" id="last_name" name="last_name" required><br>

        <label for="email">Email</label>
        <input type="email" id="email" name="email" required ><br>

        <label for="password">Password</label>
        <input type="password" id="password" name="password"required ><br>

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
            </tr>
        </thead>
        <tbody>
            <?php
            foreach($rows as $row)
            echo '<tr>
                <td>'.$row['first_name'].'</td>
                <td>'.$row['last_name'].'</td>
                <td>'.$row['email'].'</td>
                <td>'.$row['password'].'</td>
            </tr>';
            
            ?> 
            
        </tbody>
    </table>
</body>
</html>