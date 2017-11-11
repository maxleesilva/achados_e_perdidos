<?php
/* VERIFICO SE HOUVE O ENVIO DE UM ARQUIVO  */
if(count($_FILES) > 0) {
	/* RECUPERO TODAS AS INFORMAÇÕES POSSÍVEIS DO ARQUIVO */		
	$nome      = $_FILES['arquivo']['name'];
	$tamanho   = $_FILES['arquivo']['size'];
	$tipo      = $_FILES['arquivo']['type'];
	$nome_temp = $_FILES['arquivo']['tmp_name'];	
	
	$erros = array();
	
	/* VERIFICO SE O ARQUIVO ENVIADO É DO TIPO IMAGEM */
	if($tipo == 'image/jpeg' || $tipo == 'image/jpg' || $tipo == 'image/gif' || $tipo == 'image/bmp') {
		/* 
		VERIFICO SE O TAMANHO NÃO ULTRAPASSA 2Mb 
		O CALCULO DEVE SER REALIZADO EM BYTES.
		*/
		if($tamanho <= 2097152) {
			$pasta = './arquivos/';
			/* VERIFICO SE A PASTA NÃO EXISTE, SE ELA NÃO EXISTIR, EU CRIO A PASTA */
			if(!file_exists($pasta)) {
				mkdir($pasta, 0777);
			}
			
			/* 
			TENTO ENVIAR O ARQUIVO PARA A PASTA arquivos QUE ESTÁ LOCALIZADA NA RAIZ DO MEU PROJETO 
			*/
			
			if(move_uploaded_file($nome_temp, $pasta.$nome)) {
				/* SE ESTIVER TUDO OK, REDIRECIONO PARA UMA PÁGINA DE SUCESSO */
				header('location: sucesso.php');
			} else {
				$erros['pasta'] = 'Ocorreu um erro ao enviar o arquivo para a pasta correta';	
			}
		} else {
			$erros['tamanho'] = 'Esse arquivo é maior que o permitido, o tamanho máximo permitido é de: <strong>2Mb</strong>';		
		}
	} else {
		$erros['tipo'] = 'Esse arquivo não é um arquivo suportado pelo sistema, os tipos suportados são: <strong>jpg, jpeg, gif e bmp</strong>';	
	}
	
}
?>

<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Upload de arquivos/imagens</title>
</head>
<style type="text/css">
body {
	font: 14px "Helvetica Neue", Helvetica, Arial, sans-serif;
	padding: 0;
	margin: 0;	
}
#upload {
	float: left;
	width: 100%;
	display: block;
	padding: 10px;
	box-sizing: border-box;
}
#upload ul {
	list-style: none;	
}
#upload li {
	float: left;
	margin-bottom: 10px;
	display: block;
	clear: left;	
}
#enviar {
	color: #FFF;
	font-weight: bold;
	text-transform: uppercase;
	width: 150px;
	height: 30px;
	display: block;
	border: 0 none;
	background: #F90;	
}
#erros {
	float: left;
	width: 100%;
	display: block;
	padding: 10px;
	border-bottom: solid 1px #CCC;
	margin-bottom: 10px;
	box-sizing: border-box;
}
#erros p {
	color: #900;
}
</style>
<body>
<?php if(isset($erros)) { ?>
<div id="erros">
<p>Erro (s) ao enviar o arquivo:</p>
<?php foreach($erros as $e) { ?>
<ul>
	<li>
    	<p><?php echo $e; ?></p>
    </li>
</ul>
<?php	
}
?>
</div><!-- #erros -->
<?php } ?>
<form id="upload" method="post" enctype="multipart/form-data" action="<?php echo $_SERVER['PHP_SELF']; ?>">
	<ul>
    	<li>
        	<label for="arquivo">Selecione o arquivo</label>
            <input type="file" id="arquivo" name="arquivo" accept="image/*" />
        </li>
        <li>
        	<input type="submit" id="enviar" value="Enviar" />
        </li>
    </ul>
</form>
</body>
</html>