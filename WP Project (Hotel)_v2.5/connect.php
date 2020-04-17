<?php
$fname = filter_input(INPUT_POST, 'fname');
$lname = filter_input(INPUT_POST, 'lname');
$phn = filter_input(INPUT_POST, 'phn');
$email = filter_input(INPUT_POST, 'email');
$roomtype = filter_input(INPUT_POST, 'roomtype');
$roomno = filter_input(INPUT_POST, 'roomno');

$host="localhost";
$dbusername="root";
$dbpassword="";
$dbname="Customer_Details";

$conn = new mysqli($host, $dbusername, $dbpassword,$dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "INSERT INTO emp(firstname,lastname,phonenumber,email,roomtype,roomno) values ('$fname','$lname','$phn','$email','$roomtype','$roomno')";

if($conn->query($sql)==TRUE)
{
echo"Values Inserted Succussfully";
}
else
{
echo"Error inserting  table: ";
}
?>