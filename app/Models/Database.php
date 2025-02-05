<?php
namespace App\Models;

use PDO;
use PDOException;

class database{
    protected $conn = null;
    protected $table = null;
    protected $prmkey = 'id';
    protected $sql;
    public function __construct(){
        try {
            $this->conn = new PDO("mysql:host=localhost;dbname=db_news","root","");
        } catch (PDOException $e) {
          echo "Lỗi kết nối".$e->getMessage();
        }
    }
    public static function all(){
        
    }
}