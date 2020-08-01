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
<link href="_css/team.css" rel="stylesheet" type="text/css" media="all" />
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
					<li class=" menu__item menu__item--current"><a class="menu__link" href="sobre.php">Sobre</a></li>
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
			<h3>Sobre <span>Nós </span></h3>
				 <div class="servicos-finanfast">
						<div class="agil-interno-finanfast">

						   <ul class="nome-pagina-curta">
								<li><a href="index.php">Ínicio</a><i>|</i></li>
								<li>Sobre</li>
							</ul>
						 </div>
				</div>
	</div>
</div>
    <div class="banner_botao_agil_info">
	    <div class="container">
			<div class="agil_ab_info">
				<div class="fig-md-6 ab_pic_w3ls">
				   	<img src="_img/ab_pic.jpg" alt=" " class="img-responsiva" />
				</div>
				 <div class="fig-md-6 ab_foto_texto_info">
				    <h5>Sobre o<span> FinanFast</span> </h5>
					<p>O Finanfast é um e-commerce criado pelos alunos/desenvolvedores do curso de Análise e Desenvolvimento de Sistemas da Faculdade UNIBR.Comércio electrónico ou e-Commerce é um conceito aplicável a qualquer tipo de negócio ou transacção comercial que implique a transferência de informação através da Internet. Abrange uma gama de diferentes tipos de negócios como a venda de Ar-Condicionado do FinanFast, desde sites destinado a consumidores, a sites de leilões, passando por comércio de bens e serviços entre organizações.</p>
				</div>
				  <div class="clearfix"></div>
			</div>    
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
<div class="banner_botao_agil_info time-finanfast">
	<div class="container">
	            <h3 class="finanfast_texto_info">Membros <span>do nosso Time</span></h3>
			<div class="interno_grades_ageis">
					<div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/ygor.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>Ygor Correia</h4>
								<p>Desenvolvedor Front-End</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/ygor.correia.775" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/yGr_Correia" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/ygrcorreia/" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/ygor-correia-875139b6/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/phil.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>Philippe Correa</h4>
								<p>Desenvolvedor Back-End</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/philippecorreia.dossantos.7" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/PCorreiaSantos" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/philippe192/?hl=pt-br" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/philippe-correia-dos-santos-64b898149/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/will.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>William Gomes</h4>
								<p>Documentação</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/williamgomes011" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/PCorreiaSantos" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/philippe192/?hl=pt-br" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/philippe-correia-dos-santos-64b898149/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
						<div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/bruno.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>Bruno Guimarãers</h4>
								<p>Desenvolvedor Banco de Dados</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/bruno.guimaraes.7161" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/PCorreiaSantos" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/philippe192/?hl=pt-br" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/philippe-correia-dos-santos-64b898149/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
                                                <div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/doug.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>Douglas Guilherme</h4>
								<p>Documentação</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/douglas.guilhermemarques" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/PCorreiaSantos" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/philippe192/?hl=pt-br" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/philippe-correia-dos-santos-64b898149/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
                            <div class="fig-md-3 grades-do-time">
						<div class="miniatura time-agil">
							<img src="_img/rich.jpg" class="img-responsiva" alt="">
							<div class="icones-sociais icones-time direito-finanfast foto-finanfast">
							<div class="caption">
								<h4>Richard Rocha</h4>
								<p>Desenvolvedor Back-End</p>						
							</div>
								<ul class="menu-social modelo-3d-0 rodape-social icones_redes_sociais two">
															<li><a href="https://www.facebook.com/rick.rocha.142" target="_blank" class="facebook">
																  <div class="front"><i class="fa fa-facebook" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-facebook" aria-hidden="true"></i></div></a></li>
															<li><a href="https://twitter.com/PCorreiaSantos" target="_blank" class="twitter"> 
																  <div class="front"><i class="fa fa-twitter" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-twitter" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.instagram.com/philippe192/?hl=pt-br" target="_blank" class="instagram">
																  <div class="front"><i class="fa fa-instagram" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-instagram" aria-hidden="true"></i></div></a></li>
															<li><a href="https://www.linkedin.com/in/philippe-correia-dos-santos-64b898149/" target="_blank" class="pinterest">
																  <div class="front"><i class="fa fa-linkedin" aria-hidden="true"></i></div>
																  <div class="back"><i class="fa fa-linkedin" aria-hidden="true"></i></div></a></li>
														</ul>
							          </div>
						     </div>
			         	</div>
					<div class="clearfix"> </div>
				</div>
	       </div>                          
		</div>
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
					<h5 class="counter">99985</h5>
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
      <div class="ultima_secao_unica_dupla">
            <div class="fig-md-6 multi-imagem multi-texto ">
					<a href="pecas.php"><img src="_img/bot_1.jpg" alt=" "><h4>Oferta de <span>50</span>%</h4></a>
					
			</div>
			 <div class="fig-md-6 multi-imagem multi-texto ">
					<a href="pecas.php"><img src="_img/bot_2.jpg" alt=" "><h4>Oferta de <span>50</span>%</h4></a>
			</div>
			<div class="clearfix"></div>
	   </div>							
		<div class="venda-finanfast">
			<div class="container">
				<h6>Oferecemos Produtos <span>por 40%</span> Disconto</h6>
 
				<a class="hvr-esboco-fora botao2" href="produto.php">Compre Agora </a>
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
