<?php
	function binarySearch($array, $value)
	{
		sort($array);
		print_r($array);
		$low = 0;
		$high = count($array) - 1;

		while ($low <= $high) {

			$mid = ceil(($low + $high)/2);

			if ($array[$mid] == $value) {
				return "value found in index ".$mid;
			}elseif ($array[$mid] > $value) {
				$high = $mid - 1;
			}else  {
				$low = $mid + 1;
			}
		}

		return -1;
	}

	// echo binarySearch([1,2,3,7,4,5,6], 9);  //return -1

	// echo binarySearch(["a","b","c","f","e","d"], "b"); // return 1
?>