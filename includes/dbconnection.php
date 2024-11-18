<?php 
// DB credentials.
define('DB_HOST','sql12.freesqldatabase.com');
define('DB_USER','sql12745418');
define('DB_PASS','RTZPECnB9M');
define('DB_NAME','sql12745418');
// Establish database connection.
try
{
$dbh = new PDO("mysql:host=".DB_HOST.";dbname=".DB_NAME,DB_USER, DB_PASS,array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES 'utf8'"));
}
catch (PDOException $e)
{
exit("Error: " . $e->getMessage());
}
?>
