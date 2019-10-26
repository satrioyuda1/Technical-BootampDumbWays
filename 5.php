<?php
function serialNumber($jumlah_generate) {

for($i=1;$i <= $jumlah_generate;$i++){
$chars = array(0,1,2,3,4,5,6,7,8,9,'a','b','c','d','e','f','g','h','i','j','k','l','m','n','o','p','q','r','s','t','u','v','w','x','y','z');
$sn = '';
$max = count($chars)-1;
for($j=0;$j<16;$j++){
 $sn .= (!($j % 4) && $j ? '-' : '').$chars[rand(0, $max)];
  }
  echo $sn;
  echo "<br>";
}  

 }
serialNumber(3); 
?>