<?php
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__."/../models/consultaGraus.php";
    $con = connectaBD();

    $rows_graus = consultaGraus($con);
    pg_close($con);

    include_once __DIR__."/../vistes/opcionsGraus.php";
?>
