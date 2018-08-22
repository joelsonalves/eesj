<?php

    // Incluir a classe Conexão
    include 'conexao.php';

    // Incluir a classe Estudante
    include 'estudante.php';

    class EstudanteDAO {}

        public function criar() {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checar se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão: " . $conn->connect_error);
            }

            // Criar a Tabela no Banco de Dados
            $sql = "CREATE TABLE estudante (
                matricula INT UNSIGNED PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                nomeSocial VARCHAR(100) NULL,
                dataNascimento DATE NOT NULL,
                idTurma INT;
            )";

        }

    }

?>