<?php
$oddsarray = array();

echo "Printing the elements of an array made of odd numbers smaller than 256". '<br>';

for ($i = 0;$i < 256;$i++)
	if ($i % 2 == 0 )
		{ false; } 
	else
	{
		array_push($oddsarray, $i);
	}

for ($x = 0;$x < count($oddsarray);$x++)
{
	echo $oddsarray[$x] . '<br>';
}

?>