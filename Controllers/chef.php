<?php
if($_SESSION['auth']['level']== 2)
{
    require "Models/chef.php";
    require "Models/accueil.php";

    $id_s= $_SESSION['auth']['id_s'];
    require "Views/chef.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
