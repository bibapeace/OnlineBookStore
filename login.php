<?php


    require('db.php');
    require('UserController.php');
$data = $_POST;


$name = false;
        $email = false;
        $password = false;
        $result = false;

 $errors = array();

 if (mysqli_error($conn)) {


        echo 'the error of mysql '.mysqli_error($conn);
    }

            

 

        	for ($i=0; $i < count($user); $i++) { 
       			 if($_REQUEST['username'] == $user[$i][1]) {
	                  if($_REQUEST['password'] == $user[$i][2]){ 
                        $userId = User::checkUserData($email, $password);
                            if ($user[$i][7] == 10) {
                                
                                 header('Location: adminpagewherebook.php'); 
                                 break;
                            } else {
                                
                                 if ($userId == false) {

                                   echo 'Неправильные данные для входа на сайт';
                                }
                                    $_SESSION['user'] = [
                                    "id" => $user[$i][0],
                                    "NickName" => $user[$i][1],
                                    "fname" => $user[$i][3],
                                    "sname" => $user[$i][4],
                                    "email" => $user[$i][5],
                                    "phone" => $user[$i][6],

                                 ];                    
                                  header('Location: cabinet.php'); 
                                break;
                            }
                        	 
                        } else{
                                header ('location: mimotoomuch.php');
                                break;
                        }
                        

	                 }else {
                                 header ('location: mimotoomuch.php');
                                
	 				}
			 }

	
?>