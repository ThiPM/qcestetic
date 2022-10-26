<?php
	class Nivelusuarios extends Model {

		private $idNivelUsuario;
		private $nivel;

		function __construct( $idNivelUsuario, $nivel){
			 parent::__construct();
			 $this->setIdNivelUsuario( $idNivelUsuario );
			 $this->setNivel( $nivel );
		}

		public function toArray(){
			 return array(
				 $this->getIdNivelUsuario(),
				 $this->getNivel()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdNivelUsuario( $idNivelUsuario ){
			 $this->idNivelUsuario = $idNivelUsuario;
		}

		public function getIdNivelUsuario(){
			  return( $this->idNivelUsuario );
		}

		public function setNivel( $nivel ){
			 $this->nivel = $nivel;
		}

		public function getNivel(){
			  return( $this->nivel );
		}

	}


?>