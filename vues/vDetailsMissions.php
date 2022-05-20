<!DOCTYPE html>
<html>

  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <head><script language="JavaScript" type="text/javascript">
function checkDelete(){
    return confirm('Are you sure?');
}

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
        <h1>Détails de la mission</h1>
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
                                        <div class="form-group"> <label for="form_name">Titre</label> <input id="form_name" type="text" name="titre" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['titre'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Description</label> <input id="form_name" type="text" name="description" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['description'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Code</label> <input  id="form_lastname" type="text" name="code_name" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['code_name']?>" required="required" data-error="Lastname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Pays</label> <input id="form_name" type="text" name="pays" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['pays'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">type de mission</label> <input  id="form_lastname" type="text" name="type_de_mission" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['type_de_mission']?>" required="required" data-error="Lastname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Statut</label> <input id="form_name" type="text" name="statut" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['statut'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Spécialité</label> <input id="form_name" type="text" name="specialite" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['specialite'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Date de début</label> <input  id="form_lastname" type="text" name="date_debut" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['date_debut']?>" required="required" data-error="Lastname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Date de fin</label> <input id="form_name" type="text" name="date_fin" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['date_fin'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Agent</label> <input  id="form_lastname" type="text" name="agents" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['id_agents']?>" required="required" data-error="Lastname is required." readonly> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Contact</label> <input id="form_name" type="text" name="contacts" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['contacts'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Cible</label> <input  id="form_lastname" type="text" name="cibles" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['cibles']?>" required="required" data-error="Lastname is required." readonly> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Planque</label> <input id="form_name" type="text" name="planques" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" value="<?php echo $_GET['planques'] ?>" required="required" data-error="Firstname is required." readonly> </div>
                                    </div>
                                    
                                    
                                    </div>
                                    
                                    
                                </div>
                                   
                               
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


