<script type="text/javascript" src="Scripts/jquery-2.1.1.min.js"></script>
<script type="text/javascript" src="Scripts/bootstrap.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.css  " >
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous"></script>
<nav class="navbar navbar-expand-lg navbar-dark bg-primary">
  <div class="container-fluid">
    <a class="navbar-brand" href="accueil.php">Accueil</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarColor01" aria-controls="navbarColor01" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarColor01">
      <ul class="navbar-nav me-auto">

        </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Ajouter</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="Ajouter.php?type=un agent">Agent</a>
            <a class="dropdown-item" href="Ajouter.php?type=une cible">Cible</a>
            <a class="dropdown-item" href="Ajouter.php?type=un contact">Contact</a>
            <a class="dropdown-item" href="Ajouter.php?type=une mission">Mission</a>
            <a class="dropdown-item" href="Ajouter.php?type=une planque">Planques</a>
            </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Lister et modifier</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="ListerAgents.php?type=un agent">Agent</a>
            <a class="dropdown-item" href="ListerCibles.php?type=une cible">Cible</a>
            <a class="dropdown-item" href="ListerContacts.php?type=un contact">Contact</a>
            <a class="dropdown-item" href="ListerMissions.php?type=une mission">Mission</a>
            <a class="dropdown-item" href="ListerPlanques.php?type=une planque">Planques</a>

            </li> 
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button" aria-haspopup="true" aria-expanded="false">Supprimer</a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="supprimer.php?type=un agent">Agent</a>
            <a class="dropdown-item" href="supprimer.php?type=une cible">Cible</a>
            <a class="dropdown-item" href="supprimer.php?type=un contact">Contact</a>
            <a class="dropdown-item" href="supprimer.php?type=une mission">Mission</a>
            <a class="dropdown-item" href="supprimer.php?type=une planque">Planques</a>

        </li> 

      </ul>
    </div>
  </div>
</nav>