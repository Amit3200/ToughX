<?php
$db_host='localhost';
$db_name='legalhackathon';
$db_user='root';
$db_pass='amit';

$mysqli=new mysqli($db_host,$db_user,$db_pass,$db_name,3306);

if(mysqli_connect_errno()){
    echo 'The Connection is busy '.mysqli_connect_error();
    die();
}
