<?php
// $sqlbook = "SELECT * FROM book";
// $resultbook = mysqli_query($conn,$sqlbook);
//        $book = mysqli_fetch_all($resultbook,MYSQLI_NUM);

 $hostname = 'localhost';
   $username = 'root';
   $passwordname = '';
   $basename = 'online_book_store';
   $conn = new mysqli($hostname, $username, $passwordname, $basename) or die  ('Невозможно открыть базу');
   // Формируем запрос из таблицы с именем blog
   $sql = "SELECT * FROM `comments` ";


   

?>