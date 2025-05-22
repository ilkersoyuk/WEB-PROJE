<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $email = trim($_POST['gelen_email'] ?? '');
    $password = trim($_POST['gelen_password'] ?? '');

    if ($email == 'b241210059@sakarya.edu.tr' && $password == 'b241210059') {
        echo "Hoşgeldiniz b241210059";
        echo "<script>setTimeout(function(){ window.location.href = '../html/hakkimda.html'; }, 2000);</script>";
        exit();
    } 
    else {
        echo "<script>setTimeout(function(){ window.location.href = 'login.html'; }, 2000);</script>";
        echo "<p style='color:red;'>Kullanıcı adı veya şifre hatalı. Tekrar deneyiniz.</p>";
    }
}
?>
