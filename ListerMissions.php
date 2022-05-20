
<?php 

session_start();
if(1==1){
include('include/gestionBDD.php');
$countClients=1;
$ListeMissions=ListerMissions();
if($ListeMissions!==null){
    include('vues/vListerMissions.php');;



}else{
    include('vues/navbar.php');
    echo "Aucun client n'est enregistré";
}



}
else{

    header('Location: Connexion.php');
}

?>

