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


date_default_timezone_set('Asia/Taipei'); 
 
$now=date("U"); 

$end=mktime(0,0,0,1,1,2018); 

$time=$end-$now; 
$day=intval($time/60/60/24); 
$hour=intval($time/60/60); 
$minute=intval($time/60); 

echo "距離2018年世界末日還有".$day."天".$hour."時".$minute."分".$time."秒";




?></b></center>

</br></br>




</body>
</html>
