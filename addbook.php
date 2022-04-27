<?php
    require('config.php');


?>


<?php

    

        $isbn = $_REQUEST['isbn'];
        $publisher = $_REQUEST['publisher'];
        $title = $_REQUEST['title'];
        $price = $_REQUEST['price'];
        $description = $_REQUEST['description'];
        $poster = $_REQUEST['poster'];
        $language = $_REQUEST['language'];
        $rating = $_REQUEST['rating'];
        $genre1 = $_REQUEST['genre1'];
        $genre2 = $_REQUEST['genre2'];
        $genre3 = $_REQUEST['genre3'];

        $sql = "INSERT INTO book(ISBN,Publisher,Title,Price,Description, Poster, Language, Rating, genre1, genre2, genre3) VALUES('".$isbn."','".$publisher."','".$title."','".$price."','".$description."','".$poster."','".$language."','".$rating."','".$genre1."','".$genre2."','".$genre3."')";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            $Authorid = mysqli_insert_id($conn);
            echo 'the inserted value has id '.$Authorid;

            require('adminpagewherebook.php');
        }


?>