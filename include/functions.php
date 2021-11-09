<?php

function redirectToUrl($url)
{
    header('Location: ' . $url);
    exit;
}

function isPostMethod(){
    return $_SERVER['REQUEST_METHOD'] == "POST";
}

function isLogin(){
    return isset($_SESSION['user']);
}