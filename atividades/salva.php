<?php	
	/* Recebendo os dados do formulário */
	$nome = $_POST['nome'];
	$email = $_POST['email'];
	
	$musica = 0;
	$esporte = 0;
	$filme = 0;
	$estudo = 0;
	$politica = 0;
	$danca = 0;
	$tecnologia = 0;
	$game = 0;
	
 	if(isset($_POST['musica'])) {
 		$musica = 1;
 	}
	if(isset($_POST['esporte'])) {
 		$esporte = 1;
 	}
	if(isset($_POST['filme'])) {
 		$filme = 1;
 	}
	if(isset($_POST['estudo'])) {
 		$estudo = 1;
 	}
	if(isset($_POST['politica'])) {
 		$politica = 1;
 	}
	if(isset($_POST['danca'])) {
 		$danca = 1;
 	}
	if(isset($_POST['tecnologia'])) {
 		$tecnologia = 1;
 	}
	if(isset($_POST['game'])) {
 		$game = 1;
 	}
	
	/* Conectando com o banco de dados para cadastrar registros */
	$datasource = 'mysql:host=localhost;dbname=atividades';
	$user = 'root';
	$pass = 'vertrigo';
	$db = new PDO($datasource, $user, $pass);
	
	$query = "INSERT INTO pesquisa (
				  nome, email, musica, esporte, filme, 
				  estudo, politica, danca, tecnologia, game 				   
				) VALUES (?,?,?,?,?,?,?,?,?,?)";
			
	$stm = $db->prepare($query);
	$stm->bindParam(1, $nome);
	$stm->bindParam(2, $email);
	$stm->bindParam(3, $musica);
	$stm->bindParam(4, $esporte);
	$stm->bindParam(5, $filme);
	$stm->bindParam(6, $estudo);
	$stm->bindParam(7, $politica);
	$stm->bindParam(8, $danca);
	$stm->bindParam(9, $tecnologia);
	$stm->bindParam(10, $game);
	
	if($stm->execute()) {
		header("location:index.php");
	}
	else {
		print "<p>Erro ao registrar pesquisa!</p>";
		print "<a href='index.php'>Voltar</a>";
	}	
?>