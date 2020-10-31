<?php 

$kue=[5,3];
$undangan=[14,21];
?>

<head>

<style>

table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}
th, td {
  padding: 15px;
}
</style>
</head>

<table>
<tr>
<td>Jumlah Peserta</td>
<td>Jumlah Kue</td>
<td>Konfirmasi</td>
</tr>

<tr>
<td><?= $kue[0]?></td>
<td><?= $undangan[0]?></td>
<td>

<?php 
$hasil=$undangan[0]%$kue[0];
if ($hasil>0) {
  echo "No";
}
else{
  echo "Yes";
}

?></td>
</tr>

<tr>
<td><?=  $kue[1] ?></td>
<td><?=  $undangan[1] ?></td>
<td><?php 
$hasil=$undangan[1]%$kue[1];
if ($hasil>0) {
  echo "No";
}
else{
  echo "Yes";
}

?></td>
</tr>
</table>


<!-- 
$undangan=[2,5,3];
$kue=[0,14,21];

$undangan2=count($undangan);

echo $undangan;
for ($i= 0; $i <= $undangan2; $i++) { 
echo "$undangan[$i]"."<br>";
} -->

