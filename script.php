<?php 

    session_start(); //Inicia a sessão no PHP


    if($_POST['pass'] != $_SESSION['otp']){

        echo 'Código informado esta incorreto!'; ?>
        <a href="index.php">Voltar</a>
    
    <?php }else{ ?>
    
        <?php echo 'Autenticado com sucesso!'; ?>
        <a href="index.php">Sair</a>
    
    <?php } ?>