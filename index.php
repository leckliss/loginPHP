<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" type="text/css" href="login.css">
    <title>Login Form</title>
</head>
<body>
    <main class="container">
        <h2>Login</h2>
        <form method="POST" action="POST">
            <label>Login: </label><input type="text" name="login" id="emailTxt"><br>  
            <label>Senha: </label><input type="password" name="senha" id="senhaTxt"><br>  
            <input type="submit" value="Entrar"  name="login" id="loginBtn"/>  
            <br><br>
            <input type="button" value="Cancelar" class="cancel"/>
        </form>
    </main>
</body>

<script src="view/js/jquery-3.6.0.min.js" type="text/javascript"></script>

<script type="text/javascript" charset="utf-8">
  $(document).ready(function(){
    $('#loginBtn').on('click', async function(e) {
      e.preventDefault();
      const config ={
        method: "post",
        headers:{
          'Accept': 'application/json',
          'Content-Type': 'application/json'
        },
        body: JSON.stringify({
          emailView: $('#emailTxt').val(),
          senhaView: $('#senhaTxt').val()
        })
      };

      const request = await fetch('controller/logar.php', config)
      const response = await request.json();
      if (response.status == 1 ) {
        alert("Usuario encontrado: Bem vindo ao sistema!")
      }
      else{
        alert("Dados incorretos! Tente digitar novamente seu email e senha")
      }

    });
  });
</script>
</html>