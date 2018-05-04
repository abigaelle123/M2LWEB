<?php
    try
    {
       $bdd = new PDO("mysql:host=172.16.0.3;dbname=csembres;charset=utf8","csembres","7Xayctvf!"); // connection bdd
    }
    catch(Exception $e)
    {
        echo("<div class='alert alert-danger'><i class='glyphicon glyphicon-remove-sign'></i><strong>Erreur de connexion !</strong></div>"); //erreur
    }
?>
