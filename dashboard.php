<?php
session_start();

// Validate session
if (!isset($_SESSION['username']) || $_SESSION['status'] !== 'admin') {
  header('Location: index.php');
  exit;
}