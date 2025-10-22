<?php
function connectaBD(){
    $host='deic-docencia.uab.cat';
    $port='5432';
    $dbname='tdiw-w15';
    $user='tdiw-w15';
    $password='tdiw-w15';
    $con = pg_connect("host=$host port=$port dbname=$dbname user=$user password=$password") or die("Error db:".preg_last_error());
    return $con;
}
?>