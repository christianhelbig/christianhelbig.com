<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google" content="notranslate">

    <title>Christian Helbig</title>
    <meta name="description" content="I'm a computer science student and aspiring (software) developer based in Berlin, Germany. Contact me for new possibilities to grow.">

    <!-- Prevent search engine from indexing datenschutz and impressum -->
    <?php if(strpos($_SERVER['PHP_SELF'], "datenschutz.php") || strpos($_SERVER['PHP_SELF'], "impressum.php")) {
        echo '<meta name="robots" content="noindex, nofollow">';
    }; ?>

    <link rel="stylesheet" type="text/css" href="/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="/css/style.css">
</head>
<body>

<!--<nav class="navbar navbar-expand-lg navbar-dark">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="navbar-nav">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Features</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Pricing</a>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
    </div>
</nav>-->

<nav class="nav floating-navbar">
    <?php include "resources/templates/navbar.php"; ?>
</nav>


<?php
