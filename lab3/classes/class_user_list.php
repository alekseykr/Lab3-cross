<?php
session_start();

class UserList
{
    public function UserListInfo($lang,$crt)
    {
        if ($lang == "ru") {
        ?>
            <th>Имя</th>
            <th>Фамилия</th>
            <th>Логин</th>
            <?php
            if($crt==1){
                ?> <th>Пароль</th><?php
            }
            ?>
            <th>Язык</th>
            <th>Роль</th>
        <?php
        }
        if ($lang == "en") {
        ?>
            <th>Name</th>
            <th>Surname</th>
            <th>Login</th>
            <?php
            if($crt==1){
                ?> <th>Password</th><?php
            }
            ?>
            <th>Language</th>
            <th>Role</th>
        <?php
        }
        if ($lang == "ua") {
        ?>
            <th>Ім'я</th>
            <th>Прізвище</th>
            <th>Логін</th>
            <?php
            if($crt==1){
                ?> <th>Пароль</th><?php
            }
            ?>
            <th>Мова</th>
            <th>Роль</th>
        <?php
        }
    }
    public function UserListEdit($lang,$id)
    {
        if ($lang == "ru") {
        ?>
        <form action="../personal_area/User_list_panel/edit.php" method="POST">
            <th>
                <button name="edit_id" value="<?php  echo $id ?>" type="number" >Редактировать</button>
            </th>
            </form>
        <?php
        }
        if ($lang == "en") {
        ?>
        <form action="../personal_area/User_list_panel/edit.php" method="POST">
            <th>
                <button name="edit_id" value="<?php echo $id ?>" type="number" >Edit</button>
            </th>
        </form>
        <?php
        }
        if ($lang == "ua") {
        ?>
        <form action="../personal_area/User_list_panel/edit.php" method="POST">
            <th>
                <button name="edit_id" value="<?php echo $id ?>" type="number" >Редагувати</button>
            </th>
        </form>
        <?php
        }
    }

    public function UserListDelete($lang, $id)
    {
        if ($lang == "ru") {
        ?>
        
            <form action="../personal_area/User_list_panel/delete.php" method="POST">
                <th>
                    <button name="delete" value="<?php echo $id ?>" type="submit">Удалить</button>
                </th>
            </form>
        <?php
        }
        if ($lang == "en") {
        ?>
            <form action="../personal_area/User_list_panel/delete.php" method="POST">
                <th>
                    <button name="delete" value="<?php echo $id ?>" type="submit">Delete</button>
                </th>
            </form>
        <?php
        }
        if ($lang == "ua") {
        ?>
            <form action="../personal_area/User_list_panel/delete.php" method="POST">
                <th>
                    <button name="delete" value="<?php echo $id ?>" type="submit">Видалити</button>
                </th>
            </form>
        <?php
        }
    }
    public function UserListCreate($lang,$id)
    {
        if ($lang == "ru") {
        ?>
            <form action="../personal_area/User_list_panel/create.php" method="POST">
                    <button name="create" value="<?php echo $id ?>" type="submit">Создать</button>
            </form>
        <?php
        }
        if ($lang == "en") {
        ?>
            <form action="../personal_area/User_list_panel/create.php" method="POST">
                    <button name="create" value="<?php echo $id ?>" type="submit">Create</button>
            </form>
        <?php
        }
        if ($lang == "ua") {
        ?>
            <form action="../personal_area/User_list_panel/create.php" method="POST">
                    <button name="create" value="<?php echo $id ?>" type="submit">Створити</button>
            </form>
        <?php
        }
    }
}
