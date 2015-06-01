<?php
	session_start();
	if(!isset($_SESSION['logado'])){
		header('Location:tela-login.html');
	}
?>

<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
<style>
	legend {
		background-color: #FFA500; width: 105%;
	}
</style>
</head>

<body>

<div align="center"><img src="config.jpg" width="150px"></div>
<br><br>
<center>
<h3>Adicionar Novo Usuário</h3>
<br><br>

		<label for="user">Novo usuário</label>
		<input type="text" name="user" id="user">
		<br><br>
		<label for="password">Senha</label>
		<input type="password" name="password" id="password">
		<br><br>
		<button>Enviar</button>

		<div id="result">
			O usuário foi criado com sucesso!
		</div>
	

	<script src="http://code.jquery.com/jquery-2.1.4.min.js"></script>
	<script>
	$("#result").hide();
	$("button").click(function(){
		console.log('foi');
		var url = "processadduser.php?user="+$("#user").val()+"&password="+$("#password").val();
		$.getJSON(url, function(result){
			if (result.status == "sucess"){
				$("#result").show();
			}
		});	
	});
	</script>	
	
</center>
</body>
</html>