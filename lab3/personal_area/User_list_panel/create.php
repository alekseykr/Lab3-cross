<?php
session_start();
include "../../classes/class_user_list.php";
$adminUserCreate = new UserList();
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
    
]
?>
<table>
    <tr>
        <?php
        $adminUserCreate->UserListInfo($_SESSION['lang'], 1);
        ?>
    </tr>
    <tr>
        <form action="create_submit.php" method="POST">
            <th><input name="createname" type="text"></th>
            <th><input name="createsurname" type="text"></th>
            <th><input name="createlogin" type="text"></th>
            <th><input name="createpassword" type="text"></th>
            <th><select name="createlanguage" id="">
                    <option value="en">en</option>
                    <option value="ru">ru</option>
                    <option value="ua">ua</option>
                    <option value=""></option>
                </select></th>
            <th><select name="createrole" id="">
                    <option value=3><?php echo $translate['lang'][$_SESSION['lang']][0] ?></option>
                    <option value=2><?php echo $translate['lang'][$_SESSION['lang']][1] ?></option>
                    <option value=1><?php echo $translate['lang'][$_SESSION['lang']][2] ?></option>
                </select></th>
            <th><button type="submit">ok</button></th>
        </form>
    </tr>
</table>
<?php

if (isset($_SESSION['error'])) {
    echo '<p>' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}
