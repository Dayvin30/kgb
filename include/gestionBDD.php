 <?php

// MODIFs A FAIRE
// Ajouter en têtes 
// Voir : jeu de caractères à la connection

/** 
 * Se connecte au serveur de données                     
 * Se connecte au serveur de données à partir de valeurs
 * prédéfinies de connexion (hôte, compte utilisateur et mot de passe). 
 * Retourne l'identifiant de connexion si succès obtenu, le booléen false 
 * si problème de connexion.
 * @return resource identifiant de connexion
 */
function connexionBDD() 
{
    $PARAM_hote='sql4.freemysqlhosting.net'; // le chemin vers le serveur
    $PARAM_port='3306';
    $PARAM_nom_bd='sql449387'; // le nom de votre base de données
    $PARAM_utilisateur='sql4493857'; // nom d'utilisateur pour se connecter
    $PARAM_mot_passe='1nf2pURsCZ'; // mot de passe de l'utilisateur pour se connecter
    $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);
    
    
    return $connect;

    //$hote = "localhost";
    // $login = "root";
    // $mdp = "";
    // return mysql_connect($hote, $login, $mdp);
}


/** 
 * Ferme la connexion au serveur de données.
 * Ferme la connexion au serveur de données identifiée par l'identifiant de 
 * connexion $idCnx.
 * @param resource $idCnx identifiant de connexion
 * @return void  
 */
function deconnecterServeurBD($idCnx) {

}


function connexion($email, $mdp)
{

  $connexion=connexionBDD();
  $requete="select email, password from administrateur where email = '".$email."' and password ='".$mdp."'";
  echo($requete);
  $reponse=$connexion->query($requete); 
  $reponse->setFetchMode(PDO::FETCH_OBJ);
  $ligne = $reponse->fetch(); 
  $i=0;
  while($ligne){

    $i++;
    $ligne=$reponse->fetch();

  }

  if($i==0){ 

    echo('Identifiants non reconnus  <br> <br>');
    $login=false;

  }else{

     
      $login=true;
     

  }
return($login);

}

function ModifierTable($NomTable, $NomColonne, $idColonne, $value, $id)
{
  $connexion=connexionBDD();

  $requete='select * from '.$NomTable.' where '.$idColonne.'="'.$id.'"';


  $reponse=$connexion->query($requete);
  $reponse->setFetchMode(PDO::FETCH_OBJ);


  if($reponse->rowCount()>=1){
    $message= '<br> <div style="text-align:center"> <span class="badge bg-danger" style="font-size: 115%" >Ce client existe déjà !</span> </div>';
  }
    else {
     
    $requete='update '.$NomTable.' set '.$NomColonne.' = "'.$value.'" where '.$idColonne.'='.$id.';';
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$NomTable, $NomColonne, $idColonne ,$value]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }
  
}

function ModifierAgent($id, $Nom, $Prenom, $Birthday, $Nationalite, $Specialite)
{
  $connexion=connexionBDD();

     
    $requete='update agents set nom = "'.$Nom.'", prenom="'.$Prenom.'",birthday="'.$Birthday.'",nationalite="'.$Nationalite.'",specialite="'.$Specialite.'" where id_code ="'.$id.'";';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$id, $Nom, $Prenom ,$Birthday, $Nationalite, $Specialite]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }
  
function ModifierCibles($id, $Nom, $Prenom, $Birthday, $Nationalite)
{
  $connexion=connexionBDD();

     
    $requete='update cibles set nom = "'.$Nom.'", prenom="'.$Prenom.'",birthday="'.$Birthday.'",nationalite="'.$Nationalite.'" where nom_de_code ="'.$id.'";';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$id, $Nom, $Prenom ,$Birthday, $Nationalite]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        var_dump($Prenom);
        }

function ModifierContacts($id, $Nom, $Prenom, $Birthday, $Nationalite)
{
  $connexion=connexionBDD();

     
    $requete='update contacts set nom = "'.$Nom.'", prenom="'.$Prenom.'",birthday="'.$Birthday.'",nationalite="'.$Nationalite.'" where code_name ="'.$id.'";';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$id, $Nom, $Prenom ,$Birthday, $Nationalite]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }



function ModifierPlanques($Code, $Adresse, $Pays, $Type)
{
  $connexion=connexionBDD();

     
    $requete='update planques set adresse = "'.$Adresse.'", pays="'.$Pays.'",type="'.$Type.'" where codes ="'.$Code.'";';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$Adresse, $Pays, $Type ,$Code]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }


function ModifierMissions($Titre, $Description, $Code_name, $Pays, $TypeMission, $Statut, $Specialite, $DateDebut, $DateFin, $Id_agent, $Contacts, $Cibles, $Planques)
{
  $connexion=connexionBDD();

     
    $requete='update missions set description = "'.$Description.'", code_name="'.$Code_name.'",Pays="'.$Pays.'" ,type_de_mission="'.$TypeMission.'" ,statut="'.$Statut.'" ,specialite="'.$Specialite.'" ,date_debut="'.$DateDebut.'" ,date_fin="'.$DateFin.'" ,id_agents="'.$Id_agent.'" ,contacts="'.$Contacts.'" ,cibles="'.$Cibles.'" where titre ="'.$Titre.'";';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute([$Titre, $Description, $Code_name, $Pays, $TypeMission, $Statut, $Specialite, $DateDebut, $DateFin, $Id_agent, $Contacts, $Cibles, $Planques]);

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }


function SupprimerFromTable($NomTable, $idTable, $id)
{

  $connexion=connexionBDD();



$requete='delete from '.$NomTable.' where '.$idTable.' = "'.$id.'";'; 
echo($requete);


$reponse=$connexion->prepare($requete);
$reponse->execute([$NomTable, $idTable, $id]);

 }


 function ListerAgents()
 {
   $connexion = connexionBDD();
       
       $requete="select * from agents";
 
       
        $ListeAgent=NULL;
       
         
        $reponse=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
 
        $reponse->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
        $i = 0;
        $ligne = $reponse->fetch();
        if($reponse!==false){
        while($ligne)
        {
            $ListeAgent[$i]['id']=$ligne->id_code;
            $ListeAgent[$i]['nom']=$ligne->nom;
            $ListeAgent[$i]['prenom']=$ligne->prenom;
            $ListeAgent[$i]['birthday']=$ligne->birthday;
            $ListeAgent[$i]['nationalite']=$ligne->nationalite;
            $ListeAgent[$i]['specialite']=$ligne->specialite;
            $ligne=$reponse->fetch();
            $i = $i + 1;
        }
      }
    $reponse->closeCursor();   // fermer le jeu de résultat
    // deconnecterServeurBD($idConnexion);
    return $ListeAgent;
  }

  function ListerCibles()
  {
    $connexion = connexionBDD();
        
        $requete="select * from cibles";
  
        
         $ListeCible=NULL;
        
          
         $reponse=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
         $reponse->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
         $i = 0;
         $ligne = $reponse->fetch();
         if($reponse!==false){
         while($ligne)
         {
             $ListeCible[$i]['id']=$ligne->nom_de_code;
             $ListeCible[$i]['nom']=$ligne->nom;
             $ListeCible[$i]['prenom']=$ligne->prenom;
             $ListeCible[$i]['birthday']=$ligne->birthday;
             $ListeCible[$i]['nationalite']=$ligne->nationalite;
             $ligne=$reponse->fetch();
             $i = $i + 1;
         }
       }
     $reponse->closeCursor();   // fermer le jeu de résultat
     // deconnecterServeurBD($idConnexion);
     return $ListeCible;
   }

     function ListerPlanques()
  {
    $connexion = connexionBDD();
        
        $requete="select * from planques";
  
        
         $ListePlanque=NULL;
        
          
         $reponse=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
         $reponse->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
         $i = 0;
         $ligne = $reponse->fetch();
         if($reponse!==false){
         while($ligne)
         {
             $ListePlanque[$i]['code']=$ligne->codes;
             $ListePlanque[$i]['adresse']=$ligne->adresse;
             $ListePlanque[$i]['pays']=$ligne->pays;
             $ListePlanque[$i]['type']=$ligne->type;
             $ligne=$reponse->fetch();
             $i = $i + 1;
         }
       }
     $reponse->closeCursor();   // fermer le jeu de résultat
     // deconnecterServeurBD($idConnexion);
     return $ListePlanque;
   }
   function ListerContacts()
  {
    $connexion = connexionBDD();
        
        $requete="select * from contacts";
  
        
         $ListerContact=NULL;
        
          
         $reponse=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
         $reponse->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
         $i = 0;
         $ligne = $reponse->fetch();
         if($reponse!==false){
         while($ligne)
         {
             $ListerContact[$i]['id']=$ligne->code_name;
             $ListerContact[$i]['nom']=$ligne->nom;
             $ListerContact[$i]['prenom']=$ligne->prenom;
             $ListerContact[$i]['birthday']=$ligne->birthday;
             $ListerContact[$i]['nationalite']=$ligne->nationalite;
             $ligne=$reponse->fetch();
             $i = $i + 1;
         }
       }
     $reponse->closeCursor();   // fermer le jeu de résultat
     // deconnecterServeurBD($idConnexion);
     return $ListerContact;
   }

   function ListerMissions()
  {
    $connexion = connexionBDD();
        
        $requete="select * from missions";
  
        
         $ListerMissions=NULL;
        
          
         $reponse=$connexion->query($requete); // on va chercher tous les membres de la table qu'on trie par ordre croissant
  
         $reponse->setFetchMode(PDO::FETCH_OBJ); // on dit qu'on veut que le résultat soit récupérable sous forme d'objet     
         $i = 0;
         $ligne = $reponse->fetch();
         if($reponse!==false){
         while($ligne)
         {
             $ListerMissions[$i]['titre']=$ligne->titre;
             $ListerMissions[$i]['description']=$ligne->description;
             $ListerMissions[$i]['code_name']=$ligne->code_name;
             $ListerMissions[$i]['pays']=$ligne->pays;
             $ListerMissions[$i]['type_de_mission']=$ligne->type_de_mission;
             $ListerMissions[$i]['statut']=$ligne->statut;
             $ListerMissions[$i]['specialite']=$ligne->specialite;
             $ListerMissions[$i]['date_debut']=$ligne->date_debut;
             $ListerMissions[$i]['date_fin']=$ligne->date_fin;
             $ListerMissions[$i]['id_agents']=$ligne->id_agents;
             $ListerMissions[$i]['contacts']=$ligne->contacts;
             $ListerMissions[$i]['cibles']=$ligne->cibles;
             $ListerMissions[$i]['planques']=$ligne->planques;
             $ligne=$reponse->fetch();
             $i = $i + 1;
         }
       }
     $reponse->closeCursor();   // fermer le jeu de résultat
     // deconnecterServeurBD($idConnexion);
     return $ListerMissions;
   }




   function ajouterAgents($id_code, $nom, $prenom, $birthday, $nationalite, $specialite)
   {
    $connexion=connexionBDD();

    $requete='select * from agents where nom="'.$nom.'" AND prenom="'.$prenom.'" and id_code="'.$id_code.'"';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into agents (id_code, nom, prenom, birthday, nationalite, specialite) VALUES ("'.$id_code.'", "'.$nom.'", "'.$prenom.'", "'.$birthday.'", "'.$nationalite.'" ,  "'.$specialite.'");';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute([$id_code, $nom, $prenom, $birthday, $nationalite, $specialite]);
     
        
      }
   }

   function ajouterCibles($nom_de_code, $nom, $prenom, $birthday, $nationalite)
   {
    $connexion=connexionBDD();

    $requete='select * from cibles where nom="'.$nom.'" AND prenom="'.$prenom.'" and nom_de_code="'.$nom_de_code.'"';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into cibles (nom_de_code, nom, prenom, birthday, nationalite) VALUES ("'.$nom_de_code.'", "'.$nom.'", "'.$prenom.'", "'.$birthday.'", "'.$nationalite.'");';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute([$nom_de_code, $nom, $prenom, $birthday, $nationalite]);
     
        
      }
   }

   function ajouterContacts($code_name, $nom, $prenom, $birthday, $nationalite)
   {
    $connexion=connexionBDD();

    $requete='select * from contacts where nom="'.$nom.'" AND prenom="'.$prenom.'" and code_name="'.$code_name.'"';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into contacts (code_name, nom, prenom, birthday, nationalite) VALUES ("'.$code_name.'", "'.$nom.'", "'.$prenom.'", "'.$birthday.'", "'.$nationalite.'");';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute([$code_name, $nom, $prenom, $birthday, $nationalite]);
     
        
      }
   }

   function ajouterPlanques($codes, $adresse, $pays, $type)
   {
    $connexion=connexionBDD();

    $requete='select * from planques where codes="'.$codes.'" ';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into planques (codes, adresse, pays, $type) VALUES ("'.$code_name.'", "'.$nom.'", "'.$codes.'", "'.$adresse.'", "'.$pays.'", "'.$type.'");';
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute([$codes, $adresse, $pays, $type]);
     
        
      }
   }

   function ajouterMissions($titre, $description, $code_name, $pays, $type_de_mission, $statut, $specialite, $date_debut, $date_fin, $id_agents, $contatcs, $cibles, $planques)
   {
    $connexion=connexionBDD();

    $requete='select * from mission where titre="'.$titre.'" ';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into missions (titre, description, code_name, pays, type_de_missions, statut, specialite, date_debut, date_fin, id_agents, contacts, cibles, planques) VALUES ("'.$titre.'", "'.$description.'", "'.$date_debut.'", "'.$date_fin.'", "'.$id_agents.'", "'.$contacts.'", "'.$cibles.'", "'.$planques.'");';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute([$titre, $description, $code_name, $pays, $type_de_mission, $statut, $specialite, $date_debut, $date_fin, $id_agents, $contatcs, $cibles, $planques]);
     
        
      }
   }



   
?>
