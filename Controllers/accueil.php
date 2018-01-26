<?php 

if($_SESSION['auth']['level'] == 3)
{
     require "Models/accueil.php";
    include 'Core/tabsFormations.class.php';

    $_GET['p'] = 'accueil';
    $id_s = $_SESSION['auth']['id_s'];

    $form = getFormation($id_s);

    if(isset($_POST['Suivre']))
    {
        $id_f = $_POST['idForm'];

        suivreForm($id_s,$id_f);

        header("Location:".BASE_URL."/accueil");
    }
    require "Views/accueil.php";
}
else
{
   header("Location:".BASE_URL."/disconnect");
}

?>