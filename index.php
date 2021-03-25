<?php
include 'DB.php';
$db = new DB();

if (isset($_POST['edit'])) {
    $db->edit($_POST['id'], $_POST['name']);
}

$cities = $db->getAll();
?>
<a href="create.php"><input type="submit" value="создать" class="btn btn-success"></a>
<table border="1">
    <tr>
        <td>Город</td>
        <td>Удаление</td>
        <td>Редактирование</td>
    </tr>
    <?php foreach ($cities as $city) :?>
        <tr>
            <td><?=$city['name'];?></td>
            <td><a href="delete.php?id=<?=$city['id']?>"><button class="btn btn danger">Удалить</button></a></td>
            <td><a href="edit.php?city=<?=$city['name']?>&id=<?=$city['id']?>"><button class="btn btn success">Редактировать</button></a></td>
        </tr>
    <?php endforeach;?>
</table>
