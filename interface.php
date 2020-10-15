<?php session_start(); if($_SESSION['login']){ ?>
<h1>Mail (you need to config mail in PHP.ini):</h1>
<form action=send.php method=POST>
    <table>
        <tr>
            <td>Receiver: </td>
            <td><input type=mail name=receiver></td>
        </tr>
        <tr>
            <td>Subject: </td>
            <td><input type=text name=subject></td>
        </tr>
        <tr>
            <td>Fake Name: </td>
            <td><input type=text name=sendname></td>
        </tr>
        <tr>
            <td>Fake E-Mail: </td>
            <td><input type=text name=sendmail></td>
        </tr>
        <tr>
            <td>Content (HTML): </td>
            <td><textarea name=content rows=20 cols=90></textarea></td>
        </tr>
        <tr>
            <td></td>
            <td><input type=submit value=Send></td>
        </tr>


    </table>
</form>

<h1>Change Password</h1>
<form action=editsettings.php method=POST>
    <table>
        <tr>
            <td>New Password: </td>
            <td><input type=password name=newpassword></td>
        </tr>
        <tr>
            <td></td>
            <td><input type=submit value=Change></td>
        </tr>
    </table>
</form>

<?php
}else{

    echo("Not authorized! <a href=index.php>Login</a>");

}
?>