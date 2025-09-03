<?php

class Connection {
    private $hostname = "localhost";

    private $username = "adminphp";

    private $password = "password";

    private $database = "stastay";

    public function connect(){
        return new mysqli($this->hostname, $this->username, $this->password, $this->database);
    }

}
?>