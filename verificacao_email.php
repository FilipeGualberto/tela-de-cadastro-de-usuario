<html>
  <head>
    <style>
	.form-container {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
      }
      .formata-vermelho {
		width: 100%;
        padding: 12px 120px;
        margin: 8px 0;
        font-size: 18px;
        font-family: times new roman;
        color: red;
      } 
	  .formata-verde {
		width: 100%;
        padding: 12px 120px;
        margin: 8px 0;
        font-size: 18px;
        font-family: times new roman;
        color: green;
      } 
    </style>
  </head>
  <body>
  <div class="form-container">
<?php
$nome = $_POST['nome'];
$email = $_POST['email'];
$telefone = $_POST['telefone'];
$endereço = $_POST['endereço'];
$nicho = $_POST['nicho'];
$senha = $_POST['senha'];

// Conexão com o banco de dados
$conn = mysqli_connect('localhost', 'root', '123456', 'formulario-filipe');

// Verifica se o e-mail já existe no banco de dados
$sql = "SELECT email FROM usuarios WHERE email = '$email'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<p class='formata-vermelho'>E-mail já está em uso. Por favor, escolha outro e-mail.</p>";
	header("Refresh: 3; URL=index.php");
}else{
	$sql = "INSERT INTO usuarios (nome, email, telefone, endereço, nicho, senha) VALUES ('$nome', '$email','$telefone', '$endereço', '$nicho', '$senha')";
    if (mysqli_query($conn, $sql)){
        // Inserção bem-sucedida, exibe mensagem de sucesso
        echo "<p class='formata-verde'>Usuário cadastrado com sucesso.</p>";
		header("Refresh: 3; URL=login.php");
    } else {
        // Inserção falhou, exibe mensagem de erro
        echo "Erro ao cadastrar usuário: " . mysqli_error($conn);
    }
}

// Fecha a conexão com o banco de dados
mysqli_close($conn);
?>
</div>
 </body>
</html>
