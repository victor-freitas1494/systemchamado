<?php
require('conectdb.php');
$edit = $db->query("UPDATE chamado SET status = 'close' WHERE id = {$_POST['id']}");
echo true;
?>