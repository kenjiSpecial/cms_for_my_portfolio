<div id="container">

    <form class="wufoo" action="./?id=<?php echo $val; ?>" method="post">


        <ul>
            <li>
                <div class="info">
                    <h2>UPDATE</h2>
                </div>
            </li>
            <?php
            for( $i = 0; $i < 11; $i++){
                ?>

                <li>
                    <label class="desc">
                        <?php
                        switch ($i) {
                            case 0:
                                echo "title";
                                break;
                            case 1:
                                echo "mainfile";
                                break;
                            case 2:
                                echo "thumbnailfile";
                                break;
                            case 3:
                                echo "year";
                                break;
                            case 4:
                                echo "month";
                                break;
                            case 5:
                                echo "type";
                                break;
                            case 6:
                                echo "program";
                                break;
                            case 7:
                                echo "tool";
                                break;
                            case 8:
                                echo "description";
                                break;
                            case 9:
                                echo "url";
                                break;
                            case 10:
                                echo "class";
                                break;
                        }

                        ?>
                    </label>

                    <div>

                        <?php
                        switch ($i) {
                            case 0:
                                echo "<input class='field text medium' name='title' type='text'  value='$title'/>";
                                break;
                            case 1:
                                echo "<input class='field text medium' name='mainfile' type='text'  value='$mainfile'/>";
                                break;
                            case 2:
                                echo "<input class='field text medium' name='thumbnailfile' type='text'  value='$thumbnailfile'/>";
                                break;
                            case 3:
                                echo "<input class='field text medium' name='year' type='text' value='$year'/>";
                                break;
                            case 4:
                                echo "<input class='field text medium' name='month' type='text' value='$month'/>";
                                break;
                            case 5:
                                echo "<input class='field text medium' name='type' type='text' value='$type'/>";
                                break;
                            case 6:
                                echo "<input class='field text medium' name='program' type='text' value='$program'/>";
                                break;
                            case 7:
                                echo "<input class='field text medium' name='tool' type='text' value='$tool'/>";
                                break;
                            case 8:
                                echo "<textarea rows='10' cols='90' name='description' class='field textarea medium'>$des</textarea>";
                                break;
                            case 9:
                                echo "<input class='field text large' name='url' type='text' value='$url'/>";
                                break;
                            case 10:
                                echo "<textarea rows='10' cols='90' name='class' class='field textarea medium'>$class</textarea>";
                                break;
                        }

                        ?>
                    </div>
                </li>
                <?php
            }
            ?>

            <li class="buttons">
                <input id="saveForm" class="btTxt" type="submit" value="UPDATE" />
            </li>
            <li>
                <div class="back"><a href="../list">Back to the list </a></div>
            </li>
        </ul>
    </form>


</div>