<html lang="pt-br">
	<head>
		<meta charset="utf-8"/>
		<title>Pesquisa</title>
		<link rel="stylesheet" href="style.css">
	</head>
	<body>
		<div class = "container">
		<div class = "box">
		<h2>Atividades de Interesse</h2>
		<form method="post" action="salva.php">
			<label>Nome:</label>
			<input type="text" name="nome" /><br>
			<label>Email:</label>
			<input type="text" name="email" /><br>
			<input type="checkbox" name="musica" />
			<label>Música</label><br>
			<input type="checkbox" name="esporte" />
			<label>Esporte</label><br>
			<input type="checkbox" name="filme" />
			<label>Filme</label><br>
			<input type="checkbox" name="estudo" />
			<label>Estudo</label><br>
			<input type="checkbox" name="politica" />
			<label>Política</label><br>
			<input type="checkbox" name="danca" />
			<label>Dança</label><br>
			<input type="checkbox" name="tecnologia" />
			<label>Tecnologia</label><br>
			<input type="checkbox" name="game" />
			<label>Game</label><br>
			<button type="submit">Responder Pesquisa</button>
		</form>

		<h2>Listagem de Respostas</h2>
		<?php
			/* Conectando com o banco de dados para listar registros */
			$datasource = 'mysql:host=localhost;dbname=atividades';
			$user = 'root';
			$pass = 'vertrigo';
			$db = new PDO($datasource, $user, $pass);
	
			$query = "SELECT * FROM pesquisa";
			$stm = $db -> prepare($query);
	
			if ($stm -> execute()) {
				print "<table border><tr><th>Nome</th>";
				print "<th>Email</th><th>Músicas</th>";
				print "<th>Esportes</th><th>Filmes</th>";
				print "<th>Estudos</th><th>Política</th>";
				print "<th>Dança</th><th>Tecnologias</th>";
				print "<th>Games</th></tr>";
				
				while ($row = $stm -> fetch()) {
					$id = $row['pesquisaid'];
					$nome = $row['nome'];
					$email = $row['email'];
					$musica = $row['musica'];
					$esporte = $row['esporte'];
					$filme = $row['filme'];
					$estudo = $row['estudo'];
					$politica = $row['politica'];
					$danca = $row['danca'];
					$tecnologia = $row['tecnologia'];
					$game = $row['game'];
					
					print "<tr><td>$nome</td><td>$email</td>";
					if($musica == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}
					if($esporte == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}
					if($filme == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}	
					if($estudo == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}	
					if($politica == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}	
					if($danca == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}	
					if($tecnologia == 1){
						print "<td>X</td>";
					}
					else {
						print "<td></td>";
					}	
					if($game == 1){
						print "<td>X</td></tr>";
					}
					else {
						print "<td></td></tr>";
					}											
				}
				print "</table>";
			} else {
				print '<p>Erro ao listar alunos!</p>';
			}
		?>
		</div>
		</div>
	</body>
</html>