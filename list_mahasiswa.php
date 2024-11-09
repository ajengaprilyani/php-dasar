<?php
// array data mahasiswa
$data = [
    [1, "D212111001", "Aliftia Radianti Taniasari"],
    [2, "D212111002", "Cahya Julianti"],
    [3, "D212111003", "Dasimah Seftiani"],
    [4, "D212111004", "Desi Syifa Fitria"],
    [5, "D212111005", "Dewi Yulianti"],
    [6, "D212111006", "Gita Septiani"],
    [7, "D212111007", "Ikhlas Wandana"],
    [8, "D212111008", "Intan Khoirunnisa"],
    [9, "D212111009", "Islah Nurhasanah"],
    [10, "D212111010", "Kenia Nurazizah"],
];

// menampilkan tabel
echo "<table border='1' cellpadding='8' cellspacing='0'>
        <tr><th>No</th><th>NIM</th><th>Nama</th></tr>";

foreach ($data as $row) {
    echo "<tr>
            <td>{$row[0]}</td>
            <td>{$row[1]}</td>
            <td>{$row[2]}</td>
          </tr>";
}
echo "</table>";
?>