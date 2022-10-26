<?php
	class Colaboradores {

		private $idColaborador;
		private $nome;
		private $cpf;
		private $email;
		private $telefone;

		function __construct( $idColaborador, $nome, $cpf, $email, $telefone){
			 $this->setIdColaborador( $idColaborador );
			 $this->setNome( $nome );
			 $this->setCpf( $cpf );
			 $this->setEmail( $email );
			 $this->setTelefone( $telefone );
		}

		public function toArray(){
			 return array(
				 $this->getIdColaborador(),
				 $this->getNome(),
				 $this->getCpf(),
				 $this->getEmail(),
				 $this->getTelefone()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdColaborador( $idColaborador ){
			 $this->idColaborador = $idColaborador;
		}

		public function getIdColaborador(){
			  return( $this->idColaborador );
		}

		public function setNome( $nome ){
			 $this->nome = $nome;
		}

		public function getNome(){
			  return( $this->nome );
		}

		public function setCpf( $cpf ){
			 $this->cpf = $cpf;
		}

		public function getCpf(){
			  return( $this->cpf );
		}

		public function setEmail( $email ){
			 $this->email = $email;
		}

		public function getEmail(){
			  return( $this->email );
		}

		public function setTelefone( $telefone ){
			 $this->telefone = $telefone;
		}

		public function getTelefone(){
			  return( $this->telefone );
		}

	}


?>