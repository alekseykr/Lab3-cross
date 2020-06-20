<?php
session_start();
include "../../classes/class_user_list.php";
$adminUserEdit = new UserList();

$edit_id=$_POST['edit_id'];

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
        $adminUserEdit->UserListInfo($_SESSION['lang'], 1);
        ?>
    </tr>
    <tr>
        <form action="edit_submit.php" method="POST">
            <th><input name="editname" type="text"></th>
            <th><input name="editsurname" type="text"></th>
            <th><input name="editlogin" type="text"></th>
            <th><input name="editpassword" type="text"></th>
            <th><select name="editlanguage" >
                    <option value="en">en</option>
                    <option value="ru">ru</option>
                    <option value="ua">ua</option>
                    <option value=""></option>
                </select></th>
              <th>
                    <select name="editrole" id="role">
                    <option value=3><?php echo $translate['lang'][$_SESSION['lang']][0] ?></option>
                    <option value=2><?php echo $translate['lang'][$_SESSION['lang']][1] ?></option>
                    <option value=1><?php echo $translate['lang'][$_SESSION['lang']][2] ?></option>
                </select>
            </th>
                
            <th><button  value=<?php echo $edit_id?> name="id_user" type="submit">ok</button></th>
        </form>
    </tr>
</table>
<?php
if (isset($_SESSION['error'])) {
    echo '<p>' . $_SESSION['error'] . '</p>';
    unset($_SESSION['error']);
}

