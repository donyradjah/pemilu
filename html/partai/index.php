<?php
    $act = $_GET['act'];

    switch ($act) {
        case 'list':
            $data = partai::all();
            break;
        case 'insert':
            $array = [
                'partai' => $_POST['partai'],
                'logo'   => $filename,
            ];
            partai::insert($array);
            break;
        case 'form_insert':
            include 'form_insert.php';
            break;

    }