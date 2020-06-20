<?php
    session_start();
    require "../classes/class_user_role.php";
    require "../auth/definitions_user.php";
    if (!isset($_SESSION['id'])) {
      exit(header('location:../auth/login.php'));
    }
    if ($role != 3) {
      exit(header('HTTP/ 1.0 403 Forbidden'));
    }
    $admin = new Admin($name, $surname);
    $admin->adminwelcome($_SESSION['lang']);
    ?>
    <div>
    <form action="../language/changelang.php" method="POST">
    <select name="changelang" id="">
    <option value="en">English</option>
    <option value="ru">Русский</option>
    <option value="ua">Український</option>
    </select>
    <button type="submit">ok</button>
    </form>
    </div>
   <?php
  
