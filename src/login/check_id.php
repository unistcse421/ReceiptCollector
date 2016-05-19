<?
if(!$id) 
{
  echo("Type ID");
}
else
{
  include "../dbconn.php";
  $sql = "select * from user where id='$id' ";
  $result = mysql_query($sql, $conn);
  $num_record = mysql_num_rows($result);
  if ($num_record)
  {
    echo "Already used ID<br>";
    echo "Please use other ID<br>";
  }
  else
  {
    echo "Available ID";
  }
  mysql_close();
}
?>
