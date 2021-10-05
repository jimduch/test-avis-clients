<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<title>CRUD Operation on SQLite3 Database using PHP</title>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

</head>
<body>
<form method="POST">
	<a href="index.php">Back</a>
	<p>
		<label for="username">Nom</label>
		<input type="text" id="username" name="username">
	</p>
	<p>
		<label for="email">Email:</label>
	
        <input type="email"name="email" class="form-control" placeholder="name@example.com">
	</p>
	<p>
		<label for="avis_text">Avis:</label>
	
        <textarea class="form-control"  name="avis_text" rows="3"></textarea>
	</p>
    
    <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="numberrange" value="1">
  <label class="form-check-label" for="numberrange">1</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="numberrange" value="2">
  <label class="form-check-label" for="numberrange">2</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="numberrange"value="3">
  <label class="form-check-label" for="numberrange">3</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="numberrange"value="4">
  <label class="form-check-label" for="numberrange">4</label>
  </div>
  <div class="form-check form-check-inline">
  <input class="form-check-input" type="radio" name="numberrange" value="5">
  <label class="form-check-label" for="numberrange">5</label>
	</div>
	<input type="submit" name="save" value="Save">
</form>
<?php
	if(isset($_POST['save'])){
		//include our connection
		include 'dbconfig.php';

		//insert query
		$sql = "INSERT INTO avis (username, email, avis_text,numberrange) 
        VALUES ('".$_POST['username']."',
         '".$_POST['email']."',
          '".$_POST['avis_text']."',
         '".$_POST['numberrange']."')";
		$db->exec($sql);

		header('location: index.php');

	}
?>
</body>
</html>