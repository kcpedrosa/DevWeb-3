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

		

		//$query2 = 'insert into tb_usuarios(nome, email, senha) values ("John5","john5coding00@gmail.com","123456")';
	

		//$return2 = $conexao->exec($query2);

		/*
		$query2 = 'insert into tb_usuarios(nome, email, senha) values ("Manson","manson@gmail.com","321456")';
	

		$return2 = $conexao->exec($query2);

		$query2 = 'insert into tb_usuarios(nome, email, senha) values ("Corey","corey@gmail.com","abc")';
	

		$return2 = $conexao->exec($query2);
		*/
		$query3 = 'select * from tb_usuarios';

		$stmt = $conexao->query($query3);
		//we can write BELLOW () or write (PDO::FETCH_BOTH), the output is the same
		//$lista = $stmt->fetchAll();
		//$lista = $stmt->fetchAll(PDO::FETCH_ASSOC);
		//$lista = $stmt->fetchAll(PDO::FETCH_NUM);
		$lista = $stmt->fetchAll(PDO::FETCH_OBJ);
		//if you're using obj output, u must use the proper access method with an arrow, see bellow

		//if you set FETCH_ASSOC, this will obvsly raise an error
		echo $lista[0]->nome;
	
		echo '<pre>';
		print_r($lista);
		echo '</pre>';

		echo '<hr>';
		//bellow is the access to object attributes
		echo $lista[0]->email;
		//bellow is the access to array
		//echo $lista[0]['nome'];
		//echo $lista[1]['nome'];
		echo '<hr>';
		//var_dump($lista[2]);
		

		//the return is the number of lines altered, here the ret will be 0
		//because we're not altering nothing
		//we will use other funcs in CRUD operations 


	} catch(PDOException $e ) {
		


		echo 'Erro: ' . $e->getCode() . ' Mensagem:  ' . $e->getMessage();
		//I've made add with + but this is JS, pay attention

		//we will log the erros in the future

	}


?>
 