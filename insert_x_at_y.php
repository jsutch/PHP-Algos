<?php
$myarray = [1,2,3,4,5,6,7,8,9];
//$myarray = [8,3, 33, 42, 10, 14, 2, 21, 4];
// value to be inserted
$x = array(666);
// index to insert
$y = 3;
$loop = 0;

echo "Original Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

// Insert Values
array_splice( $myarray, $y, 0, $x );


echo "Shifted Array". '<br>';

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . " ";
	}
echo '<br>';

?>