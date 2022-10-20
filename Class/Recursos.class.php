<?php
	class Recursos extends Model {

		private $idRecurso;
		private $descr;

		function __construct( $idRecurso, $descr){
			 parent::__construct();
			 $this->setIdRecurso( $idRecurso );
			 $this->setDescr( $descr );
		}

		public function toArray(){
			 return array(
				 $this->getIdRecurso(),
				 $this->getDescr()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

		public function setDescr( $descr ){
			 $this->descr = $descr;
		}

		public function getDescr(){
			  return( $this->descr );
		}

	}


?>