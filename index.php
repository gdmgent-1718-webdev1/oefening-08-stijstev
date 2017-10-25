<?php
$navigation = ['index' => 'Home', 'about' => 'Over ons', 'portfolio' => 'Portfolio', 'contact' => 'Contacteer ons'];

function arrayToNav ($array) {
    $navString = "";
    $navString .= "<ul style='list-style-type: none;'";
    foreach ($array as $page => $pageName) {
        $navString .= "<li><a href='#'>{$pageName}</a></li>";
    }
    $navString .= "</ul>";
    return $navString;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>oefening-11</title>
</head>
<body>
    <nav>
        <?php echo arrayToNav($navigation); ?>
    </nav>
</body>
</html>
