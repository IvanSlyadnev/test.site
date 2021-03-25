<html>
<head></head>
<body>
<?php
$city = $_GET['city'];
$id = $_GET['id'];
?>
<form action="index.php" method="post">
    <input type="text" value="<?=$id?>" name="id" readonly = "readonly">
    <br>
    <input type="text" value="<?=$city?>" name="name">
    <br>
    <input type="submit" value="Редактировать" name="edit">
</form>

</body>
</html>