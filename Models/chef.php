<?php

function getUser($id)
{

	global $bdd;
	$req = $bdd->prepare("SELECT id_s,nom,prenom,mail,NbJour,credits FROM salarie WHERE salarie.id_s_1=:id");
	$req->bindValue(':id',$id,PDO::PARAM_INT);
	$req->execute();
	while($data = $req->fetchAll())
	{
		return $data;
	}
}
?>
