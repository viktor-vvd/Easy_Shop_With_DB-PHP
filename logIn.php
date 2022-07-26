
<?php
/**
 * Created by PhpStorm.
 * User: rpz32
 * Date: 03.03.2020
 * Time: 16:15
 */

require_once("datab.php");
$users = getUsers();
function LogEnd()
{
    global $users;
    if ($_POST["Login"] != "" && $_POST["Password"] != "") {
            $t = 0;
            foreach ($users as $user) {
                if ($_POST["Login"] == $user['login']&&$_POST["Password"] == $user['password']) {
                    if($user['login']=="admin")
                    {
                        require_once("datab.php");
                        setAdmin();
                    }
                    $t++;
                }
            }
            if ($t > 0) {
                    echo '<script>location.replace("catalog.php");</script>';
                    exit;
            }
            else
                    echo "Wrong Login or Password";
    }
}

if ($_POST['qwe']==586)
{
    LogEnd();
}
?>
<html>
<head>
</head>
<body>
<form action="dz1.php">
    Login: <input type="text" name="Login"></br>
    Password: <input type="password" name="Password"></br>
    <input type=hidden name="qwe" value="586">
    <input type="submit" value="LogIn" name="LogIn">
</form>
</body>
</html>
