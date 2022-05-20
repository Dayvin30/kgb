
<?php 
header("Content-Type: text/html;charset=utf-8");
session_start();
if(1==1){
    include('include/gestionBDD.php');
    include('vues/vAjouter.php');
  


if($_GET['type'] == "un agent")
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


if($_GET['type'] == "une cible")
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


if($_GET['type'] == "une planque")
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


if($_GET['type'] == "un contact")
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


if($_GET['type'] == "une mission")
{
    if(isset($_POST['Nom']) && isset($_POST['Prenom']) && isset($_POST['id_code']) && isset($_POST['Birthday']) && isset($_POST['Nationalite']) && isset($_POST['Specialite']))  //tous les champs sont remplis
        {


            ajouterAgents($_POST['id_code'], $_POST['Nom'], $_POST['Prenom'], $_POST['Birthday'], $_POST['Nationalite'], $_POST['Specialite']);


        }
}


}
else{
        
    
    
    header('Location: Connexion.php');

}
?>

