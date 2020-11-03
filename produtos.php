<?php
$servername = "localhost";
$username = "root";
$password = "";
$database = "fseletro";

$conn = mysqli_connect($servername, $username, $password, $database);

if (!$conn) {
    die("A conexão falhou: " . mysqli_connect_error());
}
?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Produtos - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/style.css">
    <script src="./js/funcoes.js"></script>
</head>

<body>
    <!--MENU-->
    <?php
    include('menu.html');
    ?>

    <header>
        <h2>Produtos</h2>
    </header>
    <hr>

    <aside>
        <h3>Categorias</h3>
        <ul class="listaSimples">
            <li onclick="exibir_todas('todas')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Todas (12)</li>
            <li onclick="exibir_categoria('geladeira')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Geladeiras (3)</li>
            <li onclick="exibir_categoria('fogao')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Fogões(2)</li>
            <li onclick="exibir_categoria('microondas')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Microondas (3)</li>
            <li onclick="exibir_categoria('lavadoraRoupas')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Lavadora de roupas (2)</li>
            <li onclick="exibir_categoria('lavaLoucas')" onmousemove="entrarMouse(this)" onmouseout="sairMouse(this)">Lava-louças (2)</li>
        </ul>
    </aside>

    <section class="produtos">
        <div class="todos-produtos">
            <?php
            $sql = "select * from produto";
            $result = $conn->query($sql);

            if ($result->num_rows > 0) {
                while ($rows = $result->fetch_assoc()) {
            ?>
                    <div class="box-produto" id="<?php echo $rows["categoria"]; ?>" style="display:inline-block" ;>
                        <img class="fotoProduto" src=".<?php echo $rows["imagem"]; ?>" width="120px" id="centro" onmouseover="aumentar(this)" onmouseout="diminuir(this)"><br>
                        <br>
                        <p class="descricao"><?php echo $rows["descricao"]; ?></p>
                        <hr>
                        <p class="preco-antigo">R$ <?php echo $rows["preco"]; ?></p>
                        <p class="preco">R$ <?php echo $rows["precofinal"]; ?></p>
                    </div>
            <?php
                }
            } else {
                echo "Nenhum produto cadastrado";
            }
            ?>
        </div>
    </section>

    <footer id="rodape">
        <p id="formas_pagamento">Formas de pagamento</p>
        <img src="./imagens/formas_de_pagamento.jpeg" width="25%" alt="Formas de pagamento">
        <p>&copy; Recode Pro</p>
    </footer>
</body>
</html>