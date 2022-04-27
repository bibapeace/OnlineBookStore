<?php
    require('config.php');
?>


<?php

  

        $authorid = $_REQUEST['authorid'];


        $sql = "DELETE FROM book WHERE authorid = '".$authorid."'";


        $result = mysqli_query($conn,$sql);


        if (mysqli_error($conn)) {
            # code...
            echo 'the problem with request '.mysqli_error($conn);
        }
        
        else {
            require('adminpagewherebook.php');
        }


  


?>