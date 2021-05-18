<!doctype html>
<!--formulaire inscription educateur  -->
<html lang="en">
  <head>
   
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <link rel="stylesheet" href="carousel.css">
    <title>altereduc Formulaire</title>
  </head>
  <body>
  <a href="index2.php">index2</a>
    <a href="connect.php">connect</a>
    <a href="subscribe.php"> subscribe</a>
      <div  class ="container">
           
          <img id ="entete" src="img/logo1.png" alt="logo">
      </div>

    <div class="container">
    <h1 class="well">Registration Form</h1>
	    <div class="col-lg-12 well">
	        <div class="row">
				<form method ="post" action ="c_onnect.php" >
					<div class="col-sm-12">
						<div class="row">
							<div class="col-sm-6 form-group">
								
								<input type="text" placeholder="nom" name="nom"class="form-control">
							</div>
							<div class="col-sm-6 form-group">
								
								<input type="text" name = "prenom" placeholder="prenom" class="form-control">
							</div>
						</div>	
                        
                        <div class = "form-group" >
                            <p>Date de naissance:<input type="date" name="dob" id="dob" class="form-control" ></p>
                                
                        </div>
                        <div class ="row">

                            <div class = "col-sm-2 form-group">
                                n°<input type="number" name ="numberstreet" class = "form-control"> 
                            </div>
                            <div class = "col-sm-5 form-group">
                                adresse :<input type="text" name ="street" class = "form-control">
                            </div>
                            <div class ="col-sm-2 form-group" >
                                code postal : <input type="number" name = "zip" class ="form-control">
                            </div>
                            <div class ="col-sm-3 form-group" name ="city" >
                                commune: <input type="text" class ="form-control">
                            </div>
                            <p>Lorem, ipsum dolor.</p>
                            
                        </div>	
                        <div class= "form-group">
                            GSM: <input type="text" class = form-control name ="gsm">
                            GSM2: <input type="text" class = form-control name ="gsm2">
                        </div>
                        <p>Lorem ipsum, dolor sit amet consectetur adipisicing elit. Beatae a nam illo, tempore, fuga harum quae amet architecto unde ea recusandae labore possimus laborum incidunt, quis inventore porro non aperiam?</p>
                        <p>Lorem, ipsum dolor sit amet consectetur adipisicing elit. Laboriosam, blanditiis? Error amet dolor illum! Placeat reiciendis modi nostrum quas earum magni iure non odit porro esse beatae, laboriosam neque reprehenderit?</p>
                        <div class="form-group">
						
						    Email :<input type="email" placeholder="utilisez la meme adresse email" class="form-control">
					    </div>	
                        <div class= "form-group">
                             <input type="hidden" name="MAX_FILE_SIZE" value="100000" class = "form-control" />
                                  Inserer votre cv <input type="file" name="monfichier" class="form-control" />
                        </div>		
						<div class="form-group">
							A propos de vous :
							<textarea  rows="3" class="form-control"></textarea>
                        </div>	
                        <div class="form-group">
							quel type d'activité souhaitez vous ?
							<textarea  rows="3" class="form-control"></textarea>
                        </div>
                        
                         Selectionner votre domaine d activité :
                                <div >
                                    <!-- Default indeterminate -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="sport" >
                                    <label class="custom-control-label" for="sport">sport</label>
                                </div>    

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="culture" >
                                    <label class="custom-control-label" for="culture">Culture</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="scolaire" >
                                    <label class="custom-control-label" for="scolaire">scolaire</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="theatre" >
                                    <label class="custom-control-label" for="theatre">theatre</label>
                                </div>    

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activité 1" >
                                    <label class="custom-control-label" for="activité 1">activité 1</label>
                                </div>

                                <div class="custom-control custom-checkbox">   
                                    <input type="checkbox" class="custom-control-input" id="activité 2">
                                    <label class="custom-control-label" for="activité 2">activité 2</label>
                                
                                </div>

                                <div class="custom-control custom-checkbox">   
                                    <input type="checkbox" class="custom-control-input" id="activité 3">
                                    <label class="custom-control-label" for="activité 3">activité 3</label>
                                </div>

                                
                        </div>
                        <div >
                                    <!-- Default indeterminate -->
                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" class="ecole" >
                                    <label class="custom-control-label" for="Ecole Saint-Joseph Boondael">Ecole Saint-Joseph Boondael</label>
                                </div>    

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="culture" >
                                    <label class="custom-control-label" for="culture">Culture</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="scolaire" >
                                    <label class="custom-control-label" for="scolaire">scolaire</label>
                                </div>

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="theatre" >
                                    <label class="custom-control-label" for="theatre">theatre</label>
                                </div>    

                                <div class="custom-control custom-checkbox">
                                    <input type="checkbox" class="custom-control-input" id="activité 1" >
                                    <label class="custom-control-label" for="activité 1">activité 1</label>
                                </div>

                                <div class="custom-control custom-checkbox">   
                                    <input type="checkbox" class="custom-control-input" id="activité 2">
                                    <label class="custom-control-label" for="activité 2">activité 2</label>
                                
                                </div>

                                <div class="custom-control custom-checkbox">   
                                    <input type="checkbox" class="custom-control-input" id="activité 3">
                                    <label class="custom-control-label" for="activité 3">activité 3</label>
                                </div>

                                
                        </div>
                        </div>
                        </div>
                        <br>
											
							
					
					
					<button type="button" class="btn btn-lg btn-info">Submit</button>					
					</div>
				</form> 
				</div>
	</div>
    </div>
    a

    
    <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
  </body>
</html>