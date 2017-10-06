<?php session_start(); 

if (isset($_SESSION['usuario'])) {
    require_once 'biblioteca/cabecalho.inc';

?>
    <body>
        <center>
        <br><br><br><br><br>
        <h1> Seja bem vindo <?php echo $_SESSION['usuario']; ?>. </h1>
        </center>
    </body>
</html>
<?php 
} else {
    header('Location:index.php');
}
?>