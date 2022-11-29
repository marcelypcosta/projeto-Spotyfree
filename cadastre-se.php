<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="shortcut icon" href="imagens/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/reset.css">
    <link rel="stylesheet" href="assets/cadastre-se.css">
    <title>Cadastre-se - Spotyfree</title>
</head>
<body>
    <div class="caixa">
            <h1>Spotyfree</h1>
            <div class="recado">
                <h2>Cadastre-se gratuitamente para começar a ouvir.</h2>
            </div>
        <form action="" method="post">
            
            <label class="pergunta" for="email">Qual o seu e-mail?</label>
            <input required class="input_padrao" type="email" name="Email" id="email" placeholder="seuemail@dominio.com">

            <label class="pergunta" for="confirmacao_email">Confirme seu e-mail</label>
            <input required  class="input_padrao" type="email" name="Email" id="confirmacao_email" placeholder="seuemail@dominio.com">

            <label class="pergunta" for="senha">Crie sua senha</label>
            <input required class="input_padrao" type="password" name="Senha" id="senha" placeholder="Crie sua senha">

            <label class="pergunta" for="nome_perfil">Como queres que te chamemos?</label>
            <input required class="input_padrao" type="text" name="Senha" id="senha" placeholder="Crie seu nome de perfil">

            <label class="pergunta" for="data">Qual é a data do seu aniversário?</label>
            <input required class="input_padrao" type="date" name="Data do Aniversário" id="data">

            <fieldset>
                <legend>Qual seu gênero?</legend>
                <label for="Feminino"><input type="radio" name="Genero" value="Feminino" id="Feminino">Feminino</label> 
                <label for="Masculino"><input type="radio" name="Genero" value="Masculino" id="Masculino">Masculino</label>
                <label for="Naobinario"><input type="radio" name="Genero" value="Não binário" id="Naobinario">Não Binário</label>
                <label for="PrefiroNaoDizer"><input type="radio" name="Genero" value="Prefiro não dizer" id="PrefiroNaoDizer">Prefiro não dizer</label>
            </fieldset>

            <label class="checkbox"><input type="checkbox" checked>Gostaria de receber nossas novidades pro email?</label>        

            <fieldset class="botao">
                    <input type="submit" value="Cadastrar" class="enviar">
            </fieldset>

            <p>Já possui conta? <a href="?pg=entrar" class="tenhoConta_link">Iniciar sessão</a></p>

        </form>
    </div>
    </main>
</body>
</html>