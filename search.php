
<?php
include 'config.php';

if($_POST['author'])
{
    $author=$_POST['author'];
    switch ($author) {
        case "Aristotle":
        $sql=mysql_query("SELECT * FROM `store` WHERE `author` LIKE 'Aristotle%'",$link);
        while($result = mysql_fetch_array($sql)){
            echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
            <li class="first">«'.$result['name'].'»</li><br>
            <li>'. $result['genre'].'</li><br>
            <li>'. $result['author'].'</li><br>
            <li class="first">'. $result['price'].'₴</li><br>
            </ul></div></div>';
        }
        break;


        case "Maxim Marcinkevic":
        $sql=mysql_query("SELECT * FROM `store` WHERE `author` LIKE 'Maxim Marcinkevic%'",$link);
        while($result = mysql_fetch_array($sql)){
            echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
            <li class="first">«'.$result['name'].'»</li><br>
            <li>'. $result['genre'].'</li><br>
            <li>'. $result['author'].'</li><br>
            <li class="first">'. $result['price'].'₴</li><br>
            </ul></div></div>';
        }
        break;
        case "Niccolo Machiavelli":
        $sql=mysql_query("SELECT * FROM `store` WHERE `author` LIKE 'Niccolo Machiavelli%'",$link);
        while($result = mysql_fetch_array($sql)){
            echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
            <li class="first">«'.$result['name'].'»</li><br>
            <li>'. $result['genre'].'</li><br>
            <li>'. $result['author'].'</li><br>
            <li class="first">'. $result['price'].'₴</li><br>
            </ul></div></div>';
        }
        break;
        case "Augustine Hippo":
        $sql=mysql_query("SELECT * FROM `store` WHERE `author` LIKE 'Augustine Hippo%'",$link);
        while($result = mysql_fetch_array($sql)){
            echo '<div class="col-lg-3 books"><div class="books"><ul class="books-items">
            <li class="first">«'.$result['name'].'»</li><br>
            <li>'. $result['genre'].'</li><br>
            <li>'. $result['author'].'</li><br>
            <li class="first">'. $result['price'].'₴</li><br>
            </ul></div></div>';
        }
        break;
        case "Mario Marco":
        $sql=mysql_query("SELECT * FROM `store` WHERE `author` LIKE 'Mario Marco%'",$link);
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