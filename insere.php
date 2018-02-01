<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
</head>

<body>
<?php
$servername = "localhost";
$username = "root1";
$password = "26X7Wp6XvODSCOq8LsqU";
$dbname = "form3";

// Fazer a ligação à Base de dados
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificação da ligação
if ($conn->connect_error) 
{
    die("Ligação falhou: " . $conn->connect_error);
} 

$nome= $_POST['nome'];
$email= $_POST['email'];
$assunto= $_POST['assunto'];
$comentario= $_POST['comentario'];
$avaliacao= $_POST['avaliacao'];


//Inserir dados na tabela clientes no atributo nome o conteúdo da variável $nome
$sql = "INSERT INTO clientes (nome,email,assunto,avaliacao,comentario) VALUES ('$nome', '$email','$assunto','$comentario','$avaliacao') "; 


if ($conn->query($sql) === TRUE) {
   echo "
		<META HTTP-EQUIV=REFRESH CONTENT = '0;URL=clientes.php'>
				<script type=\"text/javascript\">
					alert(\"Foi inserido registo com sucesso\");
				</script>
			";
;
} 
else 
{
    echo "Erro: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>
</body>
</html>