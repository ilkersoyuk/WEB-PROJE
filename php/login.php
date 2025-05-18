<?php

$username=$_POST['username'];
$password=$_POST['password'];

if($username=="b241210059@sakarya.edu.tr" && $password=="b241210059") 
{
    header("Location: hakkimda.html");

    echo "Şifre Doğru Hoşgeldiniz 'b241210059' ";
}

else{
    header("Location:login.php?u=$username");
    echo "Hatalı Gİriş Yaptınız Tekrar Deneyiniz.";
}




?>