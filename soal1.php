<?php
$angka = array(5, 4, 7, 9, 10, 19);
rsort($angka);

$arrlength = count($angka);
for($x = 0; $x < $arrlength; $x++) {
  echo $angka[$x]." ,";
}
?>