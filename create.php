<?php
include 'DB.php';
$db = new DB();
if (isset($_POST['create'])) {
    $db->create($_POST['name']);
    header('Location:index.php');
}
?>
<form action="" method="post">
    <input type="text" placeholder="город" name="name">
    <br>
    <input type="submit" value="Созадть" name="create" class="btn btn-success">
</form>