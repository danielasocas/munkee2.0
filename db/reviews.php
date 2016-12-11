<?php
function getReviewsByRest($id){
	global $db;

  	$stmt = $db->prepare('SELECT * FROM review rev, rating rat WHERE rev.id_rest = rat.id_rest AND rev.id_rest = ?');
  	$stmt->execute(array($id));
  	return $stmt->fetchAll();
}

function getReviewsByUser($username){
	global $db;

    $stmt = $db->prepare('SELECT rev.id_rest, rev.comment, rat.food_rat, rat.service_rat, rat.ambient_rat FROM review rev, rating rat WHERE rev.username = rat.username AND rev.username = ?');
    $stmt->execute(array($username));
    return $stmt->fetchAll();
}

function insertReview($idUser, $idRest, $comment) {
	global $db;

    $stmt = $db->prepare('INSERT INTO review VALUES (NULL, ?, ?, ?)');
    $stmt->execute(array($idUser, $idRest, $comment));
}
?>