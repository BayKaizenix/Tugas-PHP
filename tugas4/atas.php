<?php
include_once 'webmenu.php';
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <title>Kaizenix</title>
    <style>
    body {
        padding-top: 40px;
    }

    .navbar-nav .nav-link {
        font-size: 1.25rem;
        font-weight: 1000;
        color: hotpink;
    }
    </style>
</head>

<body>
    <nav class="navbar navbar-expand-lg bg-dark fixed-top">
        <div class="container">
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-center" id="navbarResponsive">
                <ul class="navbar-nav">
                    <?php
                    // looping foreach dari webmenu.php
                    foreach ($menu_atas as $key => $value) {
                        echo "<li class='nav-item'><a class='nav-link' href='index.php?hal=$key'>$value</a></li>";
                    }
                    ?>
                </ul>
            </div>
        </div>
    </nav>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous">
    </script>
</body>

</html>