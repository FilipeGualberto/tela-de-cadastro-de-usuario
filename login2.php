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
$email = $_POST['email'];
$senha = $_POST['senha'];

// Conexão com o banco de dados
$conn = mysqli_connect('localhost', 'root', '123456', 'formulario-filipe');

// Verifica se o e-mail já existe no banco de dados
$sql = "SELECT email FROM usuarios WHERE email = '$email' AND senha = '$senha'";
$result = mysqli_query($conn, $sql);

if (mysqli_num_rows($result) > 0) {
    echo "<p class='formata-verde'>Login efetuado com sucesso</p>";
}else{
        echo "<p class='formata-vermelho'>E-mail ou senha inválido</p>";
    }
?>
</div>
 </body>
</html>