<?php
session_start();

function set_language($lang_code = 'id') {
    $_SESSION['lang'] = $lang_code;
    if(file_exists("./languages/".$lang_code.".php")) {
        include("./languages/".$lang_code.".php");
        return $lang;
    } else {
        include("./languages/id.php"); 
        return $lang;
    }
}

if (isset($_GET['lang'])) {
    $lang_code = $_GET['lang'];
    $lang = set_language($lang_code);
} else if (isset($_SESSION['lang'])) {
    $lang = set_language($_SESSION['lang']);
} else {
    $lang = set_language('id');
}

function lang($key) {
    global $lang;
    return isset($lang[$key]) ? $lang[$key] : $key;
}
?>
