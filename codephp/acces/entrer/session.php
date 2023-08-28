<?php
session_start();
error_reporting(0);
if (empty($_SESSION['username'])) {
  header('location:http://localhost/php/codephp/acces/entrer/page.php');
}
