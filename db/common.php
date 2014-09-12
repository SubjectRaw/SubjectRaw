<?php

include_once("db_connect_my.php");
session_start();


$out="";
if (!array_key_exists("lang",$_SESSION)) {
    $_SESSION["lang"]="en";
} else {
    
}
$lang = $_SESSION["lang"];


function get_result($sql) {
    global $dbh;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }

    foreach($sth as $row) {
        $term = $row;
    }
    if ($sth) return $term;

}

function get_results($sql) {
    global $dbh;
    //echo $sql;
    try {
        $sth = $dbh->query($sql);
    } catch (PDOException $e) {
        echo 'Query failed: ' . $e->getMessage();
    }
    $term = array();
    foreach($sth as $row) {
        $term[] = $row;
    }
    return $term;

}

?>