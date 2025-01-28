<?php 
    // untuk memastikan kode PHP hanya dijalankan ketika form disubmit
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {
        $usia = $_POST['usia'] ?? null;

        if ($usia === null || $usia === '') {
            echo "<script> alert('Silakan masukkan usia Anda!') </script>";
        } else if ($usia <= 17) { 
            echo "<script> alert('Anda masih belum cukup umur untuk menaiki wahana ini!') </script>";
        } else if ($usia >= 55) {
            echo "<script> alert('Anda sudah terlalu tua untuk menaiki wahana ini!') </script>";
        } else {
            echo "<script> alert('Selamat menikmati wahana ini!') </script>";
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Wahana Gledek</title>
    <style>
        /* Meringkas CSS */
        body{font-family:'Arial',sans-serif;background-color:#f4f4f9;display:flex;justify-content:center;align-items:center;height:100vh;margin:0}.container{background:#fff;padding:2rem;border-radius:10px;box-shadow:0 4px 10px rgb(0 0 0 / .1);text-align:center;max-width:400px;width:100%}h1{color:#333;font-size:2rem;margin-bottom:1.5rem}label{display:block;font-size:1rem;color:#555;margin-bottom:.5rem}input[type="number"]{width:100%;padding:.75rem;border:1px solid #ddd;border-radius:5px;font-size:1rem;margin-bottom:1rem;box-sizing:border-box}button{background-color:#007bff;color:#fff;border:none;padding:.75rem 1.5rem;border-radius:5px;font-size:1rem;cursor:pointer;transition:background-color 0.3s ease}button:hover{background-color:#0056b3}
    </style>
</head>
<body>
    <div class="container">
        <h1>SELAMAT DATANG DI WAHANA GLEDEK!</h1>
        <form method="post" action="">
            <label for="usia">Masukkan usia Anda:</label>
            <input type="number" name="usia" id="usia" placeholder="Contoh: 20">
            <button type="submit">Submit</button>
        </form>
    </div>
</body>
</html>