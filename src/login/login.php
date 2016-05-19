<?
if (!$id) {
  echo("<script> window.alert('Insert ID') history.go(-1) </script>");
  exit;
}

if( !$passwd) {
  echo("<script> window.alert('Insert PW') history.go(-1) </script>");
  exit;
}

include "../dbconn.php";

$sql = "select * from user where id='$id'";
$result = mysql_query($sql, $conn);
$num_match = mysql_num_rows($result);

if (!$num_match) {
  echo("<script> window.alert('Wrong ID') history.go(-1) </script>");
} else {
  $row = mysql_fetch_array($result);
  $db_passwd = $row[passwd];

  if ($passwd != $db_passwd) {
    echo("<script> window.alert('Wrong PW') history.go(-1) </script>");
    exit;
  } else {
    $userid = $row[id];
    $username = $row[name];

    session_start();
    session_register(userid);
    session_register(username);
    echo("<script> top.location.href = '../index.php'; </script>");
  }
}        
?>
