<?php

function connection()
{
    require_once $_SERVER['DOCUMENT_ROOT'] . '/src/settings_db.php';
    $con = new mysqli($host, $user, $password, $base);
    if ($con->connect_error) {
        die ('Ошибка подключения к базе данных ' . $con->connect_error);
    }
    return $con;
}