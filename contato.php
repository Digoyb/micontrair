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
    <section class="banner banner-contato">

        <div class="book__form" id="book-contato">
            <form action="processa.php" method="POST" class="form">
                <div class="u-margin-bottom-medium">
                    <h2 id="orcamento" class="heading-secondary">
                        Faça seu orçamento
                    </h2>
                </div>

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
            <div id="contato-aba">
                <h3>CONTATO</h3>
                <li><span class="pi-bullet-icon"><i class="icon-location"></i></span><strong>Endereço:</strong> Av Senador Teotônio Vilela, 4029<br>CEP: 04833-001 - São Paulo/SP
                </li>
                <li><span class="pi-bullet-icon"><i class="icon-phone"></i></span><strong>Telefone:</strong> 11-5939.5403 | 11-9907.7142<br>
                    <a id="wpp-icon" href="http://api.whatsapp.com/send?l=pt&phone=5511999077142"><img src="img/if_Whats_App_2062095 (1).png" alt="whatsapp-logo-icone-150x150" width="20" height="20" class="alignnone size-full wp-image-2240"></a> <span id="cel-phone">11-96674.8677</span>
                </li>
                <li><span class="pi-bullet-icon"><i class="icon-mail"></i></span><strong>E-mail:</strong> <a href="javascript:void(0);">lc.spinelli@uol.com.br</a>
                </li>
                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3652.33211769131!2d-46.70020838560267!3d-23.735533273931146!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x94ce4f108fdc4513%3A0xacb3aaa6917c15e5!2sAv.+Sen.+Teot%C3%B4nio+Vilela%2C+4029+-+Parque+Alto+do+Rio+Bonito%2C+S%C3%A3o+Paulo+-+SP!5e0!3m2!1spt-BR!2sbr!4v1531184131197" frameborder="0" style="border:0" allowfullscreen></iframe>
            </div>

        </div>
    </section>




    <?php include("footer.php"); ?>
</body>

</html>
