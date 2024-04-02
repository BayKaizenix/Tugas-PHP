<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Kaizenix</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header text-center">
                        <marquee>Form Nilai Ujian</marquee>
                    </div>
                    <div class="card-body">
                        <form action="" method="POST">
                            <table class="table">
                                <tbody>
                                    <tr>
                                        <td><label for="nim">NIM</label></td>
                                        <td><input type="text" class="form-control" id="nim" name="nim"
                                                placeholder="Masukkan NIM"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="nama">Nama</label></td>
                                        <td><input type="nama" class="form-control" id="nama" name="nama"
                                                placeholder="Masukkan Nama"></td>
                                    </tr>
                                    <tr>
                                        <td><label for="kuliah">Kuliah</label></td>
                                        <td>
                                            <select class="form-select" name="kuliah">
                                                <option selected> Pilih Kampus </option>
                                                <option value="Universitas Muria Kudus">Universitas Muria Kudus</option>
                                                <option value="Seoul National University">Seoul National University
                                                </option>
                                                <option value="Yosei University">Yosei University</option>
                                                <option value="Korea University">Korea University</option>
                                                <option value="Harvard University">Harvard University</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="mata_kuliah">Mata Kuliah</label></td>
                                        <td>
                                            <select class="form-select" name="mata_kuliah">
                                                <option selected> Pilih Mata Kuliah </option>
                                                <option value="PHP">PHP</option>
                                                <option value="UIUX">UIUX</option>
                                                <option value="GITHUB">GITHUB</option>
                                                <option value="LARAVEL">LARAVEL</option>
                                            </select>
                                        </td>
                                    </tr>
                                    <tr>
                                        <td><label for="nilai">Nilai</label></td>
                                        <td><input type="number" class="form-control" id="nilai" name="nilai"
                                                placeholder="Masukkan Nilai"></td>
                                    </tr>
                                    <tr>
                                        <td></td>
                                        <td><button type="submit" class="btn btn-primary">Submit</button></td>
                                    </tr>
                                </tbody>
                            </table>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <?php
    require_once 'objMahasiswa.php';
    if ($_SERVER['REQUEST_METHOD'] == 'POST') {

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $kuliah = $_POST['kuliah'];
    $mata_kuliah = $_POST['mata_kuliah'];
    $nilai = $_POST['nilai'];

    $mahasiswa = new Mahasiswa($nim, $nama, $kuliah, $mata_kuliah, $nilai);
    }

    echo "<table>";
        echo "<tr><th>NIM</th><th>Nama</th><th>Kuliah</th><th>Mata Kuliah</th><th>Nilai</th><th>Grade</th><th>Predikat</th><th>Status</th></tr>";
        echo "<tr>";
        echo "<td>".$mahasiswa->nim."</td>";
        echo "<td>".$mahasiswa->nama."</td>";
        echo "<td>".$mahasiswa->kuliah."</td>";
        echo "<td>".$mata_kuliah."</td>"; 
        echo "<td>".$mahasiswa->nilai."</td>";
        echo "<td>".$mahasiswa->getGrade()."</td>";
        echo "<td>".$mahasiswa->getPredikat()."</td>";
        echo "<td>".$mahasiswa->getStatus()."</td>";
        echo "</tr>";
    echo "</table>";

    ?>
</body>

</html>