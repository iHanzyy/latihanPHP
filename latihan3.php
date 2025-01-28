<?php
if (isset($_POST['harga']) && isset($_POST['jumlah'])) {
    $harga = $_POST['harga'];
    $jumlah = $_POST['jumlah'];
    $hargatotal = $harga * $jumlah;
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toko Jojo Jaya</title>
    <style>
        /* Meringkas CSS */
        body{font-family:'Arial',sans-serif;background-color:#f4f4f9;margin:0;padding:0;display:flex;justify-content:center;align-items:center;height:100vh}.container{background-color:#fff;padding:2rem;border-radius:10px;box-shadow:0 4px 8px rgb(0 0 0 / .1);max-width:400px;width:100%}h1{text-align:center;color:#333;margin-bottom:1.5rem}form{display:flex;flex-direction:column}.form-group{margin-bottom:1rem}.form-group label{display:block;margin-bottom:.5rem;color:#555}.form-group input{width:100%;padding:.75rem;border:1px solid #ddd;border-radius:5px;font-size:1rem}.form-group input:focus{border-color:#007bff;outline:none}button{background-color:#007bff;color:#fff;padding:.75rem;border:none;border-radius:5px;font-size:1rem;cursor:pointer;transition:background-color 0.3s ease}button:hover{background-color:#0056b3}
    </style>
</head>

<body>
<div class="container">
        <h1>Toko Jojo Jaya</h1>
        <form method="post" action="">
            <div class="form-group">
                <label for="harga">Masukkan Harga:</label>
                <input type="number" id="harga" name="harga" required>
            </div>
            <div class="form-group">
                <label for="jumlah">Masukkan Jumlah Barang:</label>
                <input type="number" id="jumlah" name="jumlah" required>
            </div>
            <button type="submit">Submit</button>
        </form>

    <?php 
    if ($_SERVER['REQUEST_METHOD'] === 'POST') {

        if ($hargatotal >= 100000) {
            $diskon = $hargatotal * 0.1;
            $total = $hargatotal - $diskon;
            echo "<script> alert(`Total harga yang harus dibayar : Rp. $total dan Anda mendapatkan diskon sebesar Rp. $diskon`) </script>";
        } else {
            echo "<script> alert(`Total harga yang harus dibayar : Rp. $hargatotal`) </script>";
        }
    }
    ?>
</body>

</html>