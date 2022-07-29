<?php
namespace System\Core;

use Exception;

 class Model extends Database {

    protected function query($sql = '') {
        if ($sql == '') {
            throw new Exception('SQL empty', 500);
        }

        $result = $this->conn->query($sql);

        return $result ? $result : null;
    }

    protected function getAll($sql = '') {
        $result = $this->query($sql);
        if (is_null($result)) return null;
        
        $data = [];

        while ($row = $result->fetch_assoc()) {
            $data[] = $row;

        }

        return $data;
    
    }
 }



?>