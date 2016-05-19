<? 
include "../dbconn.php";

$sql = "select * from user where id='$id'";
$result = mysql_query($sql, $conn);
$exist_id = mysql_num_rows($result);

if ($exist_id) {
  echo(" <script> window.alert('Already used ID') history.go(-1) </script> ");
  exit;
}

$regist_day = date("Y-m-d (H:i)");
$ip = $REMOTE_ADDR;
$sql = "insert into user(id, nickname, passwd, sex) ";
$sql .= "values('$id', '$nickname', '$passwd', '$sex')";
mysql_query($sql, $conn);
mysql_close();
Header("Location:login_form.html");
?>
