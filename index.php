
<?php
/**
 * Created by PhpStorm.
 * User: rpz32
 * Date: 03.03.2020
 * Time: 16:15
 */
require_once("datab.php");
$users = getUsers();
function RegEnd()
{
    global $users;
    if ($_POST["Login"] != "" && $_POST["Password"] != "") {
        if ($_POST["Password"] == $_POST["RePassword"]) {
            $t = 0;
            foreach ($users as $user) {
                if ($_POST["Login"] != $user['login']) {
                    $t++;
                }
            }
            if ($t == count($users)) {
                require_once("datab.php");
                $res=addUser($_POST["Login"], $_POST["Password"]);
                if ($res==true) {
                    echo "OK";
                    echo '<script>location.replace("catalog.php");</script>';
                    exit;
                } else
                    echo "ERROR, try again later";
            } else
                echo "This login already exists! Try another one!";
        } else {
            echo "RePassword not like Password!!!";
        }
    }

}
if ($_POST['qwe']==586)
{
    RegEnd();
}

?>
<html>
<head>
</head>
<script>
    <?php RegEnd();?>
</script>
<body>
<form action="index.php" method="post">
    Login: <input type="text" name="Login"></br>
    Password: <input type="password" name="Password"></br>
    Repeat Password: <input type="password" name="RePassword"></br>
    <input type=hidden name="qwe" value="586">
    <input type="submit" value="End Registration" name="Endd">
    <a href="logIn.php"><input type="button" value="LogIn" name="Buttonn"></a>
</form>
</body>
</html>