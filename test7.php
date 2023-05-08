<?php
//fread($fp, 파일크기);
$fp=fopen("data2.txt","r");
$result=fread($fp, filesize("data2.txt"));
echo $result;
fclose($fp);
?>