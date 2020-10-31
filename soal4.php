<?php 


$array = array(1, 9, 3);
$array2 = array(2, 9, 3);
$array3 = array(3, 2, 1);

//mencari nilai 100

if (in_array(1, $array) and in_array(3,$array)) {
   echo "Number 193: You dont like the number";
   
}
 else{
    echo "You can choose this number";
}

echo "<br>";

if (in_array(1, $array2) and in_array(3,$array2)) {
    echo " You dont like the number";
    
 }
  else{
     echo "Number 293 You can choose this number";
 }



 echo "<br>";

if (in_array(1, $array3) and in_array(3,$array3)) {
    echo "Number 293 You dont like the number";
    
 }
  else{
     echo "You can choose this number";
 }


?>