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
        $i = 0;
        while ($row = mysqli_fetch_assoc($result)) {
            $arr[$i]['id'] = $row['id'];
            $arr[$i]['name'] = $row['name'];
            $i++;
        }
        return $arr;
    }

    public function edit($id, $name) {
        $sql = "update cities set name = '$name' where id = '$id'";
        $result = mysqli_query($this->connection, $sql);
    }

    public function delete($id) {
        $sql = "delete from cities where id = '$id'";
        $result = mysqli_query($this->connection, $sql);
    }
}