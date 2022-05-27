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
        <h1>Ajouter une cible</h1>
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
                                        <div class="form-group"> <label for="form_lastname">Identifiant</label> <input  id="form_lastname" type="text" name="id_code" class="form-control" placeholder="Saisissez un identidiant..."   required="required" data-error="Lastname is required."> </div>
                                    </div>

                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Prénom</label> <input id="form_name" type="text" name="Prenom" class="form-control" placeholder="Saisissez un prénom..." required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Nom</label> <input  id="form_lastname" type="text" name="Nom" class="form-control" placeholder="Saisissez un nom..."   required="required" data-error="Lastname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_name">Date de naissance</label> <input id="form_name" type="text" name="Birthday" class="form-control" placeholder="yyyy/mm/dd" required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Nationalité</label> <input  id="form_lastname" type="text" name="Nationalite" class="form-control" placeholder="Saisissez une nationalité..." required="required" data-error="Lastname is required."> </div>
                                    </div>

                                    
                                    
                                    
                                </div>
                                   
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12"><input type="submit" class="btn btn-primary" value="Enregistrer l'agent"></div>
                                    
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


