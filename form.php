
/* @author heythem Nouari */


<!DOCTYPE html>
<html>
<head>
	<title>recherche</title>
   
	<link href="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/3.3.0/js/bootstrap.min.js"></script>
    <script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
    <script type="text/javascript" src="search.js"></script>
    <link rel="stylesheet" type="text/css" href="search.css">
</head>
<body>


<DIV ALIGN="CENTER">
<h1> vous cherchez : </h1>
</DIV>

<div class="container" >
    	<div class="row">
			<div class="col-md-6 col-md-offset-3">
				<div class="panel panel-service">
					<div class="panel-heading">
						<div class="row">
							<div class="col-xs-6">
								<a href="#" class="active" id="service-form-link">GROS OEUVRES</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="bien-form-link">PETIT OEUVRE</a>
							</div>
							
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form action="search.php" method="post" >
									<div id="service-form" style="display: block;">	
										<div class="form-group">
											<label> présizer le nom du service recherché : </label>
											<input type="text" name="des"  tabindex="2" class="form-control" placeholder="descriprion">
										</div>
										
									</div>
									/* LA TU RAJOUTES LES INPUT DES GROS OEUVRES */
									
									/* JUSQU'ICI *****/
									<div id="bien-form"   style="display: none;">
										
										<div class="form-group">
											<label> présizer le nom du bien recherché : </label>
											<input type="text" name="des_b"  tabindex="2" class="form-control" placeholder="descriprion">
										</div>
										/* LA TU RAJOUTES LES INPUT DES PETIT OEUVRES */
									
											/* JUSQU'ICI *****/
										<div class="form-group">
											<div class="row">
												<div class="col-sm-6 col-sm-offset-3">
													<input type="submit" name="bien-submit" id="bien-submit" tabindex="4" class="form-control btn btn-bien" value="chercher">
												</div>
											</div>
										</div>
									</div>
								</form>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
        
    </body>
	</html>
	
	
