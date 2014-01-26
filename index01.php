<?php
$path=getcwd();
foreach(glob($path.'/images0/*.*') as $file) {
	$str=explode("_",$file);
    rename($file,$path.'/images1/'.$str[1]);
}
?>
