<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.css  " >
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="include/style.css" />
   
   
   <title>Supprimer</title>
 </head>
 <body>
   

<form id="contactForm" action="#" method="post" >
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Supprimer <?php echo($_GET['type']); ?></h1>
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
                                        <div class="form-group"> <label for="form_name">identifiant</label> <input id="form_name" type="text" name="id" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" placeholder="Saisissez l'identifiant..." required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                   
                                    

                                    
                                    
                                </div>
                                   
                                <div class="row">
                                    <div class="col-md-12">
                                        <br>
                                    </div>
                                    <div class="col-md-12"><input type="submit" class="btn btn-primary" value="Connexion"></div>
                                    
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
</body>
</html>
