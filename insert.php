<?php

$database = "test";
$first = $_POST['first'];
$last = $_POST['last'];

$con = mysql_connect("localhost", "root", "");
if (!$con) {
	die('Could not connect:'.mysql_error());
}
mysql_select_db("$database",$con);

$query = "insert into info (first, last) values ('$first', '$last');";
mysql_query($query);

echo "<script type = 'text/javascript'>\n";
echo "alert('you are successfully registered');\n";
echo "</scripy>";

mysql_close();
?>