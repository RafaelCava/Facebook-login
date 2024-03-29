<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Rafael Cavalcante" />
    <meta name="description" content="Site simulando a página de login do Facebook." />
    <meta name="keywords" content="Facebook, html, css, javascript, aprender, programar">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@300;400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/style.css">
    <title>Login Facebook</title>
</head>
<body>
    <header>
        <div class="center">
            <div class="logo">
                <h2 title="Facebook">Facebook</h2>
            </div>
            <form action="" class="form-login">
                <div class="form-element">
                    <p>Email ou Telefone:</p>
                    <input type="email" name="email" id="">
                </div>
                <div class="form-element">
                    <p>Senha:</p>
                    <input type="password" name="email" id="">
                </div>
                <div class="form-element">
                    <label for="">Lembrar-me:</label>
                    <input type="checkbox" value="lembrar" />
                </div>
                <div class="form-element">
                    <input type="submit" value="Entrar" name="acao">
                </div>
                <div class="clear"></div>
            </form>
            <div class="clear"></div>
        </div>
    </header>

    <section class="main">
        <div class="center">
            <div class="img-pessoas">
                <h3>O Facebook ajuda você a se conectar e compartilhar com as pessoas que fazem parte da sua vida.</h3>
                <img src="images/img1.png" alt="imagem Facebook">
            </div>
            <div class="abrir-conta">
                <h2>Abra uma conta</h2>
                <h3>É rápido e fácil.</h3>
                <form action="" class="criar-conta">
                    <div class="w50">
                        <input type="text" placeholder="Nome" name="" id="">
                    </div>
                    <div class="w50">
                        <input type="text" placeholder="Sobrenome" name="" id="">
                    </div>
                    <div class="w100">
                        <input type="email"  placeholder="Email" name="" id="">
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Senha" name="" id="">
                    </div>
                    <div class="w100">
                        <input type="password" placeholder="Confirmar senha" name="" id="">
                    </div>
                    <div class="w100">
                        <h3>Data de Nascimento:</h3>
                        <select name="nascimento-dia" id="data" class="nascimento">
                            <?php
                                for ($i=1; $i < 31 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <select name="nascimento-mes" id="data" class="nascimento">
                            <option value="1">Janeiro</option>
                            <option value="2">Fevereiro</option>
                            <option value="3">Março</option>
                            <option value="4">Abril</option>
                            <option value="5">Maio</option>
                            <option value="6">Junho</option>
                            <option value="7" selected>Julho</option>
                            <option value="8">Agosto</option>
                            <option value="9">Setembro</option>
                            <option value="10">Outubro</option>
                            <option value="11">Novembro</option>
                            <option value="12">Dezembro</option>
                        </select>
                        <select name="nascimento-ano" id="data" class="nascimento">
                            <?php
                                for ($i=1940; $i <= 2021 ; $i++) {
                            ?>
                                <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                            <?php } ?>
                        </select>
                        <div class="clear"></div>
                    </div>
                    <div class="w100">
                        <h3>Gênero:</h3>
                        <div class="input-radio">
                            <input type="radio" value="masculino" name="sexo" id="">
                            <label for="">Masculino</label>
                        </div>
                        <div class="input-radio">
                            <input type="radio" value="feminino" name="sexo" id="">
                            <label for="">Feminino</label>
                        </div>
                        <div class="input-radio">
                            <input type="radio" value="personalizado" name="sexo" id="">
                            <label for="">Personalizado</label>
                        </div>
                        <div class="clear"></div>
                    </div><!-- w100 -->
                    <div class="w50">
                        <input type="submit" value="Cadastre-se">
                    </div>
                    <div class="clear"></div>
                </form>
            </div><!-- abrir conta -->
            <div class="clear"></div>
        </div>
    </section><!-- main -->

    <section class="linguas">
        <div class="center">
            
            
                    <a class="selected" href="#">Português (Brasil)</a>
                    <a href="">Português (Brasil)</a>
                    <a href="">Português (Brasil)</a>
                    <a href="">Português (Brasil)</a>
                    <a href="">Português (Brasil)</a>
                    <a href="">Português (Brasil)</a>
            
            
        </div>

        <div class="center">
        
        
                    <a href="">Cadastre-se</a>
                    <a href="">Entrar</a>
                    <a href="">Messenger</a>
                
            
        </div>
    </section>

</body>
</html>