<?php
$myarray = [1,2,3,4,5,6,7,8,9];
$max = '0';

echo "The array is ". '<br>';
for ($i=0;$i <count($myarray) +1;$i++)
{
	echo $i;
}

for ($i=0;$i <count($myarray);$i++)
{
	if ($myarray[$i] > $max)
	{
		$max = $myarray[$i];
	} 
}
echo  '<br>';
echo "The Maximum Value is ". $max . '<br>';

?>