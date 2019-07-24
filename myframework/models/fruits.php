<?php
class fruits{

    public function __construct($parent) {
        $this->db = $parent->db;
    }

    public function select($sql, $value=array()){
        $sql = $this->db->prepare($sql);
        $result = $sql->execute($value);
        $data = $sql->fetchAll();
        return $data;
    }

    public function add($sql, $value=array()){
        $sql = $this->db->prepare($sql);
        $result = $sql->execute($value);
    }

    public function delete($sql, $value=array()){
        $sql = $this->db->prepare($sql);
        $result = $sql->execute($value);
    }

    public function update($sql, $value=array()){
        $sql = $this->db->prepare($sql);
        $result = $sql->execute($value);
    }
}
?>