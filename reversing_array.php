<?php
$myarray = [1,2,3,4,5,6,7,8,9];

echo "I only work on even membered arrays" . '<br>';
echo '<br>';
echo "Original Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

// swap values
for ($loop = 0;$loop < count($myarray) / 2;$loop++)
	{
	$temp = $myarray[$loop];
	// set a0 to a1
	$myarray[$loop] = $myarray[count($myarray) -1 -$loop];
	$myarray[count($myarray) -1 - $loop] = $temp;
	# echo "Loop ". $loop . '<br>';
	}

echo "Reversed Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

?>