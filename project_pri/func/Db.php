<?php 
class Db{
    public static $tablename;
    public static $where = '';
    public static $pdo;
    public static $stmt;

    public function __construct() {
        self::connect();
        self::setAttr();
    }

    public static function connect()
    {
        $config = require __DIR__."/../config/database.php";
        $dbms = $config["dbms"];
        $host = $config["host"];
        $dbname = $config["dbName"];
        $user = $config["user"];
        $pass = $config["password"];

        $dsn="$dbms:host=$host;dbname=$dbname;charset=utf8mb4";

        try {
            self::$pdo = new PDO($dsn, $user, $pass);
        } catch (PDOException $e) {
            throw new Exception("error:" . $e->getMessage());  
        }

    }

    public static function setAttr()
    {
        //设置PDO错误模式为异常
        self::$pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }

    public static function table($tablename)
    {
        self::$tablename = $tablename;
        return new self();//返回对象自身
    }

    public function where(Array $condition)
    {
        $where = "";
        if(!empty($condition)){

        }

        self::$where = $where;
        return $this;
    }

    public function select()
    {
        $sql = "SELECT * FROM ". self::$tablename ." ". self::$where ."";
        // echo $sql;
        self::$stmt = self::$pdo->prepare($sql);
        self::$stmt->execute();
        $result = self::$stmt->fetchAll();

        self::$stmt->closeCursor();
        return $result;
    }
    
}
Db::connect();
// $config = require __DIR__."/../config/database.php";
// var_dump($config);

?>