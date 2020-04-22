<?php
    Class dbobj{
        var $servername = "localhost";
        var $username = "root";
        var $pass = "";
        var $dbname = "db_test";
        var $conn;
        function getConn(){
            $con = mysqli_connect($this->servername, $this->username, $this->pass, $this->dbname) or 
            die("connection failed: ".mysqli_connect_error());
                if(mysqli_connect_error()){
                    printf("connect failed: %s\n", mysqli_connect_error());
                    exit();
                }else{
                    $this->conn = $con;
                }
                return $this->conn;
        }
    }
?>