<?php
$checkyes = $_POST['checkyes'];
$constribution = $_POST['constribution'];
$gender = $_POST['gender'];

$firstname=$_POST['first_name'];
$lastname=$_POST['last_name'];
$yes = $_POST['checkboxyes'];
$comments = $_POST['comments'];
$age = $_POST['age'];
$email = $_POST['email'];

//$football = $POST['football'];
//$skiing = $POST['skiing'];
//$Swimming = $POST['swimmimg'];
//$computergame = $POST['computergame'];
//$gardening = $POST['gardening'];
//$hiking = $POST['hiking'];

//Condition for Comments



 if(isset($yes)){
   
     
     echo "<p> Thank you for supporting us </p>";
     echo "<p> Your First Name  is $firstname </p>";
     echo "<p> Your Last Name is $lastname </p>";
     echo "<p>You input your email as: $email </p><br>";
     echo "<p> You are $gender </p>";
   //Selection for Age range
   if(isset($age)){
     echo "<p> Your age range in between $age </p><br>";
                  }
     
   //Selection of interests
   
    if(!empty($_POST["interests"])){
      echo "<p> You have select following interests:</p>";
    foreach($_POST["interests"] as $interests)
    echo '<p>'.$interests. '</p>';
    }
     else echo "<p> You didn't select Any Interest '</p>";
  //
    echo "<p> Your Would like to Constribute for $constribution </p>";
  //Checking for comments
     if(!empty($comments)){
            echo "<p>Thank you for you Comments:</p>";
      echo "<p>$comments</p>";
      
     }
     else echo "<p> You did not leave any comments</p>";
     
    }
 else{ 
       echo "<p> You did not want to support us</p>";
       echo "<p> Your First Name  is $firstname </p>";
       echo "<p> Your Last Name is $lastname </p>";
       echo "<p>You input your email as: $email </p><br>";
       echo "<p> You are $gender </p>";
       
       if(isset($age)){
     echo "<p> Your age range in between $age </p><br>";
                  }
     
        //Selection of interests
   
    if(!empty($_POST["interests"])){
      echo "<p> You have select following interests:</p>";
    foreach($_POST["interests"] as $interests)
    echo '<p>'.$interests. '</p>';
    }
     else echo "<p> You didn't select Any Interest </p>";
  //
       echo "<p> Your Would like to Constribute for $constribution </p>";
        //Checking for comments
     if(!empty($comments)){
      echo "<p>Thank you for you Comments:</p>";
      echo "<p>$comments</p>";}
     else echo "<p> You did not leave any comments</p>";
     
   
 }



?>