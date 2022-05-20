<?php 
session_start();


if(1==1){
    include('include/gestionBDD.php');

    include('vues/vModifierAgents.php');
    

if(isset($_POST['Prenom']) && isset($_POST['Nom']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))
{


    ModifierAgent($_GET['id'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


}

}

else{
    
    
    header('Location: Connexion.php');

}
if(isset($_SESSION['msg'])){
    echo $_SESSION["msg"];
    }

?>


