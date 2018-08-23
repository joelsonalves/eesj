<?php

    // Incluir a classe Conexão
    include 'conexao.php';

    // Incluir a classe Estudante
    include 'estudante.php';

    class EstudanteDAO {}

        public function criarTabela() {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checa se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Cria a Tabela no Banco de Dados
            $sql = "CREATE TABLE estudante (
                matricula INT UNSIGNED PRIMARY KEY,
                nome VARCHAR(100) NOT NULL,
                nomeSocial VARCHAR(100) NULL,
                dataNascimento DATE NOT NULL,
                idTurma INT;
            )";

            // Checa o resultado da execução
            if ($conn->query($sql) === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

        public function destruirTabela() {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checa se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Destruir a Tabela no Banco de Dados
            $sql = "DROP TABLE estudante;";

            // Checa o resultado da execução
            if ($conn->query($sql) === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

        public function limparTabela() {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checa se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Limpar a Tabela no Banco de Dados
            $sql = "TRUNCATE TABLE estudante;";

            // Checa o resultado da execução
            if ($conn->query($sql) === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

        public function inserir($estudante) {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checar se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Prepara e protege o SQL
            $stmt = $conn->prepare("INSERT INTO estudante(
                matricula, 
                nome, 
                nomeSocial,
                dataNascimento,
                idTurma
            ) VALUES (?, ?, ?, ?, ?)");
            $stmt->bind_param("isssi",
                $matricula,
                $nome,
                $nomeSocial,
                $dataNascimento,
                $idTurma  
            );

            // Definir parâmetros
            $matricula      = $estudante->getMatricula();
            $nome           = $estudante->getNome();
            $nomeSocial     = $estudante->getNomeSocial();
            $dataNascimento = $estudante->getDataNascimento();
            $idTurma        = $estudante->getIdTurma();

            // Checa o resultado da execução
            if ($stmt->execute() === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a execução
            $stmt->close();

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

        public function atualizar($estudante) {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checa se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Atualiza uma linha da tabela do banco de dados
            $sql = "UPDATE estudante SET
                nome            = $estudante->getNome()
                nomeSocial      = $estudante->getNomeSocial()
                dataNascimento  = $estudante->getDataNascimento()
                idTurma         = $estudante->getIdTurma()
            WHERE
                matricula       = $estudante->getMatricula()
            )";
            
            // Checa o resultado da execução
            if ($conn->query($sql) === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

        public function remover($estudante) {

            // Estabelece uma conexão com o banco de dados
            $conn = Conexao->gerar();

            // Checa se está conectado
            if ($conn->connect_error) {
                die("Falha na Conexão!");
            }

            // Remove uma linha da tabela do banco de dados
            $sql = "DELETE FROM estudante WHERE 
                matricula = $estudante->getMatricula()
            )";
            
            // Checa o resultado da execução
            if ($conn->query($sql) === TRUE) {
                $aux = TRUE;
            } else {
                $aux = FALSE;
            }

            // Encerra a conexão com o banco de dados
            $conn->close();

            return $aux;

        }

    }

?>