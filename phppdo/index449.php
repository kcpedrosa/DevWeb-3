<?php

  print_r($_POST);

  if(!empty($_POST['usuario']) && !empty($_POST['senha'])){
    $dsn = 'mysql:host=localhost;dbname=php_com_pdo';
    $user = 'root';
    $password = '';
    
    
    try {
      $conexao = new PDO($dsn ,$user, $password);

        
      $query3 = "select * from tb_usuarios where email = :usuario AND senha = :senha;";
      //professor wrote $query .= "AND senha = '{$_POST['senha']}'" //etc for concatenation
      echo $query3;

      $stmt = $conexao->prepare($query3);

      $stmt->bindValue(':usuario',$_POST['usuario']);
      $stmt->bindValue(':senha', $_POST['senha']);

      $stmt->execute();
      
      $usuario = $stmt->fetch();

      echo '<pre>';
      print_r($usuario);
      echo '</pre>';

      //write the password then'; to begin a new SQL command: that's SQL injection
      //results can be obviously catastrophic

    } catch(PDOException $e ) {
    
      echo 'Erro: ' . $e->getCode() . ' Mensagem:  ' . $e->getMessage();
     
    }
  }
  

?>


<html>
  <head>
    <meta charset="utf-8" />
    <title> Prepare function</title>

     <!-- Bootstrap CSS -->

   <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">


    <!--Font AWESOME-->
    <script src="https://kit.fontawesome.com/e57022a284.js" crossorigin="anonymous"></script>

    

    <div class="container"> 
    <div class="jumbotron m-5">
    <h5>Fazer login</h5>
    <form method="post" action="index449.php">
      <input type="text" name="usuario" placeholder="usuario">
      <br>
      <input type="password" name="senha" placeholder="senha">
      <br>

      <button type="submit">Submit</button>
    </form>
    </div>

    </div>
      
    
      



    <!-- Optional JavaScript YOU WILL need it to make some components work well, like the dropdown-->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>