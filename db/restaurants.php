<?php

/* Gets all restaurants */ 
  function getAllRest() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM restaurant');
    $stmt->execute();  

    return $stmt->fetchAll();
  }

/* Get restaurant by id */    
  function getRest() {
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
    return $stmt->fetch();
  }

/* Get restaurant by rates in food */    
  function getRestByFood() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM restaurant
    ORDER BY food_rat DESC LIMIT 3');
    $stmt->execute();  

    return $stmt->fetchAll();
  }

/* Get restaurant by rates in service */    
  function getRestByService() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM restaurant
    ORDER BY service_rat DESC LIMIT 3');
    $stmt->execute();  

    return $stmt->fetchAll();
  }

/* Get restaurant by rates in ambient */    
  function getRestByAmbient() {
    global $db;
    
    $stmt = $db->prepare('SELECT * FROM restaurant
    ORDER BY ambient_rat DESC LIMIT 3');
    $stmt->execute();  

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

/******************** Search ********************/

/*Searchs for a restaurant by name   */
  function searchRestByName($keyword) {
    global $db;
    
    $word = "%{$keyword}%";
    $stmt = $db->prepare('SELECT * FROM restaurant WHERE name LIKE ?');
    $stmt->execute(array($word));
    return $stmt->fetchAll();
  }

?>