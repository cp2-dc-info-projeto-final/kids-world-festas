<?php
session_start();

require 'removerModelo.php';
//print_r($_POST);die();
$produtos = $_POST["produtos"];
remove_produto($produtos);
   header('Location: ../index-admin.php');



?>