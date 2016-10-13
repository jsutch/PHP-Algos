<?php

	// $nums = [10,9,8,7,6,5,4,3,2,1];

	for($x=1;$x<=100;$x++)
	{
		$nums[] = rand(1,10000);

	}

	function bubble_sort($nums) {
		for ($counter=0;$counter < count($nums);$counter++)
		{
			for ($x=0;$x < count($nums) -1;$x++)
			// $numbers = count($nums) -1;
			// echo $numbers . '<br>';
	 		{
	 			// $a = $nums[$x];
	 			$b = $x + 1;
	 			// echo "Values are ", $a,' ', $b . '<br>';
	 			// echo $nums[$x] , ' ', $nums[$b] . '<br>';
				if ($nums[$x] > ($nums[$b]))
				{
					$temp = $nums[$x];
					$nums[$x] = $nums[$b];
					$nums[$b] = $temp;
				} 
			}
		}
	return $nums;
	}

	// assign the array value to the returned value
	$nums = bubble_sort($nums);
	print_r($nums);

	for ($x=0;$x < count($nums);$x++) 
	{
		echo $nums[$x] . '<br>';
	}
?>