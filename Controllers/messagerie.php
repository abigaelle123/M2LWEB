<?php
require 'Models/messagerie.php';

if(isset($_SESSION))
{

    $id_s = $_SESSION['auth']['id_s'];
    
 if(isset($_POST['submit']))
     
    {
        
        $requete = $bdd->prepare("SELECT id_s FROM salarie WHERE mail = :mail");
        $requete->bindValue(':mail',$_POST['destinataire'],PDO::PARAM_STR);
        $requete->execute();
        if($reponse = $requete->fetch())
        {
            $requete = $bdd->prepare("INSERT INTO messages(titre,contenu,id_exp,id_dest)
            VALUES(:titre,:contenu,:exp,:dest)");
            $requete->bindValue(':titre',$_POST['titre'],PDO::PARAM_STR);
            $requete->bindValue(':contenu',$_POST['contenu'],PDO::PARAM_STR);
            $requete->bindValue(':exp',$id_s,PDO::PARAM_INT);
            $requete->bindValue(':dest',$reponse['id_s'],PDO::PARAM_INT);
            $requete->execute();
            echo"<center><h4>message envoyé</h4></center>";
        }
        else
        {
            echo"<center><h4>Destinataire inconnu</h4></center>";
        }
         
    }
        else
        {
            echo"<center><h4>Destinataire inconnu</h4></center>";
        }
require 'Views/messagerie.php';
}
else
{
   header("Location:".BASE_URL."/disconnect");
}
