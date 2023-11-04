<?php

class myadminblog
{


     private $conn;

     public function __construct()
     {
          #db host, db user, db pass, db name
          $dbhost = "localhost";
          $dbuser = "root";
          $dbpass = "";
          $dbname = "myblog";

          $this->conn = mysqli_connect($dbhost, $dbuser, $dbpass, $dbname);

          if (!$this->conn) {
               die("Database Connection Error !!");
          }
     }
}
