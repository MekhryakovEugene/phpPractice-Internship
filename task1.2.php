<html lang="">
<head><title></title></head>
<body>
<?php
function find_key($arr, $number) {
    if (!is_array($arr) || empty($arr)) {
        return -1;
    }
    $len = count($arr);
    $low = 0;
    $high = $len - 1;
    while ($low <= $high) {
        $middle = intval(($low + $high) / 2);
        if ($arr[$middle] > $number) {
            $high = $middle - 1;
        } else if ($arr[$middle] < $number) {
            $low = $middle + 1;
        } else {
            return $middle;
        }
    }
    return -1;
}

$arr = [1, 3, 7, 9, 11, 57, 63, 99];
echo find_key($arr, 63);
?>
