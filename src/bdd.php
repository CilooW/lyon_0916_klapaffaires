<?php
/**
 * Created by PhpStorm.
 * User: apprenti
 * Date: 10/10/16
 * Time: 15:10
 */

function getConnexion(){
    $host = "localhost";
    $password = "jecode4laloupe";
    $user = "root";
    $db = "klapaffairebdd";
    $mysqli = new mysqli($host, $user, $password, $db);
    if (false === $mysqli->connect_errno) {
        echo "Failled to connect to MySql: (" . $mysqli->connect_errno . ")"  .$mysqli->connect_error ;
        die();
    }
    return $mysqli;

}

function execSql($mysqli, $sql){
    if(!$result = $mysqli->query($sql)){
        echo "failed to run query : (" . $mysqli->errno . ")" . $mysqli->error;
        die();
    }
    return $result;
}
