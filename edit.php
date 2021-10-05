<?php
	//include our connection
	include 'dbconfig.php';

	//get the row of selected id
    $sql = "SELECT rowid, * FROM avis WHERE rowid = '".$_GET['id']."'";
	$query = $db->query($sql);
	$row = $query->fetchArray();

?>
<!DOCTYPE html>
<html>
<head>

	<meta charset="utf-8">
	<title>CRUD Operation on SQLite3 Database using PHP</title>
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>

		<div class="container">
		<?php
    			
    			include 'header.php'
				?>
<div class="card" style="width: 18rem;">
  <div class="card-body">
    <h5 class="card-title">nom:<?php echo $row['username']; ?> </h5>
    <h6 class="card-subtitle">email : <?php echo $row['email']; ?></h6>
    <p class="card-text">avis:</p>
    <p class="card-text"><?php echo $row['avis_text']; ?></p>
    <p class="card-text">note: <?php echo $row['numberrange']; ?></p>
    <div class="input-group-prepend">
    <form method="POST">
    <input type="submit" name="true" value="true" >
    <input type="submit" name="false" value="false" >

  </div>
  </div>
</div>

</div>
<?php
	if(isset($_POST['true'])){
	
		
		//update our table
		$sql = "UPDATE avis SET is_verified = 'true'WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);

		header('location: index.php');
	}
    if(isset($_POST['false'])){
	
		
		//update our table
		$sql = "UPDATE avis SET is_verified = 'false'WHERE rowid = '".$_GET['id']."'";
		$db->exec($sql);

		header('location: index.php');
	}
?>
</body>
</html>