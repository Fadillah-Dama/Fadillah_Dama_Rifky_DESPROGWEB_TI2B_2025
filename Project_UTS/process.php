<?php
session_start();

// displayList();

// membuat array jika di session belum ada
if (!isset($_SESSION["daftarTugas"])) {
        $_SESSION["daftarTugas"] = [];
}

if (!isset($_SESSION["tugasSelesai"])) {
    $_SESSION["tugasSelesai"] = [];
}

// hapus
if(isset($_POST["hapus"])) {
    $index = intval($_POST["hapus"]);
    if(isset($_SESSION["daftarTugas"][$index])) {
        unset($_SESSION["daftarTugas"][$index]);
        $_SESSION["daftarTugas"] = array_values($_SESSION["daftarTugas"]);
    }

    displayList();
    exit;
}

// done
if (isset($_POST["done"])) {
    $index = intval($_POST["done"]);

    if (isset($_SESSION["daftarTugas"][$index])) {
        $done = $_SESSION["daftarTugas"][$index];
        unset($_SESSION["daftarTugas"][$index]);
        $_SESSION["daftarTugas"] = array_values($_SESSION["daftarTugas"]);
        $_SESSION["tugasSelesai"][] = $done;
    }

    displayHistory();
    exit;
}

// edit
if(isset($_POST["editJudul"]) && isset($_POST["editDeadline"]) && isset($_POST["edit"]) && isset($_POST["editCatatan"])) {
    $editJudul = $_POST["editJudul"];
    $editDeadline = $_POST["editDeadline"];
    $editCatatan = $_POST["editCatatan"];
    $index = intval($_POST["edit"]);

    if(isset($_SESSION["daftarTugas"][$index])) {
        $_SESSION["daftarTugas"][$index] = [
            "judul" => $editJudul, "deadline" => $editDeadline, "catatan" => $editCatatan
        ];
    }

    displayList();
    exit;
}

// tambah data
if (isset($_POST["judul"]) && isset($_POST["deadline"]) && isset($_POST["catatan"])) {
    // Ambil data dari AJAX
    $judul = $_POST["judul"];
    $deadline = $_POST["deadline"];
    $catatan = $_POST["catatan"];

    $_SESSION["daftarTugas"][] = [
        "judul" => $judul, "deadline" => $deadline , "catatan" => $catatan
    ];

    $daftarTugas = $_SESSION["daftarTugas"];

    // Kirimkan kembali hasil dalam format HTML
    displayList();
    exit;
} 

// ketika ada request getHistory
if (isset($_GET["getHistory"])) {
    displayHistory();
    exit;
}

displayList();

function displayList() {
    echo "<h3>Task List</h3>";
    echo "<ul>";
    foreach ($_SESSION["daftarTugas"] as $i => $tugas) {

        echo "<li class='task-item'>";
            echo "<span class='task-content'>";
                echo "{$tugas['judul']} <br>";
                echo "{$tugas['deadline']} <br>";
                echo "Note: {$tugas['catatan']}";
                echo "";
            echo "</span>";
            echo "<div class='button-action'>";
                echo "<button class='hapus' id='button-delete' data-index=$i>Hapus</button>";
                echo "<button class='edit' id='button-edit' data-judul='{$tugas['judul']}' data-deadline='{$tugas['deadline']}' data-index={$i}>Edit</button>";
                echo "<input class='done' id='button-done' type='checkbox' data-index=$i>";
            echo "</div>";
        echo "</li>";
        echo "<hr>";
    }
    echo "</ul>";
}

function displayHistory() {
    echo "<h3>Task History</h3>";
    echo "<ul>";
    foreach ($_SESSION["tugasSelesai"] as $i => $tugas) {
        echo "<li class='task-done'>";
        echo "{$tugas['judul']} <br>";
        echo "{$tugas['deadline']} <br>";  
        echo "Note: {$tugas['catatan']}";  
        echo "</li>";
        echo "<hr>";
    }
    echo "</ul>";
}


?>
