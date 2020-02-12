<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">

    <title>Christian Helbig</title>
    <meta name="description" content="I'm a computer science student and aspiring (software) developer based in Berlin, Germany. Contact me for new possibilities to grow.">

    <?php
    // Prevent search engine from indexing datenschutz and impressum
    // This snipped adds the meta tag noindex, nofollow on the pages: datenschutz, impressum
    if(strpos($_SERVER['PHP_SELF'], "datenschutz") || strpos($_SERVER['PHP_SELF'], "impressum")) {
        echo '<meta name="robots" content="noindex, nofollow">';
    };

    // create css version tag for cache bursting
    $cssVersion = "1.0.4"; ?>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css?v=<?php echo $cssVersion; ?>">
</head>
<body>

<nav class="nav floating-navbar">
    <?php include "resources/templates/navbar.php"; ?>
</nav>


<?php
