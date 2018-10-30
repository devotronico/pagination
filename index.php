<?php
require_once 'app/controller/Controller.php';   
require_once 'app/model/DataJSON.php';    
require_once 'app/model/DataSQL.php';    
require_once 'app/model/Database.php';   
require_once 'config/db.php';   
require_once 'helper/functions.php';   



$db = new Database;


$conn = $db->getConnection();


$pagination = new Controller();


$pageNumber = isset($_GET['page']) ? $_GET['page'] : 1;


if (isset($_GET['data']) && $_GET['data'] === 'sql' && !is_null($conn) ) { 

    $pagination->pageSQL('sql', $pageNumber, $conn);     

} else {

    $pagination->pageJSON('json', $pageNumber);    
}



$pagination->display();







