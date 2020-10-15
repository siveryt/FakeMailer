<?php session_start(); if($_SESSION['login']){
    $newpassword = $_POST['newpassword'];
    $newstring = '<?php $password = "'.$newpassword.'"?>';
    echo($newstring);

file_put_contents('settings.php', $newstring);
echo('Password changed successfully. <a href=interface.php>Back</a>');
}else{

echo("Not authorized! <a href=index.php>Login</a>");

}
?>