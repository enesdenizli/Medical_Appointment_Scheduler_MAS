<?php include 'dbConnection.php';
$dbObj = new DatabaseConnection;


class CrudOparation extends DatabaseConnection
{

//Insert data into database table
    public function insert($table, $data)
    {
        global $conn;
        ksort($data);
        $fieldNames = '`' . implode('`, `', array_keys($data)) . '`';
        $fieldvalues = "'" . implode("','", array_values($data)) . "'";

        $sql = 'INSERT INTO ' . $table . ' (' . $fieldNames . ') VALUES(' . $fieldvalues . ')';

        $statement = $this->conn->prepare($sql);
        $statement->execute();
        return 'true';
    }

//Select particular or all data from database table
    public function select_record($tblfld, $where, $table)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT " . $tblfld . " FROM " . $table . " WHERE " . $condition;
        $smt = $this->conn->prepare($sql);
        $smt->execute();
        return $smt->fetchAll();
    }


//Fetch all records
    public function fetch_all_record($field, $table)
    {
        $sql = "SELECT " . $field . " FROM " . $table;

        $smt = $this->conn->prepare($sql);
        $smt->execute();

        $smt->setFetchMode(PDO::FETCH_ASSOC);

        $row = $smt->fetchALL();
        return $row;
    }


    public function existence($where, $table)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {

            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql .= "SELECT COUNT(1) FROM " . $table . " WHERE " . $condition;

        $smt = $this->conn->prepare($sql);
        $smt->execute();
        return $smt->fetch();
    }


// Deletes records
    public function delete_record($table, $where)
    {
        $sql = "";
        $condition = "";
        foreach ($where as $key => $value) {
            $condition .= $key . "='" . $value . "' AND ";
        }
        $condition = substr($condition, 0, -5);
        $sql = "DELETE FROM " . $table . " WHERE " . $condition;
        $smt = $this->conn->prepare($sql);
        if ($smt->execute()) {
            return true;
        }
    }


}

?>