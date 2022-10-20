<?php
	class Dispcolaboradores {

		private $idDispColaborador;
		private $dtDisp;
		private $horaIni;
		private $horaFim;
		private $idColaborador;

		function __construct( $idDispColaborador, $dtDisp, $horaIni, $horaFim, $idColaborador){
			 $this->setIdDispColaborador( $idDispColaborador );
			 $this->setDtDisp( $dtDisp );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
			 $this->setIdColaborador( $idColaborador );
		}

		public function toArray(){
			 return array(
				 $this->getIdDispColaborador(),
				 $this->getDtDisp(),
				 $this->getHoraIni(),
				 $this->getHoraFim(),
				 $this->getIdColaborador()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdDispColaborador( $idDispColaborador ){
			 $this->idDispColaborador = $idDispColaborador;
		}

		public function getIdDispColaborador(){
			  return( $this->idDispColaborador );
		}

		public function setDtDisp( $dtDisp ){
			 $this->dtDisp = $dtDisp;
		}

		public function getDtDisp(){
			  return( $this->dtDisp );
		}

		public function setHoraIni( $horaIni ){
			 $this->horaIni = $horaIni;
		}

		public function getHoraIni(){
			  return( $this->horaIni );
		}

		public function setHoraFim( $horaFim ){
			 $this->horaFim = $horaFim;
		}

		public function getHoraFim(){
			  return( $this->horaFim );
		}

		public function setIdColaborador( $idColaborador ){
			 $this->idColaborador = $idColaborador;
		}

		public function getIdColaborador(){
			  return( $this->idColaborador );
		}

	}


?>