<?php
//lvl prestataire normalement

//obtenir le prestataire 
//SELECT id_p, raison_s FROM prestataire

function getPresta(){
    global $bdd; 
    $requete = $bdd->query("SELECT id_p, raison_s FROM prestataire"); 
    $requete->execute(); 
}


//ajouter des formations avec l'addresse, les formations, type_formation et situer
//addPrestataire 
    

?>