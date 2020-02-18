<?php require("dbconnect.php"); ?>

<html>

<head>
	<title> Statistics </title>

</head>

<body>
	<h1 align="center"> Welcome to Blood Bank Management System! </h1>
	<h2 align="center"> Statistics </h2>
	<table align="center" border='2'>
	
	<tr>
		<td> <b> Total Donors </b> </td>
		<td align='center'> 
			<?php 
				$q = "select count(DonorID) as cnt from donor;";
				$result = mysqli_query($con, $q);
				$row = mysqli_fetch_assoc($result);
				echo $row['cnt'];
			?>
		</td>
	</tr>
		<?php 
			$q = "select BloodGroup, count(DonorID) as cnt from donor group by BloodGroup;";
			$result = mysqli_query($con, $q);
			while ($row = mysqli_fetch_assoc($result)) {
				echo "<tr>";
				echo "<td align='center'> <b>" . $row["BloodGroup"] . "</b> </td>";
				echo "<td align='center' height = '30' width = '80'>" . $row["cnt"] . "</td>";
				echo "</tr>";
			}
		?>
	</table>
	
	<a href="index.php"> <h2 align="center"> Home </h2> </a>
	
</body>

</html>

