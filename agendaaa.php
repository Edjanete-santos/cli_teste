<?php

	include "banco.php";
	include "util.php";
    date_default_timezone_set('America/Sao_Paulo');

	$cdagen = $_POST["cdagen"];
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
		$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu);
		$Flag=false;
	}

	if (empty($dtpronH)==true ){
		$demens = "Hora não pode ficar em branco!";
		$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
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
	//$cdplan = str_pad($cdplan, 2, '0', STR_PAD_LEFT);

	switch (get_post_action('edita','apaga')) {
    case 'edita':

		if ($Flag == true){

			$demens = "Atualização efetuada com sucesso!";

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

			AlterarDados("agenda", $aDados, $aNomes,"cdagen", $cdagen);

		}

		break;
    case 'apaga':
		$demens = "Exclusão efetuada com sucesso!";

		ExcluirDados("agenda", "cdagen", $cdagen);

		break;
    default:
		$demens = "Ocorreu um problema na atualização/exclusão. Se persistir contate o suporte!";
	}

	if ($Flag == true) {
		$detitu = "Clínica UPlaser&copy; | Agenda / Consultas";
		$devolt = "index.php";
		header('Location: mensagem.php?demens='.$demens.'&detitu='.$detitu.'&devolt='.$devolt);
	}

?>