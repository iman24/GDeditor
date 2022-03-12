<?php

// sleep(5);


// api for manage files

switch($_GET['act']) {
    case "getlen":
        echo filesize('./data/'.$_GET[file]);
        break;

    case "get":
        echo file_get_contents('./data/'.$_GET['file']);
        break;

    case "save":

        if (file_put_contents('./data/'.$_POST['file'], $_POST['data'])) {
            echo 'Sukses simpan data';
        } else {
            echo 'Gagal simpan data';
        }

        break;

    case "list":
        $file = scandir('./data');
        $l = array_filter($file, function($item){
            return $item != "." && $item != ".." && $item != ".tmpdata"; 
        });
        echo json_encode(["files" => array_values($l)]);
        break;
}