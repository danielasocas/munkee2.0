<?php
	$BASE_DIR = dirname(__DIR__);

    try {
        $db = new PDO('sqlite:'.$BASE_DIR.'/db/munkee.db');
        $db->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE, PDO::FETCH_ASSOC);
        $db->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch (PDOException $e) {
        die($e->getMessage());
    }
?>