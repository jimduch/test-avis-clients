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
  
    <table border="1">
    	<thead>
    		<th>ID</th>
    		<th>nom</th>
    		<th>email</th>
    		<th>avis</th>
    		<th>vote</th>
            <th>modération</th>
    	</thead>
    	<tbody>
    		<?php
    			//include our connection
    			include 'dbconfig.php';
     
    			//query from the table that we create
    			$sql = "SELECT id, * FROM avis where is_verified like 'true'";
    			$query = $db->query($sql);
     
    			while($row = $query->fetchArray()){
    				echo "
    					<tr>
    						<td>".$row['id']."</td>
    						<td>".$row['username']."</td>
    						<td>".$row['email']."</td>
    						<td>".$row['avis_text']."</td>
                            <td>".$row['numberrange']."</td>
                            <td>".$row['is_verified']."</td>
    					
    						</td>
						
    					</tr>
    				";
    			}
    		?>
    	</tbody>
    </table>
	</div>
    </body>
    </html>