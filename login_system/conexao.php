<?php
define('HOST', 'mysql669.umbler.com');
define('USUARIO', 'attrative');
define('SENHA', 'admin123admin');
define('DB', 'attrative');

$conexao = mysqli_connect(HOST, USUARIO, SENHA, DB) or die ('Não foi possível conectar');

//comando para funcionar conexão com o server
//ALTER USER root@'localhost' IDENTIFIED WITH mysql_native_password BY 'adminvmo'
//ALTER USER Canal@mysql669.umbler.com IDENTIFIED WITH mysql_native_password BY 'admin123admin'
