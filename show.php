<?php

require_once(ABSPATH . 'wp-config.php');
  $connection = mysqli_connect(DB_HOST, DB_USER, DB_PASSWORD);
  mysqli_select_db($connection, DB_NAME);



$sql = "SELECT * from FistPlugins";
if($result = mysqli_query($connection, $sql)){
    if(mysqli_num_rows($result) > 0){
        echo '<table class="form-table">';
            echo "<tr>";
                
                echo "<th>First name</th>";
                echo "<th>Last name</th>";
                echo "<th>Password</th>";
                echo "<th>Description</th>";
                echo "<th>Option</th>";
            echo "</tr>";
        while($row = mysqli_fetch_array($result)){
            echo "<tr>";
                echo "<td>" . $row['username'] . "</td>";
                echo "<td>" . $row['fname'] . "</td>";
                echo "<td>" . $row['password'] . "</td>";
                echo "<td>" . $row['descriptions'] . "</td>";
                echo "<td>" . $row['Options'] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
    }



}

?>