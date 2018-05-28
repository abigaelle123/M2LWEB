<?php
require 'Models/messagerie.php';

if(isset($_SESSION))
{

    $id_s = $_SESSION['auth']['id_s'];
    
 if(isset($_POST['submit']))
     
        {
        sendMessage($id_s); 
        echo"<center><h4>Message envoyé !</h4></center>";
        }
        else
        {
            echo"<center><h4>Destinataire inconnu !</h4></center>";
        }
         
require 'Views/messagerie.php';
}
else
{
   header("Location:".BASE_URL."/disconnect");
}
