<?php

//strtolower

//$texto = "Curso Completo de PHP";
//echo strtolower($texto);


//strtoupper

//$texto = "Curso Completo de PHP";
//echo strtoupper($texto);

//ucfirst

//$texto = "curso completo de PHP";
//echo ucfirst($texto);


//strlen

//$texto = "Curso completo de PHP";
//echo strlen($texto);

//--------------------------------------------
/*$cpf = isset($_POST['cpf']) ? $_POST['cpf']: '';
$total_string_cpf = strlen($cpf);

if($total_string_cpf != 11 && $cpf !=''){
	echo "CPF invalido";
}

<form method="post" action="">
	<label>CPF
	<input type="text" name="cpf">
	</label>
	<input type="submit" value="cadastrar">
</form>


------------------------------------------------
*/
//----------------------------------------------
//str_replace

/*$texto = "053.295.726-14";
$cpf = str_replace(".", "", $texto);
$cpf = str_replace("-", "", $cpf);
echo $cpf;
*/
//-------------------------------------------------

//substr

$texto = "Entenda porque seu smartphone esquenta tanto, se vc tem um smartphone.";

$noticia =  substr($texto, 0, 44);
echo $noticia. " . . .";


?>


