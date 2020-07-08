<?php
    echo view('layout/v_head.php');
    echo view('layout/v_header.php');
    echo view('layout/v_nav.php');
    if ($isi2) {
        echo view($isi2);
    }
    echo view('layout/v_footer.php');