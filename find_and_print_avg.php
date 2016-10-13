<?php
$myarray = [1,2,3,4,5,6,7,8,9,10,11,12,13,14,15];
$avg = '0';
$total = '0';

echo "The array is ". '<br>';
for ($i=0;$i <count($myarray) +1;$i++)
{
	echo "$i ";
}

for ($i=0;$i <count($myarray);$i++)
{
	$total += $myarray[$i];
}
$avg = $total / count($myarray);
echo  '<br>';
echo "The Average Value is ". $avg . '<br>';

?>