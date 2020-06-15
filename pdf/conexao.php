<?php
define('HOST', 'mysql669.umbler.com:41890');
define('USUARIO', 'attrativeadm');
define('SENHA', 'attrative-mysql');
define('DB', 'attrative');

$mysqli = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

if($mysqli->connect_errno)
    echo "Falha na conexão: (".$mysqli->connect_errno.") ".$mysqli->connect_error;

//comando para funcionar conexão com o server
//ALTER USER root@'localhost' IDENTIFIED WITH mysql_native_password BY 'attrativeadm'
//ALTER USER Canal@mysql669.umbler.com IDENTIFIED WITH mysql_native_password BY 'attrative-mysql'
?>