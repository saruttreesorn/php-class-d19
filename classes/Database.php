<?php
namespace aitsydney;
class Database{
    /* to access database, create a file called .htaccess
    in the root of your project and add the following lines
    SetEnv dbhost localhost
    SetEnv dbuser [your database user]
    SetEnv dbpass [your database password]
    SetEnv dbname [your database name]

    Replace the bracketed values with your database credentials and name
    */
    protected $connection;
    private $dbhost;
    private $dbuser;
    private $dbpassword;
    private $dbname;
    public function __construct(){

        $this -> connection = mysqli_connect(
            $this -> dbhost,
            $this -> dbuser,
            $this -> dbpassword,
            $this -> dbname
        );
    }
    private function getCredentials(){
        $this -> dbhost = getenv('dbhost');
        $this -> dbuser = getenv('dbuser');
        $this -> dbpassword = getenv('dbpass');
        $this -> dbname = getenv('dbname');
    }
}
?>