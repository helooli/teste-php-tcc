<?php
$servidor = "localhost";
$usuario = "root";
$senha = "";
$banco = "meu_site";

// Criar conexão
$conn = mysqli_connect($servidor, $usuario, $senha, $banco);

// Verificar conexão
if (!$conn) {
    die("Conexão falhou: " . mysqli_connect_error());
}
?>


<?php
include 'conexao.php';

$nome = $_POST['nome'];
$email = $_POST['email'];

$sql = "INSERT INTO usuarios (nome, email) VALUES ('$nome', '$email')";

if (mysqli_query($conn, $sql)) {
    echo "Dados inseridos com sucesso!";
} else {
    echo "Erro: " . $sql . "<br>" . mysqli_error($conn);
}

mysqli_close($conn);
?>
