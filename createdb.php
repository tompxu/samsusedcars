<?php
/**
*Joy of PHP sample code
*Demonstrates how to create a database, create a table, and insert records.
*/

$mysqli = new mysqli('localhost', 'root', '123456');

if(!$mysqli) {
die('Could not connect:'.mysqli_error($mysqli));
}
echo 'Connected successfully to mySQL.<BR>';

/*for testing, drop any existing Cars database*/
$mysqli->query("DROP DATABASE IF EXISTS Cars");

/*Create table doesn't return a resultset*/
if($mysqli->query("CREATE DATABASE Cars")===TRUE) {
echo "<p>Database Cars created</p>";
}
else
{
echo "Error creating Cars database:".mysqli_error($mysqli)."<br>";
}
//select a database to work with
$mysqli->select_db("Cars");
Echo ("Seleted the Cars database");

$query = "CREATE TABLE INVENTORY
(VIN varchar(17) PRIMARY KEY, YEAR INT, Make varchar(50), Model varchar(100),
TRIM varchar(50), EXT_COLOR varchar(50), INT_COLOR varchar(50), ASKING_PRICE DECIMAL(10,2),
SALE_PRICE DECIMAL(10,2), PURCHASE_PRICE DECIMAL(10,2), MILEAGE int, TRANSMISSION varchar(50), PURCHASE_DATE DATE, SALE_DATE DATE)";
//echo "<p>**********</p>";
//echo $query;
//echo "<p>**********</p>";
if ($mysqli->query($query)===TRUE)
{
echo "Database table 'INVENTORY' created</p>";
}
else
{
echo "<p>Error:</p>".mysql_error();
}
//Dates are stored in MySQL as 'YYYY-MM-DD' format
$query = "INSERT INTO Cars.INVENTORY
(VIN, YEAR, Make, Model, TRIM, EXT_COLOR, INT_COLOR, ASKING_PRICE, SALE_PRICE, PURCHASE_PRICE, MILEAGE, TRANSMISSION, PURCHASE_DATE, SALE_DATE)
VALUES
('5FNYF4H91CB054036', '2012', 'Honda', 'Pilot', 'Touring', 'White Diamond Pearl', 'Leather', '37808', NULL, '34250', '7076', 'Automatic', '2012-11-08', NULL);";


if($mysqli->query($query)===TRUE){
echo "<p>Honda Pilot inserted into inventory table.</p>";
}
else
{
echo "<p>Error inserting Honda Pilot:</p>".mysqli_error($mysqli);
echo "<p>**********</p>";
echo $query;
echo "<p>**********</p>";
}

//Insert a Dodge Durange

$query = "INSERT INTO Cars.INVENTORY (VIN, YEAR, Make, Model, TRIM, EXT_COLOR, INT_COLOR, ASKING_PRICE, SALE_PRICE, PURCHASE_PRICE, MILEAGE, TRANSMISSION, PURCHASE_DATE, SALE_DATE)
VALUES
('LAKSDFJ234LASKRF2', '2009', 'Dodge', 'Durange', 'SLT', 'Silver', 'Black', '2700', NULL, '2000', '144000', '4WD Automatic', '2012-12-05', NULL);";

If ($mysqli->query($query) === TRUE){
echo "<p>Dodge Durange inserted into inventory table.</p>";
}
else
{
echo "<p>Error Inserting Dodge: </p>".mysqli+error($mysqli);
echo "<p>**********</p>";
echo $query;
echo "<p>**********</p>";
}


$mysqli->close();
?>
