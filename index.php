<!DOCTYPE html>
<html>
<head>
<title>FinanFast</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<meta name="keywords" content="FinanFast, Bootstrap Web, Android Compatible, Smartphone Compatible" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false);
		function hideURLbar(){ window.scrollTo(0,1); }</script>
<link href="_css/bootstrap.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/style.css" rel="stylesheet" type="text/css" media="all" />
<link href="_css/font-awesome.css" rel="stylesheet"> 
<link href="_css/easy-responsive-tabs.css" rel='stylesheet' type='text/css'/>
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
<!-- Cabeçalho -->
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
<!-- //Cabecalho -->
<!-- Cabecalho-2 -->
<div class="cabecalho-2">
	<div class="cabecalho_interior_pesquisa">
		<div class="fig-md-4 cabecalho-pesquisa">
			<form action="#" method="post">
					<input type="search" name="search" placeholder="Pesquise Aqui..." required="">
					<input type="submit" value=" ">
				<div class="clearfix"></div>
			</form>
		</div>
		<!-- Cabecalho-3 -->
			<div class="fig-md-4 logo_finanfast">
				<h1><a href="index.php"><span>F</span>inanFast <i class="fa fa-shopping-bag top_logo_finanfast_bag" aria-hidden="true"></i></a></h1>
			</div>
                <!-- Cabecalho-3 -->
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
<!-- //Cabecalho-2 -->
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
					<li class="active menu__item menu__item--current"><a class="menu__link" href="index.php">Início <span class="sr-only">(current)</span></a></li>
					<li class=" menu__item"><a class="menu__link" href="sobre.php">Sobre</a></li>
					<li class="suspenso menu__item">
						<a href="#" class="alternancia-suspensa menu__link" data-toggle="dropdown" role="button" aria-hadown-togglespopup="true" aria-expanded="false">Aparelhos <span class="caret"></span></a>
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

<!-- Cadastro -->
		<div class="modal fade" id="myModal2" tabindex="-1" role="dialog">
			<div class="modelo-login">
				<div class="modelo-conteudo">
					<div class="modelo-cabecalho">
						<button type="button" class="close" data-dismiss="modal">&times;</button>
					</div>
						<div class="modelo-corpo modelo-corpo-sub_agil">
						<div class="fig-md-8 modelo_corpo_esquerdo modelo_corpo_esquerdo1">
						<h3 class="infoagil_conectar">Cadastre-se <span>Agora</span></h3>
						 <form action="cadastro-cliente.php" method="post">
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
<!-- //Cadastro -->

<!-- banner -->
	<div id="myCarousel" class="carousel slide" data-ride="carousel">
		<!-- Indicadores -->
		<ol class="carousel-indicators">
			<li data-target="#myCarousel" data-slide-to="0" class="active"></li>
			<li data-target="#myCarousel" data-slide-to="1" class=""></li>
			<li data-target="#myCarousel" data-slide-to="2" class=""></li>
			<li data-target="#myCarousel" data-slide-to="3" class=""></li>
			<li data-target="#myCarousel" data-slide-to="4" class=""></li> 
		</ol>
		<div class="carousel-inner" role="listbox">
			<div class="item active"> 
				<div class="container">
					<div class="carousel-rubrica">
						<h3>O verão <span>está CHEGANDO</span></h3>
						<p>Novos produtos a venda</p>
						<a class="hvr-esboco-fora botao2" href="aparelhos.php">Compre Agora </a>
					</div>
				</div>
			</div>
			<div class="item item2"> 
				<div class="container">
					<div class="carousel-rubrica">
						<h3>A maior <span>Venda</span></h3>
						<p>Especial para hoje</p>
						<a class="hvr-esboco-fora botao2" href="aparelhos.php">Compre Agora </a>
					</div>
				</div>
			</div>
			<div class="item item3"> 
				<div class="container">
					<div class="carousel-rubrica">
						<h3>Ligue <span>Já</span></h3>
						<p>Realizamos instalações e manutenções</p>
						<a class="hvr-esboco-fora botao2" href="contato.php">Entre Agora </a>
					</div>
				</div>
			</div>
			<div class="item item4"> 
				<div class="container">
					<div class="carousel-rubrica">
						<h3>Venha <span>Conferir </span></h3>
						<p>Temos diversas peças para concertar o seu aparelho</p>
						<a class="hvr-esboco-fora botao2" href="aparelhos.php">Compre Agora </a>
					</div>
				</div>
			</div>
			<div class="item item5"> 
				<div class="container">
					<div class="carousel-rubrica">
						<h3>Nacionais <span>e Internacionais</span></h3>
						<p>Trabalhamos com todas as marcas</p>
						<a class="hvr-esboco-fora botao2" href="aparelhos.php">Compre Agora </a>
					</div>
				</div>
			</div> 
		</div>
		<a class="esquerda carousel-controle" href="#myCarousel" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Anterior</span>
		</a>
		<a class="right carousel-controle" href="#myCarousel" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Próximo</span>
		</a>
		<!-- //Indicadores -->
    </div> 
<!-- //banner -->
    <div class="banner_botao_agil_info">
	    <div class="container">
            <div class="banner_botao_agil_info_interior">
    	           <div class="fig-md-6 banner_botao_grade_3_esquerdo1 grade">
						<figure class="efeito-roxy">
							<img src="_img/bottom1.jpg" alt=" " class="img-responsiva" />
							<figcaption>
								<h3><span>A</span>seguir</h3>
								<p>Novas chegadas</p>
							</figcaption>			
						</figure>
					</div>
					 <div class="fig-md-6 banner_botao_grade_3_esquerdo1 grade">
						<figure class="efeito-roxy">
							<img src="_img/bottom2.jpg" alt=" " class="img-responsiva" />
							<figcaption>
								<h3><span>A</span>seguir</h3>
								<p>Novas chegadas</p>
							</figcaption>			
						</figure>
					</div>
					<div class="clearfix"></div>
		    </div> 
		 </div> 
    </div>
<!-- cronograma-botão -->
	<div class="cronograma-botao">
		<div class="fig-md-6 infoagil_cronograma_botao_esquerdo">
			<img src="_img/mid.jpg" alt=" " class="img-responsiva" />
		</div>
		<div class="fig-md-6 agil_cronograma_botao_direito">
			<div class="cronograma_botao_direito_grade">
				<h3>Economizar até <span>50%</span> nesta semana</h3>
				<p>Economize até 50%, por tempo limitado. ... Comprando os produtos da família FinanFast você ganha até 50% de desconto na segunda compra.</p>
				<div class="fig-md-4 cronograma_botao_direito_grade1">
					<i class="fa fa-user-o" aria-hidden="true"></i>
					<h4>Clientes</h4>
					<h5 class="counter">9998500</h5>
				</div>
				<div class="fig-md-4 cronograma_botao_direito_grade1">
					<i class="fa fa-calendar-o" aria-hidden="true"></i>
					<h4>Eventos</h4>
					<h5 class="counter">498</h5>
				</div>
				<div class="fig-md-4 cronograma_botao_direito_grade1">
					<i class="fa fa-shield" aria-hidden="true"></i>
					<h4>Prêmios</h4>
					<h5 class="counter">994</h5>
				</div>
				<div class="clearfix"> </div>
			</div>
		</div>
		<div class="clearfix"> </div>
	</div>
<!-- //cronograma-botão -->
<!-- banner-botão-agil -->
	<div class="banner-botao-agil">
	<div class="container">
		<h3 class="finanfast_texto_info">Qual a <span>melhor marca pra você?</span></h3>
	
		<div class="fig-md-5 bb-grades bb-esquerdo-agil-layouts">
			<a href="pecas.php">
			   <div class="bb-esquerdo-agil-layouts-interno grade">
					<figure class="efeito-roxy">
							<img src="_img/bb1.jpg" alt=" " class="img-responsiva" />
							<figcaption>
								<h3><span>S</span>amsung </h3>
								<p>Descontos de 20%</p>
							</figcaption>			
						</figure>
			    </div>
			</a>
		</div>
		<div class="fig-md-7 bb-grades bb-centro-agil-layouts">
		      <a href="aparelhos.php">
		       <div class="bb-centro-agil-layouts grade">
			           <figure class="efeito-roxy">
							<img src="_img/bottom3.jpg" alt=" " class="img-responsiva" />
							<figcaption>
								<h3><span>L</span>g </h3>
								<p>Descontos de 20%</p>
							</figcaption>			
						</figure>
		        </div>
				</a>
				<a href="aparelhos.php">
		      <div class="bb-centro-agil-layouts adiante grade">
						<figure class="efeito-roxy">
							<img src="_img/bottom4.jpg" alt=" " class="img-responsiva">
							<figcaption>
								<h3><span>P</span>hilco </h3>
								<p>Descontos 25%</p>
							</figcaption>		
						</figure>
					</div>
					</a>
		<div class="clearfix"></div>
	</div>
	</div>
    </div>
<!--/banner-botão-agil-->
<!--/grades-->
      <div class="ultima_secao_unica_dupla">
            <div class="fig-md-6 multi-imagem multi-texto ">
					<a href="pecas.php"><img src="_img/bot_1.jpg" alt=" "><h4>Oferta de <span>50</span>%</h4></a>
					
			</div>
			 <div class="fig-md-6 multi-imagem multi-texto ">
					<a href="pecas.php"><img src="_img/bot_2.jpg" alt=" "><h4>Oferta de <span>50</span>%</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
<!--/grades-->
<!-- /novas chegadas --> 
	<div class="info_agil_novas_chegadas"> 
		<div class="container">
		    <h3 class="finanfast_texto_info">Novas <span>Chegadas</span></h3>		
				<div id="horizontalTab">
						<ul class="resp-tabs-list">
							<li> Produtos</li>
							
						</ul>
					<div class="aba-responsiva-container">
					<!--/primeira pagina-->
						<div class="tab1">
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
									<div class="item-info-produto">
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Electrolux 9000 BTUs" />
																	<input type="hidden" name="amount" value="1139.05" />
																	<input type="hidden" name="discount_amount" value="160.95" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Samsung 12000 BTUs" />
																	<input type="hidden" name="amount" value="1812.57" />
																	<input type="hidden" name="discount_amount" value="187.13" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Midea 12000 BTUs" />
																	<input type="hidden" name="amount" value="1189.47" />
																	<input type="hidden" name="discount_amount" value="110.53" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Daikin 12000 BTUs" />
																	<input type="hidden" name="amount" value="2329.00" />
																	<input type="hidden" name="discount_amount" value="71.00" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado LG 18000 BTUs" />
																	<input type="hidden" name="amount" value="2386.00" />
																	<input type="hidden" name="discount_amount" value="114.00" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Elgin 48.000 Btus" />
																	<input type="hidden" name="amount" value="6700.50" />
																	<input type="hidden" name="discount_amount" value="299.50" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
																	<input type="hidden" name="item_name" value="Ar Condicionado Carrier 48.000 Btus" />
																	<input type="hidden" name="amount" value="8200.00" />
																	<input type="hidden" name="discount_amount" value="300.99" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
						<!--//primeira pagina-->
						<!--/segunda pagina-->
						<div class="tab2">
							 <div class="fig-md-3 produtos-ar">
								<div class="ar-pro-item carrinhoSimples_itemPrateleira">
									<div class="ar-exemplo-item">
										<img src="_img/w1.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w1.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Placa Condensadora Samsung</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$285,80</span>
											<del>R$14,20</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Placa Condensadora Samsung" />
																	<input type="hidden" name="amount" value="285.80" />
																	<input type="hidden" name="discount_amount" value="14.20" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
										<img src="_img/w2.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w2.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Tampa Superior da Samsung</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$130,50</span>
											<del>R$69,50</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Tampa Superior da Samsung" />
																	<input type="hidden" name="amount" value="130.50" />
																	<input type="hidden" name="discount_amount" value="69.50" />
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
										<img src="_img/w3.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w3.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Controle Remoto Midea</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$28,10</span>
											<del>R$12,90</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Controle Remoto Midea" />
																	<input type="hidden" name="amount" value="28.10" />
																	<input type="hidden" name="discount_amount" value="12.90" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
										<img src="_img/w4.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w4.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Compressor Universal 7H15</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$900,00</span>
											<del>R$200,99</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Compressor Universal 7H15" />
																	<input type="hidden" name="amount" value="900.00" />
																	<input type="hidden" name="discount_amount" value="200.99" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
										<img src="_img/w5.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w5.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Sensor De Temperatura Midea</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$12,50</span>
											<del>R$7,50</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Sensor De Temperatura Midea" />
																	<input type="hidden" name="amount" value="12.50" />
																	<input type="hidden" name="discount_amount" value="7.50" />
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
										<img src="_img/w6.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w6.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Valvula De Servico 1/4/a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$20,95</span>
											<del>R$9,05</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Valvula De Servico 1/4/a" />
																	<input type="hidden" name="amount" value="20.95" />
																	<input type="hidden" name="discount_amount" value="9.05" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
										<img src="_img/w7.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w7.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Hélice Condensadora Consul</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$44,99</span>
											<del>R$15,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Hélice Condensadora Consul" />
																	<input type="hidden" name="amount" value="44.99" />
																	<input type="hidden" name="discount_amount" value="15.00" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
										<img src="_img/w8.jpg" alt="" class="pro-imagem-frontal">
										<img src="_img/w8.jpg" alt="" class="pro-imagem-traseira">
											<div class="ar-carrinho-pro">
												<div class="ar-carrinho-interno-pro">
													<a href="produto.php" class="link-produto-add-carrinho">Olhada Rápida</a>
												</div>
											</div>
											
											
									</div>
									<div class="item-info-produto ">
										<h4><a href="produto.php">Suporte Plástico 400mm Condensadora</a></h4>
										<div class="info-produto-preco">
											<span class="item_preco">R$26,90</span>
											<del>R$24,00</del>
										</div>
										<div class="recortecarrinho-detalhes topo_marca_inicio_detalhes item_add unico-item hvr-esboco-fora botao2">
															<form action="#" method="post">
																<fieldset>
																	<input type="hidden" name="cmd" value="_cart" />
																	<input type="hidden" name="add" value="1" />
																	<input type="hidden" name="business" value=" " />
																	<input type="hidden" name="item_name" value="Suporte Plástico 400mm Condensadora" />
																	<input type="hidden" name="amount" value="26.90" />
																	<input type="hidden" name="discount_amount" value="24.00" />
																	<input type="hidden" name="currency_code" value="BRL" />
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
					 <!--//segunda pagina-->					
					</div>
				</div>	
			</div>
		</div>
	<!-- //novas chegadas --> 
	<!-- /nos-oferecemos -->
		<div class="venda-finanfast">
			<div class="container">
				<h6>Oferecemos Produtos <span>por 40%</span> Desconto</h6>
 
				<a class="hvr-esboco-fora botao2" href="produto.php">Compre Agora </a>
			</div>
		</div>
	<!-- //nos-oferecemos -->
<!--/grades-->
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
<!--grades-->
<!-- rodape -->
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
<!-- //rodape -->
<!-- login -->
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
<!-- //login -->
<a href="#home" class="scroll" id="toTop" style="display: block;"> <span id="toTopHover" style="opacity: 1;"> </span></a>
<script type="text/javascript" src="_js/jquery-3.2.1.min.js"></script>
<script src="_js/modernizr.custom.js"></script>
	<script src="_js/minicart.min.js"></script>
<script>
	// Mini Cart
	paypal.minicart.render({
		action: '#'
	});

	if (~window.location.search.indexOf('reset=true')) {
		paypal.minicart.reset();
	}
</script>						
<script src="_js/easy-responsive-tabs.js"></script>
<script>
	$(document).ready(function () {
	$('#horizontalTab').easyResponsiveTabs({
	type: 'default', //Types: default, vertical, accordion           
	width: 'auto', //auto or any width like 600px
	fit: true,   // 100% fit in a container
	closed: 'accordion', // Start closed if in accordion view
	activate: function(event) { // Callback function if tab is switched
	var $tab = $(this);
	var $info = $('#tabInfo');
	var $name = $('span', $info);
	$name.text($tab.text());
	$info.show();
	}
	});
	$('#verticalTab').easyResponsiveTabs({
	type: 'vertical',
	width: 'auto',
	fit: true
	});
	});
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
