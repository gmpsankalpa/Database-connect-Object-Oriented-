<?php
    include("connection.php");

    class operate extends Database{
        public function insert_records($table, $values){
            $sql = "";
            $sql .= "INSERT INTO ".$table;
            $sql .="(".implode(",",array_keys($values)).") VALUES ";
            $sql .="('".implode("','", array_values($values))."')";


            $query = $this->conn->query($sql);


            if($query){
                return true;
            }else{
                return false;
            }
        }
    }
?>