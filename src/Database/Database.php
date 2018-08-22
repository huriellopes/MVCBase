<?php

namespace Base\Database;

use PDO;

class Database
{
    public static function getDb()
    {
        $config = require __DIR__ . "/../../app/Config/database.php";

        try {
            $pdo = new PDO("{$config['db']['typeDB']}:host={$config['db']['host']};dbname={$config['db']['dbname']};charset={$config['db']['charset']};port={$config['db']['port']}", $config['db']['username'], $config['db']['password']);
            $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
            $pdo->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_OBJ);
            return $pdo;
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
    }
}
