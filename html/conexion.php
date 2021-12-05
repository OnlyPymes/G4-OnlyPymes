<?php
$con=new mysqli(
'localhost',
'root',
'',
'prueba',

);
if($con->connect_errno)
{
    die ('No se puede conectar');
}

?>