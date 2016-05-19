<?
include "dbconn.php";

$sql = "create table restaurant (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."Name VARCHAR(20) NOT NULL,";
$sql = $sql."Tel INT,";
$sql = $sql."Address VARCHAR(30))";

$result = mysql_query($sql, $conn);

$sql = "create table menu (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."Name VARCHAR(20) NOT NULL,";
$sql = $sql."Price INT,";
$sql = $sql."Restaurant_ID INT NOT NULL)";

$result = mysql_query($sql, $conn);

$sql = "create table category (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."Category VARCHAR(10))";

$result = mysql_query($sql, $conn);

$sql = "create table review (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."menu_id INT NOT NULL,";
$sql = $sql."user_id INT NOT NULL,";
$sql = $sql."grade INT NOT NULL,";
$sql = $sql."comment VARCHAR(200),";
$sql = $sql."image BLOB)";

$result = mysql_query($sql, $conn);

$sql = "create table point (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."point INT NOT NULL,";
$sql = $sql."reason VARCHAR(20) NOT NULL,";
$sql = $sql."data INT NOT NULL,";
$sql = $sql."user_id INT NOT NULL)";

$result = mysql_query($sql, $conn);

$sql = "create table user (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."nickname VARCHAR(10) NOT NULL,";
$sql = $sql."passwd VARCHAR(255) NOT NULL,";
$sql = $sql."sex CHAR(2) NOT NULL,";
$sql = $sql."credit INT NOT NULL)";

$result = mysql_query($sql, $conn);

$sql = "create table location (";
$sql = $sql."ID INT PRIMARY KEY,";
$sql = $sql."city VARCHAR(10) NOT NULL,";
$sql = $sql."gu VARCHAR(10) NOT NULL)";

$result = mysql_query($sql, $conn);

mysql_close();
?>
