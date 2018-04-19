<?php
    try
    {
       $bdd = new PDO("mysql:host=db730626998.db.1and1.com;dbname=db730626998;charset=utf8","dbo730626998","7Xayctvf!"); // connection bdd
    }
    catch(Exception $e)
    {
        echo("<div class='alert alert-danger'><i class='glyphicon glyphicon-remove-sign'></i><strong>Erreur de connexion !</strong></div>"); //erreur
    }
?>
