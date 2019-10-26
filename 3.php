<?php
function persegiBintang($panjang){  
  for($i=1; $i<=$panjang; $i++)
     {
         for($j=1; $j<=$panjang; $j++)
             {
                 if ($i % 2 ==0) {
                     if ($j>1 && $j<$panjang) {
                         echo "=";
                     }
                     else{
                        echo "*";
                     }
                 }
                 else{
                 echo "*";
                 }

             }
         echo "<br>";
     }
}     
persegiBintang(7);


?>