<html>
<head>
  <title>Car Saved</title>
</head>
<body bgcolor="#FFFFFF" text="#000000">

<?php
//Capture the values posted to this php program from the text fields in the form

$VIN = $_POST['VIN'];
$Make = $_POST['Make'];
$Model = $_POST['Model'];
$Price = $_POST['Asking_Price'];

//Build a SQL Query using the values fro above

$query = "INSERT INTO INVENTORY
(VIN, Make, Model, ASKING_PRICE)
VALUES(
'$VIN',
'$Make',
'$Model',
'$Price'
)";

//Print the query to the browser so you can see it
echo ($query."<br>");

$mysqli = new mysqli('localhost', 'root', 'sofiac_1234', 'Cars');
/*check connection*/
if (mysqli_connect_errno()){
  printf("Connect failed: %s\n", mysqli_connect_error());
  exit();
}

echo 'Connected successfully to mySQL.<BR>';

//select a database to work with
$mysqli->select_db("Cars");
  Echo ("Selected the Cars database.<br>");

/*Try to insert the new car into the database*/
if($result=$mysqli->query($query)){
  echo "<p>You have successfully entered $Make $Model into the database.</p>";
}
else
{
  echo "Error entering $VIN into database:".mysqli_error()."<br>";
}
$mysqli->close();
?>
</body>
</html>
