<?php

// DATABASE PARAMETERS
define('DB_HOST', 'localhost:3306');
define('DB_USER', 'root');
define('DB_PASS', 'mysql;');
define('DB_NAME', 'news_db');

// CONNECTING WITH MYSQL
$conn = mysqli_connect(DB_HOST, DB_USER, DB_PASS, DB_NAME);
