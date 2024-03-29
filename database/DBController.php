<?php


class DBController
{
    // Database Connection Properties, veritabanı bağlantı özellikleri
    protected $host = 'localhost';
    protected $user = 'root';
    protected $password = '';
    protected $database = "shopee";

    // connection property, bağlantı özelliği
    public $con = null;

    // call constructor, yapıcı method çağrısı
    public function __construct()
    {
        $this->con = mysqli_connect($this->host, $this->user, $this->password, $this->database);
        if ($this->con->connect_error){
            echo "Fail " . $this->con->connect_error;
        }
    }

    public function __destruct()
    {
        $this->closeConnection();
    }

    // for mysqli closing connection, mysql bağlantısını kapatmak için: 
    protected function closeConnection(){
        if ($this->con != null ){
            $this->con->close();
            $this->con = null;
        }
    }
}
