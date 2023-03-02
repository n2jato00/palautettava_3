<?php
require_once './functions.php';
require_once './header.php';

try {
    $db = openDb();
    $sql = "select * from task";
    $query = $db -> query($sql);
    $results = $query -> fetchAll(PDO::FETCH_ASSOC);
    header('HTTP/1.1 200 OK');
    print json_encode($results);
}
catch(PDOException $pdoex) {
    returnError($pdoex);
}