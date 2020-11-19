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
					$delai=1; 
    				$url='http://localhost/projet_concierge/index.php';
    				header("Refresh: $delai;url=$url");
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
function historicale(){
	if (isset($_GET['validation'])&& $_GET['validation']=="historiquee"){
		$db=connect();
		$floor = $_GET['id'];
		$recup= $db->prepare('SELECT * FROM intervention WHERE Floor_Intervention="'.$floor.'" ORDER BY Date_Intervention desc');
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
function historicald(){
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



/**
 * listei
 *
 * return void
 */
function listei(){
	$db=connect();
	$sql='SELECT * FROM `intervention` ORDER BY `Date_Intervention` desc';
	$query=$db->prepare($sql);
	$query->execute();
	$reply = $query->fetchAll(PDO::FETCH_ASSOC);

	foreach($reply as $product){
		echo '<tr>
		<td><input type="text" name="idsupr" value='.$product['Id_Intervention'].'></td>
        <td>'.$product['Type_Intervention'].'</td>
        <td>'.$product['Floor_Intervention'].'</td>
		<td>'.$product['Date_Intervention'].'</td>
		<td><form method="GET"><button type="submit" class="btn btn-success" value="edit" name="edit">Modifier</button></form></td>
        </tr>';
	}

	$sql='SELECT * FROM `intervention`';
	$query=$db->prepare($sql);
	$query->execute();
	$reply = $query->fetchAll(PDO::FETCH_ASSOC);
	if(isset($_GET['edit'])&& $_GET['edit']=='edit'){
		echo '<form method="GET">
		<div class="form-row align-items-center">
		<div class="col-sm-3 my-1">
			<label class="sr-only" for="type">Type</label>
			<input type="text" id="type" name="id" class="form-control" placeholder="'.$product['Id_Intervention'].'">
		  </div>
		  <div class="col-sm-3 my-1">
			<label class="sr-only" for="type">Type</label>
			<input type="text" id="type" name="type" class="form-control" placeholder="'.$product['Type_Intervention'].'">
		  </div>
		  <div class="col-sm-3 my-1">
			<label class="sr-only" for="floor">Etage</label>
			<input type="text" id="type" name="floor" class="form-control" placeholder="'.$product['Floor_Intervention'].'">
		  </div>
		  <div class="col-sm-3 my-1">
			<label class="sr-only" for="date">Date</label>
			<input type="date" id="type" name="date" class="form-control" placeholder="'.$product['Date_Intervention'].'">
		  </div>
		  <div class="col-auto my-1">
			<button type="submit" class="btn btn-success" name="edit1" value="edit1">Valider</button>
		  </div>
		</div>
	  </form>';
}		
}

/**
 * edit
 *
 * return void
 */
function edit(){
	$db=connect();
	if(isset($_GET['edit1']) && !empty($_GET['id']) && !empty($_GET['type']) && !empty($_GET['floor']) && !empty($_GET['date'])){
	
	$edit_task= $db->prepare('UPDATE `intervention` SET `Type_Intervention`=:type_, `Floor_Intervention`=:floor_, `Date_Intervention`=:date_ WHERE Id_Intervention=:id');
    $edit_task->bindParam(':id',$_GET['id'], PDO::PARAM_INT);
    $edit_task->bindParam(':type_',$_GET['type'], PDO::PARAM_STR);
    $edit_task->bindParam(':floor_',$_GET['floor'], PDO::PARAM_INT);
    $edit_task->bindParam(':date_',$_GET['date'], PDO::PARAM_STR);

    $edit_task= $edit_task->execute();

     if($edit_task){
		 echo 'Votre enregistrement à bien été modifié.';
		 		$delai=1; 
    			$url='http://localhost/projet_concierge/View/listview.php';
    			header("Refresh: $delai;url=$url");
     } else {
         echo 'Veuillez recommencer svp.';
     }
}
}
?>