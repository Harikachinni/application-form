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
if (isset($_POST['name']) && isset($_POST['age']) && isset($_POST['name'])) {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $city = $_POST['city'];
    $qry = "insert into table1 (name,age,city) values('$name',$age,'$city')";
    $result = mysql_query($qry);
    if ($result) {
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

