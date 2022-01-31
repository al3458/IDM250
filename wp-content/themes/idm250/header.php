<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php wp_title(); ?></title>

    <?php
    //always put wp_head() just before the closing tag of your theme
    wp_head();
    ?>
</head>
<body>
    <?php
    // registered this menu in functions.php via register_theme_sidebar()
    wp_nav_menu(['theme_location' => 'primary_menu']);
?>