<?php

function sendMessage($id_s){
    global $bdd;
                $requete = $bdd->prepare("INSERT INTO messages(titre,contenu,id_exp,id_dest)
            VALUES(:titre,:contenu,:exp,:dest)");
            $requete->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
            $requete->bindValue(':contenu',$_POST['contenu'],PDO::PARAM_STR);
            $requete->bindValue(':exp',$id_s,PDO::PARAM_INT);
            $requete->bindValue(':dest',$reponse['id_s'],PDO::PARAM_INT);
            $requete->execute();
}

function selectDestinataire($id_s){
    global $bdd;
        $requete = $bdd->prepare("SELECT id_s FROM salarie WHERE mail = :mail");
        $requete->bindValue(':mail',$_POST['destinataire'],PDO::PARAM_STR);
        $requete->execute();
    
}