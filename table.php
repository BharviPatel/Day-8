<?php
     $host = "localhost";
     $username = "root";
     $passwd = "";
     $dbname = "bharvi";
     $connection = mysqli_connect($host,$username,$passwd,$dbname);
     $q = mysqli_query($connection,"select * from users where user_name = 0") or die(mysqli_error($connection));
     echo "<table border = '1'>";
     echo "<tr>";
     echo "<th>ID</th>";
     echo "<th>NAME</th>";
     echo "<th>EMAIL</th>";
     echo "<th>PASSWORD</th>";
     echo "<th>MOBILE</th>";
     echo "</tr>";
    while($row = mysqli_fetch_array($q)){
            echo "<tr>";
            echo "<td>{$row['id']}</td>";
            echo "<td>{$row['user_name']}</td>";
            echo "<td>{$row['email']}</td>";
            echo "<td>{$row['password']}</td>";
            echo "<td>{$row['mobile']}</td>";
            echo "<td><a href='edit.php?id={$row['id']}'>EDIT</a> | <a href='delete.php?deleteid={$row['id']}'>DELETE</a></td>";
            echo "</tr>";
    }
    echo "</table>";
    echo "<a href='main.php'>ADD RECORD</a>";
?>