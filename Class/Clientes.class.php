<?php
	class Clientes {
		private $idCliente;
		private $nomeCliente;
		private $emailCliente;
		private $senhaCliente;
		private $idNivelUsuario;
		private $endereco;
		private $bairro;
		private $cidade;
		private $cep;
		private $telefone;
		private $foto;
		private $ativo;

		function __construct( $idCliente, $nomeCliente, $emailCliente, $senhaCliente, $idNivelUsuario, $endereco, $bairro, $cidade, $cep, $telefone, $foto, $ativo){
			 $this->setIdCliente( $idCliente );
			 $this->setNomeCliente( $nomeCliente );
			 $this->setEmailCliente( $emailCliente );
			 $this->setSenhaCliente( $senhaCliente );
			 $this->setIdNivelUsuario( $idNivelUsuario );
			 $this->setEndereco( $endereco );
			 $this->setBairro( $bairro );
			 $this->setCidade( $cidade );
			 $this->setCep( $cep );
			 $this->setTelefone( $telefone );
			 $this->setFoto( $foto );
			 $this->setAtivo( $ativo );
		}

		public function toArray(){
			 return array(
				 $this->getIdCliente(),
				 $this->getNomeCliente(),
				 $this->getEmailCliente(),
				 $this->getSenhaCliente(),
				 $this->getIdNivelUsuario(),
				 $this->getEndereco(),
				 $this->getBairro(),
				 $this->getCidade(),
				 $this->getCep(),
				 $this->getTelefone(),
				 $this->getFoto(),
				 $this->getAtivo()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdCliente( $idCliente ){
			 $this->idCliente = $idCliente;
		}

		public function getIdCliente(){
			  return( $this->idCliente );
		}

		public function setNomeCliente( $nomeCliente ){
			 $this->nomeCliente = $nomeCliente;
		}

		public function getNomeCliente(){
			  return( $this->nomeCliente );
		}

		public function setEmailCliente( $emailCliente ){
			 $this->emailCliente = $emailCliente;
		}

		public function getEmailCliente(){
			  return( $this->emailCliente );
		}

		public function setSenhaCliente( $senhaCliente ){
			 $this->senhaCliente = $senhaCliente;
		}

		public function getSenhaCliente(){
			  return( $this->senhaCliente );
		}

		public function setIdNivelUsuario( $idNivelUsuario ){
			 $this->idNivelUsuario = $idNivelUsuario;
		}

		public function getIdNivelUsuario(){
			  return( $this->idNivelUsuario );
		}

		public function setEndereco( $endereco ){
			 $this->endereco = $endereco;
		}

		public function getEndereco(){
			  return( $this->endereco );
		}

		public function setBairro( $bairro ){
			 $this->bairro = $bairro;
		}

		public function getBairro(){
			  return( $this->bairro );
		}

		public function setCidade( $cidade ){
			 $this->cidade = $cidade;
		}

		public function getCidade(){
			  return( $this->cidade );
		}

		public function setCep( $cep ){
			 $this->cep = $cep;
		}

		public function getCep(){
			  return( $this->cep );
		}

		public function setTelefone( $telefone ){
			 $this->telefone = $telefone;
		}

		public function getTelefone(){
			  return( $this->telefone );
		}

		public function setFoto( $foto ){
			 $this->foto = $foto;
		}

		public function getFoto(){
			  return( $this->foto );
		}

		public function setAtivo( $ativo ){
			 $this->ativo = $ativo;
		}

		public function getAtivo(){
			  return( $this->ativo );
		}

	}


?>