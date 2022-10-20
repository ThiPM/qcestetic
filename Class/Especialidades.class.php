<?php
	class Especialidades extends Model {

		private $idEspecialidade;
		private $descr;

		function __construct( $idEspecialidade, $descr){
			 parent::__construct();
			 $this->setIdEspecialidade( $idEspecialidade );
			 $this->setDescr( $descr );
		}

		public function toArray(){
			 return array(
				 $this->getIdEspecialidade(),
				 $this->getDescr()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdEspecialidade( $idEspecialidade ){
			 $this->idEspecialidade = $idEspecialidade;
		}

		public function getIdEspecialidade(){
			  return( $this->idEspecialidade );
		}

		public function setDescr( $descr ){
			 $this->descr = $descr;
		}

		public function getDescr(){
			  return( $this->descr );
		}

	}


?>