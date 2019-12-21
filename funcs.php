
<?php
	include 'config.php';
    	
    $sql=mysql_query("SELECT * FROM `store`", $link);

    $id=$result['id'];
    echo $id;
    while ($result = mysql_fetch_array($sql)):
?>
   
        <input type="hidden" name='id' value="<?=$result['id']?>">
        <div class="center col-lg-3">
 
        <ul class="books-items">
            <li>«<?=$result[1]?>»</li><br>

            <li><?=$result[3]?> UAH</li><br>
            <li><?=$result[4]?></li><br>
            <li><?=$result[5]?></li><br>
        </ul>
        <a href="/info.php?id=<?=$result['id']?>">more</a>
</div>

<?php
endwhile;
?>

