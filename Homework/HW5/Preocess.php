<?php include('include/header.php'); ?>  
  
   <div class="part">
          <div class = "form_part">
   <?php
       
         //padding: 10% 10% 0% 10%;
        $number1 = $_POST['number1'];
        $number2 = $_POST['number2'];
       
        $a = "";
        $b = "";
        $c = "";
        
        
       // Funtion Part
        
        function perform_addition($a , $b ){
            
        //    $c = $a -$b ;
            
            return (((($a - $b)*0.079)*5)+(($a - $b)));
                                }
                                
        function perform_substract($a, $b){
           
             return (((($a - $b)*0.049)*5)+(($a - $b)));
                                    }
        function perform_multiply($a, $b){
             return (((($a - $b)*0.019)*5)+(($a - $b)));
                                }
                                
        function display($a, $b){
                
                echo "<p>Retail Price of Your Car is $ $a  </p>";
                echo "<p>Your Put Money Down is $ $b </p>";
                echo "<p>Your total price of your car for 60 months is </p>";
            
            
                                }                        
                                
      // Beginning of Condition
      
        if ($_POST['operation'] == "bad"){
            
           echo display($number1, $number2); 
           echo "$".perform_addition($number1, $number2);

            
                                                }
        else if($_POST['operation'] == "fair"){
             
             
           echo display($number1, $number2); 
            echo "$". perform_substract($number1, $number2);
                                                }
        else {
             
             
           echo display($number1, $number2); 
            echo "$".perform_multiply($number1, $number2);
            
                }
                                
        ?>
        
        </div>
        </div>