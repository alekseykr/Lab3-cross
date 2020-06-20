<?php
session_start();
if (isset($_SESSION['id']) && isset($_SESSION['lang'])) {
     header("location: ../");
 }
include "../head.php";
?>
    <form action="auth.php" method="POST" >
            <p>Login</p>
            <input name="login" type="text"  placeholder="Enter login" />
            <p>Password</p>
            <input name="password" type="password"  placeholder="Enter password" />
            <?php
            if (isset($_SESSION['message'])) {
                echo '<p>' . $_SESSION['message'] . '</p>';
                unset($_SESSION['message']);
            }
            ?>
            </br>
            <button type="submit">Enter</button>
    </form>
<?php
include "../footer.php";
