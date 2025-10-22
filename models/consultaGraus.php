<?php
    function consultaGraus($con){
        $query = "SELECT * FROM graus";
        $resultSet = pg_query($con, $query) or die("Error sql graus");
        $rows_graus = pg_fetch_all($resultSet);

        return $rows_graus;
    }
?>