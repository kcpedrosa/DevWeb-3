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

		$query = 'create table tb_usuarios(
				id int not null primary key auto_increment,
				nome varchar(50) not null,
				email varchar(100) not null,
				senha varchar(32) not null

		)';
		
		$return = $conexao->exec($query);
		echo $return;


		$query2 = 'insert into tb_usuarios(nome, email, senha) values ("John5","john5coding00@gmail.com","123456")';
		$query3 = 'delete from tb_usuarios';

		$return2 = $conexao->exec($query2);
		//after refreshing page 5x, we did a delete(  query3  ) and the return was 5, 5 lines deleted
		echo $return2;

		//the return is the number of lines altered, here the ret will be 0
		//because we're not altering nothing
		//we will use other funcs in CRUD operations 


	} catch(PDOException $e ) {
		/*echo '<pre>';
		print_r($e);
		echo '</pre>';
		echo  '<hr>';
		*/
		echo 'Erro: ' . $e->getCode() . ' Mensagem:  ' . $e->getMessage();
		//I've made add with + but this is JS, pay attention

		//we will log the erros in the future

	}


?>
 