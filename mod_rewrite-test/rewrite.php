<?php

/* 
mod_rewrite Test Page - Copyright 2006 Webune.com
Translation and customization by Paulino Michelazzo - paulino@michelazzo.com.br
*/
?>

<html>
	<body style="font-family: arial">
		<h2 align=center>
			<?php
			if($_GET['link']==1){
				echo '<span style="color:red">você não está usando o mod_rewrite - verifique agora o link 2</span>';
			}
			elseif($_GET['link']==2){
				echo'<span style="color:green">parabéns! Seu servidor está com o mod_rewrite configurado corretamente</span>';
			}
			else{
				echo '<span style="color:blue">Teste de mod_rewrite em servidores Apache</span>';
			}
			?>
		</h2>
		<hr>
		<h2>Testes</h2>
		<ul>
			<li>Link 1 - Clique <a href="rewrite.php?link=1">aqui</a> para verificar as URL's <strong>sem</strong> mod_rewrite</li>
			<li>Link 2 - Clique <a href="link2.html">aqui</a> para verificar as URL's <strong>com</strong> mod_rewrite</li>
		</ul>

		<h2>Como Funciona</h2>
			Os links acima se redirecionam para esta mesma página mas usando ou não mod_rewrite. O primeiro link verifica se o servidor está 
			respondendo corretamente as requisições e o segundo link, se o módulo mod_rewrite está habilitado e funcionando.
		<p>
			Clicando no primeiro link você irá receber a mensagem: <em>você não está usando o mod_rewrite - verifique agora o link 2</em>
		</p>
		<p>
			Clicando no segundo link você irá receber a mensagem: <em>parabéns! seu servidor está com o mod_rewrite configurado corretamente</em>
		</p>
		<h2>Possíveis problemas</h2>
		<p><strong>ERRO 404 (404 error)</strong>
			<br/>
			Se você ao clicar no link 2 receber uma mensagem de erro de número 404 ou algo como: <pre>The requested URL /link2.html was not found on this server.</pre> 
			seu servidor Apache não está com o módulo mod_rewrite instalado ou habilitado para uso.<br/>
			Para usar URL's limpas é necessário que este módulo esteja corretamente configurado e funcionando.
		</p>
		<p><strong>ERRO 500 (500 error)</strong>
			<br/>
			Se você ao clicar no link 2 receber uma mensagem de erro de número 500, é sinal que você fez cometeu algum erro na criação do 
			arquivo .htaccess ou ainda que seu servidor não permite o uso de arquivos .htaccess.
			<br/><br/>
			Verifique se as linhas do arquivo .htaccess estão iguais a estas:
<pre>
	RewriteEngine On
	RewriteRule ^link([^/]*).html$ rewrite.php?link=$1 [L]
</pre>
			Se não estiverem, copie-as e cole dentro do arquivo .htaccess
		</p>
		<p>
			<br/>
			Este arquivo foi customizado por <a href="http://www.michelazzo.com.br">Paulino Michelazzo (paulino@michelazzo.com.br)</a> e desenvolvido inicialmente por <a href="http://www.webune.com">Webune Hosting</a>
		</p>
	</body>
</html>