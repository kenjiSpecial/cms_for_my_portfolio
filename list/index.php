<?php

require_once '../data/login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: ".mysql_error());
mysql_select_db($db_database) or die("Unable to select database: ".mysql_error());

//confirm the sdelete
if(isset($_GET['del_id'])){

    $idVal = $_GET['del_id'];
    $query = "DELETE FROM $db_table_name WHERE id = $idVal";
    if(!mysql_query($query, $db_server))
        echo "DELETE failed: $query<br/>".mysql_error()."<br/> <br/>";
}

$query = "SELECT * FROM $db_table_name";

$result = mysql_query($query);
if(!$result) die("Database access failed: ".mysql_error());
$rows = mysql_num_rows($result);

//---------------------
//---------------------

include "../parts/form/_header.php";
include "../parts/list/_body.php";
include "../parts/form/_footer.php";
?>