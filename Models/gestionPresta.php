
<?php

function getPresta()
{
    global $bdd;       
    $requete = $bdd->query("SELECT id_p, raison_s, id_a FROM prestataire");
    while ($data = $reponse->fetchAll())
    {
        return $data;
    }
}
?>