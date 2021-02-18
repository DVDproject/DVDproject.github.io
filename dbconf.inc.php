<?php
//dołącz za pomocą include_once()
//użyj za pomocą Db.connect()
class Db {
    private $host;
    private $user;
    private $passwd;
    private $dbname;
    private $charset;

    public function connect() {
        $this->host = "localhost";
        $this->user = "root";
        $this->passwd = "";
        $this->dbname = "asda";
        $this->charset = 'uft8mb4';
        
        $conn = new mysqli($this->host, $this->user, $this->passwd, $this->dbname);
       
        if ($conn -> connect_error){
            die("Błąd połączenia z bazą danych ". $conn->connect_error);
            $_SESSION['errors'] .= "Błąd połączenia z bazą danych ". $conn->connect_error;
        }
    }

}
?>