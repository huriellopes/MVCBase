<?php

namespace Base\Model;

use Base\Database\Database;
use PDO;

abstract class Model
{
    protected $db;

    public function __construct(PDO $db)
    {
        $this->db = Database::getDb();
    }

    public function all($table)
    {
        try {
            $sql = "SELECT * FROM {$table}";
            $all = $this->db->prepare($sql);
            $all->execute();
        } catch (PDOException $e) {
            echo $e->getMessage();
            exit();
        }
        return $all->fetchAll(PDO::FETCH_ASSOC);
    }
}
