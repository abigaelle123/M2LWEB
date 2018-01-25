<?php

function listAdmin()
{
    global $bdd;
    $reponse = $bdd->query('select * from salarie where level =1');
            while ($data = $reponse->fetchAll()){
                
                return $data;
        }
}

function listChef()
{
    global $bdd;
    $reponse = $bdd->query('select * from salarie where level =2');
            while ($data = $reponse->fetchAll()){
                
                return $data;
        }
}

function listUser()
{
    global $bdd;
    $reponse = $bdd->query('select * from salarie where level =3');
            while ($data = $reponse->fetchAll()){
                
                return $data;
        }
}

?>