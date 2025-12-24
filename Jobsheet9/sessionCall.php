<?php
    session_start();
?>
<!DOCTYPE html>
<html>
    <body>
        <?php
            echo "Favorite color is " . (isset($_SESSION["favcolor"]) ? $_SESSION["favcolor"] : "not set") . ".<br>";
            echo "Favorite animal is " . (isset($_SESSION["favanimal"]) ? $_SESSION["favanimal"] : "not set") . ".";
        ?>
    </body>
</html>