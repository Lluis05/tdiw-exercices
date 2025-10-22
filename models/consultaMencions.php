<?php

    function consultaMencions($con, $grau) {
        $query = "SELECT * FROM mencions WHERE grau=$grau";
        $resultSet = pg_query($con, $query) or die("Error sql graus");
        $rows_mencions = pg_fetch_all($resultSet);

        return $rows_mencions;
    }
    

?>