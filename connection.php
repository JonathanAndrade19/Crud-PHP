
<?php 

$conn = new mysqli('localhost','root','','php_mysql_iniciando');

if ($conn->connect_errno){
    die('Falhou em Conectar; ('.$conn->connect_errno.')' .$conn->connect_error);
}
return $conn;
