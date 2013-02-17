<div id="container">

    <form class="wufoo">
        <ul>
            <li>
                <div class="info">
                    <p><a href="../create">CREATE LIST</a></p>
                </div>
            </li>

            <li>
                <div class="info">
                    <h2>POSTL IST</h2>
                </div>
            </li>

<?php
    $prevYear = 0;
    for($j = 0; $j < $rows; $j++){
        $id_number = mysql_result($result, $j, 'id');
        $title = mysql_result($result, $j, 'title');
        $curyear = mysql_result($result, $j, 'year');
        if($prevYear != $curyear){
            echo "<li class='section'></li>";
            echo "<li class='section'>$curyear</li>";
            $prevYear = $curyear;
        }

?>
            <li class="section"><?php echo $title; ?>  <a href="../update/?id=<?php echo $id_number; ?>">EDIT</a> <a href="?del_id=<?php echo $id_number; ?>" >DELETE</a> </li>
<?php
    }
?>

        </ul>
    </form>

</div>
