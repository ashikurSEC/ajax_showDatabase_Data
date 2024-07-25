<?php
require 'config/Database.php';
require 'classes/StudentTable.php';

$db = new Database();
$table = new StudentTable( $db );
echo $table->render();