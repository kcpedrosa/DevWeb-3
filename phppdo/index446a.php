<?php 

	$dsn = 'mysql:host=localhost;dbname=php_com_pdo';
	$user = 'root';
	$password = '';
	
	//$conexao = new PDO('mysql:host=localhost;dbname=php_com_pdo', 'root', '');

	//code bellow is for testing using wamp
	//echo"<p> Some text </p>";
	//echo "<hr>";

	//error management in php is done using try/catch
	try {
		$conexao = new PDO($dsn ,$user, $password);

		

		
		$query3 = 'select * from tb_usuarios where id = 6';

		$stmt = $conexao->query($query3);
		//we can write BELLOW () or write (PDO::FETCH_BOTH), the output is the same
		//$lista = $stmt->fetchAll();
		//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$lista = $stmt->fetchAll(PDO::FETCH_NUM);


		//$output = $stmt->fetch(PDO::FETCH_OBJ);
		$output = $stmt->fetch(PDO::FETCH_ASSOC);
		//using fetch we don't a list but one user, renamed $lista to $output
		//if you're using obj output, u must use the proper access method with an arrow, see bellow

	
	
		echo '<pre>';
		print_r($output);
		echo '</pre>';

		echo '<hr>';
		//if we use fetch alongside FETCH_ASSOC then our output will be an array, so the access is ['nome']
		//echo $output->nome;
		echo $output['nome'];

		echo '<hr>';
		
		

		//the return is the number of lines altered, here the ret will be 0
		//because we're not altering nothing
		//we will use other funcs in CRUD operations 


	} catch(PDOException $e ) {
		


		echo 'Erro: ' . $e->getCode() . ' Mensagem:  ' . $e->getMessage();
		//I've made add with + but this is JS, pay attention

		//we will log the erros in the future

	}


?>
 