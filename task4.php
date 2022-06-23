<?php
function scan_dir($dir, $level=0)
{
	$files = scandir($dir, sorting_order:SCANDIR_SORT_ASCENDING);
    $elemCount = count($files) - 2;
    $i = 0;
    $n = 0;

    echo '[';
    foreach ($files as $file){
        if ($file == '..' || $file == '.'){
            continue;
        }
        $output = '<span><br/>{<br/>"name": "'.$file.'"<br/>}</span>';

        if (++$n != $elemCount){
            $output .= ',';
        }

        $path = $dir.'/'.$file;

        if (is_dir($path)){
            $output = '<span><br/>{<br/>"name": "'.$file.'",<br/>"files within": </span>';
        }
        echo $output.'<br>';

        if (is_dir($path)){
            scan_dir($path, level:$level+1);
            echo '}';
            if (++$i != $elemCount){
                echo',';
            }
        }
    }
    echo ']<br/>';
}
?>
<html lang="">
<head><title></title></head>
<body>
	<?php
		scan_dir('E:\Users\1\Videos');
	?>
</body>
</html>