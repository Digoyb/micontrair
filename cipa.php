<!DOCTYPE html>
<html lang="pt-br">

<head>
    <title>Micontrair - Segurança do Trabalho</title>
    <meta http-equiv="Content-Type" content="text/html; charset=utf-8">
    <meta name="description" content="Para você que tem interesse na implementação de nrs voltadas a segurança do trabalho, contate a Micontrair">
    <meta name="keywords" content="pcmso, ppra, cipa, sesmt, ppp">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="author" content="Micontrair Segurança do Trabalho">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="http://www.jqueryscript.net/css/jquerysctipttop.css" rel="stylesheet" type="text/css">
    <link rel="stylesheet" href="themes/default/default.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/light/light.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/dark/dark.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="themes/bar/bar.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo-slider.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/nivo.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="css/style.css" type="text/css">
    <link href="https://fonts.googleapis.com/css?family=Rajdhani" rel="stylesheet">
    <link rel="icon" href="img/favicon.png">
    <script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery.nivo.slider.js"></script>
</head>

<body>
    <?php include("header.php"); ?>
    <section class="banner quem-somos servicos">
        <h1>Comissão Interna de Prevenção de Acidentes - CIPA</h1>
        <p>A comissão interna de prevenção de acidentes, também conhecida como CIPA, regulamentado pela NR 05, tem como foco a observação contínua das condições e riscos inerentes ao âmbito de trabalho, sejam elas atividades ou ambientes inseguros.</p>
        
        <h2 class=heading-secondary>Como dimensionar a CIPA?</h2>
        <p>Formada por funcionários efetivos e suplentes, deve-se levar em consideração a atividade realizada pela companhia com base no CNAE(Classificação Nacional de Atividades Econômicas).</p>
        
        <section class="section-book">
                <div class="row">
                    <div class="book">
                        <div class="book__form">
                            <form action="processa.php" method="POST" class="form">
                                <div class="form__group">
                                    <input type="text" name="empresa" class="form__input" placeholder="Empresa" id="empresa_id" required>
                                    <label for="empresa_id" class="form__label">Empresa</label>
                                </div>

                                <div class="form__group">
                                    <input type="text" name="nome" class="form__input" placeholder="Nome" id="nome_id" required>
                                    <label for="nome_id" class="form__label">Nome</label>
                                </div>

                                <div class="form__group">
                                    <input type="tel" name="telefone" class="form__input" placeholder="Telefone" id="telefone_id" required>
                                    <label for="telefone_id" class="form__label">Telefone</label>
                                </div>

                                <div class="form__group">
                                    <input type="email" name="email" class="form__input" placeholder="Email" id="email_id" required>
                                    <label for="email_id" class="form__label">Email</label>
                                </div>
                                <div class="form__group">
                                <textarea id="textoarea" name="mensagem" cols="39" rows="5" required></textarea>
                                </div>
                                <div class="form__group u-margin-bottom-medium">
                                    <div class="form__button-group">
                                        <button type="submit" value="enviar" class="btn btn--white btn--animated">
                                                    Faça sua cotação
                                                </button>
                                        
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </section>
    </section>
    <?php include("footer.php"); ?>
</body>

►</html>
