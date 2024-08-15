<?

if (isset($_COOKIE['login'])) {
    setcookie("login",$_COOKIE['login'], time()-3600);
    }
    header("Location: /mainpage.php");







?>