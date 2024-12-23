<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" type="text/css" href="./css/usuarios.css">
    
    <title>Tela de Usuario</title>
</head>
<body>
  
    <main class="container">
      <h1>Faça seu cadastro agora!</h1>
      <div class="form">

        <div class="forms">
      <label>Nome Completo </label><input type="text" name="nome" id="nome">
        </div>

      <div class="forms">
      <label>Data Nascimento</label><input type="text" name="data" id="data">
      </div>

      <div class="forms">
      <label>Email </label><input type="text" name="email" id="email">
      </div>

      <div class="forms">
      <label>Confirmar email </label><input type="text" name="confemail" id="confemail">
      </div>

      <div class="forms">
      <label>Senha </label><input type="password" name="senha" id="senha">
      </div>

      <div class="forms">
      <label>Confirmar senha </label><input type="password" name="confsenha" id="confsenha">
      </div>

      <div class="forms">
      <label>Telefone </label><input type="text" name="telefone" id="telefone">
      </div>

      </div>

     

      <div class="botaoverm" onclick="Cancelar()">CANCELAR</div>

      <div class="botao" onclick="Cadastrar()">CADASTRAR</div>

    
    </main>

</body>
<script>
  function Irparacadastro(){
    window.location.href = "./cadastro.php";
  }
</script>
</html>