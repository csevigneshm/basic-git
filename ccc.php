<?
include "db.class.php";


$insertdata=new DB();
$userid=$_POST['user'];
$amt=$_POST['cost'];
$date=$_POST['dates'];
$Isql=$insertdata->insert($userid,$amt,$date);

if($Isql)
{
echo'Data inserted';
}
else
{
echo 'Data not inserted';
}


?>
