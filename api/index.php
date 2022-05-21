<?php
header('Access-Control-Allow-Origin: *');
require_once('./database/database.php');
$tableName = 'diaryEntries';
$path = './dtabase.db';

// createTable('./dtabase.db',"
//     $tableName(id integer primary key,entry);
// ");
//insertIntoDatabase(
//     $path,
//     '
//     INSERT INTO ' .$tableName .'(entry) VALUES("Learn some more PHP coding");'
// );

$rows = selectFromDatabase($path, "SELECT * FROM $tableName");
$diaryEntries = [];
if (count($rows) > 0) {
    foreach ($rows as $row => $value) {
        array_push($diaryEntries, $value);
    }
    echo json_encode($diaryEntries);
}

