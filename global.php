<?php
require __DIR__ . '/database.php';

if(!session_id()) session_start();

if(!isset($_SESSION['con'])) {
    $_SESSION['con'] = OpenConnection();
}
?>