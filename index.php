<?php
session_start();
if($_SESSION['login']){
    header("Location: interface.php");
    exit;
}elseif(isset($_POST['loginpwd'])){
    require_once('settings.php');
    if($_POST['loginpwd'] == $password){
        $_SESSION['login'] = true;
        header("Location: interface.php");
    }else{
        echo('<script type="text/javascript">alert("Login incorrect!")</script>');
    }
}else{?>

<h1>Login</h1>
<form method=POST>

    <table>
        <tr><td>Password: </td><td><input type="password" name="loginpwd"></td></tr>
        <tr><td></td><td><input type="submit"></td></tr>
    </table>

</form>

<?php }
?>