<?php
$myarray = [8,3, 33, 42, 10, 14, 2, 21, 4];
$loop = 0;

echo "Original Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';
// Swap Values
$temp = $myarray[count($myarray) -1];

while  ($loop < count($myarray) -1)
	{
		$myarray[$loop] = ($myarray[$loop + 1]);
		$loop++;
	}
$myarray[count($myarray) -1] = 0;


echo "Shifted Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

?>