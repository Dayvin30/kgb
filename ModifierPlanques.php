<?php 
session_start();


if(1==1){
    include('include/gestionBDD.php');

    include('vues/vModifierPlanques.php');
    

if(isset($_POST['Code']) && isset($_POST['Adresse']) && isset($_POST['Pays']) && isset($_POST['Type']))
{


    ModifierPlanques($_POST['Code'], $_POST['Adresse'], $_POST['Pays'], $_POST['Type']);


}

}

else{
    
    
    header('Location: Connexion.php');

}

?>


