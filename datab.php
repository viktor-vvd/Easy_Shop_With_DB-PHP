<?php
function getCategories()
{
    $link = mysqli_connect("127.0.0.1:3306", "root","","tovs")
    or die("Error: ".mysqli_connect_error());
    $sql = "SELECT * FROM tovs";
    $result = mysqli_query($link,$sql);
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC );
    mysqli_close($link);
    return $data;
}
function getUsers()
{
    $link = mysqli_connect("127.0.0.1:3306", "root","","tovs")
    or die("Error: ".mysqli_connect_error());
    $sql = "SELECT * FROM users";
    $result = mysqli_query($link,$sql);
    $data = mysqli_fetch_all($result,MYSQLI_ASSOC );
    mysqli_close($link);
    return $data;
}
function addUser($nlogin,$npass)
{
    $link = mysqli_connect("127.0.0.1:3306", "root","","tovs")
    or die("Error: ".mysqli_connect_error());
    $sql = "INSERT INTO 'users'('login', 'password') VALUES ([".$nlogin."],[".$npass."])";
    $result = mysqli_query($link,$sql);
    //$data = mysqli_fetch_all($result,MYSQLI_ASSOC );
    mysqli_close($link);
    return $result;
}
function getTovar($id)
{
    $link = mysqli_connect("127.0.0.1:3306", "root","","tovs")
    or die("Error: ".mysqli_connect_error());
    $sql = "SELECT * FROM tovs WHERE ID = ".$id;
    $result = mysqli_query($link,$sql);
    //var_dump($id);
    $tovar = mysqli_fetch_assoc($result);
    mysqli_close($link);
    return $tovar;
}
$admin=false;
function setAdmin()
{
    global $admin;
    $admin=true;
}
function getComment($id)
{
    $link = mysqli_connect("127.0.0.1:3306", "root","","tovs")
    or die("Error: ".mysqli_connect_error());
    $sql = "SELECT * FROM comments WHERE code= (SELECT code from tovs WHERE ID=".$id." LIMIT 1)";
    $result = mysqli_query($link,$sql);
    $comm = mysqli_fetch_assoc($result);
    var_dump($comm);
    mysqli_close($link);
    return $comm;
}
