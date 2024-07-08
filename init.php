<?php
// Routes
$tpl = 'includes/template/';
$css = 'layout/css/';
$js = 'layout/js/';
$lang = 'includes/languages/';

include $lang.'english.php';


if (!isset($noNavbar)) {
    include $tpl.'navbar.php';
}

