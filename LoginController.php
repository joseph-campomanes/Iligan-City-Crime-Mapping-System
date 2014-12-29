<?php
require_once('Login.php');
require_once('PgDatabase.php');

$login=new Login();
$connection=new PgDatabase();
$test=array('table_name'=>'users','username'=>$login->username,'password'=>$login->password);
$connection->retrieve($test);

?>