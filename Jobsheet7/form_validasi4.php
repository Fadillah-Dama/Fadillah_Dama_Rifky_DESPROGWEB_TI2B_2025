<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi Password</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (plus Password)</h1>
    <form id="myForm" method="post" action="proses_validasi2.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" class="error-span" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" class="error-span" style="color: red;"></span><br>

        <label for="password">Password:</label>
        <input type="password" id="password" name="password">
        <span id="password-error" class="error-span" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <div id="hasil" style="margin-top: 20px;"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault();
                var formData = $(this).serialize();

                $.ajax({
                    url: $(this).attr('action'),
                    type: "POST",
                    data: formData,
                    dataType: "json",
                    success: function(response) {
                        // Reset pesan error
                        $(".error-span").text("");
                        $("#hasil").html("");

                        if (!response.success) {
                            if (response.errors.nama) {
                                $("#nama-error").text(response.errors.nama);
                            }
                            if (response.errors.email) {
                                $("#email-error").text(response.errors.email);
                            }
                            if (response.errors.password) {
                                $("#password-error").text(response.errors.password);
                            }
                        } else {
                            $("#hasil").html("<p style='color:green;'>" + response.message + "</p>");
                        }
                    }
                });
            });
        });
    </script>
</body>
</html>