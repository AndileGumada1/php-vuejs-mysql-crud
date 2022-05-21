<?php
header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Methods: POST, GET');
header('Access-Control-Allow-Headers:*');
require_once('./database/database.php');

$tableName = 'diaryEntries';
$path = './dtabase.db';

if($_POST['id']){
    $id = intval($_POST['id']);
    deleteFromDatabase($path,'
    DELETE FROM ' .$tableName .' WHERE id = ' .$id. ';
    ');
}