<?php

$db = new mysqli('localhost', 'root', '', 'newsletter');
$db->query("SET NAMES 'utf8");

session_start();

require 'functions.php';