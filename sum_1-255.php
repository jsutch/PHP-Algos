<?php
$sum = 0;
echo "Print Iterative Sums to 255". '<br>';
for ($i = 0;$i < 256 ; $i++)
	{
		$sum += $i;
		echo $sum . '<br>';
	}
echo "Total Sum is ". $sum . '<br>';

?>