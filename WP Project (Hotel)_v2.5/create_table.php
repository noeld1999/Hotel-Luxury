<?php
$servername="localhost";
$username="root";
$password="";
$dbname="Customer_Details";

//Create connection 
$conn=new mysqli($servername,$username,$password,$dbname);
//Check connection 
if($conn->connect_error)
{
die("Connection failed:" .$conn->connect_error);
}

//sql to create table
$sql="CREATE TABLE emp(
firstname VARCHAR(30) NOT NULL,
lastname VARCHAR(30) NOT NULL,
phonenumber VARCHAR(20) NOT NULL,
roomno VARCHAR(20) NOT NULL,
roomtype VARCHAR(20) NOT NULL,
email VARCHAR(25) NOT NULL
)";

if($conn->query($sql)==TRUE)
{
echo"Table emp created successfully";
}
else
{
echo"Error creating table: ";
}
$conn->close();
?>