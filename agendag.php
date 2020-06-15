<?php

	include "banco.php";
	include "util.php";
    date_default_timezone_set('America/Sao_Paulo');

	$cdpron = $_POST["cdpron"];
	$cdmedi = $_POST["cdmedi"];
	$cdusua = $_POST["cdusua"];
	$deespe = $_POST["deespe"];
	$dtpronD = $_POST["dtpronD"];
	$dtpronH = $_POST["dtpronH"];
	$cdplan = $_POST["cdplan"];
	$cdform = $_POST["cdform"];
	$vlcons = $_POST["vlcons"];
	$dedeta = $_POST["dedeta"];

	$vlcons= str_replace(".","",$vlcons);
	$vlcons= str_replace(",",".",$vlcons);

	$flativ = 'S';

	$Flag = true;

	if ( $vlcons <= 0 ){
		$demens = "Valor da Consulta não pode ser zero!";
		$detitu = "Clínicas OnLine&copy; | Agenda / Consultas";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
		$Flag=false;
	}

	if (empty($dtpronH)==true ){
		$demens = "Hora não pode ficar em branco!";
		$detitu = "Clínica UPlaser
		&copy; | Agenda / Consultas";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
		$Flag=false;
	}
	if (empty($dtpronD)==true ){
		$demens = "Data não pode ficar em branco!";
		$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
		$Flag=false;
	}

	$dtagen = $dtpronD.' '.$dtpronH.':00';


	//$cdpron = str_pad($cdpron, 2, '0', STR_PAD_LEFT);

	//$aTrab = ConsultarDados("planos", "cdpron", $cdpron);
	//if ( count($aTrab) > 0) {
	//	$demens = "Código já cadastrado!";
	//	$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
	//	header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
	//	$Flag=false;
	//}

	if ($Flag == true) {

		//campos da tabela
		$aNomes=array();
		$aNomes[]= "cdusua";
		$aNomes[]= "cdmedi";
		$aNomes[]= "cdform";
		$aNomes[]= "cdplan";
		$aNomes[]= "deespe";
		$aNomes[]= "dedeta";
		$aNomes[]= "dtagen";
		$aNomes[]= "vlcons";
	
		//dados da tabela
		$aDados=array();
		$aDados[]= $cdusua;
		$aDados[]= $cdmedi;
		$aDados[]= $cdform;
		$aDados[]= $cdplan;
		$aDados[]= $deespe;
		$aDados[]= $dedeta;
		$aDados[]= $dtagen;
		$aDados[]= $vlcons;

		IncluirDados("agenda", $aDados, $aNomes);

		$demens = "Cadastro efetuado com sucesso!";
		$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
		$devolt = "agenda.php";

		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu.'&devolt='.$devolt);
	}

?>