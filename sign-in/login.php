<?php

$erro = isset($_GET['erro']) ? $_GET['erro'] : 0;

?>


<!DOCTYPE html>
<!--
Template Name: Opiami
Author: <a href="http://www.os-templates.com/">OS Templates</a>
Author URI: http://www.os-templates.com/
Licence: Free to use under our free template licence terms
Licence URI: http://www.os-templates.com/template-terms
-->
<html>
<head>
<title>FreeJobs | Soluções Práricas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<link rel="stylesheet" href="../layout/styles/style.css">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
<script>
      // código javascript
      $(document).ready( function(){
        // verificar se os campos usuario e senha foram preenchidos devidamente
        $('#btn_login').click( function(){

          var campo_vazio = false; 

          if ($('#campo_usuario').val() == ''){
            $('#campo_usuario').css({'border-color' : '#A94442'});
            campo_vazio = true; 
          }else{
              $('#campo_usuario').css({'border-color' : '#CCCC'});
          }

          if ($('#campo_senha').val() == ''){
            $('#campo_senha').css({'border-color' : '#A94442'});
            campo_vazio = true; 
          }else{
              $('#campo_senha').css({'border-color' : '#CCCC'});
          }
        
          if(campo_vazio) return false;
        });
      });

    </script>

</head>
<body id="top">
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row0">
  <div id="topbar" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="fl_left">
      <ul class="faico clear">
        <li><a class="faicon-facebook" href="#"><i class="fa fa-facebook"></i></a></li>
        <li><a class="faicon-pinterest" href="#"><i class="fa fa-pinterest"></i></a></li>
        <li><a class="faicon-twitter" href="#"><i class="fa fa-twitter"></i></a></li>
        <li><a class="faicon-dribble" href="#"><i class="fa fa-dribbble"></i></a></li>
        <li><a class="faicon-linkedin" href="#"><i class="fa fa-linkedin"></i></a></li>
        <li><a class="faicon-google-plus" href="#"><i class="fa fa-google-plus"></i></a></li>
        <li><a class="faicon-rss" href="#"><i class="fa fa-rss"></i></a></li>
      </ul>
    </div>
    <div class="fl_right">
      <ul class="nospace inline pushright">
        <li><i class="fa fa-user"></i> <a href="/freejobs/sign-up/formulario.php">Cadastre-se</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="login.php">Login</a></li>
      </ul>
    </div>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- Top Background Image Wrapper -->
<div class="bgded overlay" style="background-image:url('../images/demo/backgrounds/trabalho.jpg');"> 
  <!-- ################################################################################################ -->
  <div class="wrapper row1">
    <header id="header" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <div id="logo" class="fl_left">
      <!--  <h1><a href="../login.html">Quebra Galho</a></h1> -->
      </div>
      <nav id="mainav" class="fl_right">
        <ul class="clear">
          <li class="active"><a href="../index.html">Inicio</a></li>
          <li><a class="drop" href="#">Serviços Pessoais</a>
            <ul>
              <li><a href="cabelereiro.html">Cabeleleiro</a></li>
              <li><a href="costureiro.html">Costureiro</a></li>
              <li><a href="encanador.html">Encanador</a></li>
              <li><a href="marceneiro.html">Marceneiro</a></li>
              <li class="active"><a href="pintor.html">Pintor</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Outros Serviços</a>
            <ul>
              <li><a href="academico.html">Acadêmico</a></li>
              <li><a class="drop" href="musica.html">Músical</a>
                <ul>
                  <li><a href="violao.html">Violão</a></li>
                  <li><a href="cavaquinho.html">Cavaquinho</a></li>
                  <li><a href="contrabaixo.html">Contra-Baixo</a></li>
                </ul>
              </li>
              <li><a href="#">Esportivo</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Eventos</a>
          <ul>
			<li><a href="fotografo.html">Fotografia e Filmagem</a></li>
			<li><a href="buffet.html">Buffet</a></li>
			<li><a href="decoracao">Decoração</a></li>
			<li><a href="animacaodefesta.html">Animação de Festas</a></li>
		  </ul>
		  </li>
        </ul>
      </nav>
      <!-- ################################################################################################ -->
    </header>
  </div>
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <!-- ################################################################################################ -->
  <div class="wrapper row2">
    <div id="breadcrumb" class="hoc clear"> 
      <!-- ################################################################################################ -->
      <ul>
   <!-- <li><a href="#">Home</a></li>
        <li><a href="#">Lorem</a></li>
        <li><a href="#">Ipsum</a></li>
        <li><a href="#">Dolor</a></li> -->
      </ul>
      <!-- ################################################################################################ -->
    </div>
  </div>
  <!-- ################################################################################################ -->
</div>
<!-- End Top Background Image Wrapper -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row3">
  <main class="hoc container clear"> 
    <!-- main body -->
    <!-- ################################################################################################ -->
    <div class="content"> 
      <!-- Formulário -->     
<div class="container">
	<section id="content">
		<form action="valida_usuario.php" method="POST">
			<h1>Login </h1>
			<div>
				<input type="text" placeholder="Email*" required="" name="email" id="campo_usuario" />
			</div>
			<div>
				<input type="password" placeholder="Senha*" required="" name="senha" id="campo_senha" />
			</div>
			<div>
				<input type="submit" value="Entrar"/>
				<a href="#">Esqueceu sua senha?</a>
				<a href="formulario.php">Cadastrar-se</a>
			</div>
		</form><!-- form -->
  	<div class="button">
      <?php
              if ($erro == 1 ) {
                echo '<font color= "#FF0000"> Usuário e senha invalido(s)</font color>';
              }
              ?>
			<!--<a href="#">Download source file</a>-->
		</div><!-- button -->

	</section><!-- content -->
</div><!-- container -->

	  
    </div>
    <!-- ################################################################################################ -->
    <!-- / main body -->
    <div class="clear"></div>
  </main>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row4">
  <footer id="footer" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <div class="clear center btmspace-80">
      <h2 class="heading font-x2">FreeJobs</h2>
      <p>Conheça nossos serviços e nunca mais terá dor de cabeça com serviços indesejados.</p>
    </div>
    <div class="one_quarter first">
      <h6 class="title">Representantes</h6>
      <address class="btmspace-30">
      Entre em contato<br>
      Rio de janeito - RJ<br>
      </address>
      <ul class="nospace">
		<li class="btmspace-10"><i class="fa fa-phone"></i>(21) 91234-4569 - Felipe lima</li>
        <li><i class="fa fa-envelope-o"></i> freejobs@gmail.com</li>
      </ul>
    </div>
    <div class="one_quarter">
	<!--
   <h6 class="title">Feugiat ullamcorper</h6>
      <article>
        <h2 class="nospace font-x1"><a href="#">Neque sodales enim</a></h2>
        <time class="font-xs" datetime="2045-04-06">Friday, 6<sup>th</sup> April 2045</time>
        <p>Nullam scelerisque quam in dolor lobortis eleifend aliquam luctus elit vitae vulputate eleifend eu morbi.</p>
      </article>
	-->
    </div>
    <div class="one_quarter">
      <!--
	  <h6 class="title">Tellus eu cursus</h6>
      <ul class="nospace linklist">
        <li><a href="#">Arcu ac condimentum turpis</a></li>
        <li><a href="#">Fusce vitae ante tellus</a></li>
        <li><a href="#">Nunc varius auctor dapibus</a></li>
        <li><a href="#">Aliquam consequat scelerisque</a></li>
        <li><a href="#">Sapien at pulvinar rhoncus</a></li>
      </ul>
	  -->
    </div>
    <div class="one_quarter">
	<!--
      <h6 class="title">Nisi maximus nec</h6>
      <p>Nec rutrum felis sem nec quam vivamus sodales enim nunc nam nisl nibh cursus at leo.</p>
      <p>Lorem phasellus tellus tellus auctor ut posuere nec gravida nec urna proin at ipsum.</p>
	  -->
    </div>
    <!-- ################################################################################################ -->
  </footer>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<div class="wrapper row5">
  <div id="copyright" class="hoc clear"> 
    <!-- ################################################################################################ -->
    <p class="fl_left"><a href="#"></a></p>
    <p class="fl_right">Feito por: Felipe Lima<a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates"></a></p>
    <!-- ################################################################################################ -->
  </div>
</div>
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>