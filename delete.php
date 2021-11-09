<?php
require 'include/init.php';
$db = new mysqli('localhost', 'root', '', 'newsletter');
$id = $_GET['id'];

$query = 'DELETE FROM addcontent WHERE id = '.$id;
$result = $db->query($query);
if ($result == false) {
        //Error
        echo $query . '<br>';
        echo $db->error . '<br>';
        echo $db->errno . '<br>';
        exit;

}else{
    redirectToUrl('showcontent.php');
}