<!DOCTYPE html>
<html>
<head>
<title>FinanFast</title>
<!--/tags -->
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FinanFast, Bootstrap Web, Android Compatible, Smartphone Compatible" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); } </script>
<link href="_css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/font-awesome.css" rel="stylesheet"> 
<link href="//fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i,800" rel="stylesheet">
<link href='//fonts.googleapis.com/css?family=Lato:400,100,100italic,300,300italic,400italic,700,900,900italic,700italic' rel='stylesheet' type='text/css'>
<?php
    session_start();

      $login = $_SESSION['login'];
      $senha = $_SESSION['senha'];
      $nome = $_SESSION['nome'];
      $tipo_usuario = $_SESSION['tipo_usuario'];

    if ( !isset($_SESSION['login']) and !isset($_SESSION['senha']) ) {
      session_destroy();

      unset ($_SESSION['login']);
      unset ($_SESSION['senha']);
      header('location:index.php');
    }
    else{
    }
  ?>
<script type="text/javascript">
    function Usuario(){
        let conteudo = "<?php echo $nome; ?>";
        document.getElementById("nomeLogin").innerHTML = conteudo;
    }
</script>
</head>
<body>
<div class="cabecalho" id="home">
	<div class="container">
		<ul>
		    <li> <a href="logar.php"><i class="fa fa-unlock-alt" aria-hidden="true"></i> Logar </a></li>
			<li> <a href="#" data-toggle="modal" data-target="#myModal2"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Cadastre-se </a></li>
			<li><i class="fa fa-phone" aria-hidden="true"></i> Ligue : +55(13)98814-0454</li>
			<li><i class="fa fa-envelope-o" aria-hidden="true"></i> <a href="mailto:contato.finanfast@outlook.com">contato.finanfast@outlook.com</a></li>
		</ul>
	</div>
</div>
<div class="cabecalho-2">
	<div class="cabecalho_interior_pesquisa">
		<div class="fig-md-4 cabecalho-pesquisa">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Pesquise Aqui..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
			<div class="fig-md-4 logo_finanfast">
				<h1><a href="index.php"><span>F</span>inanFast <i class="fa fa-shopping-bag top_logo_finanfast_bag" aria-hidden="true"></i></a></h1>
			</div>
		<div class="fig-md-4 agilidades-sociais top_conteudo">
						<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais">
						                                   <li class="compartilhar">Compartilhe : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>



		</div>
		<div class="clearfix"></div>
	</div>
</div>
<div class="ban-topo">
	<div class="container">
		<div class="topo_menu_esquerdo">
			<nav class="navbar navbar-padrao">
			  <div class="container-fluido">
				<div class="navbar-cabecalho">
				  <button type="button" class="navbar-alternancia collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
					<span class="sr-only">Alternar de Navegação</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				  </button>
				</div>
				<div class="colapso-finanfast navbar-colapso menu--shylock" id="bs-example-navbar-collapse-1">
				  <ul class="nav navbar-menu menu__lista">
					<li class="active menu__item"><a class="menu__link" href="index.php">Ínicio <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="sobre.php">Sobre</a></li>
					<li class="suspenso menu__item">
						<a href="#" class="alternancia-suspensa menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Aparelhos <span class="caret"></span></a>
							<ul class="menu-suspenso multi-colunas colunas-3">
								<div class="drop_menu_info">
									<div class="fig-sm-6 multi-imagem1 multi-texto ">
										<a href="aparelhos.php"><img src="_img/marcasdear.jpg" alt=" "/></a>
									</div>
									<div class="col-sm-3 multi-imagem">
										<ul class="multi-coluna-suspensa">
											<li><a href="aparelhos.php">Samsung</a></li>
											<li><a href="aparelhos.php">LG</a></li>
											<li><a href="aparelhos.php">Philco</a></li>
											<li><a href="aparelhos.php">Elgin</a></li>
											<li><a href="aparelhos.php">Consul</a></li>
											<li><a href="aparelhos.php">Eletrolux</a></li>
											<li><a href="aparelhos.php">Springer</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-imagem">
										<ul class="multi-coluna-suspensa">
											<li><a href="aparelhos.php">Fujitsu</a></li>
											<li><a href="aparelhos.php">Carrier</a></li>
											<li><a href="aparelhos.php">Gree</a></li>
											<li><a href="aparelhos.php">Midea</a></li>
											<li><a href="aparelhos.php">Daikin</a></li>
											<li><a href="aparelhos.php">Hitachi</a></li>
											<li><a href="aparelhos.php">Fontaine</a></li>
										</ul>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="suspenso menu__item">
						<a href="#" class="alternancia-suspensa menu__link" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Peças <span class="caret"></span></a>
							<ul class="menu-suspenso multi-colunas colunas-3">
								<div class="drop_menu_info">
									<div class="col-sm-3 multi-imagem">
										<ul class="multi-coluna-suspensa">
											<li><a href="pecas.php">Controle Remoto</a></li>
											<li><a href="pecas.php">Compressor</a></li>
											<li><a href="pecas.php">Sensor de Temperatura</a></li>
											<li><a href="pecas.php">Válvula de Líquido</a></li>
											<li><a href="pecas.php">Placa Condensadora Principal</a></li>
											<li><a href="pecas.php">Tampa Superior</a></li>
											<li><a href="pecas.php">Tampa Frontal</a></li>
										</ul>
									</div>
									<div class="col-sm-3 multi-imagem">
										<ul class="multi-coluna-suspensa">
											<li><a href="pecas.php">Acabamento Lateral</a></li>
											<li><a href="pecas.php">Suporte para Válvulas</a></li>
											<li><a href="pecas.php">Hélice Condensadora</a></li>
											<li><a href="pecas.php">Tubulação de Cobre Flexível</a></li>
											<li><a href="pecas.php">Suporte Condensador</a></li>
											<li><a href="pecas.php">Mangueira para Dreno</a></li>
											<li><a href="pecas.php">Tubo Esponjoso Blindado</a></li>
										</ul>
									</div>
									<div class="fig-sm-6 multi-imagem multi-texto ">
										<a href="pecas.php"><img src="_img/pecasdear.jpg" alt=" "/></a>
									</div>
									<div class="clearfix"></div>
								</div>
							</ul>
					</li>
					<li class="menu__item suspenso">
					   <a class="menu__link" href="#" class="alternancia-suspensa" data-toggle="dropdown">Serviços <b class="caret"></b></a>
								<ul class="menu-suspenso menu-suspenso-curto">
									<li><a href="manutencao.php">Manutenção</a></li>
								</ul>
					</li>
					<li class=" menu__item"><a class="menu__link" href="contato.php">Contato</a></li>
				  </ul>
				</div>
			  </div>
			</nav>	
		</div>
		<div class="topo_nav_direito">
			<div class="carrinho box_1"> 
						<form action="#" method="post" class="last"> 
						<input type="hidden" name="cmd" value="_cart">
						<input type="hidden" name="display" value="1">
						<button class="w3view-cart" type="submit" name="submit" value=""><i class="fa fa-shopping-basket" aria-hidden="true"></i></button>
					</form>  
  
						</div>
		</div>
		<div class="clearfix"></div>
	</div>
</div>
		
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modelo-login">
				<div class="modelo-conteudo">
					<div class="modelo-cabecalho">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modelo-corpo modelo-corpo-sub_agil">
						<div class="fig-md-8 modelo_corpo_esquerdo modelo_corpo_esquerdo1">
						<h3 class="infoagil_conectar">Cadastre-se <span>Agora</span></h3>
						 <form action="#" method="post">
							<div class="estilo-entrada estilo-agil-entrada-topo">
								<input type="text" name="Name" required="">
								<label>Nome</label>
								<span></span>
							</div>
							<div class="estilo-entrada">
								<input type="email" name="Email" required=""> 
								<label>Email</label>
								<span></span>
							</div> 
							<div class="estilo-entrada">
								<input type="password" name="password" required=""> 
								<label>Senha</label>
								<span></span>
							</div> 
							<div class="estilo-entrada">
								<input type="password" name="Confirm Password" required=""> 
								<label>Confirmar Senha</label>
								<span></span>
							</div> 
							<input type="submit" value="Cadastrar">
						</form>
						  <ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais topo_agilidade_3">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
														<div class="clearfix"></div>
														<p><a href="#">Ao clicar em registrar, aceito seus termos</a></p>

						</div>
						<div class="fig-md-4 modelo_corpo_direito modelo_corpo_direito1">
							<img src="_img/cadastrar.png" alt=" "/>
						</div>
						<div class="clearfix"></div>
					</div>
				</div>
			</div>
		</div>
<div class="pagina-cabecalho_agil_info">
		<div class="container">
			<h3>Ca<span>dastro</span></h3>
				 <div class="servicos-finanfast">
						<div class="agil-interno-finanfast">

						   <ul class="nome-pagina-curta">
								<li><a href="index.php">Ínicio</a><i>|</i></li>
								<li>Cadastro de Cliente</li>
							</ul>
						 </div>
				</div>
	</div>
</div>

<div class="fig-md-6 form-cadastro">
    <h4 class="branco-finanfast">Formulário <span>de Cadastro</span></h4>
    <form class="formcadastrar" action="#" method="post">
        <div>
                <label><input name="cliente" type="radio" value="Pessoa Fisica"> <span>Pessoa Física </span></label>&nbsp;&nbsp;&nbsp;   
                <label><input name="cliente" type="radio" value="Pessoa Juridica"> <span> Pessoa jurídica</span></label>
                <br/>
                <br/>
        </div>
        <div id="fPessoaFisica" class="fCadastro fCadastroPF">
            <h4 class="branco-finanfast">Dados Pessoais</h4>
            <p class="grp fCpf">
                <label for="Cpf">CPF:<i>*</i></label>
                <input data-val="true" data-val-length="CPF não pode exceder 11 caracteres." data-val-length-max="11" data-val-required="CPF é um campo obrigatório." name="Cpf" size="10" type="text" placeholder="___.___.___-__" value="" maxlength="11" autocomplete="off">
                <span class="validacao-de-campo" data-valmsg-for="Cpf" data-valmsg-replace="true"></span>
                <label for="NomeCompleto">Nome Completo:<i>*</i></label>
                <input data-val="true" data-val-length="Nome não pode exceder 50 caracteres" data-val-length-max="50" data-val-regex="Preencha o nome completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo nome é obrigatório." name="NomeCompleto" placeholder="Insira seu nome" type="text" value="" maxlength="50">
                <span class="validacao-de-campo" data-valmsg-for="NomeCompleto" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fRadio fSexo">
                <label for="Sexo">Sexo:<i>*</i></label>
                <label class="sexoM">
                    <input data-val="true" data-val-length="Sexo não pode exceder 1 caractere" data-val-length-max="1" data-val-required="É necessário definir-se o sexo." name="Sexo" type="radio" value="M">
                    <span class="sexM">Masculino</span>
                </label>
                <label class="sexoF">
                    <input data-val="true" data-val-required="É necessário definir-se o sexo." name="Sexo" type="radio" value="F">
                    <span class="sexF">Feminino</span>

                </label>
                <span class="validacao-de-campo sexo-validacao" data-valmsg-for="Sexo" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fData fDataNasc">
                <label for="DataNascimentoDia">Data de Nascimento:<i>*</i></label>
                <input class="day" data-val="true" data-val-length="Dia do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O dia deve estar entre 1 e 31." data-val-range-max="31" data-val-range-min="1" data-val-required="O campo Dia é obrigatório" name="DataNascimentoDia" placeholder="Dia" size="2" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>

                <input class="month" data-val="true" data-val-length="Mês do Nascimento não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O mês deve estar entre 1 e 12." data-val-range-max="12" data-val-range-min="1" data-val-required="O campo Mês é obrigatório" name="DataNascimentoMes" placeholder="Mês" size="2" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao-mes" data-valmsg-for="DataNascimentoMes" data-valmsg-replace="true"></span>

                <input class="year" data-idademinima="18" data-idademinima-msg="A Data de Nascimento digitada não é permitida." data-val="true" data-val-dataemtrescampos="Data de nascimento inválida" data-val-dataemtrescampos-camposdemesedia="DataNascimentoDia,DataNascimentoMes" data-val-length="Ano do Nascimento não pode exceder 4 caracteres" data-val-length-max="4" data-val-required="O campo Ano é obrigatório" name="DataNascimentoAno" placeholder="Ano" size="4" type="text" value="" maxlength="4">
                <span class="validacao-de-campo validacao-ano" data-valmsg-for="DataNascimentoAno" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fMulti fTel fTel">
                <label for="Telefone1DDDPF">Telefone:<i>*</i></label>
                <select id="TipoFone1" name="TipoFone1"><option>Residencial</option>
                <option>Celular</option>
                <option>Comercial</option>
                </select>
                <input class="ddd" data-val="true" data-val-length="DDD do Telefone 1 não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="DDD do telefone inválido" data-val-range-max="99" data-val-range-min="11" data-val-required="DDD do telefone é um campo obrigatório." name="Telefone1DDDPF" placeholder="DDD" size="3" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao_ddd" data-valmsg-for="Telefone1DDDPF" data-valmsg-replace="true"></span>

                <input class="tel" data-val="true" data-val-length="Telefone 1 não deve exceder 8 números." data-val-length-max="9" data-val-range="Telefone inválido" data-val-range-max="999999999" data-val-range-min="10000000" data-val-required="O campo telefone é obrigatório" name="Telefone1PF" placeholder="Número" size="9" type="text" value="" maxlength="9">
                <span class="validacao-de-campo validacao_num" data-valmsg-for="Telefone1PF" data-valmsg-replace="true"></span>
            </p>
            <p id="telefone2" class="grp fMulti fTel fTel2">
                <label for="Telefone2DDDPF">Telefone 2:<i>*</i></label>
                <select id="TipoFone2" name="TipoFone2"><option>Celular</option><option>Comercial</option></select>
                <input class="ddd" data-val="true" data-val-length="DDD do Telefone 2 não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="DDD do telefone inválido" data-val-range-max="99" data-val-range-min="11" name="Telefone2DDDPF" placeholder="DDD" size="3" type="text" value="" maxlength="2">
                <input class="tel" data-val="true" data-val-length="Telefone 2 não pode exceder 9 caracteres" data-val-length-max="9" data-val-range="Telefone inválido" data-val-range-max="999999999" data-val-range-min="10000000" name="Telefone2PF" placeholder="Número" size="9" type="text" value="" maxlength="9">               
            </p>
            <p class="grp fCep">
                <label for="Cep1">CEP:<i>*</i></label>
                <input class="cep1" data-val="true" data-val-length="Não pode exceder 5 caracteres" data-val-length-max="5" data-val-range="O CEP deve estar com os 5 dígitos preenchidos." data-val-range-max="99999" data-val-range-min="1" data-val-required="O campo CEP1 é obrigatório" name="Cep1" placeholder="CEP" size="5" type="text" value="" maxlength="5">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="Cep1" data-valmsg-replace="true"></span>

                <input class="Cep2" data-val="true" data-val-length="Não pode exceder 3 caracteres" data-val-length-max="3" data-val-range="O CEP deve estar com os 3 dígitos preenchidos." data-val-range-max="999" data-val-range-min="1" data-val-required="O campo CEP2 é obrigatório" name="Cep2" placeholder="CEP" size="3" type="text" value="" maxlength="3">
                <span class="validacao-de-campo validacao-mes" data-valmsg-for="Cep2" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fEndereco">
                <label for="NomeCompleto">Logradouro:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o logradouro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo logradouro é obrigatório." name="LogradouroCompleto" placeholder="Ex: R. Frei Gaspar, 1000" type="text" size="40" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="LogradouroCompleto" data-valmsg-replace="true"></span>         
                <label for="NumeroEnd">Número:<i>*</i></label>
                <input class="day" data-val="true" data-val-length="Nº da casa não pode exceder 7 caracteres" data-val-length-max="7" data-val-range="O número deverá estar correto." data-val-range-max="9999999" data-val-range-min="1" data-val-required="O campo Nº é obrigatório" name="numeroend" placeholder="Nº" size="5" type="text" value="" maxlength="7">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>
                <label for="Complemento">Complemento:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o complemento completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo complemento é obrigatório." name="Complemento" placeholder="Ex: Casa01" type="text" size="10" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="ComplementoCompleto" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fBairro">
                <label for="Bairro">Bairro:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o bairro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo bairro é obrigatório." name="Bairro" placeholder="Ex: Marapé" type="text" size="15" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="BairroCompleto" data-valmsg-replace="true"></span>
                <label for="Bairro">Cidade:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha a cidade completa" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo cidade é obrigatório." name="Cidade" placeholder="Ex: Santos" type="text" size="10" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="CidadeCompleta" data-valmsg-replace="true"></span>&nbsp;
                <select data-id="Estado" name="Estado"><option>AC</option>
                    <option>AL</option>
                    <option>AM</option>
                    <option>AP</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MG</option>
                    <option>MS</option>
                    <option>MT</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>PR</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>RS</option>
                    <option>SC</option>
                    <option>SE</option>
                    <option>SP</option>
                    <option>TO</option>
                </select>
                <span class="validacao-de-campo" data-valmsg-for="Estado" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fEmail">
                <label for="Bairro">Email:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o Email completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo email é obrigatório." name="Email" placeholder="Preencha com seu e-mail" type="text" size="55" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="EmailCompleto" data-valmsg-replace="true"></span>
            </p>
            <div class="btnsalvar">
                <br/>
                <input type="submit" value="Salvar">
            </div>
        </div>
        <div id="fPessoaJuridica" class="fCadastro fCadastroPJ" style="display:none">
            <legend>Dados da Empresa</legend>
            <p class="grp fCnpj">
                <label for="Cnpj">CNPJ:<i>*</i></label>
                <input data-val="true" data-val-length="Cnpj não pode exceder 50 caracteres" data-val-length-max="50" data-val-required="CNPJ é um campo obrigatorio." name="Cnpj" type="text" value="" maxlength="50" style="">
                <span class="validacao-de-campo" data-valmsg-for="Cnpj" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fRazaoSocial">
                <label for="RazaoSocial">Razão Social:<i>*</i></label>
                <input data-val="true" data-val-length="Razão Social não pode exceder 50 caracteres" data-val-length-max="50" data-val-required="O campo Razão Social é obrigatório" name="RazaoSocial" type="text" value="" maxlength="50" style="">
                <span class="validacao-de-campo" data-valmsg-for="RazaoSocial" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fNomeFantasia">
                <label for="NomeFantasia">Nome Fantasia:<i>*</i></label>
                <input data-val="true" data-val-length="Nome Fantasia não pode exceder 100 caracteres" data-val-length-max="100" data-val-required="O campo Nome Fantasia é obrigatório" name="NomeFantasia" type="text" value="" maxlength="100" style="">
                <span class="validacao-de-campo" data-valmsg-for="NomeFantasia" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fData fDataAbert">
                <label for="DataAberturaDia">Data de Abertura:<i>*</i></label>
                <input class="day" data-val="true" data-val-length="Dia do Abertura não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O dia deve estar entre 1 e 31." data-val-range-max="31" data-val-range-min="1" data-val-required="O campo Dia é obrigatório" name="DataAberturaDia" placeholder="Dia" size="2" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>

                <input class="month" data-val="true" data-val-length="Mês do Abertura não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="O mês deve estar entre 1 e 12." data-val-range-max="12" data-val-range-min="1" data-val-required="O campo Mês é obrigatório" name="DataAberturaMes" placeholder="Mês" size="2" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao-mes" data-valmsg-for="DataAberturaMes" data-valmsg-replace="true"></span>

                <input class="year" data-idademinima="18" data-idademinima-msg="A Data de Abertura digitada não é permitida." data-val="true" data-val-dataemtrescampos="Data de abertura inválida" data-val-dataemtrescampos-camposdemesedia="DataAberturaDia,DataAberturaMes" data-val-length="Ano de Abertura não pode exceder 4 caracteres" data-val-length-max="4" data-val-required="O campo Ano é obrigatório" name="DataAberturaAno" placeholder="Ano" size="4" type="text" value="" maxlength="4">
                <span class="validacao-de-campo validacao-ano" data-valmsg-for="DataAberturaAno" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fMulti fTel fTel">
                <label for="Telefone1DDDPF">Telefone:<i>*</i></label>
                <select id="TipoFone1" name="TipoFone1"><option>Comercial</option>
                <option>Celular</option>
                <option>Residencial</option>
                </select>
                <input class="ddd" data-val="true" data-val-length="DDD do Telefone 1 não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="DDD do telefone inválido" data-val-range-max="99" data-val-range-min="11" data-val-required="DDD do telefone é um campo obrigatório." name="Telefone1DDDPF" placeholder="DDD" size="3" type="text" value="" maxlength="2">
                <span class="validacao-de-campo validacao_ddd" data-valmsg-for="Telefone1DDDPF" data-valmsg-replace="true"></span>

                <input class="tel" data-val="true" data-val-length="Telefone 1 não deve exceder 8 números." data-val-length-max="9" data-val-range="Telefone inválido" data-val-range-max="999999999" data-val-range-min="10000000" data-val-required="O campo telefone é obrigatório" name="Telefone1PF" placeholder="Número" size="9" type="text" value="" maxlength="9">
                <span class="validacao-de-campo validacao_num" data-valmsg-for="Telefone1PF" data-valmsg-replace="true"></span>
            </p>
            <p id="telefone2" class="grp fMulti fTel fTel2">
                <label for="Telefone2DDDPF">Telefone 2:<i>*</i></label>
                <select id="TipoFone2" name="TipoFone2"><option>Celular</option><option>Comercial</option></select>
                <input class="ddd" data-val="true" data-val-length="DDD do Telefone 2 não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="DDD do telefone inválido" data-val-range-max="99" data-val-range-min="11" name="Telefone2DDDPF" placeholder="DDD" size="3" type="text" value="" maxlength="2">
                <input class="tel" data-val="true" data-val-length="Telefone 2 não pode exceder 9 caracteres" data-val-length-max="9" data-val-range="Telefone inválido" data-val-range-max="999999999" data-val-range-min="10000000" name="Telefone2PF" placeholder="Número" size="9" type="text" value="" maxlength="9">

                <a title="Adicionar outro telefone" href="" class="lnk" id="lnkTelefone3">+ Adicionar outro</a>
                <a title="Remover telefone 2" href="" class="lnk" id="lnkRemoveTelefone2PF">- Remover telefone</a>
            </p>
            <p id="telefone3" style="display:none" class="grp fMulti fTel fTel3">
                <label for="Telefone3DDDPF">Telefone 3:</label>
                <select id="TipoFone3" name="TipoFone3"><option>Comercial</option></select>
                <input class="ddd" data-val="true" data-val-length="DDD do Telefone 3 não pode exceder 2 caracteres" data-val-length-max="2" data-val-range="DDD do telefone inválido" data-val-range-max="99" data-val-range-min="11" name="Telefone3DDDPF" placeholder="DDD" size="3" type="text" value="" maxlength="2" style="">
                <input class="tel" data-val="true" data-val-length="Telefone 3 não pode exceder 20 caracteres" data-val-length-max="9" data-val-range="Telefone inválido" data-val-range-max="999999999" data-val-range-min="10000000" name="Telefone3PF" placeholder="Número" size="9" type="text" value="" maxlength="9" style="">

                <a title="Remover telefone 3" href="" class="lnk" id="lnkRemoveTelefone3PF">- Remover telefone</a>
            </p>
            <p class="grp fCep">
                <label for="Cep1">CEP:<i>*</i></label>
                <input class="cep1" data-val="true" data-val-length="Não pode exceder 5 caracteres" data-val-length-max="5" data-val-range="O CEP deve estar com os 5 dígitos preenchidos." data-val-range-max="99999" data-val-range-min="1" data-val-required="O campo CEP1 é obrigatório" name="Cep1" placeholder="CEP" size="5" type="text" value="" maxlength="5">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="Cep1" data-valmsg-replace="true"></span>

                <input class="Cep2" data-val="true" data-val-length="Não pode exceder 3 caracteres" data-val-length-max="3" data-val-range="O CEP deve estar com os 3 dígitos preenchidos." data-val-range-max="999" data-val-range-min="1" data-val-required="O campo CEP2 é obrigatório" name="Cep2" placeholder="CEP" size="3" type="text" value="" maxlength="3">
                <span class="validacao-de-campo validacao-mes" data-valmsg-for="Cep2" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fEndereco">
                <label for="NomeCompleto">Logradouro:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o logradouro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo logradouro é obrigatório." name="LogradouroCompleto" placeholder="Ex: R. Frei Gaspar, 1000" type="text" size="40" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="LogradouroCompleto" data-valmsg-replace="true"></span>         
                <label for="NumeroEnd">Número:<i>*</i></label>
                <input class="day" data-val="true" data-val-length="Nº da casa não pode exceder 7 caracteres" data-val-length-max="7" data-val-range="O número deverá estar correto." data-val-range-max="9999999" data-val-range-min="1" data-val-required="O campo Nº é obrigatório" name="numeroend" placeholder="Nº" size="5" type="text" value="" maxlength="7">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>
                <label for="Complemento">Complemento:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o complemento completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo complemento é obrigatório." name="Complemento" placeholder="Ex: Casa" type="text" size="10" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="ComplementoCompleto" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fBairro">
                <label for="Bairro">Bairro:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o bairro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo bairro é obrigatório." name="Bairro" placeholder="Ex: Marapé" type="text" size="15" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="BairroCompleto" data-valmsg-replace="true"></span>
                <label for="Bairro">Cidade:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha a cidade completa" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo cidade é obrigatório." name="Cidade" placeholder="Ex: Santos" type="text" size="10" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="CidadeCompleta" data-valmsg-replace="true"></span>&nbsp;
                <select data-id="Estado" name="Estado"><option>AC</option>
                    <option>AL</option>
                    <option>AM</option>
                    <option>AP</option>
                    <option>BA</option>
                    <option>CE</option>
                    <option>DF</option>
                    <option>ES</option>
                    <option>GO</option>
                    <option>MA</option>
                    <option>MG</option>
                    <option>MS</option>
                    <option>MT</option>
                    <option>PA</option>
                    <option>PB</option>
                    <option>PE</option>
                    <option>PI</option>
                    <option>PR</option>
                    <option>RJ</option>
                    <option>RN</option>
                    <option>RO</option>
                    <option>RR</option>
                    <option>RS</option>
                    <option>SC</option>
                    <option>SE</option>
                    <option>SP</option>
                    <option>TO</option>
                </select>
                <span class="validacao-de-campo" data-valmsg-for="Estado" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fEmail">
                <label for="Email">Email:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o Email completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo email é obrigatório." name="Email" placeholder="Preencha com seu e-mail" type="text" size="55" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="EmailCompleto" data-valmsg-replace="true"></span>
            </p>
            <p class="grp fSite">
                <label for="Site">Site:</label>
                <input data-val="true" data-val-length="Site não pode exceder 50 caracteres" data-val-length-max="50" name="Site" placeholder="http://" type="text" value="" maxlength="50" style="">
                <span class="validacao-de-campo" data-valmsg-for="Site" data-valmsg-replace="true"></span>
            </p>
            <div class="btnsalvar">
                <br/>
                <input type="submit" value="Salvar">
            </div>
        </div>
    </form>    
</div>
<div class="banner_botao_agil_info">
	<div class="container">
	   <div class="grades-de-contato-ageis">
				<div class="contato-agil-esquerdo">
					<div class="fig-md-6 info-grade-finan">
						<h4>Para Mais <span>Informações</span></h4>
							<div class="info-agil-layout1">
								<i class="fa fa-volume-control-phone" aria-hidden="true"></i>
								<div class="contato-direito1">
									<p>Número de Telefone </p><span>+55 (13)98814-0454</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="info-agil-layout1">
								<i class="fa fa-envelope-o" aria-hidden="true"></i>
								<div class="contato-direito1">
									<p>E-mail </p><a href="mailto:contato.finanfast@outlook.com">contato.finanfast@outlook.com</a>
								</div>
								<div class="clearfix"> </div>
							</div>
							<div class="info-agil-layout1">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
								<div class="contato-direito1">
									<p>Localização</p><span>Av. Capitão Mor Aguiar, 798-Centro, São Vicente/SP, BRASIL.</span>
								</div>
								<div class="clearfix"> </div>
							</div>
							<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two contact">
							                              <li class="compartilhar">COMPARTILHE : </li>
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>
       </div>
	</div>
<div class="cupons">
		<div class="grade-cupons texto-centro">
			<div class="layouts_email_grade">
				<div class="fig-md-3 layouts_email_grade_esquerdo">
					<div class="layouts_email_grade_esquerdo1 hvr-radial-fora">
						<i class="fa fa-truck" aria-hidden="true"></i>
					</div>
					<div class="layouts_email_grade_esquerdo2">
						<h3>FRETE GRÁTIS</h3>
						<p>Frete grátis para região Sul e Sudeste.</p>
					</div>
				</div>
				<div class="fig-md-3 layouts_email_grade_esquerdo">
					<div class="layouts_email_grade_esquerdo1 hvr-radial-fora">
						<i class="fa fa-headphones" aria-hidden="true"></i>
					</div>
					<div class="layouts_email_grade_esquerdo2">
						<h3>SUPORTE 24/7</h3>
						<p>Suporte preparado para te atender a qualquer hora do dia ou noite.</p>
					</div>
				</div>
				<div class="fig-md-3 layouts_email_grade_esquerdo">
					<div class="layouts_email_grade_esquerdo1 hvr-radial-fora">
						<i class="fa fa-shopping-bag" aria-hidden="true"></i>
					</div>
					<div class="layouts_email_grade_esquerdo2">
						<h3>GARANTIA DE DEVOLUÇÃO DE DINHEIRO</h3>
						<p>Garantimos a devolução do seu dinheiro em até 7 dias úteis.</p>
					</div>
				</div>
					<div class="fig-md-3 layouts_email_grade_esquerdo">
					<div class="layouts_email_grade_esquerdo1 hvr-radial-fora">
						<i class="fa fa-gift" aria-hidden="true"></i>
					</div>
					<div class="layouts_email_grade_esquerdo2">
						<h3>VALE PRESENTES</h3>
						<p>Também temos um sistema de vale presentes gratuito, podendo utilizar na próxima compra.</p>
					</div>
				</div>
				<div class="clearfix"> </div>
			</div>

		</div>
</div>
<!--grids-->
<!-- footer -->
<div class="rodape">
	<div class="info_rodape_agil_interno">
		<div class="fig-md-3 rodape-esquerdo">
			<h2><a href="index.php"><span>F</span>inanFast </a></h2>
			<p>Aqui falaremos algo sobre o FinanFast.</p>
			<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="#" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="#" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
		</div>
		<div class="fig-md-9 rodape-direito">
			<div class="conexao-grades">
				<div class="fig-md-4 conexao-gd">
					<h4>Mapa do <span>Site</span> </h4>
					<ul>
						<li><a href="index.php">Ínicio</a></li>
						<li><a href="aparelhos.php">Aparelhos</a></li>
						<li><a href="pecas.php">Peças</a></li>
						<li><a href="sobre.php">Sobre</a></li>
						<li><a href="manutencao.php">Manutenção</a></li>
						<li><a href="contato.php">Contato</a></li>
					</ul>
				</div>
				
				<div class="fig-md-5 conexao-gd-2">
					<h4>Informações <span>da Loja</span></h4>
					<div class="finanfast-endereco">
						<div class="finanfast-endereco-grade">
							<div class="finanfast-endereco-esquerdo">
								<i class="fa fa-phone" aria-hidden="true"></i>
							</div>
							<div class="finanfast-endereco-direito">
								<h6>Número de Telefone</h6>
								<p>+55(13)98814-0454</p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="finanfast-endereco-grade">
							<div class="finanfast-endereco-esquerdo">
								<i class="fa fa-envelope" aria-hidden="true"></i>
							</div>
							<div class="finanfast-endereco-direito">
								<h6>Endereço de Email</h6>
								<p><a href="mailto:contato.finanfast@outlook.com">contato.finanfast@outlook.com</a></p>
							</div>
							<div class="clearfix"> </div>
						</div>
						<div class="finanfast-endereco-grade">
							<div class="finanfast-endereco-esquerdo">
								<i class="fa fa-map-marker" aria-hidden="true"></i>
							</div>
							<div class="finanfast-endereco-direito">
								<h6>Localização</h6>
								<p>Av. Capitão Mor Aguiar, 798 - Centro, São Vicente/SP. 
								
								</p>
							</div>
							<div class="clearfix"> </div>
						</div>
					</div>
				</div>
				<div class="fig-md-3 conexao-gd fotos-grupo">
					<h4>Nosso <span>Grupo</span></h4>
					<ul>
						<li><a href="sobre.php"><img src="_img/ygor.jpg" alt=" " class="img-responsiva" /></a></li>
						<li><a href="sobre.php"><img src="_img/phil.jpg" alt=" " class="img-responsiva" /></a></li>
						<li><a href="sobre.php"><img src="_img/will.jpg" alt=" " class="img-responsiva" /></a></li>
						<li><a href="sobre.php"><img src="_img/bruno.jpg" alt=" " class="img-responsiva" /></a></li>
						<li><a href="sobre.php"><img src="_img/doug.jpg" alt=" " class="img-responsiva" /></a></li>
                                                <li><a href="sobre.php"><img src="_img/rich.jpg" alt=" " class="img-responsiva" /></a></li>
					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
		</div>
		<div class="clearfix"></div>
			<div class="agil_noticias_rodape">
					<div class="fig-sm-6 boletim-noticias">
				<h3>INCREVA-SE PARA NOVAS NOTÍCIAS !</h3>
			</div>
			<div class="fig-sm-6 jornal-noticias">
				<form action="#" method="post">
					<input type="email" placeholder="Entre com seu email..." name="email" required="">
					<input type="submit" value="Enviar">
				</form>
			</div>

		<div class="clearfix"></div>
	</div>
		<p class="copy-right">&copy 2017 FinanFast. All rights reserved | Design by <a href="https://www.facebook.com/ygor.correia.775" target="_blank">Ygor Correia</a></p>
	</div>
</div>
			<div class="modal fade" id="myModal4" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
				<div class="modelo-login" role="document">
					<div class="modelo-conteudo modal-info">
						<div class="modelo-cabecalho">
							<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>						
						</div>
						<div class="modelo-corpo modal-spa">
							<div class="login-grades">
								<div class="login">
									<div class="login-botao">
										<h3>Inscreva-se Gratuitamente</h3>
										<form>
											<div class="sign-up">
												<h4>Email :</h4>
												<input type="text" value="Digite Aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-up">
												<h4>Senha :</h4>
												<input type="password" value="Senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<h4>Confirmar Senha :</h4>
												<input type="password" value="Senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												
											</div>
											<div class="sign-up">
												<input type="submit" value="REGISTRAR AGORA" >
											</div>
											
										</form>
									</div>
									<div class="login-direito">
										<h3>Faça o login com a sua conta</h3>
										<form>
											<div class="sign-in">
												<h4>Email :</h4>
												<input type="text" value="Digite Aqui" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Type here';}" required="">	
											</div>
											<div class="sign-in">
												<h4>Senha :</h4>
												<input type="password" value="Senha" onfocus="this.value = '';" onblur="if (this.value == '') {this.value = 'Password';}" required="">
												<a href="#">Esqueceu a senha?</a>
											</div>
											<div class="botao-unico">
												<input type="checkbox"  id="brand" value="">
												<label for="brand"><span></span>Lembre de mim.</label>
											</div>
											<div class="sign-in">
												<input type="submit" value="ENTRAR" >
											</div>
										</form>
									</div>
									<div class="clearfix"></div>
								</div>
								<p>Ao fazer login, você concorda com o nosso <a href="#">Termos e Condições</a> e <a href="#">Política de Privacidade</a></p>
							</div>
						</div>
					</div>
				</div>
			</div>
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="_js/jquery-3.2.1.min.js"></script>
	<script src="_js/minicart.min.js"></script>
<script>
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
	<script src="_js/jquery.waypoints.min.js"></script>
	<script src="_js/jquery.countup.js"></script>
	<script>
		$('.counter').countUp();
	</script>
<script type="text/javascript" src="_js/move-top.js"></script>
<script type="text/javascript" src="_js/jquery.easing.min.js"></script>
<script type="text/javascript">
	jQuery(document).ready(function($) {
		$(".scroll").click(function(event){		
			event.preventDefault();
			$('html,body').animate({scrollTop:$(this.hash).offset().top},1000);
		});
	});
</script>
	<script type="text/javascript">
		$(document).ready(function() {
			/*
				var defaults = {
				containerID: 'toTop', // fading element id
				containerHoverID: 'toTopHover', // fading element hover id
				scrollSpeed: 1200,
				easingType: 'linear' 
				};
			*/
								
			$().UItoTop({ easingType: 'easeOutQuart' });
								
			});
	</script>
<script type="text/javascript" src="_js/bootstrap.js"></script>
</body>
</html>
