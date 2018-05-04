<?php
session_start();
require "Models/connect.php";

$protocol = empty($_SERVER['HTTPS']) ? 'http' : 'https';
        $domain = $_SERVER['SERVER_NAME']; $port = $_SERVER['SERVER_PORT']; $request = $_SERVER['REQUEST_URI'];
        $port = ($protocol == 'http' && $port == 80 || $protocol == 'https' && $port == 443) ? '' : ":$port";
        $url = dirname(dirname($_SERVER['SCRIPT_NAME']));
        $url = $protocol . "://" . $domain . $port . $url ;
        $url=SUBSTR($url,0, -1).SUBSTR($request, 0, -1);

define('BASE_URL',($url));
if(!isset($_SESSION['auth']))
{
    if(!isset($_SESSION['i']))
    {
        $_SESSION['i'] = 0;
    }
    require "Controllers/login.php";
}
else
{
    if(!isset($_GET['p']) || $_GET['p'] == "")
    {
	    $_GET['p'] = "accueil";
    }
    else
    {
        if(!file_exists("Controllers/".$_GET['p'].".php"))
        {
            $_GET['p'] = '404';
        }
    }

    if($_SESSION['auth']['level']== 1 && $_GET['p'] == "" )
    {
        $_GET['p'] = "admin";
    }

    ob_start();
        require "Controllers/".$_GET['p'].".php";
        $content = ob_get_contents();
    ob_end_clean();

    if($_SESSION['auth'])
    {
        require "Views/layout2.php";
    }
}
?>