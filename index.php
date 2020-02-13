<html>

<head>
	<title> blood to save life </title>

</head>

<body>
	<h1 align="center"> Welcome to Blood Bank Management System! </h1>
	<p align='center'> <a href="addDonor.html"> Add Donor </a> </p>
	
	<form action="#" method="post">
	
	<table align="center"> 
	
	<tr> 
		<td> BloodGroup: </td> 
		<td> 
			<select name="blood">
			<option value="ALL" selected> ALL </option>
			<option value="Apos"> A+ </option>
			<option value="Aneg"> A- </option>
			<option value="Bpos"> B+ </option>
			<option value="Bneg"> B- </option>
			<option value="Opos"> O+ </option>
			<option value="Oneg"> O- </option>
			<option value="ABpos"> AB+ </option>
			<option value="ABneg"> AB- </option>
			</select>
		</td>
		
		<td> <input type="submit" name="submit" value="Select"> </td>
		
		<?php
		if(isset($_POST['submit'])){
			$selected_val = $_POST['blood'];  // Storing Selected Value In Variable
			echo "You have selected :" .$selected_val;  // Displaying Selected Value
			$url = "Location: index.php?b_type=" . $_POST['blood'];
			header($url);
			#header( "Location: index.php" );
			exit ;
		}
		?>
		
	</tr>
	
	</table>
	
	</form>
	
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
# echo " >>> Connected successfully! <br>";

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
	case "Bpos":
		$b_type = "B+";
		break;
	case "Bneg":
		$b_type = "B-";
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

if (mysqli_num_rows($result) > 0) {
	echo "<p align='center' style='font-size:18'> Total <b>" . mysqli_num_rows($result) . "</b> persons available for <b>'" . $b_type . "'</b> Blood Group</p>";
	
	echo "<table border = '2' align = 'center'>";

	echo "<tr>"; 
	echo "<th colspan=7> <h3> Blood Donor Information </h3> </th>";
	echo "</tr>";

	echo "<tr>"; 
	echo "<th> DonorID </th>";
	echo "<th> Name </th>";
	echo "<th> Age </th>";
	echo "<th> BloodGroup </th>";
	echo "<th> Mobile </th>";
	echo "<th> Address </th>";
	echo "<th> City </th>";
	echo "</tr>";
	
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
	
	echo "</table>";
}
else {
	echo "<p align='center' style='font-size:18'> <b>NO</b> person available for <b>'" . $b_type . "'</b> Blood Group</p>";
}


?>