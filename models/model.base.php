<?php
require_once __DIR__ . "/../config/conexion.php";

class Model
{
    public $db;
    private $view;
    private $table;
    private $key;
    public $data;
    protected $afields = array();
    public $values = array();

    public function __construct($db)
    {
        $this->db = $db;
    }

    public function newRecord()
    {
        $this->getOne(0);
    }

    public function setView($v)
    {
        $this->view = $v;
    }
    public function setTable($t)
    {
        $this->table = $t;
    }
    public function setKey($k)
    {
        $this->key = $k;
    }

    public function addField($f)
    {
        $this->afields[] = $f;
    }

    public function get($sql, $values = [])
    {
        $stmt = $this->db->prepare($sql);
        $stmt->execute($values);
        $this->data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function getOne($id)
    {
        $sql = "SELECT * FROM {$this->view} WHERE {$this->key} = ?";
        $stmt = $this->db->prepare($sql);
        $stmt->execute([$id]);
        $this->data = $stmt->fetch(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function getAll($order = "")
    {
        $ord = $order ? " ORDER BY {$order}" : "";
        $sql = "SELECT * FROM {$this->view}{$ord}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute();
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function getWhere($condition, $values = [], $order = "")
    {
        $ord = $order ? " ORDER BY {$order}" : "";
        $sql = "SELECT * FROM {$this->view} WHERE {$condition}{$ord}";
        $stmt = $this->db->prepare($sql);
        $stmt->execute($values);
        $this->data = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $this->data;
    }

    public function insert()
    {
        $fields = implode(",", $this->afields);
        $placeholders = rtrim(str_repeat("?,", count($this->afields)), ",");
        $sql = "INSERT INTO {$this->table} ({$fields}) VALUES ({$placeholders})";

        $stmt = $this->db->prepare($sql);
        $stmt->execute($this->values);

        $idStmt = $this->db->query("SELECT SCOPE_IDENTITY() AS last_id");
        $row = $idStmt->fetch(PDO::FETCH_ASSOC);

        return $row['last_id'] ?? null;
    }

    public function update($id)
    {
        $setParts = [];
        foreach ($this->afields as $f) {
            $setParts[] = "{$f} = ?";
        }

        $sql = "UPDATE {$this->table} 
                SET " . implode(", ", $setParts) . " 
                WHERE {$this->key} = ?";

        $params = $this->values;
        $params[] = $id;

        $stmt = $this->db->prepare($sql);
        return $stmt->execute($params);
    }

    public function deleteOne($id)
    {
        $sql = "DELETE FROM {$this->table} WHERE {$this->key} = ?";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute([$id]);
    }

    public function deleteWhere($condition, $values = [])
    {
        $sql = "DELETE FROM {$this->table} WHERE {$condition}";
        $stmt = $this->db->prepare($sql);
        return $stmt->execute($values);
    }
}
?>