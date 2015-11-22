<?php
mysql_connect(
$IP = "0.0.0.0",
$user = "shhsjcava");
mysql_select_db("world");


$LOOKUP = $_REQUEST['lookup'];
$ALL = $_EQUEST['all'];

if($ALL=="true"){


$results = mysql_query("SELECT * FROM countries");  
print $results;  
}
else{
  #execute a SQL query on the database
$results = mysql_query("SELECT * FROM countries WHERE name LIKE '%$LOOKUP%';");
print $results;
}

#loop through each country
while ($row = mysql_fetch_array($results)) {
  ?>
  <li> <?php echo $row["name"]; ?>, ruled by <?php echo $row["head_of_state"]; ?> </li>
  <?php
}
?>
