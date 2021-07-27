<?php
require('conectdb.php');
$edit = $db->query("SELECT * FROM chamado WHERE id = 2");
$arrayEdit = array();
while($row = $edit->fetchArray(SQLITE3_ASSOC)){
    array_push($arrayEdit, $row);
}

echo $arrayEdit[0]['chamado'];
var_dump($arrayEdit);
?>