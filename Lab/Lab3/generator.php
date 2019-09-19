<?php

    $munParagraph = $_POST['paragraph'];
    $text = $_POST['text'];
    
    $textExplode = explode(' ', $text);
    
    shuffle($textExplode);
    
    $textImplode = implode(' ', $textExplode);
    
    for($i=0; $i< $munParagraph; $i++){ echo "<p>$textImplode</p>";}
    
    
    
    
    
    
    
    
    
    
    
    //$array = [1 => 'Test', 'Test'];
   // foreach($textExplode as $key =>$value){
  //      echo "<p>$key Value: $value </p>";
        //<p>$key Value: $value </p>
  //  }
  
   //$word or $value
   
   
   
 //   echo "<p>Text Explode</p>";
 //   print_r($textExplode);
    
//    $shuffledText = shuffle($textExplode);
//    echo "<p>Text Shuffled</p>";
//    print_r($shuffledText);
    
    
    //us the impode function, to turn it back into a string
  //  $textImplode = implode(' ', $textExplode);
    //or output using a foreach loop
//    echo "<p>$textImplode</p>";
   
    //$text = "Spicy jalapeno bacon ipsum dolor amet turkey flank beef cupim ground round frankfurter porchetta andouille shank beef ribs buffalo tongue drumstick pork venison. Turkey boudin ground round picanha chicken, drumstick burgdoggen jowl kielbasa cupim sausage cow meatloaf meatball shankle. Pork biltong tri-tip, cow shankle meatball ham hock drumstick turducken buffalo porchetta chicken. Kevin shankle biltong, ham hock prosciutto doner salami cow drumstick buffalo pork belly bresaola. Spare ribs pastrami hamburger ham, biltong tri-tip kevin pork chop ham hock capicola rump kielbasa. Cow meatloaf fatback t-bone shankle.";
    
  //  for($i = 0; $i<$munParagraph; $i++){
        
        //output the paragraph 
   //     echo "<p>$text</p>";
        
     //                       }

?>