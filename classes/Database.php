<?php
namespace aitsydney;
class Database{
    protected $connection;
    private $host;
    private $user;
    private $password;
    private $db;
    protected function __construct(){
        $this -> initEnv();
        $this -> connection = mysqli_connect(
            $this -> host,
            $this -> user,
            $this -> password,
            $this -> db
        );
    }

    private function initEnv(){
        $this -> host = getenv('host');
        $this -> user = getenv('user');
        $this -> password = getenv('pass');
        $this -> db = getenv('db');
    }
}
?>