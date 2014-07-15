<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
    <meta charset="<?php bloginfo('charset'); ?>">
    <title><?php wp_title('', true, 'right'); ?></title>
    <link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" type="text/css" media="all" href="<?php echo $templateDir; ?>/style.css">
</head>

<body>
