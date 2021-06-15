<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "bharvi";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     $q = mysqli_query($connection,
     "select * from tbl_user") 
     or die(mysqli_error($connection)) ;
     $row = mysqli_fetch_array($q);
     echo "<pre>";
     print_r($row);
     echo $row[0].$row[1].$row[2].$row[3].$row[4].$row[5].$row[6].$row[7].$row[8].$row[9];
     echo $row['id'].$row['user_name'].$row['email'].$row['password'].$row['mobile'];

?>