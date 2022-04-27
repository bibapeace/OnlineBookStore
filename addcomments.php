<?php
    require('config.php');


?>


<?php

        $number = 1;
        $proverka = 0;

        $rating = $_REQUEST['zero'];
        $ISBN = $_REQUEST['isbn'];
        $userid = $_REQUEST['userid'];
        $text = $_REQUEST['text'];
        $date = $_REQUEST['date'];
if($rating)
       {
        $sqld = "INSERT INTO comments(bookid,userid,text,date,rating) VALUES('".$ISBN."','".$userid."','".$text."','".$date."','".$rating."')";
       
               $book = "SELECT * FROM book";
               $res = mysqli_query($conn,$book);
               $books = mysqli_fetch_all($res,MYSQLI_NUM);
               for ($i=0; $i < count($books); $i++) { 
                   if($books[$i][0]==$ISBN)
                  { 
                   if($books[$i][10] == 0){
                                 $proverka = 5;
                                  
                              }else {
                                  $proverka = 10;
                              }
                          } 
                 
               }
       
               if ($proverka == 5) {
                   $sql2 = "UPDATE book set Rating = '".$rating."', commentsnum = '".$number."' WHERE ISBN = '".$ISBN."'";
                           $res = mysqli_query($conn,$sql2);
       
               } 
               if ($proverka == 10){
                    $sql3 = "UPDATE book set Rating = Rating + '".$rating."', commentsnum = commentsnum + '".$number."' WHERE ISBN = '".$ISBN."'";
                   
                    $res2 = mysqli_query($conn,$sql3);
       
               }
             
        $sql4 = "UPDATE book set showrating = Rating / commentsnum WHERE ISBN = '".$ISBN."'";
           $res3 = mysqli_query($conn,$sql4);
                  
       
               $result = mysqli_query($conn,$sqld);
       
       
               if (mysqli_error($conn)) {
                   # code...
                   echo 'the problem with request '.mysqli_error($conn);
               }
               else {
                   $Authorid = mysqli_insert_id($conn);
                    header('Location: tovar.php#'.$ISBN.''); 
               }

           } else{
                 header('Location: tovar.php#'.$ISBN.''); 
           }


?>