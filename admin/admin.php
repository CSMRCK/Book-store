<!doctype html>
<head>
	<link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/3.3.2/css/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="../css/styles.css">
<title>Admin-Panel</title>
</head>
<html>
<body>
	<header>
		<h1>
			Welcome to Admin Panel!
		</h1>
	</header>
<?php
    include '../config.php';
    
    if (isset($_GET['del_id'])) { 
        $sql = mysql_query('DELETE FROM `store` WHERE `id` = '.$_GET['del_id']); 
    }
    
    if (isset($_GET['red_id'])) { 
        if (isset($_POST['name'])) { 
            $sql = mysql_query('UPDATE `store` SET '
                    .'`name` = "'.$_POST['name'].'",'
                    .'`price` = '.$_POST['price'].' '
                    .'`author` = '.$_POST['author'].' '
                    .'`genre` = '.$_POST['genre'].' '
                    .'`description` = '.$_POST['description'].' '
                    .'WHERE `id` = '.$_GET['red_id']);
        }
        header('Location:$link');
    }
    mysql_close();
?>
<table border='2'>
<tr>
    <td>id</td>
    <td>name</td>
    <td>price</td>
    <td>author</td>
    <td>genre</td>
    <td>description</td>
    <td></td>
    <td></td>
</tr>
<?php
include '../config.php';
$sql = mysql_query("SELECT `id`, `name`, `price`,`author`,`genre`,`description` FROM `store`", $link);
while ($result = mysql_fetch_array($sql)) {
    echo     '<tr><td>'.$result['id'].'</td>'.
             '<td>'.$result['name'].'</td>'.
             '<td>'.$result['price'].' uah</td>'.
             '<td>'.$result['author'].' </td>'.
             '<td>'.$result['genre'].' </td>'.
             '<td>'.$result['description'].'</td>'.
             '<td><a href="?del_id='.$result['id'].'">Delete</a></td>'.
             '<td><a href="?red_id='.$result['id'].'">Edit</a></td></tr>';
}

mysql_close();
?>
</table>

<?php
include '../config.php';
    if (isset($_GET['red_id'])) { 
        $sql = mysql_query("SELECT `id`, `name`, `price`,`author`,`genre`,`description` FROM `store` WHERE `id`=".$_GET['red_id'], $link); 
        $result = mysql_fetch_array($sql); 
        mysql_close();
        ?>
<table>
<form action="" method="post">
    <tr>
        <td>Name:</td>
        <td><input type="text" name="name" value="<?php echo ($result['name']); ?>"></td>
    </tr>
    <tr>
        <td>Price:</td>
        <td><input type="text" name="price" size="3" value="<?php echo ($result['price']); ?>"> UAH.</td>
    </tr>
        <tr>
        <td>Author:</td>
        <td><input type="text" name="author" value="<?php echo ($result['author']); ?>"></td>
    </tr>
        <tr>
        <td>Genre:</td>
        <td><input type="text" name="genre" value="<?php echo ($result['genre']); ?>"></td>
    </tr>
        <tr>
        <td>Description:</td>
        <td><input type="text" name="description" value="<?php echo ($result['description']); ?>"></td>
    </tr>
    <tr>
        <td colspan="3"><input type="submit" value="OK"></td>
    </tr>
</form>
</table>
        <?php
    }
?>

<?php
include '../config.php';
if (isset($_POST["name"])) 

    $sql = mysql_query("INSERT INTO `store` (`name`, `price`,`author`,`genre`,`description`) 
                        VALUES ('".$_POST['name']."','".$_POST['price']."','".$_POST['author']."','".$_POST['genre']."','".$_POST['description']."')");

    if ($sql) {
        echo "<p>Данные успешно добавлены в таблицу.</p>";
    } else {
        echo "<p>Произошла ошибка.</p>";
    }



mysql_close();

?>
<table>
<form action="" method="post">
    <tr>
        <td>Наименование:</td>
        <td><input type="text" name="name"></td>
    </tr>
    <tr>
        <td>Цена:</td>
        <td><input type="text" name="price" size="3"> руб.</td>
    </tr>
    <td>Author:</td>
        <td><input type="text" name="author"></td>
    </tr>
        <tr>
        <td>Genre:</td>
        <td><input type="text" name="genre" ></td>
    </tr>
        <tr>
        <td>Description:</td>
        <td><input type="text" name="description"></td>
    <tr>
        <td colspan="2"><input type="submit" value="OK2"></td>
    </tr>
</form>
</table>

</body>
</html>w