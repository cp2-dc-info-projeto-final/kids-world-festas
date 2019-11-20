<?php
session_start();

require 'removerModelo.php';
$nome = $_POST["nome"];
remove_produto($nome);
   header('Location: ../index-admin.php');



?>