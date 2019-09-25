<?php

$populate = array("Los Angles, California"=>"3,999,759",
"New York, New York"=>"8,622,698", 
"Chicago, Illinois"=>"2,716,450", 
"Houston, Texas"=>"2,312,717", 
"Phoenix, Arizona"=>"1,626,078", 
"Philadelphia, Pennsylvania"=>"1,580,863", 
"San Antonio, Texas"=>"1,511,946", 
"San Diego, California"=>"1,419,516", 
"Dallas, Texas"=>"1,341,075", 
"San Jose, California"=>"1,035,317", 
"Austin, Texas"=>"950,715", 
"Jacksonville, Florida"=>"892,062", 
"San Francisco"=>"884,363", 
"Columbus"=>"879,170", 
"Fort Worth"=>"874,168" );


echo "<h3>Table</h3>";

foreach($populate as $x => $x_value) {
   
    echo " " . $x . " " . $x_value;
    echo "<br>";
}


echo "<h3>Sort by City:</h3>";
ksort($populate);
foreach($populate as $x => $x_value) {
    echo " " . $x . " " . $x_value;
    echo "<br>";
}
echo "<h3>Sort by Population:</h3>";
asort($populate);
foreach($populate as $x => $x_value) {
    echo " " . $x . " " . $x_value;
    echo "<br>";
}
?>