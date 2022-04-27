<?php

require('db_params.php');
/**
 * Класс Db
 * Компонент для работы с базой данных
 */
class Db
{


    public static function getConnection()
    {
        // Получаем параметры подключения из файла
        $params = include('db_params.php');

        // Устанавливаем соединение
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']}";
        $db = new PDO($dsn, $params['user'], $params['password']);

        // Задаем кодировку
        $db->exec("set names utf8");

        return $db;
    }

}
