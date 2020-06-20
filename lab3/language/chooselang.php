<?php
session_start();
echo "Choose your language";
?>
</br>
<form action="../auth/definitions_user.php" method="POST">
<input name="en" type="submit"  value="English"/>
<input name="ru" type="submit"  value="Русский"/>
<input name="ua" type="submit"  value="Український"/>
</form>


