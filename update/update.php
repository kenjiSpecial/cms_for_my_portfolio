<?php

$title = mysql_result($result, 0, 'title');
if(isset($_POST['title']) && $_POST['title'] != $title){
    $title_query = "UPDATE $db_table_name SET title = '$_POST[title]' WHERE title='$title' AND id=$val";;
    $titel_result = mysql_query($title_query);
    $title = $_POST['title'];
    echo "title has change::</br>";
}

$mainfile = mysql_result($result, 0, 'mainfile');
if(isset($_POST['mainfile']) && $_POST['mainfile'] != $mainfile){
    $mainfile_query = "UPDATE $db_table_name SET mainfile = '$_POST[mainfile]' WHERE mainfile='$mainfile' AND id=$val";
    $mainfile_result = mysql_query($mainfile_query);
    $mainfile = $_POST['mainfile'];
    echo "mainfile has change::</br>";
}

$thumbnailfile = mysql_result($result, 0, 'thumbnailfile');
if(isset($_POST['thumbnailfile']) && $_POST['thumbnailfile'] != $thumbnailfile){
    $thumbnailfile_query = "UPDATE $db_table_name SET thumbnailfile = '$_POST[thumbnailfile]' WHERE thumbnailfile='$thumbnailfile' AND id=$val";
    $thumbnailfile_result = mysql_query($thumbnailfile_query);
    $thumbnailfile = $_POST['thumbnailfile'];
    echo "thumbnail has change::</br>";
}

// date

$year = mysql_result($result, 0, 'year');
if(isset($_POST['year']) && $_POST['year'] != $year){
    $year_query = "UPDATE $db_table_name SET year = '$_POST[year]' WHERE year='$year' AND id=$val";
    $year_result = mysql_query($year_query);
    $year = $_POST['year'];
    echo "year has change::</br>";
}

$month = mysql_result($result, 0, 'month');
if(isset($_POST['month']) && $_POST['month'] != $month){
    $month_query = "UPDATE $db_table_name SET month = '$_POST[month]' WHERE month='$month' AND id=$val";
    $month_result = mysql_query($month_query);
    $month = $_POST['month'];
    echo "month has change::</br>";
}

$type = mysql_result($result, 0, 'type');
if(isset($_POST['type']) && $_POST['type'] != $type){
    $type_query = "UPDATE $db_table_name SET type = '$_POST[type]' WHERE type ='$type' AND id=$val";
    $type_result = mysql_query($type_query);
    $type = $_POST['type'];
    echo 'type has changed.</br>';
}

$program = mysql_result($result, 0, 'program');
if(isset($_POST['program']) && $_POST['program'] != $program){
    $program_query = "UPDATE $db_table_name SET program = '$_POST[program]' WHERE program ='$program' AND id=$val";
    $program_result = mysql_query($program_query);
    $program = $_POST['program'];
    echo 'program has changed.</br>';
}

$tool = mysql_result($result, 0, 'tool');
if(isset($_POST['tool']) && $_POST['tool'] != $tool){
    $tool_query = "UPDATE $db_table_name SET tool = '$_POST[tool]' WHERE tool ='$tool' AND id=$val";
    $tool_result = mysql_query($tool_query);
    $tool = $_POST['tool'];
    echo 'tool has changed.</br>';
}

$des = mysql_result($result, 0, 'description');
if(isset($_POST['description']) && $_POST['description'] != $des){
    $des_query = "UPDATE $db_table_name SET description = '$_POST[description]' WHERE description ='$des' AND id=$val";
    $des_result = mysql_query($des_query);
    $des = $_POST['description'];
    echo 'description has changed.</br>';
}

$url = mysql_result($result, 0, 'url');
if(isset($_POST['url']) && $_POST['url'] != $url){
    $url_query = "UPDATE $db_table_name SET url = '$_POST[url]' WHERE url ='$url' AND id=$val";
    $url_result = mysql_query($url_query);
    $url = $_POST['url'];
    echo 'url has changed.</br>';
}


$class = mysql_result($result, 0, 'class');
if(isset($_POST['class']) && $_POST['class'] != $class){
    $class_query = "UPDATE $db_table_name SET class = '$_POST[class]' WHERE class ='$class' AND id=$val";
    $class_result = mysql_query($class_query);
    $class = $_POST['class'];
    echo 'class has changed.</br>';
}

?>