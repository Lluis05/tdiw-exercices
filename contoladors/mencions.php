<?php
    include_once __DIR__ . "/../models/connectaBD.php";
    include_once __DIR__."/../models/consultaMencions.php";
    $con = connectaBD();

    /*if(isset($_REQUEST['grau'])){
        $grau = $_REQUEST['grau'];
    }else{
        $grau=1;
    }*/
    
    $grau = $_REQUEST['grau'] ?? 1;
    $rows_mencions = consultaMencions($con, $grau);
    pg_close($con);

    include_once __DIR__."/..vistes/opcionsMencions.php";
?>