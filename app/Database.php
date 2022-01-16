<?php

class Database extends mysqli {

    public function __construct() {

        parent::__construct(DB_HOST, DB_USER, DB_PASS, DB_NAME);

        if (mysqli_connect_error()) {
            die('Connect Error (' . mysqli_connect_errno() . ') '
                    . mysqli_connect_error());
        }

        if (!$this->set_charset("utf8")) {
            die("Error loading  el conjunto de caracteres utf8: " . $this->error);
        }
    }

    public function query($sql_query) {
        return parent::query($sql_query);
    }

    public function num_rows($sql_query) {
        return parent::mysqli_num_rows($sql_query);
    }

    public function queryParams($sql_query, $params) {
        $sql_query = vsprintf($sql_query, $params);

        $result_query = $this->query($sql_query);

        $results = array();

        while ($row = $result_query->fetch_assoc()) {
            $results[] = $row;
        }

        return $results;
    }

    public function execQuery($sql_query, $params) {
        $sql_query1 = vsprintf($sql_query, $params);
        return $this->query($sql_query1);
    }

}

?>
