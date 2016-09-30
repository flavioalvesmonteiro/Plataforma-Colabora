<!doctype>
<html lang="pt-br">
    <head>
        <link href="novoEstilo.css" rel="stylesheet">
    </head>
    <script src="jquery-3.1.0.js" type="application/javascript"></script>
    <!--
	<script>
        function j(elemento){
            var t = $(elemento).attr("value");
            
            switch(t){
                case "usuario":
                    $('.tela').attr('src','Cadastro.html');
                    break;
                case "instituicao":
                    $('.tela').attr('src','now.php');
                    break;
                case "prova":
                    $('.tela').attr('src','tabela.php');
                    break;
                case "questao":
                    $('.tela').attr('src','http://www.globo.com/');
                    break;
                case "materia":
                    $('.tela').attr('src','cadastroMateria.php');
                    break;
                case "multimidia":
                    $('.tela').attr('src','http://www.globo.com/');
                    break;
                case "buscar":
                    $('.tela').attr('src','http://www.globo.com/');
                    break;
                default:
            }
        }
    </script>-->

    <body>
        <header>
        </header>
        <div class="menu">
            <ul>
                <li value="usuario" onclick="j(this)">Usu&aacute;rio
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
					</ul>
				</li>
                <li value="instituicao" onclick="j(this)">Institui&ccedil;&atilde;o
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
					</ul>
				</li>
                <li value="prova" onclick="j(this)">Prova
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
						<li><a href="inicio.php">Gerar Prova</a></li>
					</ul>
				</li>
                <li value="questao" onclick="j(this)">Quest&atilde;o
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
					</ul>
				</li>
                <li value="materia" onclick="j(this)">Mat&eacute;ria
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
					</ul>
				</li>
                <li value="multimidia" onclick="j(this)">Multim&iacute;dias
					<ul>
						<li><a href="Cadastro.php">Incluir</a></li>
						<li><a href="inicio.php">Buscar</li>
						<li><a href="usuarios.php">Eliminar</a></li>
						<li><a href="inicio.php">Alterar</a></li>
					</ul>
				</li>
                <li value="buscar" onclick="j(this)">Buscar</li>
            </ul>
        </div>
    </body>
</html>