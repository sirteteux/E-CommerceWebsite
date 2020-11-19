<?php
session_start();

$reply->username = $_SESSION["username"];

$jsonReply = json_encode($reply);

header('Content-Type: application/json');
echo $jsonReply;
?>