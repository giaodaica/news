<?php
namespace App\Models;

use PDO;

class database{
    protected $conn = null;
    protected $table = null;
    protected $prmkey = 'id';
    protected $sql;
    public function __construct(){
        $this->conn = new PDO("mysql:host=localhost;dbname=db_news","root","");
    }
}