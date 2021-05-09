<?php 
function AddCard($userid, $name, $number, $expiration, $security) {
    $query = "SELECT id FROM creditcards WHERE cardnumber = :cardnumber";
    $params = [':cardnumber' => $number];
    require_once DATABASE_CONTROLLER;
    $record = getRecord($query, $params);
    if(empty($record)) {
        $query = "INSERT INTO creditcards (userid, name, cardnumber, expiration, security_code) VALUES (:userid, :name, :cardnumber, :expiration, :security)";
        $params = [ 
                ':userid' => $userid,
                ':name' => $name,
                ':cardnumber' => $number,
                ':expiration' => $expiration,
                ':security' => $security
                ];
        if(executeDML($query, $params))
        {
            header('Location: index.php?P=profile');
        }
    } 
    return false;
}