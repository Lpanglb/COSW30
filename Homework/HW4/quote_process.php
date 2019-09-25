<?php

    $phrase = $_POST['phrase'];
    $submit = $_POST['submit'];




 
  
    echo "<h2>Your Original list is: </h2><br>";
    $phraseExplode = explode(' ', $phrase);
 //   echo "<p> $phrase <br> <p>";

 for ($i = 0; $i<str_word_count($phrase); $i++){
    echo "<p> $phraseExplode[$i] <p>";
 
 }
 echo "<h2>An Alphabetized version of your list: </h2><br>";
 sort($phraseExplode);
  for ($i = 0; $i<str_word_count($phrase); $i++){
    echo "<p> $phraseExplode[$i] <p>";
 
 }
echo "<h2>An reverse Alphabetized version of your list: </h2><br>";
 rsort($phraseExplode);
  for ($i = 0; $i<str_word_count($phrase); $i++){
    echo "<p> $phraseExplode[$i] <p>";
 
 }
// echo "$phraseExplode";



     
 




?>

