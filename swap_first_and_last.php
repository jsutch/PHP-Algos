<?php
$myarray = [-3, 3, 50, 10, 14, 2, 21, 4];

echo "Original Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

$last = (count($myarray) -1);
$temp = $myarray[0];
$myarray[0] = $myarray[$last];
$myarray[$last] = $temp;

echo "Swapped Values". '<br>';
for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}

?>