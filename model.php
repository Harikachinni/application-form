model
<?php
Class Model
{
public function Model()
{
$con = mysql_connect("localhost","root","") or die('Not connected to Database<br>' . mysql_error());
mysql_select_db("sch_db",$con) or die('Not Select Database' . mysql_error());
}
public function insert_data()
{
if (isset($_POST['name']) && isset($_POST['email']) && isset($select)&&$select!="") 
{
$name = $_POST['name'];
$email = $_POST['email'];
$school=$_POST ['NEW'];    
$qry = "insert into sch (name,email,school) values('$name',$email,'$school')";
$result = mysql_query($qry);
if ($result)
{
 return "Insert Data Successfully.";
 }
 else
 {
return "Error...! Not Inserted.";
}
}
else
{
return "";
}
}
}
?>

