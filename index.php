<?php

require_once 'Contato.php';
require_once 'GerenciadorDeContatos.php';

$gerenciadorDeContatos = new GerenciadorDeContatos();

if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    
    if (isset($_POST['nome'],$_POST['email'], $_POST['telefone'])) {
        $gerenciadorDeContatos->adicionarContato($_POST['nome'],$_POST['email'], $_POST['telefone']);
    }
    if (isset($_POST['deletar'])) {
        $gerenciadorDeContatos->deletarContato($_POST['deletar']);
    }
}

$contatos = $gerenciadorDeContatos->getContato();
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Gerenciador de Contatos</title>
</head>

<body>

    <h1>Gerenciador de Contatos</h1>
    <!-- Formulário para adicionar um novo contato -->
    <form action="" method="post">
        <input type="text" name="nome" placeholder="Nome" required>
        <input type="email" name="email" placeholder="Email" required>
        <input type="tel" name="tel" placeholder="Telefone" required> <br>
        <button type="submit">Adicionar Contatos</button>
    </form>
    <!-- lista de contatos -->
    <ul>
        <?php foreach ($contatos as $indice => $contato):?>
        <li>
        <strong>Nome</strong> <?= htmlspecialchars
        ($contatos->getNome())?>
        <strong>Email</strong> <?= htmlspecialchars
        ($contatos->getEmail())?>
        <strong>Telefone</strong> <?= htmlspecialchars
        ($contatos->getTelefone())?>
        <form method="post" action="" style="display:inline;">
        <button type="submit" name="deletar" value="<?= $indice ?>">Excluir</button>
        </form>
        </li>
        <?php endforeach?>
    </ul>
</body>

</html>