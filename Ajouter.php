
<?php 
header("Content-Type: text/html;charset=utf-8");
session_start();
if(1==1){
    include('include/gestionBDD.php');
    
  


if($_GET['type'] == "un agent")
{
    include('vues/vAjouterAgent.php');
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


if($_GET['type'] == "une cible")
{
    include('vues/vAjouterCible.php');
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']))  //tous les champs sont remplis
        {


            ajouterCibles($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite']);


        }
}


if($_GET['type'] == "une planque")
{
    include('vues/vAjouterPlanque.php');
    if(isset($_POST['id_code']) && isset($_POST['Adresse']) && isset($_POST['Pays']) && isset($_POST['Type']))  //tous les champs sont remplis
        {


            ajouterPlanques($_POST['id_code'], $_POST['Adresse'], $_POST['Pays'], $_POST['Type']);


        }
}


if($_GET['type'] == "un contact")
{
    include('vues/vAjouterContact.php');
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']))  //tous les champs sont remplis
        {


            ajouterContacts($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite']);


        }
}





}
else{
        
    
    
    header('Location: Connexion.php');

}
?>

