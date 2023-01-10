<?php
session_start();

$_SESSION['name']  ='yamada';
$_SESSION['age']  =12;

$sid = session_id();
echo $sid;