<?php
$nama_lengkap = "Bayu Angga Saputra";
$panggilan = "Bay";
$umur = 20;
$hobi = "Membaca Novel";
$email = "202151078@std.umk.ac.id";
$nomor_telepon = "081215833265";
$alamat = "Kudus, Jawa Tengah";
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous" />
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous" />
    <link rel="stylesheet" href="style.css" />
    <title>Profil Saya</title>
</head>

<body id="home">
    <nav class="navbar navbar-expand-lg navbar-dark bg-primary shadow-sm fixed-top">
        <div class="container">
            <a class="navbar-brand" href="#">Bootstrap 5</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav"
                aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" aria-current="page" href="#home">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#about">About</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#projects">Project</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#contact">Contact</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
    <section class="jumbotron text-center">
        <img src="img/dokja1.jpg" alt="Kim Dokja" width="200" class="rounded-circle img-thumbnail" />
        <h1 class="display-4"><?= $nama_lengkap ?></h1>
        <p><?= $email ?> | <?= $nomor_telepon ?></p>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,160L40,133.3C80,107,160,53,240,69.3C320,85,400,171,480,197.3C560,224,640,192,720,160C800,128,880,96,960,112C1040,128,1120,192,1200,186.7C1280,181,1360,107,1400,69.3L1440,32L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="about">
        <div class="container mb-3">
            <div class="row text-center">
                <div class="col">
                    <h2>About Me</h2>
                </div>
            </div>
            <div class="row justify-content-center fs-5 text-center">
                <div class="col-md-4">
                    <p>Halo, perkenalkan nama saya <?= $nama_lengkap ?> atau bisa dipanggil <?= $panggilan ?>. Umur
                        saya <?= $umur ?>. Saya Berasal dari <?= $alamat ?></p>
                </div>
                <div class="col-md-4">
                    <p>Halo saya <?= $hobi ?>. motivasi saya adalah kegagalan kesuksesan yang tertunda. Kelebihan saya
                        yaitu saya orang yang sangat fokus ketika sedang mengerjakan suatu hal. Karena itu terdapat
                        kekurangannya juga yaitu saya jadi suka mengabaikan atau menunda hal lainnya jika terdapat suatu
                        hal yang harus saya kerjakan.</p>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#e2edff" fill-opacity="1"
                d="M0,192L48,181.3C96,171,192,149,288,133.3C384,117,480,107,576,138.7C672,171,768,245,864,261.3C960,277,1056,235,1152,186.7C1248,139,1344,85,1392,58.7L1440,32L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="projects">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>My Projects</h2>
                </div>
            </div>
            <div class="row">
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/projects/peakpx.jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/projects/peakpx (1).jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-3">
                    <div class="card">
                        <img src="img/projects/peakpx (2).jpg" class="card-img-top" alt="..." />
                        <div class="card-body">
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk
                                of the card's content.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#ffffff" fill-opacity="1"
                d="M0,128L40,154.7C80,181,160,235,240,224C320,213,400,139,480,122.7C560,107,640,149,720,181.3C800,213,880,235,960,202.7C1040,171,1120,85,1200,64C1280,43,1360,85,1400,106.7L1440,128L1440,320L1400,320C1360,320,1280,320,1200,320C1120,320,1040,320,960,320C880,320,800,320,720,320C640,320,560,320,480,320C400,320,320,320,240,320C160,320,80,320,40,320L0,320Z">
            </path>
        </svg>
    </section>
    <section id="contact">
        <div class="container">
            <div class="row text-center mb-3">
                <div class="col">
                    <h2>Contact Me</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-md-7">
                    <form>
                        <div class="mb-3">
                            <label for="name" class="form-label">Nama Lengkap</label>
                            <input type="text" class="form-control" id="name" aria-describedby="name" />
                        </div>
                        <div class="mb-3">
                            <label for="email" class="form-label">Email</label>
                            <input type="email" class="form-control" id="email" aria-describedby="email" />
                        </div>
                        <div class="mb-3">
                            <label for="pesan" class="form-label">Pesan</label>
                            <textarea class="form-control" id="pesan" rows="3"></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim</button>
                    </form>
                </div>
            </div>
        </div>
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1440 320">
            <path fill="#0d6efd" fill-opacity="1"
                d="M0,32L48,64C96,96,192,160,288,170.7C384,181,480,139,576,138.7C672,139,768,181,864,170.7C960,160,1056,96,1152,69.3C1248,43,1344,53,1392,58.7L1440,64L1440,320L1392,320C1344,320,1248,320,1152,320C1056,320,960,320,864,320C768,320,672,320,576,320C480,320,384,320,288,320C192,320,96,320,48,320L0,320Z">
            </path>
        </svg>
    </section>
    <footer class="text-center bg-primary pb-5">
        <p class="text-white fw-bold">Created with <i class="bi bi-heart-fill"></i> by</p>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous">
    </script>
</body>

</html>