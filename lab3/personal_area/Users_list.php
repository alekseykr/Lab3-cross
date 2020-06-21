<?php
session_start();
include "../database/db.php";
include "../classes/class_user_list.php";
if (!isset($_SESSION['id'])) {
    exit(header('location:../auth/login.php'));
}
$users = mysqli_query($db_phpmyadmin->connect(), "SELECT * FROM `users`");
$adminUserList = new UserList();
$i = 0;
?>
<table border="1">
    <?php
    while ($user = mysqli_fetch_assoc($users)) {
    ?>
        <tr>
            <?php
            if ($i == 0) {
                $adminUserList->UserListInfo($_SESSION['lang'], 0);
            ?>
                <th>Id</th>
            <?php
            }
            ?>
        </tr>
        <tr>
            <th>
                <?php echo $user['name']; ?>
            </th>
            <th>
                <?php echo $user['surname']; ?>
            </th>
            <th>
                <?php echo $user['login']; ?>
            </th>
            <th>
                <?php echo $user['lang']; ?>
            </th>
            <th>
                <?php echo $user['role']; ?>
            </th>
            <th>
                <?php echo $user['id']; ?>
            </th>
            <?php
            if ($_SESSION['role'] == 3) {
                $adminUserList->UserListEdit($_SESSION['lang'], $user['id']);
                if ($_SESSION['id'] == $user['id']) {
                continue;
                }
                $adminUserList->UserListDelete($_SESSION['lang'], $user['id']);
            }
            ?>
        </tr>
    <?php
        $i++;
    }
    ?>
</table>
<?php
if (isset($_SESSION['message_list'])) {
    echo '<p>' . $_SESSION['message_list'] . '</p>';
    unset($_SESSION['message_list']);
}
$adminUserList->UserListCreate($_SESSION['lang'], $user['id']);
$translate = [
    'back' => [
    'ru'=>'Назад',
    'en'=>'Back',
    'ua'=>'Назад'
    ]
]
?>
<button type="submit" onclick="window.location.href='../'"><?php echo $translate['back'][$_SESSION['lang']] ?></button>
<?php
