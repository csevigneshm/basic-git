<?php

define('HOST','localhost');
define('USER','root');
define('PASS' ,'');
define('DBNAME', 'Office');
class DB
{
 function __construct()
 {
$con  = mysqli_connect(HOST,USER,PASS,DBNAME);
$this->connection=$con;
 }
 public function fetchdata()
 {
     $query="select * from Employees";
     $result=mysqli_query($this->connection,$query);
     return $result;
 }
 public function insert($userid,$amt,$date){
 	$insert = "INSERT INTO amt (user_id,amt,date_time) VALUES ($userid,$amt,'$date')";
 	$res=mysqli_query($this->connection,$insert);
 	return $res;
 } 
 
}
?>