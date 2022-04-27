<?php
    require('config.php');


?>


<?php


        $authorid = $_REQUEST['authorid'];
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

        $sql = "UPDATE book SET ISBN = '".$isbn."' , Publisher  = '".$publisher."' , Title = '".$title."' , Price = '".$price."', Description  = '".$description."' , Poster  = '".$poster."' , Language = '".$language."' , Rating = '".$rating."', genre1  = '".$genre1."' , genre2  = '".$genre2."' , genre2  = '".$genre3."' WHERE authorid = '".$authorid."'";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        else {
            require('adminpagewherebook.php');
        }



?>