    <?php 
    session_start(); //Inicia a sessão no PHP
    
    $otp = rand(1,999); //Gera um número aleatório de 1 a 999
    $_SESSION['otp'] = $otp; //Guarda o número gerado dentro de uma variavel global (sessão)
    ?>

    <title>OTP</title>
    <h1>Exemplo de OTP</h1>
    <!-- Mostra o código de autenticação gerado aleatóriamente -->
    <p>Digite o código <b><?php echo $otp; ?></b> para autenticar no sistema</p>
    <hr>
    <!-- Formulário HTML -->
    <form action="script.php" method="post">
        <input type="text" name="pass" id="pass">
        <input type="submit" value="Autenticar">
    </form>

    <footer>
        <p>Feito por Gabriel Godoy | Desenvolvimento de sistemas | Módulo 3 | Professor Abraão</p>
    </footer>
