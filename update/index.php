<?php
$form_action_url = "./";

//access to DB

$val = $_GET['id'];

require_once '../data/login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: " . mysql_error());
mysql_select_db($db_database) or die("Unable to select database: " . mysql_error());

$query = "SELECT * FROM $db_table_name WHERE id = $val";

$result = mysql_query($query);
if (!$result) die("Database access failed: " . mysql_error());

//-----------
//-----------

include "update.php";

//-----------

include "../parts/form/_header.php";
include "../parts/update/_body.php";
include "../parts/form/_footer.php";
?>