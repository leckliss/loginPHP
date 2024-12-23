<!DOCTYPE html>
<html>
<head>
  
    <link rel="stylesheet" type="text/css" href="./css/usuarios.css">
    
    <title>Tela de Usuario</title>
</head>
<body>
  
    <main class="container">
      <div class="botoes">
        <a href="usuarios.php">Usuarios</a>
        <a href="tarefas.php">Tarefas</a>
        <a href="index.php">Sair</a>
      </div>
      <h1>Boas vindas ao sistema!</h1>
      <div class="botao" onclick="Irparacadastro()">
        Novo Usuario
      </div>

      </script>
  <div class= "tabela-resp">
    <table class="table-cond">
      <thead>
        <tr>
        <th>ID</th>
        <th>Nome</th>
        <th>Email</th>
        <th>Telefone</th>
        <th>Ações</th>
        </tr>
      </thead>
      <tbody id= "conteudo-usuario"></tbody>
    </table>
  </div>
</script>

    </main>

</body>
<script>
  function Irparacadastro(){
    window.location.href = "./cadastro.php";
  }
</script>
</html>