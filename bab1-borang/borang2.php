<?php

/*echo '$_POST:<pre>';
print_r($_POST);
echo '</pre>';*/

include 'DB_Pdo.php';
include 'tatarajah.php';
	$dbPdo = new \Aplikasi\Kitab\DB_Pdo(DB_TYPE, DB_HOST, DB_NAME, DB_USER, DB_PASS);

#istihar pembboleh ubah
$username = $_POST['biodata']['username'];	
$password = $_POST['biodata']['password'];
# panggil_sql
$sql = 'SELECT * FROM biodata' . "\r" 
. 'WHERE username like "' . $username . '" ' . "\r"
. 'AND password like "'. $password .'" ';

echo '$sql:<pre>';
print_r($sql);
echo '</pre>';

$result = $dbPdo->selectAll($sql);	

echo '$result:<pre>';
print_r($result);
echo '</pre>';
