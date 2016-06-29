<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
</head>
<body>

<?php
    echo '樂透號碼:';
    mt_srand((float)microtime()*1000000);/*產生隨機數種子*/
    $lottery=array();/*宣告陣列*/
    for($i=1;$i<=42;$i++)
    {
    $lottery[]=$i;/*將所有的數字寫入陣列*/
    }
    $ro=array_rand($lottery,7);/*使用array_rand函式從$lottery陣列隨機抓出7個數字*/
    for($j=0;$j<=6;$j++)
    {
    if($j==6)
    {
    echo "<br>".'特別號：';
    }
    echo $lottery[$ro[$j]] ." ";/*再用for迴圈將亂數抓出的數字印出*/
    }
    
    
?>

</body>
</html>

