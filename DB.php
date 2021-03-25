<?php


class DB
{
    private $connection;

    public function __construct () {
        $this->connection = mysqli_connect('test.site', 'root', 'root', 'test');
    }

    public function getAll() {
        $sql = 'select *from cities';

        $result = mysqli_query($this->connection, $sql);

        $arr = [];
        while ($row = mysqli_fetch_assoc($result)) {
            array_push($arr, $row['name']);
        }
        return $arr;
    }
}