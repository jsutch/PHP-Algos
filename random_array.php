<?php

$loop = 10;
$myarray = array();

while ($loop > 1)
{
	$mynum = rand(1, 100);
	array_push($myarray,$mynum);
	$loop--;
}

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . '<br>';
	}

?>
