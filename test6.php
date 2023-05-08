<?php
$filename="data.txt";
$fp=fopen($filename,"w");
// $str="Marry had a dog";
// $str1="Tom had a cat";
// fwrite($fp,$str1);

// fclose($fp);
// echo "저장되었습니다.";

// 2. 파일 읽기
$fp = fopen($filename, "r");
while(!feof($fp)){   //end if file
    echo fgets($fp);
}

?>