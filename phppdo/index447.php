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

		

		
		$query3 = 'select * from tb_usuarios ';

//	QUERY ON THE RUN
		foreach ($conexao->query($query3) as $key => $value) {
			echo '<hr>';
			echo $value['nome'];
			//print_r($value['nome']); //you can do that way too, also you can use [1]
			echo '<hr>';
		}

		/*
		$stmt = $conexao->query($query3);


	

		//$output = $stmt->fetch(PDO::FETCH_OBJ);
		$output = $stmt->fetchAll(PDO::FETCH_ASSOC);
		*/
		/*
		echo '<pre>';
		print_r($output);
		echo '</pre>';
*/
/*
		foreach ($output as $key => $value) {
			//print_r($value);
			echo $value['nome'];
			echo "<hr>";
		}
		*/
		
		

		//the return is the number of lines altered, here the ret will be 0
		//because we're not altering nothing
		//we will use other funcs in CRUD operations 


	} catch(PDOException $e ) {
		


		echo 'Erro: ' . $e->getCode() . ' Mensagem:  ' . $e->getMessage();
		//I've made add with + but this is JS, pay attention

		//we will log the erros in the future

	}


?>
 