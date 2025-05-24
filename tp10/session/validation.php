<?php
session_start();
require_once("config.php");

if (isset($_POST['login']) && isset($_POST['pass'])) {
    if ($_POST['login'] === USERLOGIN && $_POST['pass'] === USERPASS) {
        $_SESSION['login'] = USERLOGIN;
        header("Location: accueil.php");
        exit();
    } else {
        header("Location: login.php?erreur=1");
        exit();
    }
} else {
    header("Location: login.php");
    exit();
}