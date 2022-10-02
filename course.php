<?php
	// require_once "config.php";
	require_once "login.php";


?>

<!DOCTYPE html>
<html lang="pt-BR" >
	<head>
		<title>Bem-vindo - Curso Produtividade para Programadores</title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=Edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
		<link href="https://cursos.dankicode.com/app/Views/public/css/style.css" rel="stylesheet">
		<link rel="preconnect" href="https://fonts.googleapis.com">
		<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
		<link href="https://fonts.googleapis.com/css2?family=Comfortaa:wght@300;600&display=swap" rel="stylesheet">
		<link rel="stylesheet" href="style.css">
	</head>

	<body style="font-family: 'Comfortaa', sans-serif;">

		<header>
			<style type="text/css">
					.label-vitalicio{
								position: absolute;
								right: 0;
								top: -17px;
								z-index: 999;
								background-color:#e7426b;
								border-radius: 10px;
								font-size: 9px;
								font-weight: bold;
								color:white;
								padding:4px 8px;
							}
				</style>
			<div class="center">
				<div >
					<a href="#" style="list-style:none; ">HTC</a>
				</div>
			<div class="grp-header">
				<nav class="desktop">
				<ul>
					<li>
						<a href="#">Home</a>
					</li>
					<li>
						<a href="#">Cursos</a>
					</li>
					<li style="position: relative;">
						<a href="#">
							Plano Vitalício <span class="label-vitalicio">novo!</span>
						</a>
					</li>
					<li>
						<a href="#">Certificados</a>
					</li>
				</ul>

				</nav>
				<div class="info-user-btn">
					<a class="btn1 campus_btn" href="#">Campus</a>
					<a class="btn2" href="#">Minha Conta</a>
					<a class="sair-btn" href="#">Sair</a>
				</div>
			</div>
			<div class="clear"></div>
			</div>
		</header>
		
		<div class="header-mobile">
			<div class="center">
			<div class="logo-mobile">
				<a href="#"></a>	
			</div>
			<div class="icon-mobile-menu"></div>
			<div class="clear"></div>
			</div>
		</div>

		<div class="box-anotacoes">
			<div class="btn-close-anotacoes">X</div>
			<textarea aula_id="2194"></textarea>
		</div>
		<div class="header-membro">
			<div class="center">
				<div class="info-user-logado">
					<div style="background-image:url('https://cursos.dankicode.com/app/Views/public/images/conta/user-circle.png');" class="img-user-logado"></div> 
					<div class="info-wraper-conta">
						<h2>Bem-vindo(a)</h2>
						<p>Você é um <b>#EternoDanki</b> e possui acesso a todos os cursos. 👏</p>
					</div>
				</div>
				<div class="progresso-curso">
					<p>Você já completou</p>
					<h2>100%</h2>
					<a resetBtn style="border:1px solid white;padding: 4px 9px;color:white;background:transparent;text-decoration: none;border-radius: 16px;display: inline-block;margin-top: 8px;" href="https://cursos.dankicode.com/campus/produtividade-programadores?resetar">Resetar Progresso!</a>
				</div>
				<div class="clear"></div>
				<div class="pesquisa-aula">
					<i class="fa fa-search" aria-hidden="true"></i>
					<input type="text" name="pesquisa_aula" placeholder="Pesquise por aulas..." />
				</div>
				<div class="btn-anotacoes-aula">
					<i class="fa fa-pencil" aria-hidden="true"></i> <span>Anotações</span>
				</div>
			</div>
		</div>
		<div class="toggle-dark-mode">
			<div class="circle-toggle"></div>
		</div>
		<section class="aula-single">
			<div class="aula-flex">
			<div class="aulas-sidebar">
			<div class="modulo-single">
			<h2><span>Introdução e como usar o curso</span> <i class="fa fa-caret-down" aria-hidden="true"></i></h2>
			<div class="aulas-modulo-lista">
			<a targetaulascroll style="background-image:url('https://cursos.dankicode.com/app/Views/public/images/campus/eye-white.png');opacity: 0.5;background-size:24px 24px;" href="https://cursos.dankicode.com/campus/produtividade-programadores/boas-vindas-e-mensagens-importantes">Boas vindas e mensagens importantes </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/por-que-produtividade">Por que produtividade? </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/suporte-mentoria-e-grupos">Suporte, mentoria e grupos </a>
			</div>
			</div>
			<div class="modulo-single">
			<h2><span>Gerenciando tempo</span> <i class="fa fa-caret-down" aria-hidden="true"></i></h2>
			<div class="aulas-modulo-lista">
			<a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/gerenciando-tempo-para-estudo">Gerenciando tempo para estudo </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/gerenciando-tempo-para-projetos-e-desenvolvimento">Gerenciando tempo para projetos e desenvolvimento </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/tirando-maior-proveito-do-tempo-livre-e-criando-intervalos-de-tempo">Tirando maior proveito do tempo livre e criando intervalos de tempo </a>
			</div>
			</div>
			<div class="modulo-single">
			<h2><span>Atividades para produtividade e energia</span> <i class="fa fa-caret-down" aria-hidden="true"></i></h2>
			<div class="aulas-modulo-lista">
			<a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/o-poder-de-uma-rotina">O poder de uma rotina </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/como-exercitar-a-mente-para-programacao">Como exercitar a mente para programação </a><a style="opacity:0.5;" href="https://cursos.dankicode.com/campus/produtividade-programadores/como-exercitar-o-corpo-aumentar-a-serotonina-e-produzir-mais">Como exercitar o corpo, aumentar a serotonina e produzir mais </a>
			</div>
			</div>


			</div>
			<div class="aula-main">
			<div class="hide-aulas"><i class="fa fa-bars"></i></div>
			<div style="position: relative;z-index: 9999;" class="texto-descricao-aula">
			<h2>Curso Produtividade para Programadores</h2>
			<p>Módulo #1: Introdução e como usar o curso<span class="breadcrump"> > </span>
			<span style="color:#e7426b;">Boas vindas e mensagens importantes</span></p>
			</div>
			<div class="contexto-video">
			<div class="botoes-controle-aula">
			<a href="https://cursos.dankicode.com/campus/produtividade-programadores" style="vertical-align: middle;background-image: none;text-align: center;padding:8px;" class="btn-concluida"><span style="font-size: 23px;vertical-align: middle;"><</span>
			<span style="position: relative;top: 2px;">Aula Anterior</span></a>
			<a href="https://cursos.dankicode.com/campus/produtividade-programadores/por-que-produtividade" style="background-image: none;text-align: center;padding:8px;" class="btn-download"><span style="position: relative;top: 2px;">Próxima Aula</span> <span style="font-size: 23px;vertical-align: middle;">></span></a>
			<div class="clear"></div>
			</div>
			<br>
			<div class="aula-video-embed">
				<iframe width="1150" height="647" src="https://www.youtube.com/embed/ZtMzB5CoekE" title="3 Técnicas Que Eu Uso Para Aprender a Programar Qualquer Coisa (mesmo sem ter o dom da programação)" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
			</div>

			<div class="btns">
			<a href="https://cursos.dankicode.com/campus/produtividade-programadores/boas-vindas-e-mensagens-importantes?desconcluir" style="background-image: none;padding:12px 12px;width: auto;" class="btn-concluida"><i class="fa fa-times"></i> Desmarcar como concluída</a>
			<a href="javascript:void(0);" style="opacity: 0.4;" class="btn-download">Download dos
			arquivos</a>
			<style type="text/css">
										.aviso-chamada-vitalicio {
											position: fixed;
											right: 10px;
											top: 10px;
											z-index: 999999999;
											padding: 8px 20px;
											background-color: orange;
											border-radius: 5px;
											display: none;

										}
									</style>
			<div class="aviso-chamada-vitalicio sucesso-aula-download">
			<p>Opa! Bom trabalho, aguarde um pouquinho enquanto começamos a preprar seu download 💥 PS:
			Você pode ver sua aula enquanto fazemos o trabalho pra você.</p>
			</div>
			<div class="aviso-chamada-vitalicio">
			<p><i class="fa fa-exclamation-circle" aria-hidden="true"></i> Esta é uma funcionalidade
			apenas para quem possui o plano vitalício ou assinatura da Danki Code. Clique <a style="color:black;" target="_blank" href="https://cursos.dankicode.com/vitalicio">aqui para conhecer.</a></p>
			</div>
			<a email="brito1963@gmail.com" aula_id="2194" slug="boas-vindas-e-mensagens-importantes" href="#" style="background-image:none;padding:13px 12px;width:auto;margin:24px 8px 0 0" class="btn-download baixar-arquivo-aula"><i class="fa fa-file-video-o" aria-hidden="true"></i> Baixar Aula</a>
			<div class="clear"></div>
			</div>

			</div>

			<section class="comments">
			<div class="center">
			</div>
			</section>
			</div>
			<div class="clear"></div>
			</div>
		</section>
		<footer class="footer1">
			<div class="center">
				<div class="footer-section">
					<h2>SOBRE</h2>
					<p style="text-align: left;"> A Danki Code é uma empresa de desenvolvimento web e também atua na área de cursos online voltados também ao assunto.
					Sediada em Florianópolis, desenvolve soluções inovadoras para empresas e também forma profissionais capacitados e completos para a área de TI.
					<p style="text-align: left;">Plataforma Desenvolvida com <i class="fa fa-heart"></i> por Danki Code. <br><br>
					É proibida a reprodução ou distribuição do conteúdo publicado aqui.</p>
					</p>
					<p style="text-align: left;"><a style="color: white; font-size: 20px; padding:0 10px;" target="_blank" href="https://instagram.com/dankicodeoficial"><i class="fa fa-instagram"></i></a> <a style="color: white; font-size: 20px; padding:0 10px;" target="_blank" href="https://youtube.com/dankicode"><i class="fa fa-youtube"></i></a> <a style="color: white; font-size: 20px; padding:0 10px;" target="_blank" href="https://facebook.com/dankicode"><i class="fa fa-facebook"></i></a> <a style="color: white; font-size: 20px; padding:0 10px;" target="_blank" href="https://br.linkedin.com/in/danki-code-oficial-1698b1209"><i class="fa fa-linkedin" aria-hidden="true"></i></a></p>
					<br>
					<a target="_blank" href="https://apps.apple.com/br/app/danki-code-cursos-online/id1522964106"><img style="max-width: 150px;" src="https://cursos.dankicode.com/app/Views/public/images/appstoreicon.png" /></a>
					<a target="_blank" href="https://play.google.com/store/apps/details?id=com.app.dankicode.com"><img style="max-width: 150px;" src="https://cursos.dankicode.com/app/Views/public/images/googleplayicon.png" /></a>
				</div>
				<div class="footer-section">
					<h2>Atendimento ao cliente</h2>
					<div class="footer-ww">
						<div style="background-image: url('https://cursos.dankicode.com/app/Views/public/images/footer/icon_mail.png');height:15px;" class="icon-footer"></div>
						<p><b>E-mail: </b><a href="/cdn-cgi/l/email-protection" class="__cf_email__" data-cfemail="83e2f7e6ede7eaeee6edf7ecc3e7e2ede8eae0ece7e6ade0ecee">[email&#160;protected]</a></p>
						<div class="clear"></div>
					</div>
					<div class="footer-ww">
						<div style="background-image: url('https://cursos.dankicode.com/app/Views/public/images/footer/icon_tel.png');" class="icon-footer"></div>
						<p><b>Telefone/WhatsApp: </b>(48) 99684-4281</p>
						<div class="clear"></div>
					</div>
					<div class="footer-ww">
						<div style="background-image: url('https://cursos.dankicode.com/app/Views/public/images/footer/icon_clock.png');background-size: 100% 100%;" class="icon-footer"></div>
						<p>De segunda a domingo</p>
						<div class="clear"></div>
					</div>
				</div>
				<div class="clear"></div>
			</div>
		</footer>

		<footer class="footer2">
			<div class="center">
				<div class="left-footer2">
					<a target="_blank" href="http://www.dankicode.com"><img src="https://cursos.dankicode.com/app/Views/public/images/danki_logo.png" /></a>
				</div>
				<div class="clear"></div>
			</div>
		</footer>

	</body>
</html>