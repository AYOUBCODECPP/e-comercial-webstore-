<?php
session_start();
include 'includes\template\header.php';
if(isset($_SESSION['username'])) {
    include 'init.php';
} else {
    header('location:index.php');
}


