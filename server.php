<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nama = isset($_POST['nama']) ? trim($_POST['nama']) : '';

    if (empty($nama)) {
        http_response_code(400);
        echo "Input nama tidak boleh kosong!";
    } else {
        $nama_bersih = htmlspecialchars($nama, ENT_QUOTES, 'UTF-8');
        echo "Halo, " . $nama_bersih . "! Selamat datang di AJAX!";
    }
}
?>