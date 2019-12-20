<?php

/*
    подкл к бд
*/

/*$dblocation = "127.0.0.1";
$dbname = "myshop";
$dbuser = "root";
$dbpasswd = "";*/
//172.16.9.5
//192.168.0.101
//localhost
define("HOST", "192.168.1.210");
define("USER", "root");
define("PASSWORD", "");
define("DB", "good_games");

//соединение с бд
$GLOBALS["db"] = mysqli_connect(HOST, USER, PASSWORD, DB) or die("Ошибка подключения MySql");

/*if(!$db) {
    echo "Ошибка доступа MySql";
    exit();
}*/

//кодировка для текущ соединения
mysqli_set_charset($GLOBALS["db"], 'utf8');

/*if(!mysql_select_db($dbname, $db) ) {
    echo "Ошибка доступа к БД: {$dbname}";
    exit();
}*/