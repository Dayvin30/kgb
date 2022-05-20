<?php 
session_start();


if(1==1){
    include('include/gestionBDD.php');

    include('vues/vModifierMissions.php');
    

if(isset($_POST['titre']))
{


    ModifierMissions($_POST['titre'], $_POST['description'], $_POST['code_name'], $_POST['pays'], $_POST['type_de_mission'], $_POST['statut'], $_POST['specialite'], $_POST['date_debut'], $_POST['date_fin'], $_POST['agents'], $_POST['contacts'], $_POST['cibles'], $_POST['planques']);




}

}

else{
    
    
    header('Location: Connexion.php');

}
if(isset($_SESSION['msg'])){
    echo $_SESSION["msg"];
    }

?>


