<?php
include '../config/database.php';

if(isset($_POST['send'])) {

    // if(isset($_POST['checkbox_name'])) {
    //     echo '1';
    // }
    // else {
    //     echo '0';
    // }

    if(filter_has_var(INPUT_POST, 'checkbox_name')) {
        echo '1';
    }
    else {
        echo '0';
    }
    // var_dump($checkbox);
    die; 
}