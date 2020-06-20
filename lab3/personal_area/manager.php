<?php
    session_start();
    require "../classes/class_user_role.php";
    require "../auth/definitions_user.php";
    $translate = [
      'lang' => [
          'ru' => [
              'Админ',
              'Менеджер',
              'Клиент'
          ],
          'en' => [
              'Admin',
              'Manager',
              'Client'
          ],
          'ua' => [
              'Адмін',
              'Менеджер',
              'Клієнт'
          ]
      ]
          ];
    if (!isset($_SESSION['id'])) {
      exit(header('location:../auth/login.php'));
    }
    if ($role < 2) {
        exit(header('HTTP/ 1.0 403 Forbidden'));
      }
    $manager = new Manager($name, $surname);
    $manager->managerwelcome($_SESSION["lang"]);
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