<?php
	class Agendaempresa {

		private $idAgendaEmpresa;
		private $dtFuncionamento;
		private $horaIni;
		private $horaFim;

		function __construct( $idAgendaEmpresa, $dtFuncionamento, $horaIni, $horaFim){
			 $this->setIdAgendaEmpresa( $idAgendaEmpresa );
			 $this->setDtFuncionamento( $dtFuncionamento );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
		}

		public function toArray(){
			 return array(
				 $this->getIdAgendaEmpresa(),
				 $this->getDtFuncionamento(),
				 $this->getHoraIni(),
				 $this->getHoraFim()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdAgendaEmpresa( $idAgendaEmpresa ){
			 $this->idAgendaEmpresa = $idAgendaEmpresa;
		}

		public function getIdAgendaEmpresa(){
			  return( $this->idAgendaEmpresa );
		}

		public function setDtFuncionamento( $dtFuncionamento ){
			 $this->dtFuncionamento = $dtFuncionamento;
		}

		public function getDtFuncionamento(){
			  return( $this->dtFuncionamento );
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

	}


?>