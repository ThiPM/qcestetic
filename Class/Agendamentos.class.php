<?php
	class Agendamentos {

		private $idAgendamento;
		private $dtAgendamento;
		private $horaIni;
		private $horaFim;
		private $idCliente;
		private $idColaborador;
		private $idEspecialidade;
		private $idRecurso;

		function __construct( $idAgendamento, $dtAgendamento, $horaIni, $horaFim, $idCliente, $idColaborador, $idEspecialidade, $idRecurso){
			 $this->setIdAgendamento( $idAgendamento );
			 $this->setDtAgendamento( $dtAgendamento );
			 $this->setHoraIni( $horaIni );
			 $this->setHoraFim( $horaFim );
			 $this->setIdCliente( $idCliente );
			 $this->setIdColaborador( $idColaborador );
			 $this->setIdEspecialidade( $idEspecialidade );
			 $this->setIdRecurso( $idRecurso );
		}

		public function toArray(){
			 return array(
				 $this->getIdAgendamento(),
				 $this->getDtAgendamento(),
				 $this->getHoraIni(),
				 $this->getHoraFim(),
				 $this->getIdCliente(),
				 $this->getIdColaborador(),
				 $this->getIdEspecialidade(),
				 $this->getIdRecurso()
			);
		}

		public function toString(){
			 return("\n\t\t\t\t". implode(", ",$this->toArray()));
		}

		public function setIdAgendamento( $idAgendamento ){
			 $this->idAgendamento = $idAgendamento;
		}

		public function getIdAgendamento(){
			  return( $this->idAgendamento );
		}

		public function setDtAgendamento( $dtAgendamento ){
			 $this->dtAgendamento = $dtAgendamento;
		}

		public function getDtAgendamento(){
			  return( $this->dtAgendamento );
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

		public function setIdCliente( $idCliente ){
			 $this->idCliente = $idCliente;
		}

		public function getIdCliente(){
			  return( $this->idCliente );
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

		public function setIdRecurso( $idRecurso ){
			 $this->idRecurso = $idRecurso;
		}

		public function getIdRecurso(){
			  return( $this->idRecurso );
		}

	}


?>