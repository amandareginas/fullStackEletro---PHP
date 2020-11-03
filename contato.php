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

<?php
    if(isset($_POST['nome']) && isset($_POST['msg'])){
        $nome = $_POST['nome'];
        $msg = $_POST['msg'];
        


        $sql = "insert into comentarios (nome, msg) values ('$nome', '$msg')";
        $result = $conn->query($sql);
    }

?>

<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <title>Contato - Full Stack Eletro</title>
    <link rel="stylesheet" href="css/style.css">
</head>

<body>
    <!--MENU-->
    <?php
    include ('menu.html');
    ?>

    <header>
        <h2>Contato</h2>
    </header>
    <hr>

    <section>
        <div class="opcao">
            <img src="./imagens/email.png" width="40px">
            <p>contato@fullstackeletro.com</p>
        </div>
        <div class="opcao">
            <img src="./imagens/whatsapp-logo-1-1.png" width="40px">
            <p>(11) 99999-9999</p>
        </div>

        <!-- Formulário de envio de mensagem -->
    <form method="post" action="">
        Nome:<br>
        <input type="text" name="nome" style="width: 500px"><br>
        Mensagem:<br>
        <input type="text" name="msg" style="width: 500px" onclick="caracteres()">
        <div id="mostrar"></div><br>
        <input type="submit" name="submit" value="Enviar"><br>
        <script>
            function caracteres(){
            document.getElementById("mostrar").innerHTML="Máximo de 240 caracteres.";
        }
        </script>
    </form>
        
    <!-- Formulário de envio de mensagem -->
    <?php
        $sql = "select * from comentarios";
        $result = $conn->query($sql);
    
            if($result->num_rows>0){
                while($rows=$result->fetch_assoc()){
                echo "<hr>"; 
                echo "Data: ", $rows['data'], "<br>";
                echo "Nome: ", $rows['nome'], "<br>";
                echo "Mensagem: ", $rows['msg'], "<br>";           
                }
            } 
            else{
                echo "Nenhum comentário ainda!";
            }
    ?>



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