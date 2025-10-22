$(function() {
    $("#deadline").datepicker();

    $("#form").hide();
    $("#history").hide();
    
    $(document).ready(function() {
        loadTugas();
    });

    $("#tampilForm").click(function() {
        $("#form").slideToggle("fast")
    });

    $("#tampilHistory").click(function() {
        loadHistory();

        // tampilkan / sembunyikan 
        $("#history").slideToggle("fast");
    });

    function loadTugas() {
        $.get("process.php", function(response) {
            $("#result").html(response);
        });
    }

    // menampilkan history
    function loadHistory() {
        $.get("process.php", { getHistory: true }, function(history) {
            $("#history").html(history);
        });
    }

    // tambah data
    $("#form").submit(function(e) {
        e.preventDefault(); 

        const judul = $("#judul").val();
        const deadline = $("#deadline").val();
        const catatan = $("#catatan").val();

        if (judul.trim() === '' || deadline.trim() === '') { 
                e.preventDefault(); 
                alert('Judul dan Deadline tugas TIDAK BOLEH KOSONG!!!');
                return;
        }

        $.post("process.php", { judul: judul, deadline: deadline, catatan: catatan}, function(response) {
            $("#result").html(response); // tampilkan di result
            
            $("#judul").val(""); // menghapus input yang masih ada di form
            $("#deadline").val("");
            $("#catatan").val(""); // add catatan
        });

        $("#form").slideUp("fast");
    });

    // hapus data
    $(document).on("click", ".hapus", function() { // menggunakan event delegation
        const index = $(this).data("index");
        // kirim data ke php dengan post
        $.post("process.php", {hapus: index}, function(response) {
            $("#result").html(response);
        });
    });

    // check / done
    $(document).on("change", ".done", function() {
        if ($(this).is(":checked")) {
            const index = $(this).data("index");

            $.post("process.php", {done: index}, function(response) {
                $("#history").html(response);
                loadTugas();
            });
        }
    });


    // edit data
    $("#editDeadline").datepicker();

    $(document).on("click", ".edit", function() {
    
        $(".popup-bg").css("display", "flex").hide().fadeIn(); 

        const index = $(this).data("index");
        const judul = $(this).data("judul");
        const deadline = $(this).data("deadline");
        const catatan = $(this).data("catatan");

        $("#editJudul").val(judul);
        $("#editDeadline").val(deadline);
        $("#editCatatan").val(catatan);
        $("#editForm").data("index", index); //
        
    });

    // cancel edit
    $("#cancel-button").click(function() {
        $("#popupForm").fadeOut();
        return;
    });

    // save data setelah edit
    $("#editForm").submit(function(e) {
            e.preventDefault();

            const editJudul = $("#editJudul").val();
            const editDeadline = $("#editDeadline").val();
            const editCatatan = $("#editCatatan").val();
            const index = $(this).data("index"); // ambil index dari form

            if (editJudul.trim() === '') { // membersihkan spasi di awal dan akhir 
                e.preventDefault(); // mencegah reload halaman saat submit form
                alert('Judul dan Deadline tidak boleh kosong...');
                return;
            }

            // kirim ke php
            $.post("process.php", {editJudul: editJudul, editDeadline: editDeadline, edit: index, editCatatan: editCatatan}, function(response) {
                $("#result").html(response);
                
                $("#editJudul").val("");
                $("#editDeadline").val("");
                $("#editCatatan").val("");
                $("#popupForm").fadeOut();
            });
        });

    $(window).click(function(e) {
        if ($(e.target).is("#popupForm")) {
            $("#popupForm").fadeOut();
        }
    });

});

