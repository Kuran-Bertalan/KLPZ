<?php 
function AddCard($userid, $cardnumber, $expdate, $securitycode, $cardname) {
    $query = "SELECT id FROM creditcards WHERE number = :number";
    $params = [':number' => $cardnumber];
    require_once DATABASE_CONTROLLER;
    $record = getRecord($query, $params);
    if(empty($record)) {
        $query = "INSERT INTO creditcards (userid, number, expdate, securitycode, cardname) VALUES (:userid, :number, :expdate, :securitycode, :cardname)";
        $params = [ 
                ':userid' => $userid,
                ':number' => $cardnumber,
                ':expdate' => $expdate,
                ':securitycode' => $securitycode,
                ':cardname' => $cardname
                ];
        if(executeDML($query, $params))
        {
            header('Location: index.php?P=profile');
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

function DeleteCard($id){
	$query = "DELETE FROM creditcards WHERE id = :id";
	$params = [ ':id' => $id ];
	require_once DATABASE_CONTROLLER;
    if(executeDML($query, $params))
		{
			header('Location: index.php?P=profile');
		}
	return false;
}