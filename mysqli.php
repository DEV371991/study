
      <?php
         $dbhost = 'localhost';
         $dbuser = 'root';
         $dbpass = '';
         $dbname = 'study';
         $mysqli = mysqli_connect($dbhost, $dbuser, $dbpass,);
         
         if($mysqli) {
            echo "Connected successfully";
            
         }else{
           echo'Connected successfully'; 
         }
         
   
      ?>
