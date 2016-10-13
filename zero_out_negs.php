<?php
$myarray = [-1,2,-3,4,-5,6,-7,8,9];

for($i = 0;$i < count($myarray);$i++)
	{
		if ($myarray[$i] < 0)
		{
			$myarray[$i] = 0;
		}
	}

for($i = 0;$i < count($myarray);$i++)
	{
		echo $myarray[$i] . '<br>';
	}

?>