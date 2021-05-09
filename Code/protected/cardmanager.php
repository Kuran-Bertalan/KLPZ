<?php 
function AddCard($userid, $name, $number, $expdate, $securitycode) {
    $query = "SELECT id FROM creditcards WHERE number = :number";
    $params = [':number' => $number];
    require_once DATABASE_CONTROLLER;
    $record = getRecord($query, $params);
    if(empty($record)) {
        $query = "INSERT INTO creditcards (userid, name, cardnumber, expdate, securitycode) VALUES (:userid, :cardname, :number, :expdate, :securitycode)";
        $params = [ 
                ':userid' => $userid,
                ':cardname' => $name,
                ':number' => $number,
                ':expdate' => $expdate,
                ':securitycode' => $securitycode
                ];
        if(executeDML($query, $params))
        {
            header('Location: index.php?P=profile.php');
        }
    } 
    return false;
}

function CheckCard($id){
	$query = "SELECT id FROM creditcards WHERE userid = :id";
		$params = [ ':id' => $id ];
		require_once DATABASE_CONTROLLER;
	$record = getRecord($query, $params);
	return !empty($record);
}