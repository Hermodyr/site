<!DOCTYPE html>
	<head>
		<title>PAG_calc</title>
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
	</head>
	<body><center>
	<div class="conteiner">
	<h1 class="col-sm-12">P(A+G) Calc</h1>
		<form action="calculo.php" method="post">
			<label>Tipo de progressão:</label><br>
			<select name="progressao">
				<option value="pa">Progressão Aritimética</option>
				<option value="pg">Progressão Geometrica</option>
			</select><br><br>
            <label>Primeiro Termo: </label><br><input type="text" name="a1" ><br>
            <label>Termo Geral: </label><br><input type="text" name="an" ><br>
            <label>Número de termos/Posição do termo: </label><br><input type="text" name="n" ><br>
            <label>Razão: </label><br><input type="text" name="r" ><br><br>
            <input type="submit" value="Calcular">
		</form>
		</div></center>
	</body>
</html>