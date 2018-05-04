
<?php

    if($_SESSION['auth']['level']== 1 ||$_SESSION['auth']['level']== 2 )
    {
        require "Models/gestionFormation.php";
        
        $presta = getPresta();
        
        if($_SESSION['auth']['level']== 1)
        {
            $_GET['p'] = 'admin';
        }
        else
        {
            $_GET['p'] = 'chef';
        }
        
        require "Views/gestionFormation.php";
    }
    else
    {
        header("Location:".BASE_URL."/disconnect");
    }
