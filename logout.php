	<?php 
 ?>
         <script>
      localStorage.clear();
    </script>
        <?php
        // Стартуем сессию
        session_start();
        
        // Удаляем информацию о пользователе из сессии
        unset($_SESSION["user"]);
       
        // Перенаправляем пользователя на главную страницу
        header("Location: mainmenu.php");
    
?>