<?php
    //Create a new SQLite3 Database
    $db = new SQLite3('avis.db');
     
    //Create a new table to our database 
    $query = "CREATE TABLE IF NOT EXISTS avis (
      
        id INTEGER primary key,
        username varchar(255) default NULL,
        email varchar(255) default NULL,
        avis_text TEXT default NULL,
        numberrange INTEGER default NULL,
        is_verified varchar(255)

 

         )";
     
    $db->exec($query);
   
    ?>