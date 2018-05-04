<?php

if($_SESSION['auth']['level']== 1 ||$_SESSION['auth']['level']== 2 )
{
    require "Models/gestionPresta.php";
        
    if($_SESSION['auth']['level']== 1)
    {
        $_GET['p'] = 'admin';
    }
    else
    {
        $_GET['p'] = 'chef';
    }
    require "Views/gestionPresta.php";
}
else
{
    header("Location:".BASE_URL."/disconnect");
}
