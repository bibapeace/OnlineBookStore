<?php
                session_start();

   require_once('Datebase.php');
class User
{
public static function auth($userId)
    {


        // Записываем идентификатор пользователя в сессию
        $_SESSION['user'] = $userId;
    }

public static function checkLogged()
    {

        // Если сессия есть, вернем идентификатор пользователя
        if (isset($_SESSION['user'])) {
            return $_SESSION['user'];
        }
    }

    public static function isGuest()
    {

        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

    public static function isGuest1()
    {

        if (isset($_SESSION['user'])) {
            return false;
        }
        return true;
    }

   public static function checkUserData($email, $password)
    {
                session_start();

        // Соединение с БД
        $db = Db::getConnection();

        // Текст запроса к БД
        $sql = 'SELECT * FROM user WHERE email = :email AND password = :password';

        // Получение результатов. Используется подготовленный запрос
        $result = $db->prepare($sql);
        $result->bindParam(':email', $email, PDO::PARAM_INT);
        $result->bindParam(':password', $password, PDO::PARAM_INT);
        $result->execute();

        // Обращаемся к записи
        $user = $result->fetch();

        if ($user) {
            // Если запись существует, возвращаем id пользователя
            return $user['id'];
        }
        return false;
    }
}




?>