<!DOCTYPE html>
<html lang="pt-br">
<meta charset="utf=8">
<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
  <head>  
        <title>Cadastro de Usuário</title>
        <script type="text/javascript">
  function validatePassword() 
  {
    var password = document.getElementById("password").value;

    if (password.length < 6 || password.length > 100) 
    {
      alert("A senha deve ter entre 6 e 100 caracteres");
      return false;
    }
    return true;
  }
</script>
<style>
 .form-container {
        width: 500px;
        margin: 0 auto;
        padding: 20px;
        background-color: #f2f2f2;
      }
      input[type="text"],
       input[type="email"], 
      input[type="password"], 
      input[type="tel"], 
      input[type="endereço"] 
      {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid gray;
        border-radius: 4px;
        font-size: 18px;
        font-family: times new roman;

      }
      button[type="submit"] {
        width: 100%;
        background-color: blue;
        color: white;
        padding: 14px 20px;
        margin: 8px 0;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 18px;
        font-family: times new roman;
      }
      button[type="submit"]:hover {
        background-color: darkblue;
      }
      .nicho
      {
        width: 100%;
        padding: 12px 20px;
        margin: 8px 0;
        box-sizing: border-box;
        border: 2px solid gray;
        border-radius: 4px;
      }
      label{
        color: #696969;
        font-size: 18px;
        font-family: times new roman;
      }
      select{
        font-weight: bold;
        font-size: 16px;
        font-family: times new roman;
      }
</style>
</head>   
 <body>

    <div class="form-container">
      <h2>Cadastro de usuário</h2>
   
      <form method="POST" action="verificacao_email.php" onsubmit="return validatePassword()" >
        
        <input type="text" id="nome" name="nome" placeholder="Nome da Empresa" required>
       
        <input type="email" id="email" name="email" placeholder="E-mail" required>
        
        <input type="tel" id="tel" name="telefone" placeholder="Telefone (opcional)">
       
        <input type="endereço" id="endereço" name="endereço" placeholder="Endereço (opcional)">

         <section class="nicho">

<label for="niche">Selecione o nicho de sua empresa:</label>
<select id="niche" name="nicho" required>
  <option value="">Selecione um nicho</option>
  <option value="tecnologia">Tecnologia</option>
  <option value="saude">Saúde</option>
  <option value="alimentos">Alimentos</option>
  <option value="moda">Moda</option>
  <option value="viagens">Viagens</option>
  <option value="educacao">Educação</option>
</select>

         </section>
  
        <input type="password" id="password" name="senha" placeholder="Senha" required>

        <button type="submit" >Cadastrar</button>
		
      </form>
    </div>
  </body>
</html>