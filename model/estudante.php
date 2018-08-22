<?php

    class Estudante {

        private $matricula;
        private $nome;
        private $nomeSocial;
        private $dataNascimento;
        private $idTurma;
        
        public function getMatricula() {
            return $this->matricula;
        }

        public function setMatricula($matricula) {
            $this->$matricula = $matricula;
        }

        public function getNome() {
            return $this->nome;
        }

        public function setNome($nome) {
            $this->$nome = $nome;
        }

        public function getNomeSocial() {
            return $this->nomeSocial;
        }

        public function setNomeSocial($nomeSocial) {
            $this->$nomeSocial = $nomeSocial;
        }

        public function getDataNascimento() {
            return $this->dataNascimento;
        }

        public function setDataNascimento($dataNascimento) {
            $this->$dataNascimento = $dataNascimento;
        }
    
        public function getIdTurma() {
            return $this->idTurma;
        }

        public function setIdTurma($idTurma) {
            $this->idTurma = $idTurma;
        }

    }
    
?>