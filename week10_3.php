<html> 
<head> 
   <meta http-equiv="Content-Type" content="text/html; charset=utf-8"> 
   
</head>
<body> 
   <?php 
   $uploaddir="./upload/";  
   $i=count($_FILES["uploadfile"]["name"]);
   for ($j=0 ; $j<$i ; $j++) 
   { 
      $tmpfile=$_FILES["uploadfile"]["tmp_name"][$j]; 
      $file2=mb_convert_encoding($_FILES["uploadfile"]["name"][$j],"big5","utf8"); 
      if(move_uploaded_file($tmpfile,$uploaddir.$file2)) 
     { 
         echo "�W�Ǧ��\<br>"; 
         echo "�ɮצW�١G".$_FILES["uploadfile"]["name"][$j]."<br>"; 
         echo "�ɮ������G".$_FILES["uploadfile"]["type"][$j]."<br>"; 
         echo "�ɮפj�p�G".$_FILES["uploadfile"]["size"][$j]."<br>"; 
      } 
     else 
      { 
         echo "�W�ǥ���!<br> "; 
         echo "�ɮצW�١G".$_FILES["uploadfile"]["name"][$j]."<br>"; 
         echo "�ɮ������G".$_FILES["uploadfile"]["type"][$j]."<br>"; 
         echo "�ɮפj�p�G".$_FILES["uploadfile"]["size"][$j]."<br>";  
      } 
   } 
   ?> 
</body> 
</html>