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
<link rel="stylesheet" type="text/css" href="css/jquery-ui.css">
<link href="_css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/font-awesome.css" rel="stylesheet"> 
<!-- //for bootstrap working -->
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
					<li class="suspenso menu__item menu__item--current">
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
			<h3>A<span>parelhos </span></h3>
				 <div class="servicos-finanfast">
						<div class="agil-interno-finanfast">

						   <ul class="nome-pagina-curta">
								<li><a href="index.php">Ínicio</a><i>|</i></li>
								<li>Aparelhos</li>
							</ul>
						 </div>
				</div>
	</div>
</div>
	<div class="banner-botao-agil">
	<div class="container">
		<div class="fig-md-4 produtos-da-esquerda">
			<div class="filtro-por-preco">
				<h3>Filtro por <span>Marca</span></h3>
					<ul class="menu-suspenso6">
						<li>                
							<div id="faixa-de-controle-deslizante"></div>							
							<input type="text" id="amount" style="border: 0; color: #ffffff; font-weight: normal;" />
						</li>			
					</ul>
			</div>
			<div class="css-vista-filtro">
				<h4>Categorias</h4>
				<ul class="categorias-listadas">
					<li><input type="checkbox" checked="checked" id="item-0" /><label for="item-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Aparelhos</label>
						<ul>
							<li><input type="checkbox" id="item-0-0" /><label for="item-0-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i>Marcas</label>
								<ul>
									<li><a href="aparelhos.php">Samsung</a></li>
									<li><a href="aparelhos.php">LG</a></li>
									<li><a href="aparelhos.php">Philco</a></li>
									<li><a href="aparelhos.php">Elgin</a></li>
									<li><a href="aparelhos.php">Consul</a></li>
									<li><a href="aparelhos.php">Eletrolux</a></li>
                                                                        <li><a href="aparelhos.php">Springer</a></li>
									<li><a href="aparelhos.php">Fujitsu</a></li>
									<li><a href="aparelhos.php">Carrier</a></li>
									<li><a href="aparelhos.php">Gree</a></li>
									<li><a href="aparelhos.php">Midea</a></li>
									<li><a href="aparelhos.php">Daikin</a></li>
                                                                        <li><a href="aparelhos.php">Hitachi</a></li>
									<li><a href="aparelhos.php">Fontaine</a></li>
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-1" /><label for="item-0-1"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Capacidade</label>
								<ul>
									<li><a href="aparelhos.php">5.000 BTUs</a></li>
									<li><a href="aparelhos.php">De 5.001 até 7.500 BTUs</a></li>
									<li><a href="aparelhos.php">De 7.501 até 9.000 BTUs</a></li>
									<li><a href="aparelhos.php">De 9.001 até 10.000 BTUs</a></li>
									<li><a href="aparelhos.php">De 10.001 até 12.000 BTUs</a></li>
									<li><a href="aparelhos.php">Acima de 18.000 BTUs</a></li>
								</ul>
							</li>
							<li><input type="checkbox"  id="item-0-2" /><label for="item-0-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Preços </label>
								<ul>
									<li><a href="aparelhos.php">De R$500,00 até R$1.000,00</a></li>
									<li><a href="aparelhos.php">De R$1.001,00 até R$2.000,00</a></li>
									<li><a href="aparelhos.php">De R$2.001,00 até R$3.000,00</a></li>
									<li><a href="aparelhos.php">De R$3.001,00 até R$4.000,00</a></li>
									<li><a href="aparelhos.php">De R$4.001,00 até R$5.000,00</a></li>
									<li><a href="aparelhos.php">Acima de R$5.000,00</a></li>
								</ul>
							</li>
						</ul>
					</li>
					<li><input type="checkbox" checked="checked" id="item-2" /><label for="item-2"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Melhores Ofertas</label>
						<ul>
							<li><input type="checkbox"  id="item-2-0" /><label for="item-2-0"><i class="fa fa-long-arrow-right" aria-hidden="true"></i> Descontos</label>
								<ul>
									<li><a href="aparelhos.php">10%</a></li>
									<li><a href="aparelhos.php">20%</a></li>
									<li><a href="aparelhos.php">30%</a></li>
									<li><a href="aparelhos.php">50%</a></li>
								</ul>
							</li>
						</ul>
					</li>
				</ul>
			</div>
			<div class="enquete-comunidade">
				<h4>Enquete de comunidade</h4>
				<div class="swit formato-finanfast">	
					<form>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio" checked=""><i></i>Mais conveniente para envio e entrega</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Preço mais baixo</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Acompanhe seu item</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Escolha mais grande</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Mais cores para escolher</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Pagamento Seguro</label> </div></div>
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Reembolso de dinheiro garantido</label> </div></div>	
					<div class="check_box"> <div class="radio"> <label><input type="radio" name="radio"><i></i>Outros</label> </div></div>		
					<input type="submit" value="ENVIAR">
					</form>
				</div>
			</div>
			<div class="clearfix"></div>
		</div>
		<div class="fig-md-8 produtos-direito-web">
			<h5>Comparação <span>do Produto(0)</span></h5>
			<div class="grade-ordenada">
				<div class="classificacao-web">
					<h6>Ordenar por</h6>
					<select id="country1" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">Padrão</option>
						<option value="null">Nome(A - Z)</option> 
						<option value="null">Nome(Z - A)</option>
						<option value="null">Preço(Máx - Mín)</option>
						<option value="null">Preço(Mín - Máx)</option>						
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="classificacao-web">
					<h6>Mostrando</h6>
					<select id="country2" onchange="change_country(this.value)" class="frm-field required sect">
						<option value="null">7</option>
						<option value="null">14</option> 
						<option value="null">28</option>					
						<option value="null">35</option>								
					</select>
					<div class="clearfix"></div>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="img-produtos-topo">
				
				<div  id="top" class="finanfast_container_web">
					<ul class="rslides" id="slider3">
						<li>
							<img class="img-responsiva" src="_img/banner2.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsiva" src="_img/banner5.jpg" alt=" "/>
						</li>
						<li>
							<img class="img-responsiva" src="_img/banner4.jpg" alt=" "/>
						</li>

					</ul>
				</div>
				<div class="clearfix"></div>
			</div>
			<div class="produtos-exclusivos-botao">
				<div class="fig-sm-4 produto-ar-esquerdo">
					<img class="img-responsiva" src="_img/bb2.jpg" alt=" " />
				</div>
				<div class="fig-sm-8 produto-ar-direito">
					<h4>Produtos <span>Exclusivos</span></h4>
					<p>O Condicionador de Ar Portátil Ventisol utiliza gás ecológico R410a que não agride a camada de ozônio. Além de ser fácil de usar, não necessita de instalador e nem quebrar paredes para fazer reformas. É super fácil de instalar e pode ser levado para qualquer ambiente. </p>
				</div>
				<div class="clearfix"></div>
			</div>
				<div class="fig-md-4 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m8.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m8.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Carrier 48.000 Btus</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$8.200,00</span>
											<del>R$300.99</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Party Men's Blazer" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			<div class="fig-md-4 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m7.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m7.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Split LG 18000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$2.386,00</span>
											<del>R$114,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Analog Watch" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Add ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
			<div class="fig-md-4 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/s1.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/s1.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Tubo Cobre Flexível 1/4 Panqueca 15M</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$99,99</span>
											<del>R$50,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart">
																	<input type="hidden" name="add" value="1">
																	<input type="hidden" name="business" value=" ">
																	<input type="hidden" name="item_name" value="Running Shoes">
																	<input type="hidden" name="amount" value="30.99">
																	<input type="hidden" name="discount_amount" value="1.00">
																	<input type="hidden" name="currency_code" value="USD">
																	<input type="hidden" name="return" value=" ">
																	<input type="hidden" name="cancel_return" value=" ">
																	<input type="submit" name="submit" value="Add ao carrinho" class="button">
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
				
				<div class="clearfix"></div>
		</div>
		<div class="clearfix"></div>
		
		<div class="unico-pro-finanfast">
			<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m1.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m1.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado LG 9000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$1.449,00</span>
											<del>R$100,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Ar Condicionado LG 9000 BTUs" />
																	<input type="hidden" name="amount" value="1449.00" />
																	<input type="hidden" name="discount_amount" value="100.00" />
																	<input type="hidden" name="currency_code" value="BRL" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao Carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m2.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m2.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Electrolux 9000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$1.139,05</span>
											<del>R$160,95</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Sweatshirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao Carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
                            <div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m3.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m3.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Samsung 12000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$1.812,57</span>
											<del>R$187,13</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Dark Blue Track Pants" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao Carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m4.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m4.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Midea 12000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$1.189,47</span>
											<del>R$110,53</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Black T-Shirt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao Carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m5.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m5.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Daikin 12000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$2.329,00</span>
											<del>R$71,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Men's Black Jeans" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
								<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m7.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m7.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado LG 18000 BTUs</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$2.386,00</span>
											<del>R$114,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Analog Watch" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
								<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m6.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m6.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Elgin 48.000 Btus</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$6.700,50</span>
											<del>R$299.50</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Reversible Belt" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
								<div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/m8.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/m8.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Ar Condicionado Carrier 48.000 Btus</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$8.200,00</span>
											<del>R$300.99</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Party Men's Blazer" />
																	<input type="hidden" name="amount" value="30.99" />
																	<input type="hidden" name="discount_amount" value="1.00" />
																	<input type="hidden" name="currency_code" value="USD" />
																	<input type="hidden" name="return" value=" " />
																	<input type="hidden" name="cancel_return" value=" " />
																	<input type="submit" name="submit" value="Adicionar ao carrinho" class="button" />
																</fieldset>
															</form>
														</div>
																			
									</div>
								</div>
							</div>
							<div class="clearfix"></div>
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
<script src="_js/responsiveslides.min.js"></script>
				<script>
						$(function () {
						$("#slider3").responsiveSlides({
							auto: true,
							pager: true,
							nav: false,
							speed: 500,
							namespace: "callbacks",
							before: function () {
						$('.events').append("<li>before event fired.</li>");
						},
						after: function () {
							$('.events').append("<li>after event fired.</li>");
							}
							});
						});
				</script>
<script src="_js/modernizr.custom.js"></script>
	<script src="_js/minicart.min.js"></script>
<script>
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>
							<script type='text/javascript'>//<![CDATA[ 
							$(window).load(function(){
							 $( "#slider-range" ).slider({
										range: true,
										min: 0,
										max: 9000,
										values: [ 1000, 7000 ],
										slide: function( event, ui ) {  $( "#amount" ).val( "$" + ui.values[ 0 ] + " - $" + ui.values[ 1 ] );
										}
							 });
							$( "#amount" ).val( "$" + $( "#slider-range" ).slider( "values", 0 ) + " - $" + $( "#slider-range" ).slider( "values", 1 ) );

							});//]]>  

							</script>
						<script type="text/javascript" src="_js/jquery-ui.js"></script>
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
