<?php 
session_start();
/* @author heythem Nouari */
?>

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

<?php include("menu.php");
if(isset($_SESSION['user'])){
	?>
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
								<a href="#" class="active" id="service-form-link">un service</a>
							</div>
							<div class="col-xs-6">
								<a href="#" id="bien-form-link">un bien</a>
							</div>
						</div>
						<hr>
					</div>
					<div class="panel-body">
						<div class="row">
							<div class="col-lg-12">
								<form id="service-form" action="search.php" method="post"  style="display: block;">
									<div class="form-group">
                                        <label> catégorie : </label>
										<select name="categorie">
                                        <option value="aide menagere">aide ménagere</option>
                                        <option value="plombrie">plombrie</option>
                                        <option value="cours particuliers">cours particuliers</option>
                                        </select>
									</div>
									<div class="form-group">
                                        <label> présizer le nom du service recherché : </label>
										<input type="text" name="des"  tabindex="2" class="form-control" placeholder="descriprion">
									</div>
									<div class="form-group ">
                                        <label> du : </label>
										<input type="date" tabindex="3" class="" name="d_debut">
										<label> jusqu'au : </label>
                                        <input type="date" tabindex="3" class="" name="d_fin">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="service-submit" id="service-submit" tabindex="4" class="form-control btn btn-service" value="chercher">
											</div>
										</div>
									</div>
									
									
								</form>
								<form id="bien-form" action="search.php" method="post"  style="display: none;">
									<div class="form-group">
                                        <label> catégorie : </label>
										<select name="categorie_b">
                                        <option value="vehicule"> véhicule</option>
                                        <option value="electromenager">électroménager</option>
                                        <option value="meubles">meubles</option>
                                        </select>
									</div>
									<div class="form-group">
                                        <label> présizer le nom du bien recherché : </label>
										<input type="text" name="des_b"  tabindex="2" class="form-control" placeholder="descriprion">
									</div>
									<div class="form-group ">
                                        <label> du : </label>
										<input type="date" tabindex="3" class="" name="d_debut_b">
										<label> jusqu'au : </label>
                                        <input type="date" tabindex="3" class="" name="d_fin_b">
									</div>
									<div class="form-group">
										<div class="row">
											<div class="col-sm-6 col-sm-offset-3">
												<input type="submit" name="bien-submit" id="bien-submit" tabindex="4" class="form-control btn btn-bien" value="chercher">
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
	
	<?php
/*     service   */
if(isset($_POST['categorie']) && isset($_POST['des']) && isset($_POST['d_debut']) && isset($_POST['d_fin']))
{
	$bd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
	$s = $bd->query(" select des,id_membre,id from service where categorie = '".$_POST['categorie']."' and ".
	"des like '%".$_POST['des']."%' and '".$_POST['d_debut']."'>= d_debut "."
	and '".$_POST['d_fin']."' <= d_fin and id not in (select id_service from reservation)");
		
	
	?>
	<form action="search.php" method="post">
	<?php
	while($donnee = $s->fetch()){
		$n=$bd->query("select email from membre where id = ".$donnee['id_membre']."");
		$mail=$n->fetch() ;
		?> <div class = "result"  ALIGN="CENTER">
		<input type="radio" name="service" value="<?php echo $donnee['id'];?>">  <?php echo $donnee['des']." et le mail est :".$mail['email']." son id est:".$donnee['id']."" ;?>  
		</div>
		
		 <br /> <?php
		 
	}
	?>
	
	<div class="col-sm-6 col-sm-offset-3">
	<input type="submit" id="service-submit" tabindex="4" class="form-control btn btn-bien" value="réserver">
</div>
	</form>
<?php
}
/*** bien  */
if(isset($_POST['categorie_b']) && isset($_POST['des_b']) && isset($_POST['d_debut_b']) && isset($_POST['d_fin_b']))
{
	$bd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
	$s = $bd->query(" select des,id_membre,id from bien where categorie = '".$_POST['categorie_b']."' and ".
	"des like '%".$_POST['des_b']."%' and '".$_POST['d_debut_b']."'>= d_debut ".
	"and '".$_POST['d_fin_b']."' <= d_fin "."
		and id not in (select id_bien from reservation)");
	?>
	<form action="search.php" method="post">
	<?php
	if($s == null){ echo "y a pas ";}
	while($donnee = $s->fetch()){

		$n=$bd->query("select email from membre where id = ".$donnee['id_membre']."");
		$mail=$n->fetch() ;
		?> <div class = "result"  ALIGN="CENTER">
		<input type="radio" name="bien" value="<?php echo $donnee['id'] ;?>">  <?php echo $donnee['des']." et le mail est :".$mail['email'] ;?> 
		</div>
		
		 <br /> <?php
		 
	}
	?>
	<div class="col-sm-6 col-sm-offset-3">
	<input type="submit" id="bien-submit" tabindex="4" class="form-control btn btn-bien" value="réserver">
</div>
	</form>
<?php
}

/* réservation  */

if(isset($_POST['service'])){

		$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
		$sql = $bdd->query(" SELECT id_service FROM reservation WHERE id_service =".$_POST['service']);
			
		$d=$sql->fetch();
		if ($d == FALSE ){
			$sql2 = "INSERT INTO reservation (id_client,id_service,qualite) VALUES (?,?,?)";
			$stmt2= $bdd->prepare($sql2);
			$stmt2->execute([$_SESSION['id'],$_POST['service'],'s']);		

		?>
			<div class="alert alert-success">
				<center> <strong> service réservé ! </strong> </center>
			</div>
		
		
		<?php
		}
		else{
			?>
			<div class="alert alert-danger">
				<center> <strong> le service est déjà pris  ! </strong> </center>
			</div>
		
		
		<?php
		}
}



if(isset($_POST['bien'])){

	$bdd = new PDO('mysql:host=localhost;dbname=projet;charset=utf8', 'root', '');
	$sql = $bdd->query(" SELECT id_bien FROM reservation WHERE id_bien =".$_POST['bien']);
			
	$d=$sql->fetch();
	if ($d == FALSE ){

    $sql = "INSERT INTO reservation (id_client,id_bien,qualite) VALUES (?,?,?)";
    $stmt= $bdd->prepare($sql);
    $stmt->execute([$_SESSION['id'],$_POST['bien'],'b']);
	?>
	<div class="alert alert-success">
	<center> <strong> bien réservé ! </strong> </center>
	</div>
	<?php
	}
	else{
	?>
	<div class="alert alert-danger">
		<center> <strong> le bien est déjà pris  ! </strong> </center>
	</div>


	<?php
	}
}
}

else {echo " vous n'etes pas connecté utiliser la barre en haut pour se connecter" ; }
?>