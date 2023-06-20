<?php
include 'koneksi.php';
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Latihan</title>
    <style>
        body {
            background-color: #9AC5F4;
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
        }

        .container {
            max-width: 600px;
            margin: 0 auto;
            padding: 20px;
        }

        h2 {
            text-align: center;
        }

        table {
            width: 100%;
            margin-top: 20px;
        }

        table td {
            padding: 10px;
        }

        form {
    font-weight: bold;
}

        input[type="text"],
        input[type="number"] {
            width: 100%;
            padding: 8px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }

        input[type="submit"] {
            padding: 10px 20px;
            background-color: #4CAF50;
            color: #fff;
            border: none;
            border-radius: 4px;
            cursor: pointer;
        }

        input[type="submit"]:hover {
            background-color: #45a049;
        }

        
        a.btn.btn-primary.mt-4 {
            background-color: #0081C9;
            border-radius: 26px;
            margin-left: 84%;
            width: 5em;
            color: black;
            text-decoration: none;
            padding: 12px;
}

    </style>
</head>
<body>
    <div class="container">
        <h2>Input Bantuan Wakaf, Infaq Shodaqoh</h2>
        <form method="post" action="proses.php">
            <table>
                <tr>
                    <td>Nama Donatur:</td>
                    <td>
                        <input type="text" placeholder="Nama" name="nama" required>
                    </td>
                </tr>
                <tr>
                    <td>Donatur ID:</td>
                    <td>
                        <input type="number" placeholder="Donatur ID" name="donatur_id" required>
                    </td>
                </tr>
                <tr>
                    <td>Paket:</td>
                    <td>
                        <input type="text" placeholder="Paket" name="paket" required>
                    </td>
                </tr>
                <tr>
                    <td>Kategori:</td>
                    <td>
                        <input type="text" placeholder="Kategori" name="kategori" required>
                    </td>
                </tr>
                <tr>
                    <td>Nominal/Barang:</td>
                    <td>
                        <input type="number" placeholder="Nominal/Barang" name="nominal" required>
                    </td>
                </tr>
                <tr>
                    <td colspan="2">
                        <input type="submit" name="proses" value="Simpan Data">
                    </td>
                </tr>
            </table>
        </form>
    </div>

    <a href="index.php" class="btn btn-primary mt-4">Kembali ke Halaman</a>
</body>
</html>
