<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Nossas Lojas - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/style.css">
    <style>
        .fixarRodape {
            bottom: 0;
            position: fixed;
            width: 90%;
            text-align: center;
        }
    </style>
</head>

<body>
    <!--MENU-->
    <?php
    include ('menu.html');
    ?>

    <header>
        <h2>Nossas lojas</h2>
    </header>

    <hr>
    <section>
        <div class="lojas">
            <h3 class="estado">Rio de Janeiro</h3>
            <p>Avenida Presidente Vargas, 5000</p>
            <p>10 &ordm; andar</p>
            <p>Centro</p>
            <p>(21) 3333-3333</p>
        </div>
        <div class="lojas">
            <h3 class="estado">São Paulo</h3>
            <p>Avenida Paulista, 985</p>
            <p>3 &ordm; andar</p>
            <p>Jardins</p>
            <p>(11) 4444-4444</p>
        </div>
        <div class="lojas">
            <h3 class="estado">Santa Catarina</h3>
            <p class="endereco">Rua Major &Aacute;vila, 370</p>
            <p class="endereco">Vila Mariana</p>
            <p class="telefone">(47) 5555-5555</p>
        </div>
    </section>

    <footer id="rodape">
        <div class="fixarRodape">
            <p id="formas_pagamento">Formas de pagamento</p>
            <img src="./imagens/formas_de_pagamento.jpeg" width="25%" alt="Formas de pagamento">
            <p>&copy; Recode Pro</p>
        </div>
    </footer>
</body>

</html>