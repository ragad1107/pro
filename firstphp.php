<!DOCTYPE html>
<html>
<head>
      <title> hello </title>
</head>
<body>
      <?php

$con = mysqli_connect("localhost","root","","datapro");
echo "Connected successfully";
echo "<br />";

mysqli_query($con,"CREATE TABLE IF NOT EXISTS artproj(
		Id INT NOT NULL AUTO_INCREMENT,
		PRIMARY KEY(id),
		Art VARCHAR(30),
		Type INT)")
	 or die( mysqli_connect_error());
	echo "Table Created!";
echo "<br />";

mysqli_query($con,"INSERT INTO artproj(Art, Type) VALUES ('draw','4')")  or
die( mysqli_connect_error() );
mysqli_query($con,"INSERT INTO artproj(Art, Type) VALUES ('embroidery','2')") or
die( mysqli_connect_error() );
mysqli_query($con,"INSERT INTO artproj(Art, Type) VALUES ('Sculpture','2')")  or
die( mysqli_connect_error() );
mysqli_query($con,"INSERT INTO artproj(Art, Type) VALUES ('earthenware','2')") or
die( mysqli_connect_error() );
mysqli_query($con,"INSERT INTO artproj(Art, Type) VALUES ('Wicker','2')") or
die( mysqli_connect_error() );

echo "Data inserted...";
echo "<br />";
echo "<br />";


	$result = mysqli_query($con, "SELECT * FROM artproj")
or die( mysqli_connect_error());
	$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	echo "Art : ".$row['Art']. " - ";
	echo " Type : ".$row['Type'];
echo "<br />";
$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	echo "Art : ".$row['Art']. " - ";
	echo " Type : ".$row['Type'];
echo "<br />";
$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	echo "Art : ".$row['Art']. " - ";
	echo " Type : ".$row['Type'];
echo "<br />";
$row = mysqli_fetch_array ($result, MYSQLI_ASSOC);
	echo "Art : ".$row['Art']. " - ";
	echo " Type : ".$row['Type'];
echo "<br />";
echo "<br />";
      ?>
</body>
</html>
