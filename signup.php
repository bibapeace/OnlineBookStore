<?php
	session_start();
    require('db.php');

    	$username = $_REQUEST['username'];
        $fname = $_REQUEST['fname'];
        $lname = $_REQUEST['lname'];
        $email = $_REQUEST['email'];
        $password = $_REQUEST['password'];
        $phone = $_REQUEST['phone'];
        $cpassword = $_REQUEST['cpassword'];

         $sql = "SELECT * FROM user";
    $result = mysqli_query($conn,$sql);
     
              

            $user = mysqli_fetch_all($result,MYSQLI_NUM);
        


        if (mysqli_error($conn)) {
            
            echo 'the problem with request '.mysqli_error($conn);
        } 


        else {
           for ($i=0; $i < count($user); $i++) {
                if ($_REQUEST['username'] == $user[$i][1]){
                    echo "an account with this username already exists";
                     echo "<br><a href = 'registerpage.html'>go back to the register page</a>";
                     break;
                } 

                if($_REQUEST['email'] == $user[$i][5])
                {
                    echo "an account with this user email already exists";
                     echo "<br><a href = 'registerpage.html'>go back to the register page</a>";
                     break;
                 } 

                 else
                 {
                       $sql1 = "INSERT INTO user(NickName,Password, FirstName, SecondName,Email,Phone,status)
                            VALUES('".$username."','".$password."','".$fname."','".$lname."','".$email."','".$phone."','1')";
                            $result = mysqli_query($conn,$sql1);


                 
                     echo "account created successfully";
                     echo "<br><a href = 'registerpage.html'>go back to the register page</a>";
                     break;
                 }
           }
        }


   


?>