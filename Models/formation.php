
<?php
//SELECT nbJour FROM formation WHERE id_f = :id_f
function getnbjourformation($id_f)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT NbJour FROM formation WHERE id_f = :id_f ');
    $requete->bindParam(':id_f', $id_f);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datanbjourformation = $data['NbJour'];
    }
}

//getCreditsFormation
//SELECT credits FROM formation WHERE id_f = :id_f
function getcreditsformation($id_f)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT credits FROM formation WHERE id_f = :id_f ');
    $requete->bindParam(':id_f', $id_f);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datacreditsformation = $data['credits'];
    }
}

//getNbJourSalarie
//SELECT NbJour FROM salarie WHERE id_s = :id_s
function getnbjoursalarie($id_s)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT NbJour FROM salarie WHERE id_s = :id_s ');
    $requete->bindParam(':id_s', $id_s);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datanbjoursalarie = $data['NbJour'];
    }
}

//getCreditsSalarie
//SELECT credits FROM salarie WHERE id_s = :id_s
function getcreditssalarie($id_s)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT credits FROM salarie WHERE id_s = :id_s ');
    $requete->bindParam(':id_s', $id_s);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datacreditssalarie = $data['credits'];
    }
}

//getNom
//SELECT nom FROM salarie WHERE id_s = :id_s

function getNom($id_s)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT nom FROM salarie WHERE id_s = :id_s ');
    $requete->bindParam(':id_s', $id_s);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datanbjoursalarie = $data['nom'];
    }
}

//getPrenom
//SELECT prenom FROM salarie WHERE id_s = :id_s

function getPrenom($id_s)
{
    global $bdd;
    $requete = $bdd->prepare('SELECT prenom FROM salarie WHERE id_s = :id_s ');
    $requete->bindParam(':id_s', $id_s);
    $requete->execute();
    while ($data = $requete->fetch())
    {
        return $datanbjoursalarie = $data['prenom'];
    }
}

//getFormationsUser
//SELECT formation.id_f, formation.date_d, formation.date_f, formation.NbJour, formation.credits ,salarie.id_s, salarie.nom, salarie.prenom, formation.libelle, suivre.etat, adresse.id_a, adresse.rue, adresse.commune, adresse.code_postale, adresse.numero FROM suivre, salarie, formation, adresse WHERE salarie.id_s = suivre.id_s AND formation.id_f = suivre.id_f 
//AND salarie.id_s =:id AND suivre.etat = "En attente" AND formation.id_a = adresse.id_a

function getFormationsUser($id)
{
		global $bdd;
       	$reponse = $bdd->prepare('SELECT formation.id_f, formation.date_d, formation.date_f, formation.NbJour, formation.credits ,salarie.id_s, salarie.nom, salarie.prenom, formation.libelle, suivre.etat, adresse.id_a, adresse.rue, adresse.commune, adresse.code_postale, adresse.numero
			from suivre, salarie, formation, adresse
			where salarie.id_s = suivre.id_s 
			and formation.id_f = suivre.id_f 
			and salarie.id_s =:id
            and suivre.etat = "En attente"
			AND formation.id_a = adresse.id_a');
        $reponse->bindValue(':id', $id,PDO::PARAM_STR);
        $reponse->execute();
        while($data = $reponse->fetchAll())
        {
            return $data;
        }
}


//valider on met en parametre id_f et l'id_s
//on fait un update UPDATE suivre SET etat="Validé" where id_f= :id_f and id_s= :id_s
//on fait la meme chose pour refuse sauf qu'on change l'état
function valide($id_f,$id_s)
{
    global $bdd;

    $req = $bdd->prepare('UPDATE suivre SET etat="Validé" where id_f= :id_f and id_s= :id_s');
    $req->bindParam(':id_s', $id_s);
    $req->bindParam(':id_f', $id_f);
    $req->execute();
}

function refuse($id_f,$id_s)
{
    global $bdd;
    $req = $bdd->prepare('UPDATE suivre SET etat="Refusé" where id_f= :id_f and id_s= :id_s');
    $req->bindParam(':id_s', $id_s);
    $req->bindParam(':id_f', $id_f);
    $req->execute();
}

//configuré les credits: lorsqu'un salarié veut suivre une formation, son credit de formation diminue 
// donc on met en parametre le nb de jours de formation et le credit de la formation et l'id du salarie 
// on fait un update sur le salarie et on modifie le nombre de jours et le credit quand le salarie suit la formation 

function usenbjourcredits($nbjourformation,$creditsformation,$id_s)
{
    global $bdd;

    $req1 = $bdd->prepare("UPDATE salarie SET NbJour = NbJour - '$nbjourformation', credits = credits - '$creditsformation' WHERE id_s = :id_s");
    $req1->bindParam(':id_s', $id_s);
    $req1->execute();
}
?>