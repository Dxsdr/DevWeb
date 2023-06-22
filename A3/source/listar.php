<?php
    include_once("conexao.php");

    $sql = $conn->prepare("SELECT pk_cadastro, nome_cadastro, cpf_cadastro FROM cadastro;");

    $sql->execute();

    if ($sql->rowCount() >= 1) {
        $cadastros = $sql->fetchAll();
    } else {
        echo '<div class="alert alert-warning fixed-bottom" role="alert">
            Não há cadastros!
        </div>';
    }
    unset($sql);
    unset($conn);
?>