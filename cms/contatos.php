<?php 
	require_once("inc/header.php");	
?>
  <!-- Marketing messaging and featurettes
  ================================================== -->
  <!-- Wrap the rest of the page in another container to center all the content. -->

 <style>
body {
	font-family: sans-serif;
}
main {
	display: table;
	margin: auto;
}
h1 {
	text-align: center;
}
p {
	overflow: auto;
	padding: 0.5rem;
	margin: 0;
}
p:nth-child(odd) {
		background: #dddddd;
}

label[for] {
	display: block;
	float: left;
	width: 130px;
	text-align: right;
	padding: 0.5rem;
}
input[type=text]{
	width: 300px;
}
#formCPF {
	width: 150px;
}
#formSenha {
	width: 100px;
	color: #ffffff;
}
.campoEmail {
	width: 200px;
}
textarea {
	font-family: inherit;
	width: 150px;
	height: 6rem;
}
button {
	color: #ffffff;
	border: 0;
	border-radius: 6rem;
	padding: 3px 6px 3px 6px;
	cursor: pointer;
}
button[type="submit"] {
	background: #0000ff;
}
button[type="reset"] {
	float: right;
	background: #ff0000;
}
	</style>
</head>
<body>

<main>

<h1>Formulário</h1>
<p>Referências: <a href="https://www.w3schools.com/tags/tag_input.asp">https://www.w3schools.com/tags/tag_input.asp</a></p>

<form action="form02.php" target="_blank">
<form method="post" name="formHTML" id="formHTML" action="processa.php">
<p>
	<label for="formNome">Nome:</label>
	<input type="text" name="formNome" id="formNome" placeholder="Escreva seu nome completo" required>
	
</p>

<p>
	<label for="formEmail">E-mail:</label>
	<input class="campoEmail" type="email" name="formEmail" id="formEmail" placeholder="Escreva um e-mail válido" required>
</p>

<p>
	<label for="formSenha">Senha:</label>
	<input type="text" name="formSenha" id="formSenha">
</p>

<p>
	<label for="formAssunto">Assunto:</label>
	<input type="text" name="formAssunto" id="formAssunto" placeholder="Informe o assunto" readon="">
</p>

<p>
	<label for="formResposta">Deseja resposta?</label>
	<label><input type="radio" name="formResposta" id="formResposta" value="Sim" checked> Sim</label>
	&nbsp;&nbsp;&nbsp;
	<label><input type="radio" name="formResposta" id="formResposta" value="Não"> Não</label>
</p>

<p>
	<label for="formMensagem">Mensagem:</label>
	<textarea name="formMensagem" id="formMensagem" placeholder="Escreva sua mensagem"></textarea>
</p>

<p>
	<label></label>
	<button type="submit" name="formEnvia" id="formEnviar" value="Enviar"> Enviar</button>
	<small>&larr; Clique somente uma vez.</small>
	&nbsp;&nbsp;&nbsp;
	<button type="reset" name="formReset" id="formReset" value="Limpar campos"> Limpar campos</button>
</p>
	
</form>

  
 <?php require_once("inc/footer.php"); ?>