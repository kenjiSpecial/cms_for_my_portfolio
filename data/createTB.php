<?php
require_once 'login.php';
$db_server = mysql_connect($db_hostname, $db_username, $db_password);
if (!$db_server) die("Unable to connect to MySQL: ".mysql_error());
mysql_select_db($db_database) or die("Unable to select database: ".mysql_error());

$query = "CREATE TABLE $db_table_name ( id SMALLINT NOT NULL AUTO_INCREMENT, title VARCHAR(128) NOT NULL, mainfile VARCHAR(128) NOT NULL, thumbnailfile VARCHAR(128) NOT NULL, year SMALLINT NOT NULL, month TINYINT NOT NULL, type VARCHAR(128) NOT NULL, program VARCHAR(128) NOT NULL, tool VARCHAR(128) NOT NULL, description VARCHAR(1000) NOT NULL, url VARCHAR(128) NOT NULL, class VARCHAR(128) NOT NULL, PRIMARY KEY (id) )";

$result = mysql_query($query);
if(!$result) echo "Database access failed: ".mysql_error();

?>
