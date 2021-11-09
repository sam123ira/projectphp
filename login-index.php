<?php
require 'include/init.php';

if(!isLogin()){
    redirectToUrl('login.php');
}
else{
    redirectToUrl('index.php');
}
