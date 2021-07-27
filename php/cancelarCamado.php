<?php
require('conectdb.php');
$edit = $db->query("UPDATE chamado SET status = 'cancelado' WHERE id = {$_POST['id']}");
echo true;
?>