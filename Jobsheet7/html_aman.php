<!DOCTYPE html>
<html>
    <head>
        <title>Validasi Email</title>
    </head>
    <body>
        <h2>Form Validasi Email</h2>
        <form method="post" action="">
            <label for="email">Email:</label>
            <input type="text" id="email" name="email">
            <input type="submit" value="Validasi">
        </form>
        <hr>
        <?php
        if ($_SERVER["REQUEST_METHOD"] == "POST") {
            // Memeriksa apakah input adalah email yang valid
            $email = $_POST['email'];
            if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
                echo "Email <strong>'$email'</strong> adalah format yang valid.";
            } else {
                echo "Email <strong>'$email'</strong> adalah format yang 
                <strong>tidak valid</strong>.";
            }
        }
        ?>
    </body>
</html>