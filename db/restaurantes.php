<?php

/* Gets all restaurants */ 
  function getAllRest() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM restaurante');
    $stmt->execute();  

    return $stmt->fetchAll();
  }

/* Get restaurant by id */    
  function getRest($id) {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM news WHERE id = ?');
    $stmt->execute(array($id));  

    return $stmt->fetch();
  }

/* Get restaurant by owner */
  function getRestByOwner($owner) {
    global $db;

    $stmt = $db->prepare('SELECT * FROM restaurant r, owner o WHERE r.id = o.id_rest AND o.id_owner = ?');
    $stmt->execute(array($owner));
    return $stmt->fetchAll();
  }



/******************** Update ********************/

/* Updates a Restaurant information */  
  function updateRest($id, $name, $address, $postcode,$type,$timetable,$food_rat,$service_rat,$ambient_rat) {
    global $db;
    
    $stmt = $db->prepare('UPDATE news SET title = ?, introduction = ?, fulltext = ? WHERE id = ?');
    $stmt->execute(array($title, $introduction, $fulltext, $id));  

    return $stmt->fetch();
  }
?>