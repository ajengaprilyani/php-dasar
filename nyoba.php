<?php
// data adalah bentuk  dari array
$data = [
    ["D212111023", "Ajeng Aprilyani"],
    ["D212111006", "Gita Septiani"],
    ["D212111014", "Rizaldy Muhamad Sopyan"],
    ["D212111021", "Triana Siti Aryani"],
    ["D212111026", "Aura Maliya"],
    ["D212111028", "Fanisa Tri Agna Fata"],
    ["D212111025", "Aspiya Huwaida"],
    ["D212111002", "Cahya Julianti"],
    ["D212111004", "Desi Syifa Fitria"],
    ["D212111030", "Muhammad Reza Andriansyah"]
];

// menyusun baris tabel menggunakan perulangan foreach
$rows = '';
$no = 1;
foreach ($data as $row) {
    $rows .= "<tr>";
    $rows .= "<td>{$no}</td>";
    $rows .= "<td>{$row[0]}</td>";
    $rows .= "<td>{$row[1]}</td>";
    $rows .= "</tr>";
    $no++;
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>List Data Mahasiswa</title>
    <style>
        table {
            width: 400px auto;
            border-collapse: collapse;
            margin: 20px;
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
    <table>
        <thead>
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
            </tr>
        </thead>
        <tbody>
            <?php echo $rows; ?>
        </tbody>
    </table>
</body>
</html>