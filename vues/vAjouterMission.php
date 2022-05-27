<!DOCTYPE html>
<html>

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <head><script language="JavaScript" type="text/javascript">

</script></head>
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" crossorigin="anonymous"></script>
<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
<link rel="stylesheet" href="//code.jquery.com/ui/1.13.0/themes/base/jquery-ui.css">
  <link rel="stylesheet" href="/resources/demos/style.css">

  

<body>
<div class="bg-image"
 
     style="background-image: url('https://mdbootstrap.com/img/Photos/Others/images/76.jpg');
            height: 100vh">
<?php include('navbar.php');
?>




<form id="contactForm" action="#" method="post" >
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Ajouter une mission</h1>
    </div>
    <div class="row ">
        <div class="col-lg-7 mx-auto">
            <div class="card mt-2 mx-auto p-4 bg-light">
                <div class="card-body bg-light">
                    <div class="container">
                        <form id="contactForm"  role="form" >
                            <div class="controls">
                                <div class="row">

                                <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Titre</label> <input  id="form_lastname" type="text" name="Titre" class="form-control" placeholder="Saisissez un titre..."   required="required" data-error="Lastname is required."> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Description</label> <input id="form_name" type="text" name="Description" class="form-control" placeholder="Saisissez une description..." required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Nom de code</label> <input  id="form_lastname" type="text" name="Code_name" class="form-control" placeholder="Saisissez un nom de code..."   required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Pays</label> <input id="form_name" type="text" name="Pays" class="form-control" placeholder="Saisissez un pays" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Type de mission</label> <input  id="form_lastname" type="text" name="Type_de_mission" class="form-control" placeholder="Saisissez une mission..." required="required" data-error="Lastname is required."> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Statut</label> <input  id="form_lastname" type="text" name="Statut" class="form-control" placeholder="Saisissez un statut..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Specialite</label> <input  id="form_lastname" type="text" name="Specialite" class="form-control" placeholder="Saisissez une spécialité..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Date de début</label> <input  id="form_lastname" type="text" name="DateDebut" class="form-control" placeholder="Date de début..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Date de fin</label> <input  id="form_lastname" type="text" name="DateFin" class="form-control" placeholder="Date de fin..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Agent</label> <input  id="Agent" type="text" name="Statut" class="form-control" placeholder="Saisissez un agent..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Contact</label> <input  id="form_lastname" type="text" name="Contact" class="form-control" placeholder="Saisissez un contact..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Cible</label> <input  id="form_lastname" type="text" name="Cible" class="form-control" placeholder="Saisissez une cible..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Planque</label> <input  id="form_lastname" type="text" name="Planque" class="form-control" placeholder="Saisissez une planque..." required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    
                                    
                                </div>
                                   
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12"><input type="submit" class="btn btn-primary" value="Enregistrer la mission"></div>
                                    
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div> <!-- /.8 -->
        </div> <!-- /.row-->
    </div>
</div>
</form>
</div>
</body>
</html>


