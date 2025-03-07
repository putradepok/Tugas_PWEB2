<?php
    $ns1 = ["id" => 1, "nim" => "0110124071", "uts" => 80, "uas" => 90, "tugas" => 85];
    $ns2 = ["id" => 2, "nim" => "0110124072", "uts" => 82, "uas" => 92, "tugas" => 83];
    $ns3 = ["id" => 3, "nim" => "0110124073", "uts" => 84, "uas" => 93, "tugas" => 82];
    $ns4 = ["id" => 4, "nim" => "0110124074", "uts" => 86, "uas" => 94, "tugas" => 81];

    $ar_nilai = [$ns1, $ns2, $ns3, $ns4];

    echo $ar_nilai[0]["nim"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <title>Nilai mahasiswa</title>
</head>
<body>
    <h3>Daftar Nilai mahasiswa</h3>
    <table border ="1" width="100%">
        <thead>
            <tr>
                <th>No</th>
                <th>nim</th>
                <th>uts</th>
                <th>uas</th>
                <th>tugas</th>
                <th>Nilai Akhir</th>
            </tr>
        </thead>
        <tbody>
            <?php
            $nomor = 1 ;
            foreach($ar_nilai as $ns){
                echo '<tr><td>'.$nomor.'</td>';
                echo '<td>'. $ns["nim"].'</td>';
                echo '<td>'. $ns["uts"].'</td>';
                echo '<td>'. $ns["uas"].'</td>';
                echo '<td>'. $ns["tugas"].'</td>';
                $nilai_akhir = ($ns['uts']+$ns['uas']+$ns['tugas'])/3;
                echo '<td>'.number_format($nilai_akhir,2,',','.').'</td>';
                echo '<tr/>';
                $nomor++;
            }
            ?>
        </tbody>
    </table>
</body>
</html>