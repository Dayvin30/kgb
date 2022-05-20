<!DOCTYPE html>
<html lang="fr">
 <head>
   <meta charset="UTF-8" />
   <link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.min.css" >
<link rel="stylesheet" type="text/css" href="https://bootswatch.com/5/flatly/bootstrap.css  " >
   <meta http-equiv="X-UA-Compatible" content="IE=edge" />
   <meta name="viewport" content="width=device-width, initial-scale=1.0" />
   <link rel="stylesheet" href="include/style.css" />
   
   
   <title>Connexion</title>
 </head>
 <body>
   

<form id="contactForm" action="#" method="post" >
<div class="container"> <div class=" text-center mt-5 ">
        <h1>Connexion</h1>
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
                                        <div class="form-group"> <label for="form_name">Email</label> <input id="form_name" type="text" name="email" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" placeholder="Saisissez votre adresse e-mail..." required="required" data-error="Firstname is required."> </div>
                                    </div>
                                    
                                    <div class="col-md-6">
                                        <div class="form-group"> <label for="form_lastname">Mot de passe</label> <input  id="form_lastname" type="text" name="password" class="form-control" onClick="this.setSelectionRange(0, this.value.length)" placeholder="Saisissez votre mot de passe..." required="required" data-error="Lastname is required."> </div>
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
