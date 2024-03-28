<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Nilai Mahasiswa</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="container">
        <h2>Data Nilai Mahasiswa</h2>
        <table>
            <thead>
                <tr>
                    <th>NIM</th>
                    <th>Nama</th>
                    <th>Nilai</th>
                    <th>Grade</th>
                    <th>Predikat</th>
                    <th>Keterangan</th>
                </tr>
            </thead>
            <tbody>
                <?php
                $nilai_mahasiswa = [
                    ['nim' => '4951', 'nama' => 'Kim Dokja', 'nilai' => 95],
                    ['nim' => '1892', 'nama' => 'Han Sooyoung', 'nilai' => 92],
                    ['nim' => '5020', 'nama' => 'Yoo Jonghyuk', 'nilai' => 89],
                    ['nim' => '078', 'nama' => 'Bayu', 'nilai' => 80],
                    ['nim' => '064', 'nama' => 'Zavira', 'nilai' => 84],
                    ['nim' => '046', 'nama' => 'Calvin', 'nilai' => 85],
                    ['nim' => '080', 'nama' => 'Ilham', 'nilai' => 65],
                    ['nim' => '077', 'nama' => 'Anugrah', 'nilai' => 75],
                    ['nim' => '056', 'nama' => 'Ahmad', 'nilai' => 50],
                    ['nim' => '087', 'nama' => 'Nofa', 'nilai' => 68]
                ];

                function hitungGrade($nilai) {
                    if ($nilai >= 90) {
                        return 'A';
                    } elseif ($nilai >= 80) {
                        return 'B';
                    } elseif ($nilai >= 70) {
                        return 'C';
                    } elseif ($nilai >= 60) {
                        return 'D';
                    } else {
                        return 'E';
                    }
                }

                function hitungPredikat($grade) {
                    switch ($grade) {
                        case 'A':
                            return 'Memuaskan';
                            break;
                        case 'B':
                            return 'Bagus';
                            break;
                        case 'C':
                            return 'Cukup';
                            break;
                        case 'D':
                            return 'Kurang';
                            break;
                        case 'E':
                            return 'Buruk';
                            break;
                        default:
                            return 'Tidak Valid';
                    }
                }

                $nilai_tertinggi = max(array_column($nilai_mahasiswa, 'nilai'));
                $nilai_terendah = min(array_column($nilai_mahasiswa, 'nilai'));
                $total_nilai = array_sum(array_column($nilai_mahasiswa, 'nilai'));
                $jumlah_mahasiswa = count($nilai_mahasiswa);
                
                foreach ($nilai_mahasiswa as $mahasiswa) {
                    $nim = $mahasiswa['nim'];
                    $nama = $mahasiswa['nama'];
                    $nilai = $mahasiswa['nilai'];
                    $grade = hitungGrade($nilai);
                    $predikat = hitungPredikat($grade);
                    $keterangan = ($grade == 'E') ? 'Tidak Lulus' : 'Lulus';

                    echo "<tr><td>$nim</td><td>$nama</td><td>$nilai</td><td>$grade</td><td>$predikat</td><td>$keterangan</td></tr>";
                }
            ?>
            </tbody>
            <tfoot>
                <tr>
                    <td colspan="6">Nilai Tertinggi: <?php echo $nilai_tertinggi; ?></td>
                </tr>
                <tr>
                    <td colspan="6">Nilai Terendah: <?php echo $nilai_terendah; ?></td>
                </tr>
                <tr>
                    <td colspan="6">Nilai Rata-rata: <?php echo round($total_nilai / $jumlah_mahasiswa, 2); ?></td>
                </tr>
                <tr>
                    <td colspan="6">Jumlah Mahasiswa: <?php echo $jumlah_mahasiswa; ?></td>
                </tr>
                <tr>
                    <td colspan="6">Jumlah Keseluruhan Nilai: <?php echo $total_nilai; ?></td>
                </tr>
            </tfoot>
        </table>
    </div>
</body>

</html>