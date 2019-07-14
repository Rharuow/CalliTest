<?php
  $location = ((isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] != "off") ? "https" : "http") . '://' . $_SERVER['HTTP_HOST'] . '/views/';
  header('Location: ' . $location);
?>