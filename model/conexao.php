<?php

    private $servername = "localhost";
    private $username   = "root";
    private $password   = "";
    private $dbname     = "eesj";

    public static function gerar() {
        return new mysqli(
            $this->servername,
            $this->username,
            $this->password,
            $this->dbname;
        );
    }

?>