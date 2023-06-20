<?php
include('koneksi.php');

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Retrieve form data
    $nama = $_POST['nama'];
    $donatur_id = $_POST['donatur_id'];
    $paket = $_POST['paket'];
    $kategori = $_POST['kategori'];
    $nominal = $_POST['nominal'];

    // Perform any necessary validations

    // Insert the data into the database
    $query = "INSERT INTO infaq_shodaqoh (nama, donatur_id, paket, kategori, nominal) VALUES ('$nama', '$donatur_id', '$paket', '$kategori', '$nominal')";
    // Replace 'your_table_name' with the actual table name in your database

    if (mysqli_query($koneksi, $query)) {
        echo "<script>alert('Terima Kasih, Data berhasil disimpan!');window.location='index.php';</script>";
    } else {
        echo "Error: " . mysqli_error($koneksi);
    }

    // Close the database connection
    mysqli_close($koneksi);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>latihan</title>
    <style>
        body {
            background-color: darkgrey;
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
</body>
</html>
