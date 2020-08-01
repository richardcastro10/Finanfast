<!DOCTYPE html>
<html>
<head>
<title>FinanFast</title>
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
			<h3>Finalizar <span>Compra</span></h3>
				 <div class="servicos-finanfast">
						<div class="agil-interno-finanfast">

						   <ul class="nome-pagina-curta">
								<li><a href="index.php">Ínicio</a><i>|</i></li>
								<li>Finalizar Compra</li>
							</ul>
						 </div>
				</div>
	</div>
</div>
<div class="fig-md-6 form-cadastro">
    <h4 class="branco-finanfast">Preencha o<span> Endereço</span></h4>
    <form class="formcadastrar" action="#" method="post">
        
        <div id="fPessoaFisica" class="fCadastro fCadastroPF">
            <p class="grp fCep">
                <label for="Cep1">CEP:<i>*</i></label>
                <input class="cep1" data-val="true" data-val-length="Não pode exceder 5 caracteres" data-val-length-max="5" data-val-range="O CEP deve estar com os 5 dígitos preenchidos." data-val-range-max="99999" data-val-range-min="1" data-val-required="O campo CEP1 é obrigatório" name="Cep1" placeholder="CEP" size="5" type="text" value="" maxlength="5">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="Cep1" data-valmsg-replace="true"></span>

                <input class="Cep2" data-val="true" data-val-length="Não pode exceder 3 caracteres" data-val-length-max="3" data-val-range="O CEP deve estar com os 3 dígitos preenchidos." data-val-range-max="999" data-val-range-min="1" data-val-required="O campo CEP2 é obrigatório" name="Cep2" placeholder="CEP" size="3" type="text" value="" maxlength="3">
                <span class="validacao-de-campo validacao-mes" data-valmsg-for="Cep2" data-valmsg-replace="true"></span>
                <span class="btnbuscar">
                            <input type="submit" name="" value="Ok">
                </span>
            </p>
            <br/>
            <p class="grp fEndereco">
                <label for="NomeCompleto">Endereço:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o logradouro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo logradouro é obrigatório." name="LogradouroCompleto" placeholder="Ex: R. Frei Gaspar, 1000" type="text" size="50" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="LogradouroCompleto" data-valmsg-replace="true"></span>         
                <label for="NumeroEnd">Número:<i>*</i></label>
                <input class="day" data-val="true" data-val-length="Nº da casa não pode exceder 7 caracteres" data-val-length-max="7" data-val-range="O número deverá estar correto." data-val-range-max="9999999" data-val-range-min="1" data-val-required="O campo Nº é obrigatório" name="numeroend" placeholder="Nº" size="8" type="text" value="" maxlength="7">
                <span class="validacao-de-campo validacao-dia" data-valmsg-for="DataNascimentoDia" data-valmsg-replace="true"></span>
                <label for="Complemento">Complemento:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o complemento completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo complemento é obrigatório." name="Complemento" placeholder="Ex: Casa01" type="text" size="19" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="ComplementoCompleto" data-valmsg-replace="true"></span>
            </p>
            <br/>
            <p class="grp fBairro">
                <label for="Bairro">Bairro:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha o bairro completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo bairro é obrigatório." name="Bairro" placeholder="Ex: Marapé" type="text" size="14" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="BairroCompleto" data-valmsg-replace="true"></span>
                <label for="Bairro">Cidade:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 20 caracteres" data-val-length-max="20" data-val-regex="Preencha a cidade completa" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo cidade é obrigatório." name="Cidade" placeholder="Ex: Santos" type="text" size="10" value="" maxlength="20">
                <span class="validacao-de-campo" data-valmsg-for="CidadeCompleta" data-valmsg-replace="true"></span>&nbsp;
                <select data-id="Estado" name="Estado">
                    <option>AC</option>
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
            <br/>
            <p class="grp fEmail">
                <label for="Bairro">Email:<i>*</i></label>
                <input data-val="true" data-val-length="Não pode exceder 100 caracteres" data-val-length-max="100" data-val-regex="Preencha o Email completo" data-val-regex-pattern="[-'.,\w\u00C0-\u00ff]{2,}[\s]{1,}[-'.,\w\u00C0-\u00ff]{2,}.*" data-val-required="O campo email é obrigatório." name="Email" placeholder="Preencha com seu e-mail" type="text" size="54" value="" maxlength="100">
                <span class="validacao-de-campo" data-valmsg-for="EmailCompleto" data-valmsg-replace="true"></span>
            </p>
        </div>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
        <br/>
    </form>    
</div>
<div class="fig-md-6 form-finalizar">
    <h4 class="branco-finanfast">Forma <span>de Pagamento</span></h4>
    <form class="formcadastrar" action="#" method="post">
        <div>
            <div>	                        
                <div class="formadePagamento">
                    <div>
                        <label><input name="cliente" type="radio" value="Cartão de Credito"> <span>Cartão de Crédito </span></label>&nbsp;&nbsp;&nbsp;   
                        <label><input name="cliente" type="radio" value="Cartao de Debito"> <span>Cartão de Débito</span></label>&nbsp;&nbsp;&nbsp;  
                        <label><input name="cliente" type="radio" value="Boleto Bancario"> <span>Boleto Bancário</span></label>
                        <br/>
                        <br/>
                    </div>
                    <div id="cartao">
                            <div class="texto-pagmento">
                                <div>
                                    <h4 class="branco-finanfast">Cartão <span>de Crédito</span></h4>
                                    <div>
                                    <label>Forma de pagamento:*</label>
                                    <select><option value="59">À vista</option> <option value="60">2x</option> <option value="61">3x</option> <option value="6">4x</option> <option value="7">5x</option> <option value="8">6x</option> <option value="42">7x</option> <option value="43">8x</option> <option value="44">9x</option> <option value="45">10x</option></select>
                                    </div>
                                    <div>
                                    <label>Nome:*</label>
                                    <input name="cartao_nome" size="53" tabindex="2" type="text" autocomplete="off"></td>
                                    </div>
                                    <div>
                                    <label>Número do cartão:*</label>
                                    <input maxlength="16" name="cartao_numero" size="42" tabindex="3" type="text" autocomplete="off"></td>
                                    </div>
                                    <div>
                                        <label>Validade (m/a):*</label>
                                        <select name="cartao_mes" size="1" tabindex="4">&nbsp;
                                        <option value="00">00</option>
                                        &nbsp;
                                                  <option value="01">01</option>
                                        &nbsp;
                                                  <option value="02">02</option>
                                        &nbsp;
                                                  <option value="03">03</option>
                                        &nbsp;
                                                  <option value="04">04</option>
                                        &nbsp;
                                                  <option value="05">05</option>
                                        &nbsp;
                                                  <option value="06">06</option>
                                        &nbsp;
                                                  <option value="07">07</option>
                                        &nbsp;
                                                  <option value="08">08</option>
                                        &nbsp;
                                                  <option value="09">09</option>
                                        &nbsp;
                                                  <option value="10">10</option>
                                        &nbsp;
                                                  <option value="11">11</option>
                                        &nbsp;
                                                  <option value="12">12</option>
                                        &nbsp;</select> <select name="cartao_ano" size="1" tabindex="5">&nbsp;&nbsp;
                                        &nbsp;
                                                  <option value="18">18</option>
                                        &nbsp;
                                                  <option value="19">19</option>
                                                  <option value="20">20</option>
                                                  <option value="21">21</option>
                                                  <option value="22">22</option>
                                                  <option value="23">23</option>
                                                  <option value="24">24</option>
                                                  <option value="25">25</option>
                                                  <option value="26">26</option>
                                                  <option value="27">27</option>
                                                  <option value="28">28</option>
                                                  <option value="29">29</option>
                                                  <option value="30">30</option>
                                                  <option value="31">31</option>
                                        &nbsp;</select>  &nbsp;
                                        <label>Código de segurança:*</label>
                                        <input maxlength="4" name="cartao_codigoseguranca" size="3" tabindex="6" type="text" autocomplete="off">
                                    </div>
                                    <div>
                                        <p class="grp fCpf">
                                        <label for="Cpf">CPF:<i>*</i></label>
                                        <input data-val="true" data-val-length="CPF não pode exceder 11 caracteres." data-val-length-max="11" data-val-required="CPF é um campo obrigatório." name="Cpf" size="10" type="text" placeholder="___.___.___-__" value="" maxlength="11" autocomplete="off">
                                        <span class="validacao-de-campo" data-valmsg-for="Cpf" data-valmsg-replace="true"></span>
                                        </p>
                                        <label>Data de nascimento:*</label>
                                        <select name="cartao_dia_nascimento" size="1" tabindex="8">
                                        <option value=""></option>
                                        &nbsp;
                                                  <option value="01">01</option>
                                        &nbsp;
                                                  <option value="02">02</option>
                                        &nbsp;
                                                  <option value="03">03</option>
                                        &nbsp;
                                                  <option value="04">04</option>
                                        &nbsp;
                                                  <option value="05">05</option>
                                        &nbsp;
                                                  <option value="06">06</option>
                                        &nbsp;
                                                  <option value="07">07</option>
                                        &nbsp;
                                                  <option value="08">08</option>
                                        &nbsp;
                                                  <option value="09">09</option>
                                        &nbsp;
                                                  <option value="10">10</option>
                                        &nbsp;
                                                  <option value="11">11</option>
                                        &nbsp;
                                                  <option value="12">12</option>
                                        &nbsp;
                                                  <option value="13">13</option>
                                        &nbsp;
                                                  <option value="14">14</option>
                                        &nbsp;
                                                  <option value="15">15</option>
                                        &nbsp;
                                                  <option value="16">16</option>
                                        &nbsp;
                                                  <option value="17">17</option>
                                        &nbsp;
                                                  <option value="18">18</option>
                                        &nbsp;
                                                  <option value="19">19</option>
                                        &nbsp;
                                                  <option value="20">20</option>
                                        &nbsp;
                                                  <option value="21">21</option>
                                        &nbsp;
                                                  <option value="22">22</option>
                                        &nbsp;
                                                  <option value="23">23</option>
                                        &nbsp;
                                                  <option value="24">24</option>
                                        &nbsp;
                                                  <option value="25">25</option>
                                        &nbsp;
                                                  <option value="26">26</option>
                                        &nbsp;
                                                  <option value="27">27</option>
                                        &nbsp;
                                                  <option value="28">28</option>
                                        &nbsp;
                                                  <option value="29">29</option>
                                        &nbsp;
                                                  <option value="30">30</option>
                                        &nbsp;
                                                  <option value="31">31</option>
                                        &nbsp;</select> <select name="cartao_mes_nascimento" size="1" tabindex="9">
                                                  <option value=""></option>
                                        &nbsp;
                                                  <option value="01">01</option>
                                        &nbsp;
                                                  <option value="02">02</option>
                                        &nbsp;
                                                  <option value="03">03</option>
                                        &nbsp;
                                                  <option value="04">04</option>
                                        &nbsp;
                                                  <option value="05">05</option>
                                        &nbsp;
                                                  <option value="06">06</option>
                                        &nbsp;
                                                  <option value="07">07</option>
                                        &nbsp;
                                                  <option value="08">08</option>
                                        &nbsp;
                                                  <option value="09">09</option>
                                        &nbsp;
                                                  <option value="10">10</option>
                                        &nbsp;
                                                  <option value="11">11</option>
                                        &nbsp;
                                                  <option value="12">12</option>
                                        &nbsp;</select> <select name="cartao_ano_nascimento" size="1" tabindex="10">&nbsp;
                                                  <option value=""></option>
                                        &nbsp;
                                        <option value="2008">2008</option>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <option value="2007">2007</option>
                                        &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;
                                        <option value="2006">2006</option>
                                        &nbsp;
                                        <option value="2005">2005</option>
                                        &nbsp;
                                        <option value="2004">2004</option>
                                        &nbsp;
                                        <option value="2003">2003</option>
                                        &nbsp;
                                        <option value="2002">2002</option>
                                        &nbsp;
                                        <option value="2001">2001</option>
                                        &nbsp;
                                        <option value="2000">2000</option>
                                        &nbsp;
                                        <option value="1999">1999</option>
                                        &nbsp;
                                        <option value="1998">1998</option>
                                        &nbsp;
                                        <option value="1997">1997</option>
                                        &nbsp;
                                        <option value="1996">1996</option>
                                        &nbsp;
                                        <option value="1995">1995</option>
                                        &nbsp;
                                        <option value="1994">1994</option>
                                        &nbsp;
                                        <option value="1993">1993</option>
                                        &nbsp;
                                        <option value="1992">1992</option>
                                        &nbsp;
                                        <option value="1991">1991</option>
                                        &nbsp;
                                        <option value="1990">1990</option>
                                        &nbsp;
                                        <option value="1989">1989</option>
                                        &nbsp;
                                        <option value="1988">1988</option>
                                        &nbsp;
                                        <option value="1987">1987</option>
                                        &nbsp;
                                        <option value="1986">1986</option>
                                        &nbsp;
                                        <option value="1985">1985</option>
                                        &nbsp;
                                        <option value="1984">1984</option>
                                        &nbsp;
                                        <option value="1983">1983</option>
                                        &nbsp;
                                        <option value="1982">1982</option>
                                        &nbsp;
                                        <option value="1981">1981</option>
                                        &nbsp;
                                        <option value="1980">1980</option>
                                        &nbsp;
                                        <option value="1979">1979</option>
                                        &nbsp;
                                        <option value="1978">1978</option>
                                        &nbsp;
                                        <option value="1977">1977</option>
                                        &nbsp;
                                        <option value="1976">1976</option>
                                        &nbsp;
                                        <option value="1975">1975</option>
                                        &nbsp;
                                        <option value="1974">1974</option>
                                        &nbsp;
                                        <option value="1973">1973</option>
                                        &nbsp;
                                        <option value="1972">1972</option>
                                        &nbsp;
                                        <option value="1971">1971</option>
                                        &nbsp;
                                        <option value="1970">1970</option>
                                        &nbsp;
                                        <option value="1969">1969</option>
                                        &nbsp;
                                        <option value="1968">1968</option>
                                        &nbsp;
                                        <option value="1967">1967</option>
                                        &nbsp;
                                        <option value="1966">1966</option>
                                        &nbsp;
                                        <option value="1965">1965</option>
                                        &nbsp;
                                        <option value="1964">1964</option>
                                        &nbsp;
                                        <option value="1963">1963</option>
                                        &nbsp;
                                        <option value="1962">1962</option>
                                        &nbsp;
                                        <option value="1961">1961</option>
                                        &nbsp;
                                        <option value="1960">1960</option>
                                        &nbsp;
                                        <option value="1959">1959</option>
                                        &nbsp;
                                        <option value="1958">1958</option>
                                        &nbsp;
                                        <option value="1957">1957</option>
                                        &nbsp;
                                        <option value="1956">1956</option>
                                        &nbsp;
                                        <option value="1955">1955</option>
                                        &nbsp;
                                        <option value="1954">1954</option>
                                        &nbsp;
                                        <option value="1953">1953</option>
                                        &nbsp;
                                        <option value="1952">1952</option>
                                        &nbsp;
                                        <option value="1951">1951</option>
                                        &nbsp;
                                        <option value="1950">1950</option>
                                        &nbsp;
                                        <option value="1949">1949</option>
                                        &nbsp;
                                        <option value="1948">1948</option>
                                        &nbsp;
                                        <option value="1947">1947</option>
                                        &nbsp;
                                        <option value="1946">1946</option>
                                        &nbsp;
                                        <option value="1945">1945</option>
                                        &nbsp;
                                        <option value="1944">1944</option>
                                        &nbsp;
                                        <option value="1943">1943</option>
                                        &nbsp;
                                        <option value="1942">1942</option>
                                        &nbsp;
                                        <option value="1941">1941</option>
                                        &nbsp;
                                        <option value="1940">1940</option>
                                        &nbsp;
                                        <option value="1939">1939</option>
                                        &nbsp;
                                        <option value="1938">1938</option>
                                        &nbsp;
                                        <option value="1937">1937</option>
                                        &nbsp;
                                        <option value="1936">1936</option>
                                        &nbsp;
                                        <option value="1935">1935</option>
                                        &nbsp;
                                        <option value="1934">1934</option>
                                        &nbsp;
                                        <option value="1933">1933</option>
                                        &nbsp;
                                        <option value="1932">1932</option>
                                        &nbsp;
                                        <option value="1931">1931</option>
                                        &nbsp;
                                        <option value="1930">1930</option>
                                        &nbsp;
                                        <option value="1929">1929</option>
                                        &nbsp;
                                        <option value="1928">1928</option>
                                        &nbsp;
                                        <option value="1927">1927</option>
                                        &nbsp;
                                        <option value="1926">1926</option>
                                        &nbsp;
                                        <option value="1925">1925</option>
                                        &nbsp;
                                        <option value="1924">1924</option>
                                        &nbsp;
                                        <option value="1923">1923</option>
                                        &nbsp;
                                        <option value="1922">1922</option>
                                        &nbsp;
                                        <option value="1921">1921</option>
                                        &nbsp;
                                        <option value="1920">1920</option>
                                        &nbsp;</select>
                                    </div>
                                </div>
                                <div class="bot-pagamento">
                                </div>
                        </div>     
                    </div>
                </div>
            </div>
        </div>
        <div class="btnfinalizar">
            <br/>
            <input type="submit" value="Finalizar">
        </div>
</form>
</div>
    &nbsp;
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
