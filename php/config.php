<?php
  try{
  $hostname = "localhost";
  $username = "root";
  $password = "";
  $dbname = "chatapp";

  $conn = mysqli_connect($hostname, $username, $password, $dbname);
  $dbh = new PDO('mysql:host='.$hostname.';dbname='.$dbname.'', $username, $password);
    $dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
  if(!$conn){
    echo "Database connection error".mysqli_connect_error();
  }
}catch (PDOException $e) {
	print "Error!: " . $e->getMessage();
	die();
}
?>
