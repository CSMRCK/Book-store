
<?php
include 'config.php';

if($_POST['genre'])
{
    $genre=$_POST['genre'];
    switch ($genre) {
        case "Classics":
        $sql=mysql_query("SELECT * FROM `store` WHERE `genre` LIKE 'Classics%'",$link);
        while($result = mysql_fetch_array($sql)){
            echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
            <li class="first">«'.$result['name'].'»</li><br>
            <li>'. $result['genre'].'</li><br>
            <li>'. $result['author'].'</li><br>
            <li class="first">'. $result['price'].'₴</li><br>
            </ul></div></div>';
        }
        break;


        case "Scenario":
            $sql=mysql_query("SELECT * FROM `store` WHERE `genre` LIKE 'Scenario%'",$link);
            while($result = mysql_fetch_array($sql)){
                echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
                <li class="first">«'.$result['name'].'»</li><br>
                <li>'. $result['genre'].'</li><br>
                <li>'. $result['author'].'</li><br>
                <li class="first">'. $result['price'].'₴</li><br>
                </ul></div></div>';
            }
            break;
            case "Romance":
                $sql=mysql_query("SELECT * FROM `store` WHERE `genre` LIKE 'Romance%'",$link);
                while($result = mysql_fetch_array($sql)){
                    echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
                    <li class="first">«'.$result['name'].'»</li><br>
                    <li>'. $result['genre'].'</li><br>
                    <li>'. $result['author'].'</li><br>
                    <li class="first">'. $result['price'].'₴</li><br>
                    </ul></div></div>';
                }
                break;


                case "Modern":
                $sql=mysql_query("SELECT * FROM `store` WHERE `genre` LIKE 'Modern%'",$link);
                while($result = mysql_fetch_array($sql)){
                    echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
                    <li class="first">«'.$result['name'].'»</li><br>
                    <li>'. $result['genre'].'</li><br>
                    <li>'. $result['author'].'</li><br>
                    <li class="first">'. $result['price'].'₴</li><br>
                    </ul></div></div>';
                }
                break;


            }
        }

            ?>