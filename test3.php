<?php
// 1. 1부터 10까지의 합 구하기
$sum2 = 0;
for($i = 0; $i<=10; $i++){
    $sum2 += $i;
}
echo "합계 : ".$sum2;

echo "<br/>";
//2. 1부터 100사이의 짝수의 합 구하기
$sum1 = 0;
for($i = 1; $i<=100; $i++){
    if($i%2==0){
        $sum1 += $i;
    }
}
echo $sum1;
echo "<br/>";
//3. $sum = 5일 떼 짝수인지 홀수인지 판별하기
$sum = 5;
if($sum%2==0)
    echo "짝수입니다.";
else
    echo "홀수입니다.";
echo "<br/>";
//4. 1부터 100사이의 3의 배수 출력
for($i = 1; $i<=100; $i++){
    if($i%3==0){
        echo $i;
        echo " ";
    }
}
echo "<br/>";
//5. 2단부터 5단까지 출력
for($i = 2; $i<=5; $i++){
    for($j = 1; $j<=9; $j++){
        echo $i, " X", $j,"=",$i*$j;
        echo "<br/>";
    }
    echo "<br/>";
}

//6. 3,4,5를 가지고 삼각형의 넓이를 구하기
$weight = (3*4)/2;
echo $weight;
?>