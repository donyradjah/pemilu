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
            $exec = partai::insert($array);
            if($exec){
                echo "<script type='text/javascript'>alert('Data Berahasil di simpan')</script>";
            }
            break;
        case 'form_insert':
            include 'form_insert.php';
            break;


    }