<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=BIG5">
<title>Hello Robot!</title>
</head>
<body >
</br>
</br></br></br></br></br></br></br></br>
<center><b><font face="細明體" color="#FFBB66" size="15">2017</font></b></center></br>
<center><b><font face="細明體" color="#FFBB66" size="6">機器人</font></b></center></br>
<center><img src="http://www.stockfeel.com.tw/wp-content/uploads/2014/10/05-1.jpg" sizes="50%"></center>
<center><b><HR width="50%"></HR></b></center>
</br></br>
<center><img src="箭頭.jpg" width="2%" >
<b>現在時間為
<?php

$changed=strtotime("+7 hours");//調整過後正確時間
echo date("F月j日 星期l A H點i分s秒",$changed);

?></center></b>

</br></br>
<center><img src="箭頭.jpg" width="2%" >
<b>
<?php 

// PHP 5.1 以後需要在程式中增加時區的設定如下,如果你的php是5.1以前下面這行就不需要加了!! 
date_default_timezone_set('Asia/Taipei'); 
//現在時間(求出多少秒) 
$now=date("U"); 
//你要的結束時間(目前是以2009年1月1日0時0分0秒當做結束時間) 
$end=mktime(0,0,0,1,1,2018); 
//結束時間-現在時間＝差距的時間 
$time=$end-$now; 
//差距時間利用intval()去求出整數值,/60=>分,再/60=>時,/24=>天 
$day=intval($time/60/60/24); 
$hour=intval($time/60/60); 
$minute=intval($time/60); 

echo "距離2018年世界末日還有".$day."天".$hour."時".$minute."分".$time."秒";




?></b></center>

</br></br>




</body>
</html>
