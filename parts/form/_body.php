<div id="container">

    <form class="wufoo" action="<?php echo $form_action_url; ?>" method="post">


        <ul>
            <li>
                <div class="info">
                    <h2>NEW POST</h2>
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
                                echo '<input class="field text medium" name="title" type="text" maxlength="255"/>';
                                break;
                            case 1:
                                echo '<input class="field text large" name="mainfile" type="text" maxlength="255"/>';
                                break;
                            case 2:
                                echo '<input class="field text large" name="thumbnailfile" type="text" maxlength="255"/>';
                                break;
                            case 3:
                                echo '<input class="field text medium" name="year" type="text" maxlength="255"/>';
                                break;
                            case 4:
                                echo '<input class="field text medium" name="month" type="text" maxlength="255" />';
                                break;
                            case 5:
                                echo '<input class="field text medium" name="type" type="text" maxlength="255" />';
                                break;
                            case 6:
                                echo '<input class="field text large" name="program" type="text" maxlength="255"/>';
                                break;
                            case 7:
                                echo '<input class="field text medium" name="tool" type="text" maxlength="255"/>';
                                break;
                            case 8:
//                                echo '<input class="field text medium" name="month" type="text" maxlength="255" />';
                                echo '<textarea rows="10" cols="90" name="description" class="field textarea medium"></textarea>';
                                break;
                            case 9:
                                echo '<input class="field text medium" name="url" type="text" maxlength="255" />';
                                break;
                            case 10:
                                echo '<textarea rows="300" cols="90" name="class" class="field textarea medium"></textarea>';
                                break;
                        }

                        ?>
                    </div>
                </li>
                <?php
            }
            ?>

            <li class="buttons">
                <input id="saveForm" class="btTxt" type="submit" value="POST" />
            </li>
            <li>
                <div class="back"><a href="../list">Back to the list </a></div>
            </li>
        </ul>
    </form>


</div>