<?php
define ("n", 7);
$A = array(15,10,7,22,17,5,12);
echo "<h1>Sebelum di-sort</h1>";
for ($I=0; $I <= n-1; $I++)
	echo "$A[$I] ";
 
$K=0;
while($K<=n-2)
{
	$I=0;
	while($I<=n-2 - $K)
	{
		if ($A[$I] > $A[$I+1])
		{
			$X = $A[$I];
			$A[$I] = $A[$I+1];
			$A[$I+1] = $X;
		}
		$I++;
	}
	$K++;
}
echo "<h1>Sesudah di-sort</h1>";
for ($I=0; $I<= n-1; $I++)
	echo "$A[$I] ";
?>