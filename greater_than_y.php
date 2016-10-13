<?php
$myarray = [1,2,3,4,5,6,7,8,9];
$gtarray = array();
$y= '5';

echo "The array is ". '<br>';
for ($i=0;$i <count($myarray) +1;$i++)
{
	echo $i." ";
}

for ($i=0;$i <count($myarray);$i++)
{
	if ($myarray[$i] > $y)
	{
		array_push($gtarray, $myarray[$i]);
	} 
}
echo  '<br>';
echo  '<br>';
echo "The Numbers ". '<br>';
for ($x = 0;$x < count($gtarray);$x++)
{
	echo $gtarray[$x] . '<br>';
}
echo "Are greater than ", $y . '<br>';

?>