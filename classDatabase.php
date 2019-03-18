<?php

class DB
{

    var $host = 'localhost';
    var $user = 'root';
    var $pass = '';
    var $db = 'alazharuni';
    var $myconn;

    function connect() {
        $con = mysqli_connect($this->host, $this->user, $this->pass, $this->db);
        if (!$con) {
            die('Could not connect to database!');
        } else {
            $this->myconn = $con;}
        return $this->myconn;
    }
    function addwithid($table,$tabledata,$Values){
        
        $sql="INSERT INTO $table ($tabledata) VALUES($Values)";
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $result=$conn->query($sql);
        $last_id = mysqli_insert_id($conn);
        return $last_id;
    }
    function add($table,$tabledata,$Values){
        
        $sql="INSERT INTO $table ($tabledata) VALUES($Values)";
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $result=$conn->query($sql);

    }
    function delete($table, $Where){
        date_default_timezone_set("Africa/Cairo");
        $today = date("Y-m-d H:i:s");
        $sql="UPDATE $table SET LastUpdatedDateTime='$today', IsDeleted = 1 WHERE ".$Where;
        $connection = new DB();
        $conn = $connection->connect();
        $result=$conn->query($sql);

    }
    function update($table,$set,$Where){
        
        $sql="UPDATE $table SET $set WHERE ".$Where;
        $connection = new DB();
        $conn = $connection->connect();
        $conn->query("SET NAMES 'utf8'");
        $result=$conn->query($sql);

    }

}
?>