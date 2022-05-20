
<?php 

session_start();
if(1==1){
include('include/gestionBDD.php');
$countClients=1;
$ListeCibles=ListerCibles();
if($ListeCibles!==null){
    include('vues/vListerCibles.php');;



}else{
    include('vues/navbar.php');
    echo "Aucun client n'est enregistré";
}



}
else{

    header('Location: Connexion.php');
}

?>

