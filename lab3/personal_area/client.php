<?php
    session_start();
    require "../classes/class_user_role.php";
    require "../auth/definitions_user.php";
    if (!isset($_SESSION['id'])) {
        exit(header('location:../auth/login.php'));
      }
    $client = new Client($name, $surname);
    $client->clientwelcome($_SESSION["lang"]);
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
    