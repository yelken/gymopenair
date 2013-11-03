<?php
//nome de usuario, senha, caminho do banco, nome do banco

$username = 'academiadacida';
$password = 'abc1020';
$hostname = 'mysql.academiadacida.uni5.net'; 
$database = 'academiadacida';


	try {
		$con = new PDO("mysql:host=hostname; dbname=database",$username,$password);
	
	} catch (Exception $e) {
		echo $e->getMessage();
	}

// Criar arquivo JSON 

$jsonStr = '{"academias": [';

$academiaObj = '';

while ($row = mysql_fetch_array($result)) {
   $academiasObj = $academiasObj.'{"nome": ' . '"' . $row{'academia_nome'} . '"' . ', ' . '"endereco": ' . '"' . $row{'endereco'} . '"' . ', '  .'"bairro": ' .  '"' . $row{'bairro'} .  '"' . ', ' . '"fone": ' . '"' . $row{'fone'} . '"' . ', ' . '"latitude": ' . '"' . $row{'latitude'} . '"' . ', ' . '"longitude": ' . $row{'longitude'} . ', ' . '"horario_de_aulas": ' . $row{'horario_de_aulas'} . '}' . ',';
}

$academiasObj = substr($academiasObj, 0, -1);
$jsonStr = $jsonStr . $academiasObj .']}';

echo $jsonStr;

mysql_close($dbhandle);
?>
