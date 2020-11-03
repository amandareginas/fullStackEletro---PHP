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

    <h2>Novo Pedido</h2> <br> <br> <br>

    <div id="formulario">

        <form method="post" action="pedidos.php">
            <div>
                <label for="name">Nome completo: </label>
                <input type="text" name="nome"  placeholder="Ex: Ana Luiza Santos" required size="66">
            </div>
            <br>
            <div>
                <label for="endereco">Endereço: </label>
                <input type="text" name="endereco"  placeholder="Ex: Rua Maria Marcolina, 123 - Brás - SP" required size="72">
            </div>
            <br>
            <div>
                <label for="email">Email:</label>
                <input type="email" name="email" placeholder="Ex: exemplodeemail@fullstackeletro.com" required size="76">
            </div>
            <br>
            <div>
                <select name="nome_produto">
                    <option>Geladeira Frost Free Brastemp Inverse 540 litros</option>
                    <option>Geladeira Frost Free Brastemp Branca 375 litros</option>
                    <option>Geladeira Frost Free Consul Prata 340 litros</option>
                    <option>Fogão 4 Bocas Consul Inox com Mesa de Vidro</option>
                    <option>Fogão 4 Bocas Atlas Monaco com Acendimento Automático</option>
                    <option>Micro-ondas Consul 32 Litros Inox 220V</option>
                    <option>Micro-ondas 25L Espelhado Philco 220V</option>
                    <option>Forno de Micro-ondas Eletrolux 20L Branco</option>
                    <option>Lava-Louças Eletrolux Inox com 10 Serviços, 06 Programas de Lavagem e Painel Blue Touch</option>
                    <option>Lava-Louças Compacta 8 Serviços Branca 127V Brastemp</option>
                    <option>Lavadora de Roupas Brastemp 11 kg com Turbo Perfonce Branca</option>
                    <option>Lavadora de Roupas Philco Inverse</option>
                </select>

                <label for="quantidade">Quantidade:</label>
                <input type="number" name="quantidade" value="1" min="1" max="10">
                <input type="submit">
                <?php
                if (isset($_POST['nome']) && isset($_POST['endereco']) && isset($_POST['email']) && isset($_POST['nome_produto']) && isset($_POST['quantidade'])) {
                    $nome = $_POST['nome'];
                    $endereco = $_POST['endereco'];
                    $email = $_POST['email'];
                    $nome_produto = $_POST['nome_produto'];
                    $quantidade = $_POST['quantidade'];

                    $sql = "insert into pedidos (nome_cliente, endereco_cliente, email_cliente, nome_produto, quantidade)
                                    values ('$nome', '$endereco', '$email', '$nome_produto', '$quantidade')";
                    $result = $conn->query($sql);

                    if ($result) {echo " <br><br><br> Pedido enviado com sucesso!";} 
                    else {echo " <br> erro";}
                }
                ?>
            </div>

    </div>
</body>

</html>