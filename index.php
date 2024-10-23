<?php
session_start();

function load_language($lang = 'id') {
    $available_languages = ['id', 'en'];
    if (!in_array($lang, $available_languages)) {
        $lang = 'id';
    }
    return include __DIR__ . "/languages/{$lang}.php";
}

$lang = isset($_GET['lang']) ? $_GET['lang'] : (isset($_SESSION['lang']) ? $_SESSION['lang'] : 'id');

$_SESSION['lang'] = $lang;

$translations = load_language($lang);
?>

<!DOCTYPE html>
<html lang="<?php echo $lang; ?>">
<head>
    <meta charset="UTF-8">
    <title><?php echo $translations['welcome']; ?></title>
</head>
<body>

    <nav>
        <a href="index.php?lang=id">Bahasa Indonesia</a> | 
        <a href="index.php?lang=en">English</a>
    </nav>

    <h1><?php echo $translations['welcome']; ?></h1>
    <p><?php echo $translations['about']; ?></p>
    <a href="contact.php"><?php echo $translations['contact']; ?></a>

</body>
</html>
