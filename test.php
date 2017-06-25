<?php
//bonus630
	function con()
	{
		try
		{
			return new PDO("mysql:dbname=estados;host=localhost","root","");
		}
		catch(PDOException $erro)
		{
			return $erro;
		}
	}
	
	function geraJsonEstados()
	{
		$query = con()->query("Select * from funcionario order by estado_nome",PDO::FETCH_ASSOC);
		$estados = $query->fetchAll();
		$stringJson = "{\"Estados\":[";
		for($i=0;$i<count($estados);$i++)
		{
			$stringJson .= "{\"id\":\"".$estados[$i]["estado_id"]."\",\"nome\":\"".utf8_encode($estados[$i]["estado_nome"])."\"}";
			if($i<count($estados)-1)
				$stringJson .= ",";
		}
		$stringJson .= "]}";
		return $stringJson;
	}
	function geraJsonCidades($estadosId)
	{
		$query = con()->query("Select * from funcionario where id_filial = $estadosId order by cidade_nome");
		$cidades = $query->fetchAll();
		$stringJson = "{\"Cidades\":[";
		for($i=0;$i<count($cidades);$i++)
		{
			$stringJson .= "{\"id\":\"".$cidades[$i]["cidade_id"]."\",\"nome\":\"".utf8_encode($cidades[$i]["cidade_nome"])."\"}";
			if($i<count($cidades)-1)
				$stringJson .= ",";
		}
		$stringJson .= "]}";
		return $stringJson;
	}
	
	header('Content-Type: application/json');
	
	if(isset($_GET["id"]))
		echo geraJsonCidades($_GET["id"]);
	else
		echo geraJsonEstados();
?>