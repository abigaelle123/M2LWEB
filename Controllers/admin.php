<?php
if($_SESSION['auth']['level']== 1)
{
    require "Models/admin.php";
    require "Views/admin.php";
}
else
{
     header("Location:".BASE_URL."/disconnect");
}
