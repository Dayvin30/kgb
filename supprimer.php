<?php 
session_start();


if( 1==1 ){
    include('include/gestionBDD.php');
    include('vues/navbar.php');
    include('vues/vSupprimer.php');

    
    var_dump($_POST['id']);


if(isset($_POST['id']) )
{

    if($_GET['type']=='un agent')
    {
        SupprimerAgent($_POST['id']);
    }
    if($_GET['type']=='une cible') {

        
        
        
        SupprimerCible($_POST['id']);
        }

        if($_GET['type']=='un contact') {

        
        
        
            SupprimerContact($_POST['id']);
        }

        if($_GET['type']=='une mission') {

        
        
        
            SupprimerMission($_POST['id']);
        }
        if($_GET['type']=='une planque')
        {
            SupprimerPlanque($_POST['id']);
        }


    }


}



else{
    
    
    header('Location: Connexion.php');

}


?>


