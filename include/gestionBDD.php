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
  $PARAM_hote='eu-cdbr-west-02.cleardb.net'; // le chemin vers le serveur
  $PARAM_port='3306';
  $PARAM_nom_bd='heroku_f9d508c2c823bbf'; // le nom de votre base de données
  $PARAM_utilisateur='b64fabd471154f'; // nom d'utilisateur pour se connecter
  $PARAM_mot_passe='c3d7baba'; // mot de passe de l'utilisateur pour se connecter
  $connect = new PDO('mysql:host='.$PARAM_hote.';port='.$PARAM_port.';dbname='.$PARAM_nom_bd, $PARAM_utilisateur, $PARAM_mot_passe);

  $connect->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    $connect->setAttribute(PDO::ATTR_EMULATE_PREPARES, false);
    
    //mysql://b64fabd471154f:c3d7baba@eu-cdbr-west-02.cleardb.net/heroku_f9d508c2c823bbf?reconnect=true
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
     
    $requete='update :NomTable set :NomColonne = :value where :idColonne= :id;';
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(

      'nomTable' => $NomTable,
      'NomColonne' => $NomColonne,
      'value' => $value,
      'idColone' => $idColonne,
      'id' => $id
      
    ));

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }
  
}

function ModifierAgent($id, $Nom, $Prenom, $Birthday, $Nationalite, $Specialite)
{
  $connexion=connexionBDD();

     
    $requete='update agents set nom = :nom, prenom= :prenom, birthday= :birthday ,nationalite= :nationalite ,specialite= :specialite where id_code = :id;';
    echo($requete);
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(
      'nom' => $Nom,
      'prenom' => $Prenom,
      'birthday' => $Birthday, 
      'nationalite' => $Nationalite, 
      'specialite' => $Specialite,
      'id' => $id)


    );

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }
  
function ModifierCibles($id, $Nom, $Prenom, $Birthday, $Nationalite)
{
  try {
    
    $connexion=connexionBDD();
    $requete='update cibles set nom = :nom, prenom= :prenom,birthday= :birthday,nationalite= :nationalite where nom_de_code = :id;';
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(
      'nom' => $Nom,
      'prenom' => $Prenom,
      'birthday' => $Birthday, 
      'nationalite' => $Nationalite, 
      'id' => $id));
  }
  catch(Exception $e) {
    echo 'Exception -> ';
    var_dump($e->getMessage());
}
  

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }

function ModifierContacts($id, $Nom, $Prenom, $Birthday, $Nationalite)
{
  $connexion=connexionBDD();

     
    $requete='update contacts set nom = :Nom, prenom= :Prenom ,birthday= :Birthday, nationalite= :Nationalite where code_name =:id ;';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(

      'Nom' => $Nom,
      'Prenom' => $Prenom,
      'Birthday' => $Birthday,
      'Nationalite' => $Nationalite,
      'id' => $id



    ));

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }



function ModifierPlanques($Code, $Adresse, $Pays, $Type)
{
  $connexion=connexionBDD();

     
    $requete='update planques set adresse = :adresse, pays= :pays ,type= :type where codes = :code;';
    echo($requete);
    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(
      'adresse' => $Adresse,
      'pays' => $Pays,
      'type' => $Type, 
      'code' => $Code
    ));

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }


function ModifierMissions($Titre, $Description, $Code_name, $Pays, $TypeMission, $Statut, $Specialite, $DateDebut, $DateFin, $Id_agent, $Contacts, $Cibles, $Planques)
{
  $connexion=connexionBDD();

     
    $requete='update missions set description = :description, code_name= :code_name ,Pays= :pays ,type_de_mission= :TypeMission ,statut= :statut ,specialite= :specialite ,date_debut= :DateDebut ,date_fin= :DateFin ,id_agents= :id_agents ,contacts= :contacts ,cibles= :cibles where titre = :titre;';

    
   
    $reponse=$connexion->prepare($requete);
    $reponse->execute(array(
      'description' => $Description,
      'code_name' => $Code_name,
      'pays' => $Pays, 
      'TypeMission' => $TypeMission, 
      'statut' => $Statut,
      'specialite' => $Specialite,
      'DateDebut' => $DateDebut,
      'DateFin' => $DateFin,
      'id_agents' => $Id_agent,
      'contacts' => $Contacts,
      'cibles' => $Cibles,
      'titre' => $Titre
    ));

    $message= '<br> <div style="text-align:center"> <span class="badge bg-success" style="font-size: 115%" >Modification enregistré !</span> </div>';
        
        }


        function SupprimerFromTable($id)
        {
        
          $connexion=connexionBDD();
        
        
        
        $requete='delete from agents where id_code = :id;'; 
        echo($requete);
        
        
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(

          'id' => $id
        
        ));
        
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
  
   
        $requete='insert into agents (id_code, nom, prenom, birthday, nationalite, specialite) VALUES (:id_code, :nom , :prenom, :birthday, :nationalite , :specialite);';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(
          'id_code' => $id_code,
          'nom' => $nom,
          'prenom' => $prenom,
          'birthday' => $birthday,
          'nationalite' => $nationalite,
          'specialite' => $specialite
        ));
     
        
      }
   }

   function ajouterCibles($nom_de_code, $nom, $prenom, $birthday, $nationalite)
   {
    $connexion=connexionBDD();

    $requete='select * from cibles where nom="'.$nom.'" AND prenom="'.$prenom.'" and nom_de_code="'.$nom_de_code.'"';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into cibles (nom_de_code, nom, prenom, birthday, nationalite) VALUES (:nom_de_code, :nom, :prenom, :birthday, :nationalite);';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(

          'nom_de_code' => $nom_de_code,
          'nom' => $nom,
          'prenom' => $prenom,
          'birthday' => $birthday,
          'nationalite' => $nationalite
          



        ));
     
        
      }
   }

   function ajouterContacts($code_name, $nom, $prenom, $birthday, $nationalite)
   {
    $connexion=connexionBDD();

    $requete='select * from contacts where nom="'.$nom.'" AND prenom="'.$prenom.'" and code_name="'.$code_name.'"';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into contacts (code_name, nom, prenom, birthday, nationalite) VALUES (:code_name, :nom, :prenom, :birthday, :nationalite);';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(
         'code_name' => $code_name,
         'nom' => $nom,
         'prenom' => $prenom,
         'birthday' => $birthday,
         'nationalite' => $nationalite 
        ));
     
        
      }
   }

   function ajouterPlanques($codes, $adresse, $pays, $type)
   {
    $connexion=connexionBDD();

    $requete='select * from planques where codes="'.$codes.'" ';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into planques (codes, adresse, pays, type) VALUES (:codes, :adresse, :pays, :type);';
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(
          'codes' => $codes,
          'adresse' => $adresse,
          'pays' => $pays,
          'type' => $type

        ));
     
        
      }
   }

   function ajouterMissions($titre, $description, $code_name, $pays, $type_de_mission, $statut, $specialite, $date_debut, $date_fin, $id_agents, $contatcs, $cibles, $planques)
   {
    $connexion=connexionBDD();

    $requete='select * from mission where titre="'.$titre.'" ';
  
  
    $reponse=$connexion->query($requete);
    $reponse->setFetchMode(PDO::FETCH_OBJ);
    
      if($reponse->rowCount()==0){
  
   
        $requete='insert into missions (titre, description, code_name, pays, type_de_missions, statut, specialite, date_debut, date_fin, id_agents, contacts, cibles, planques) VALUES (:titre, :description, :code_name, :pays, :type_de_mission, :statut, :specialite, :DateDebut, :DateFin, :id_agents, :contacts, :cibles, :planques);';
        echo($requete);
  
        $reponse=$connexion->prepare($requete);
        $reponse->execute(array(
        'titre' => $titre, 
        'description' => $description, 
        'code_name' => $code_name,
        'pays' => $pays,
        'type_de_mission' => $type_de_mission,
        'statut' => $statut,
        'specialite' => $specialite,
        'DateDebut' => $date_debut,
        'DateFin' => $date_fin,
        'id_agents' => $id_agents,
        'contacts '=> $contacts,
        'cibles' => $cibles,
        'planques' => $planques
        ));
     
        
      }
   }



   
?>
