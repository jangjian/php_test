<style>
h1{
color : red;

}
</style>
<?php
$file = "counter.text"; //방문 횟수를 저장할 파일
$count = 0; //방문 횟수

if(file_exists($file)){ //
$count = file_get_contents($file);
}

$count++; //방문횟수를 증가시킨다.

file_put_contents($file, $count);

echo "<h1>방문 횟수는 ".$count."번 입니다.</h1>";
?>