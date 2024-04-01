<div>
    <!-- Halaman Depan -->

    <?php
    // $hal = $_GET['hal'];
    if (!empty($_GET['hal'])) {
        include_once $menu_bawah[$_GET['hal']];
    } else {
        include_once 'home.php';
    }
    ?>
</div>