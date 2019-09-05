<?php 

//Capture the data from out form
$firstname= $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$confirmpassword = $_POST['confirmpassword'];


// Create varibale to match email and password agaist

//$correct_email = 'test@test.com';
//$correct_password = '123321';

//check if the data is good 
    if($password == $confirmpassword){
        
        // Successful - Out put the message
         
         
         echo '<h1> You are Successfully Register! </h1>';
         echo "<p> First Name: $firstname </p>";
         echo "<p> Last Name: $lastname </p>";
         echo "<p> Email: $email </p>";
         echo "<p> Password: $password </p>";
            
        }
    
    else{
        
        //Error message
        
        echo '<h1>Sorry ..... Try Again<h1>';
        echo '<a href ="register.php"> Go Back</a>';
        echo "<p>$firstname</p>";
        echo "<p>$lastname</p>";
          echo "<p>$email</p>";
            echo "<p>$confirmpassword</p>";
              echo "<p>$password</p>";
        
        }

//Out put a liitle message 

?>