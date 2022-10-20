<?php
	class Espcolaboradores extends Model {

		private $idColaborador;
		private $idEspecialidade;

		function __construct( $idColaborador, $idEspecialidade){
			 parent::__construct();
			 $this->setIdColaborador( $idColaborador );
			 $this->setIdEspecialidade( $idEspecialidade );
		}

		public function toArray(){
			 return array(
				 $this->getIdColaborador(),
				 $this->getIdEspecialidade()
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

		public function setIdEspecialidade( $idEspecialidade ){
			 $this->idEspecialidade = $idEspecialidade;
		}

		public function getIdEspecialidade(){
			  return( $this->idEspecialidade );
		}

	}


?>