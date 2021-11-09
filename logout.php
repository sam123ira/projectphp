<?php
require 'include/init.php';

unset($_SESSION['user']);
redirectToUrl('login.php');