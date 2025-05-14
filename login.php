<?php

$username=$_POST['username'];
$password?$_POST['password'];

if($username=="b241210059@gmail.com" && $password=="b241210059") 
{
    echo "Şifre Doğru Yönlendiriliyorsunuz";
}

else{
    header("Location:login.php?u=$username");
    echo "Hatalı Gİriş Yaptınız Tekrar Deneyiniz."
}




?>