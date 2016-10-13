<?php

$unsquared = [1,2,3,4,5,6,7,8,9];
$squared = array();

for ($x = 0;$x < count($unsquared);$x++)
	{
		array_push($squared, $unsquared[$x] * 2);
	}

for ($i=0;$i < count($squared);$i++)
	{
		echo $squared[$i] . '<br>';
	}

?>