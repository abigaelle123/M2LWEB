<?php
//obtenir toutes les formations d'un utilisateur 

function getFormation($id){
    global $bdd; 
    $requete = $bdd->prepare('SELECT * FROM formation f, adresse a WHERE NOT EXISTS (SELECT * FROM suivre s WHERE f.id_f = s.id_f and s.id_s like :id) AND f.id_a = a.id_a;)'); 
    $requete->bindValue(':id',$id,PDO::PARAM_INT); 
    $requete->execute(); 
    while($data = $requete->fetchAll()){
        return $data; 
    }
}








?>