<?php
	$achado  = @$_REQUEST["nome_achado"];
	$data    = @$_REQUEST["data_achado"];
	$imagem  = @$_REQUEST["img_achado"];
	$nome    = @$_REQUEST["nome_pessoa"];
	$rgm     = @$_REQUEST["num_rgm"];
	
	
			$sql = "INSERT INTO perdido (nome_achado, data_achado, img_achado, nome_pessoa, num_rgm) VALUES ({$achado},'{$data}', '{$imagem}', '{$nome}', '{$rgm}')";
			
			$result = $conn->query($sql);
			
			if($result==true){
				print "<div class='alert alert-success'>Cadastrou com sucesso!</div>";
			}else{
				print "<div class='alert alert-danger'>Não foi possível cadastrar</div>"; 
			}
?>