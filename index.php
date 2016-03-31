<?php
    include "php/koneksi/koneksi.php";
    include "php/class/partai.php";
    include "php/class/capres.php";

    $pml = $_GET['pml'];
    switch ($pml) {
        default:
            include "html/view/header.php";
            include "html/view/content.php";
            include "html/view/footer.php";
            break;
        case 'partai':
            include "html/view/header.php";
            include "html/partai/index.php";
            include "html/view/footer.php";
            break;
    }