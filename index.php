<!DOCTYPE html>
<html>
   <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Tela de Login</title>
    <link rel="stylesheet" type="text/css" href="./assets/style.css">
   </head>

   <body>

    <div class="box-itens">
        <div class="titulo">
            <h1>Login</h1>
        </div>

        <form action="#">

            <div class="itens">
                <label>Nome ou E-mail</label>
                <input type="email" placeholder="Digite seu nome ou email aqui" required/>
            </div>

            <div class="itens">
                <label>Senha</label>
                <input type="password" placeholder="*****************" required/>
            </div>

            <div class="remenber">
                <input type="checkbox">
                <label>Mantenha-me Conectado</label>
            </div>

            <div class="itens">
                <button class="submit" type="submit">Entrar</button>
                <a href="#">Esqueci minha senha</a>
            </div>

        </form>
        <small>Ainda não possui conta? <a href="#">Cadastre-se aqui!</a></small>

    </div>
   </body>


</html>
