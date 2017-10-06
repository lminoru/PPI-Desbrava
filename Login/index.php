<?php require_once 'Biblioteca/cabecalho.inc'; ?>
    <?php       
        if (isset($_GET['usuario'])) {
            if ($_GET['usuario']=="NOK")
                $usuario = "Usuário não autorizado.";
            if ($_GET['usuario']=="OK")
            $usuario = "Usuário autenticado.";} 
        else {
            $usuario = '';
        }
        
        if ( isset($_GET['logout']) && ($_GET['logout']=='OK') && isset($_SESSION['usuario']) ) {
            unset($_SESSION['usuario']);
        }
    ?>
            
    <form name="frm_Logar" action="validarAcesso.php" method="post"> 


	    
        <br><br><br>
        <div class="div_login">
        
        
        <p><input type="text"     name="login" maxlength="20" class="espacoDigitar" placeholder="Usuário:"></p>
        <p><input type="password" name="senha" maxlength="20" class="espacoDigitar" placeholder="Senha:"></p>


		<input name="btn_1" type="submit" id="btn_logar" value="Logar"><!-- <input name="btn_1" type="submit" id="btn_cadastrar" value="Cadastrar">-->
        <BR><BR><BR>

		<?php echo "<p id='mensagem'>$usuario</p>";?>

        </div>


	</form>  





<?php require_once 'Biblioteca/rodape.inc';    ?>