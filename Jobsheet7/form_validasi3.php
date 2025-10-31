<!DOCTYPE html>
<html>
<head>
    <title>Form Input dengan Validasi AJAX</title>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
</head>
<body>
    <h1>Form Input dengan Validasi (AJAX)</h1>
    <form id="myForm" method="post" action="proses_validasi_ajax.php">
        <label for="nama">Nama: </label>
        <input type="text" id="nama" name="nama">
        <span id="nama-error" style="color: red;"></span><br>

        <label for="email">Email:</label>
        <input type="text" id="email" name="email">
        <span id="email-error" style="color: red;"></span><br>

        <input type="submit" value="Submit">
    </form>
    <div id="hasil" style="margin-top: 20px;"></div>

    <script>
        $(document).ready(function() {
            $("#myForm").submit(function(event) {
                event.preventDefault(); // Mencegah pengiriman form standar

                var nama = $("#nama").val();
                var email = $("#email").val();

                $.ajax({
                    url: "proses_validasi_ajax.php",
                    type: "POST",
                    data: {
                        nama: nama,
                        email: email
                    },
                    dataType: "json",
                    success: function(response) {
                        // Reset pesan error
                        $("#nama-error").text("");
                        $("#email-error").text("");
                        $("#hasil").html("");

                        if (!response.success) {
                            if (response.errors.nama) {
                                $("#nama-error").text(response.errors.nama);
                            }
                            if (response.errors.email) {
                                $("#email-error").text(response.errors.email);
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