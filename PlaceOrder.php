
    <?php
   $dbhost = 'localhost:3036';
   $dbuser = 'root';
   $dbpass = 'pizzapizza';
   $conn = mysql_connect($dbhost, $dbuser, $dbpass);
   
   if(! $conn ) {
      die('Could not connect: ' . mysql_error());
   }
   
   $sql = 'INSERT INTO test_table '.
      '(id, name) '.
      'VALUES ( 1, "John Smith" )';
      
   mysql_select_db('pizzaDB');
   $retval = mysql_query( $sql, $conn );
   
   if(! $retval ) {
      die('Could not enter data: ' . mysql_error());
   }
   
   echo "Entered data successfully\n";
   
   mysql_close($conn);


?>




