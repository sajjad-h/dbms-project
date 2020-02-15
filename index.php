<html>

<head>
	<title> blood to save life </title>
</head>

<body>
	<h1 align="center"> Welcome to Blood Bank Management System! </h1>
	<p align='center'> <a href="addDonor.html"> Add Donor </a> </p>

	<?php
		if (isset($_POST['filter_order_type'])) {
			$entry_order_type = $_POST['filter_order_type'];
		}
		else {
			$entry_order_type = "ALL";
		}


	?>


	
	<form action="#" method="post">
	
	<table align="center"> 
	
	<tr> 
		<td> BloodGroup: </td> 
		<td> 
			<select name="filter_order_type" id="input-order-type">
				<option value="ALL" <?php if($entry_order_type=="ALL") { echo "selected"; } ?> > ALL </option>
				<option value="A+" <?php if($entry_order_type=="A+")   { echo "selected"; } ?> > A+ </option>
				<option value="A-" <?php if($entry_order_type=="A-")   { echo "selected"; } ?> > A- </option>
				<option value="B+" <?php if($entry_order_type=="B+")   { echo "selected"; } ?> > B+ </option>
				<option value="B-" <?php if($entry_order_type=="B-")   { echo "selected"; } ?> > B- </option>
				<option value="O+" <?php if($entry_order_type=="O+")   { echo "selected"; } ?> > O+ </option>
				<option value="O-" <?php if($entry_order_type=="O-")   { echo "selected"; } ?> > O- </option>
				<option value="AB+" <?php if($entry_order_type=="AB+") { echo "selected"; } ?> > AB+ </option>
				<option value="AB-" <?php if($entry_order_type=="AB-") { echo "selected"; } ?> > AB- </option>
			</select>
		</td>
		
		<td> <input type="submit" name="submit" value="Select"> </td>
		
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

$b_type = isset($_POST['filter_order_type']) ? $_POST['filter_order_type'] : "ALL";

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