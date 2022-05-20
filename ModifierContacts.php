<?php 
session_start();


if(1==1){
    include('include/gestionBDD.php');

    include('vues/vModifierContacts.php');
    

if(isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']))
{


    ModifierContacts($_GET['id'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite']);


}

}

else{
    
    
    header('Location: Connexion.php');

}

?>


