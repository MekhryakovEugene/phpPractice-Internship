<?php
function find_key($arr, $number)
{
    if (!is_array($arr) || empty($arr)){
        return -1;
    }
    $len = count($arr);
    $low = 0;
    $high = $len - 1;
    while ($low <= $high){
        $middle = intval(($low + $high) / 2);
        if ($arr[$middle] > $number){
            $high = $middle - 1;
        } elseif ($arr[$middle] < $number){
            $low = $middle + 1;
        } else {
            return $middle;
        }
    }
    return -1;
}
?>
<html lang="">
<head><title>task1.2</title></head>
<body>
	<?php
		$arr = [1, 3, 7, 9, 11, 57, 63, 99];
		echo find_key($arr, 63);
	?>
</body>
</html>