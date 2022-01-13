<?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'rootpassword';
   $conn =  new mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . new mysql_error());
   }
   
   echo 'Connected successfully';
   
   $sql = 'CREATE Database test_db';
   $retval = new mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not create database: ' . new mysql_error());
   }
   
   echo "Database test_db created successfully\n";
   new mysql_close($conn);