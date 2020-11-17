<?php
/**
 * connect
 *
 * return void
 */
function connect(){
	try
	{
	    $db = new PDO('mysql:host=localhost;dbname=conciergerie;charset=utf8', 'root', '');
	}
	catch(Exception $e)
	{
	    die('Erreur : '.$e->getMessage());
	}
	return $db;
}



/**
 * intervention
 *
 * return void
 */
function intervention(){

	$db=connect();

	if (isset($_GET['validation'])&& !empty($_GET['type'])&& !empty($_GET['floor'])&& !empty($_GET['date']))
	{
		$add=$db->prepare('INSERT INTO intervention(Type_Intervention, Floor_Intervention, Date_Intervention)
		VALUE (:Type_Intervention,:Floor_Intervention,:Date_Intervention)');
			$add->bindparam(':Type_Intervention',$_GET['type'],PDO::PARAM_STR);
			$add->bindparam(':Floor_Intervention',$_GET['floor'],PDO::PARAM_INT);
			$add->bindparam(':Date_Intervention',$_GET['date'],PDO::PARAM_STR);
			$validation=$add->execute();
				if($validation)
				{
					echo"L'intervention a bien été ajoutée";
					echo '<script language="Javascript">
					document.location.replace("index.php");
					</script>';
				}

				else
				{
					echo"Veuillez recommencer svp, une erreur est survenue";
				}
	}
}



/**
 * floorDisplay
 *
 * return void
 */
function floorDisplay(){

	$db=connect();
	
	$answer=$db->query('SELECT Floor_Intervention FROM intervention GROUP BY Floor_Intervention');
	echo'<select class="custom-select " name="id">';
    echo'<option value="NULL">Choisir l\'étage</option>';
	while ($data = $answer->fetch()) {
        echo"<option value=".$data['Floor_Intervention'].">".$data['Floor_Intervention']."</option>";
    }
	echo'</select>';

}



/**
 * historiquee
 *
 * return void
 */
function historiquee(){
	if (isset($_GET['validation'])&& $_GET['validation']=="historiquee"){
		$db=connect();
		$floor = $_GET['id'];
		$recup= $db->prepare('SELECT * FROM intervention WHERE Floor_Intervention="'.$floor.'"');
		$recup->execute();
		echo '<div class="container my-5">
		<h2 class=" text-center py-5"> Historique de l\'étage '.$floor.'</h2>
		<table class="table">
		<thead class="bg_entete_tab">
		<tr>
		<th scope="col">Type d\'intervention</th>
		<th scope="col">étage</th>
		<th scope="col">Date d\'intervention</th>
		</tr>
		</thead>
		<tbody>';	

		while($data = $recup->fetch())
		{
		echo '<tr class=" "><td>'.$data['Type_Intervention'].'</td><td>'.$data['Floor_Intervention'].'</td><td>'.$data['Date_Intervention'].'</td></tr>';
		}
		echo'</tbody></table></div>';
    }
	
}



/**
 * dateDisplay
 *
 * return void
 */
function dateDisplay(){

	$db=connect();
	
	$answer=$db->query( 'SELECT * FROM intervention GROUP BY Date_Intervention');
	echo'<select class="custom-select " name="id">';
	echo'<option value="NULL">Choisir la date</option>';
	while ($data = $answer->fetch()) {
        echo"<option value=".$data['Date_Intervention'].">".$data['Date_Intervention']."</option>";
    }
	echo'</select>';
}



/**
 * historiqued
 *
 * return void
 */
function historiqued(){
	if (isset($_GET['validation'])&& $_GET['validation']=="historiqued"){
		$db=connect();
		$date = $_GET['id'];
		$recup= $db->prepare('SELECT * FROM intervention WHERE Date_Intervention="'.$date.'"');
		$recup->execute();
		echo '<div class="container my-5">
		<h2 class=" text-center py-5"> Historique du '.$date.'</h2>
		<table class="table">
		<thead class="bg_entete_tab">
		<tr>
		<th scope="col">Type d\'intervention</th>
		<th scope="col">étage</th>
		<th scope="col">Date d\'intervention</th>
		</tr>
		</thead>
		<tbody>';	

		while($data = $recup->fetch())
		{
		echo '<tr class=" "><td>'.$data['Type_Intervention'].'</td><td>'.$data['Floor_Intervention'].'</td><td>'.$data['Date_Intervention'].'</td></tr>';
		}
		echo'</tbody></table></div>';
    }
	
}



?>