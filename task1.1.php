<html lang="">
<head><title></title></head>
<body>
<?php
function scan_dir($dir, $level=0){
    $files = scandir($dir, sorting_order:SCANDIR_SORT_ASCENDING);

    foreach ($files as $file){
        if($file=='..'||$file=='.'){
            continue;
        }
        $output = '<span>'.$file.'</span>';
        $path = $dir.'/'.$file;
        if(is_dir($path)){
            $output = '<span style = "color:green">'.$file.'</span>';
        }
        for($i=0;$i<$level;$i++){
            echo '--';
        }
        echo $output.'<br>';

        if(is_dir($path)){
            scan_dir($path, level:$level+1);
        }
    }
}
scan_dir('E:\Users\1\Videos');
?>