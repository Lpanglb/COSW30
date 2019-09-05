<?php 

//Capture the data from out form
$email= $_POST['email'];
$password=$_POST['password'];

/* or $email = "";

if(!empty())

*/

// Create varibale to match email and password agaist

$correct_email = 'test@test.com';
$correct_password = '123321';

//check if the data is good 
    if($email == $correct_email && $password == $correct_password){
        
        // Successful - Out put the message
         
         echo '<h1> You log in sucessfully! </h1>';
         echo "<p> Email: $email </p>";
         echo "<p> Password: $password </p>";
            
        }
        
    else{
        
        //Error message
        
        echo '<h1>Sorry ..... Try Again<h1>';
        echo '<a href ="login.php"> Go Back</a>';
        
        }

//Out put a liitle message 

?>