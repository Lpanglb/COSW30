<?php

$unit = $_POST['units'];
$health = 19;
$unitcal = '';
$total = '';
$residencyin = 46;
$non_residency = 236;
//$residency = NULL;
$cards = '';
$parking = '';
$scholarship = (rand(1,300));

    echo "<h1> LBCC Tuition Calulation Are: </h1>";
   
     // Calulate for the Residency 
     
    if($_POST['residency'] == 'resident') {
            $unitcal = $unit * $residencyin;
       echo "<p>Cost of Tuition:  <strong> $unit </strong> units x <strong>$ $residencyin </strong> = <strong>$ $unitcal </strong> <br> ";
    }
    else {
        $unitcal = $unit * $non_residency;
         echo "<p>Cost of Tuition: <strong> $unit </strong>  units x <strong>$ $non_residency </strong> = <strong>$ $unitcal </strong> <br> ";
    }
    // Display Health Fee
    echo "Student Health Fee: <strong>$ $health </strong> <br>";
    
    //Calulate for College Service Card
        
                if(($_POST['service']) == 'yes'){
                        $cards = 20;
                    
                   echo "College Service Card:  <strong> $ $cards </strong><br>";
                     }
                else {
                     $cards = 0;
                    echo "College Service Card: <strong>$  $cards </strong> <br>";}
                
    //Calulate for Parking Permit
                
                if(($_POST[parking]) == 'yes'){
                    
                     $parking = 25;
                     
                    echo "Parking Permit: <strong>$ $parking </strong> <br>";
                     }
                else {
                    $parking = 0 ;
                    echo "Parking Permit: <strong>$ $parking </strong> <br>";
                    
                }
                
    //Calulate for Unit, Student Health, Collge Service, Parking
    
    //Toatal Regirstration Cost
    
                $total = $unitcal + $health + $cards + $parking;
                echo "<h3><p><strong> Total Registration Cost : $ $total </strong></h3>";
    
    //Display Random Number
    
    echo "Scholarship Award: <strong>$ $scholarship </strong><br>";
            
   //Calulate total after ganergate Random
   //Display Total ...
   $number = $total - $scholarship;
   echo "<h3><strong>Total Tuition Balance Due: $ $number </strong> </h3>";
   
   //Display Massage after negative balance has shown
   
   if($number < -1){echo "<h3> You received $"; echo (abs($number)); echo " back to your pocket after all the Scholarship applied. </h3>";
                    echo "<h3>Congratuation....</h3>";
   }
            
?>