<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$name = (isset($_POST['name']) ? $_POST['name'] : '');
$age = (isset($_POST['age']) ? $_POST['age'] : '');
$bloodgroup = (isset($_POST['bloodgroup']) ? $_POST['bloodgroup'] : '');
$mobile = (isset($_POST['mobile']) ? $_POST['mobile'] : '');
$address = (isset($_POST['address']) ? $_POST['address'] : '');
$city = (isset($_POST['city']) ? $_POST['city'] : '');

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
echo "<br> >>> Connected successfully! <br>";

/**
$name = $_POST['name'];
$age = $_POST['age'];
$bloodgroup = $_POST['bloodgroup'];
$mobile = $_POST['mobile'];
$address = $_POST['address'];
$city = $_POST['city'];
**/

$stmt = $con->prepare("INSERT INTO donor (Name, Age, BloodGroup, Mobile, Address, City) VALUES (?, ?, ?, ?, ?, ?)");
$stmt->bind_param("ssssss", $name, $age, $bloodgroup, $mobile, $address, $city);

$stmt->execute();
$stmt->close();

header( "Location: index.php" );
exit ;

$sql = "select * from donor";
$result = $con->query($sql);

echo "<table border = '2' align = 'center'>";

echo "<tr>"; 
echo "<th> DonorID </th>";
echo "<th> Name </th>";
echo "<th> Age </th>";
echo "<th> BloodGroup </th>";
echo "<th> Mobile </th>";
echo "<th> Address </th>";
echo "<th> City </th>";
echo "</tr>";

if (mysqli_num_rows($result) > 0) {
	while ($row = mysqli_fetch_assoc($result)) {
		echo "<tr>";
		echo "<td>" . $row["DonorID"] . "</td>";
		echo "<td>" . $row["Name"] . "</td>";
		echo "<td>" . $row["Age"] . "</td>";
		echo "<td>" . $row["BloodGroup"] . "</td>";
		echo "<td>" . $row["Mobile"] . "</td>";
		echo "<td>" . $row["Address"] . "</td>";
		echo "<td>" . $row["City"] . "</td>";
		/**echo "ID: " . $row["DonorID"]. " - Name: " . $row["Name"]. " " . $row["City"] . "<br>";**/
		echo "</tr>";
	}
}

echo "</table>";

?>