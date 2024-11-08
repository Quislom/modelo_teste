<?php
include 'db.php';

// Recebe os dados do formulário
$id = $_POST['id'];
$nome = $_POST['nome'];
$obs = $_POST['obs'];
$acc = $_POST['acc']; // Recebe o campo 'acc' (Acompanhamento)

// Atualiza os dados na tabela 'cadastros'
$query = "UPDATE cadastros SET nome='$nome', obs='$obs', acc='$acc' WHERE id=$id";

// Executa a consulta
mysqli_query($conexao, $query);

// Redireciona de volta para a página de cadastros
header('Location: index.php?pagina=cadastros');
