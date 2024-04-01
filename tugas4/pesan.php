<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" rel="stylesheet">
    </style>
</head>

<body>
    <section class="py-5">
        <div class="container">
            <h2 style="text-align: center;">Pemesanan Novel</h2>
            <hr>
            <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
                <div class="form-group">
                    <label for="novel">Pilih Novel:</label>
                    <select class="form-control" name="novel" id="novel">
                        <option selected>-- Pilih Novel --</option>
                        <option selected>Omniscient Reader Viewpoint Novel volume 1</option>
                        <option selected>Omniscient Reader Viewpoint Novel volume 2</option>
                        <option selected>Omniscient Reader Viewpoint Novel volume 3</option>
                        <option selected>Omniscient Reader Viewpoint Novel volume 4</option>
                        <option selected>Omniscient Reader Viewpoint Novel volume 5</option>
                    </select>
                </div>
                <div class="form-group">
                    <label for="jumlah">Jumlah Novel:</label>
                    <input type="number" class="form-control" name="jumlah" id="jumlah" min="1" value="1">
                </div>
                <br>
                <input type="submit" name="beli" value="Beli" class="btn btn-dark">
            </form>
        </div>
    </section>
</body>