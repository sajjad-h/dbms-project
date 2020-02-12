<html>

<head>
	<title> blood to save life </title>

</head>

<body>
	<h1 align="center"> Welcome to blood management system! </h1>
	<p align='center'> <a href="addDonor.html"> Add Donor </a> </p>
</body>

</html>

<?php

$servername = "localhost";
$username = "root";
$password = "";
$dbname = "project";

$con = mysqli_connect($servername, $username, $password, $dbname);

if (!$con) {
	die("Connection failed: " . mysqli_connect_error());
}
echo " >>> Connected successfully! <br>";

$_GET['b_type'] = (isset($_GET['b_type']) ? $_GET['b_type'] : '');

switch ($_GET['b_type']) {
	case "Opos":
		$b_type = "O+";
		break;
	case "Oneg":
		$b_type = "O-";
		break;
	case "Apos":
		$b_type = "A+";
		break;
	case "Aneg":
		$b_type = "A-";
		break;
	case "ABpos":
		$b_type = "AB+";
		break;
	case "ABneg":
		$b_type = "AB-";
		break;
	default:
		$b_type = "ALL";
}

if ($b_type == "ALL") {
	$stmt = $con->prepare("select * from donor order by DonorID");
}
else {
	$stmt = $con->prepare("select * from donor where BloodGroup = ? order by DonorID");
	$stmt->bind_param("s", $b_type);
}
$stmt->execute();
$result = $stmt->get_result();
$stmt->close();

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
		echo "<td align = 'center'>" . $row["DonorID"] . "</td>";
		echo "<td align = 'center'>" . $row["Name"] . "</td>";
		echo "<td align = 'center'>" . $row["Age"] . "</td>";
		echo "<td align = 'center'>" . $row["BloodGroup"] . "</td>";
		echo "<td align = 'center'>" . $row["Mobile"] . "</td>";
		echo "<td align = 'center'>" . $row["Address"] . "</td>";
		echo "<td align = 'center'>" . $row["City"] . "</td>";
		/**echo "ID: " . $row["DonorID"]. " - Name: " . $row["Name"]. " " . $row["City"] . "<br>";**/
		echo "</tr>";
	}
}

echo "</table>";

?>