<?php
// CHECK IF LOGGED IN
session_start();
if (!isset($_SESSION['id'])) {
    header('location:index.php');
}
