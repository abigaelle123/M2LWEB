<?php
    try
    {
       $bdd = new PDO("mysql:host=127.0.0.1;dbname=m2l;charset=utf8","root",""); // connection bdd
    }
    catch(Exception $e)
    {
        echo("<div class='alert alert-danger'><i class='glyphicon glyphicon-remove-sign'></i><strong>Erreur de connexion !</strong></div>"); //erreur
    }
?>
