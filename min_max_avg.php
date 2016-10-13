<?php
// $myarray = [1,2,3,4,5,6,7,8,9];
$myarray = [3,12,23,34,45,56,67,78,89,90,2];
$max = 0;
$total = 0;

echo "The array is ". '<br>';
for ($i=0;$i <count($myarray) +1;$i++)
{
	echo $i;
}

for ($i=0;$i <count($myarray);$i++)
{
	$min = $myarray[0];
	$total +=  $myarray[$i];
	if ($myarray[$i] > $max)
	{
		$max = $myarray[$i];
	}
	if ($myarray[$i] < $min)
	{
		$min = $myarray[$i];
	}
}
$avg = $total / count($myarray);
echo  '<br>';
echo "The Maximum Value is ". $max . '<br>';
echo "The Minimum Value is ". $min . '<br>';
echo "The Average Value is ". $avg . '<br>';

?>