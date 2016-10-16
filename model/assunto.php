<?php

/* ================== Passa tabela para a $areas ================== */
$query = odbc_exec($db,'SELECT codArea, descricao FROM Area');

while($result = odbc_fetch_array($query)) {
	$areas[$result['codArea']] = $result['descricao'];
}

/* ================== Passa tabela para a $assutons ================== */
$query = odbc_exec($db,'SELECT codAssunto, descricao, codArea FROM Assunto');

while($result = odbc_fetch_array($query)) {
	$assuntos[$result['codAssunto']] = array($result['descricao'], $result['codArea']);
}

/* ================== Passa dados para tabela Assunto ================== */
if(isset($_POST['assunto']) && isset($_POST['area'])) {
	$assunto = $_POST['assunto'];
	$area = $_POST['area'];
	if(odbc_exec($db, "INSERT INTO Assunto (descricao, codArea) VALUES ('$assunto', '$area')")) {
		$msg = "Assunto $assunto, inserida com sucesso.";
		$erro = "success";
	} else {
		$msg = "ERRO";
		$erro = "danger";
	}
}

/* ================== Deletar dados da tabela Assunto ================== */

if(isset($_GET['del']) && is_numeric($_GET['del'])) {
	if (!odbc_exec($db, 'DELETE FROM Assunto WHERE codAssunto = ' . $_GET['del'])) {
		$msg = "ERRO: Problema ao apagar o registro.";
		$erro = "danger";
	} else {
		$msg = "Registro apagado com sucesso.";
		$erro = "success";
	}
}

/* ================== Editando dados da tabela Assunto ================== */
if(isset($_POST['newAssunto']) && isset($_POST['newArea'])){
	$newAssunto = $_POST['newAssunto'];
	$newArea = $_POST['newArea'];
	if(odbc_exec($db,"	UPDATE Assunto SET descricao = '$newAssunto', codArea = '$newArea' WHERE codAssunto = {$_POST['idAssunto']}")){
		$msg = "Atualizado com sucesso";
		$erro = "success";
	} else{
		$msg = "ERRO";
		$erro = "danger";
	}
}
