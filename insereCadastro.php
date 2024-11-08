<?php

include 'db.php';

$nome = $_POST['nome'];
$obs = $_POST['obs'];
$acc = $_POST['acc'];


$query= "insert into cadastros(nome, obs, acc) 
values('$nome', '$obs','$acc')";

mysqli_query($conexao, $query);

header('location:index.php?pagina=cadastros');