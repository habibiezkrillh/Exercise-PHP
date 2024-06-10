<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP Example</title>
    <style>
        table {
            width: 50%;
            border-collapse: collapse;
            margin: 20px 0;
        }
        table, th, td {
            border: 1px solid black;
        }
        th, td {
            padding: 10px;
            text-align: left;
        }
    </style>
</head>
<body>
    <?php
    // Menampilkan "Hello World"
    echo "<h1>Hello World</h1>";

    // Menampilkan list berisi nama bulan dari Januari hingga Desember
    $months = array("Januari", "Februari", "Maret", "April", "Mei", "Juni", "Juli", "Agustus", "September", "Oktober", "November", "Desember");
    echo "<ul>";
    foreach ($months as $month) {
        echo "<li>$month</li>";
    }
    echo "</ul>";

    // Menampilkan sebuah tabel berisi apapun
    echo "<table>";
    echo "<tr><th>Header 1</th><th>Header 2</th></tr>";
    echo "<tr><td>Data 1</td><td>Data 2</td></tr>";
    echo "<tr><td>Data 3</td><td>Data 4</td></tr>";
    echo "</table>";

    // Menampilkan formulir
    ?>
    <form action="#" method="post">
        <label for="name">Nama:</label><br>
        <input type="text" id="name" name="name"><br><br>
        <label for="email">Email:</label><br>
        <input type="email" id="email" name="email"><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>
