<?php
include 'DB.php';
$cities = DB::getAll();
?>

<?php foreach ($cities as $city) :?>
    <h1><?=$city;?></h1>
<?php endforeach;?>

