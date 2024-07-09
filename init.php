<?php
// Routes
$tpl = 'includes/template/';
$css = 'layout/css/';
$js = 'layout/js/';
$lang = 'includes/languages/';

include $lang.'english.php';
include $tpl.'header.php';

if (!isset($noNavbar)) {
    include $tpl.'navbar.php';
}
include $tpl.'footer.php';
