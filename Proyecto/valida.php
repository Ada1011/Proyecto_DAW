<?php
$user = isset($_POST["usuario"]) ? $_POST["usuario"] : "";
$pass = isset($_POST["pass"]) ? $_POST["pass"] : "";
/*
echo "user:" .$user;
echo "<br>";
echo "pass:" .$pass;
echo "<br>";
*/
if ($user == "admin" && $pass == "1234") 
{
    session_start();
    $_SESSION["user"] = $user;
    //echo "ok";
    header("Location: index.php");
}
else
{
    echo "error";
    header("Location: login.php");
}

?>