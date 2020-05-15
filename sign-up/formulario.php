<?php

$erro_usuario = isset($_GET['erro_usuario']) ? ($_GET['erro_usuario']) : 0;
$erro_email   = isset($_GET['erro_email'])   ? ($_GET['erro_email'])   : 0;

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
<title>FreeJobs | Soluções Práticas</title>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1"> 
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
<link href="../layout/styles/layout.css" rel="stylesheet" type="text/css" media="all">
<style type="text/css">
/* DEMO ONLY */
.container .demo{text-align:center;}
.container .demo div{padding:8px 0;}
.container .demo div:nth-child(odd){color:#FFFFFF; background:#CCCCCC;}
.container .demo div:nth-child(even){color:#FFFFFF; background:#979797;}
@media screen and (max-width:900px){.container .demo div{margin-bottom:0;}}
/* DEMO ONLY */
</style>
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
        <li><i class="fa fa-user"></i> <a href="formulario.php">Cadastre-se</a></li>
        <li><i class="fa fa-sign-in"></i> <a href="/freejobs/sign-in/login.php">Login</a></li>
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
        <h1><a href="../index.html">FreeJobs</a></h1>
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
              <li><a href="esporte.html">Esportivo</a></li>
            </ul>
          </li>
          <li><a class="drop" href="#">Eventos</a>
          <ul>
      <li><a href="fotografia.html">Fotografia e Filmagem</a></li>
      <li><a href="buffet.html">Buffet</a></li>
      <li><a href="decoracao.html">Decoração</a></li>
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
     <center><h1>Formulário</h1></center>
<form action="validacao_freejobs.php" method="POST" enctype="mutlipart/form-date">

<!-- DADOS PESSOAIS-->
<fieldset>
 <legend>Dados Pessoais</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="nome">Nome completo: </label>
   </td>
   <td align="left">
    <input type="text" size="50" name="usuario" id="usuario" >
    <?php
          if ($erro_usuario == 1) {
              echo "<font style='color:#ff0000'> Usuário já existe </font>";
          }
      ?>
      
   </td>
  </tr>
  
  <tr>
   <td>
    <label for="telefone">Telefone:</label>
   </td>
   <td align="left">
   <style>
  .cpf li{display:inline-block;}
   </style>
   <ul class="cep" style="padding-left: 0px; margin-top-width: opx;margin-top: 0px;">
    <li>
      <input type="text" name="tel" size="2" maxlength="9">     
    </li>
    -
    <li>
      <input type="text" name="tel2" size="9" maxlength="9">
    </li>
   </ul> 
   </td>  
  </tr>
  
  
  
  <tr>
   <td>
    <label for="cpf">CPF:</label>
   </td>
   <td align="left">
   <style>
  .cpf li{display:inline-block;}
   </style>
   <ul class="cep" style="padding-left: 0px; margin-top-width: opx;margin-top: 0px;">
    <li>
      <input type="text" name="cpf" id="cpf" size="9" maxlength="9">      
    </li>
    -
    <li>
      <input type="text" name="cpf2" size="2" maxlength="2">
    </li>
   </ul> 
   </td>  
  </tr>
     <td>
  <label for="sexo">Sexo:</label>
   </td>
   <td align="left">
   <div class="row">
    <select name="sexo" id="sexo"> 

            <option value="">-- </option> 
            <option value="Masculino">Masculino</option>
            <option value="Feminino">Feminino</option>


    </select>
   </td>
 </table>
</fieldset>

<br />
<!-- ENDEREÇO -->
<fieldset>
 <legend>Dados de Endereço</legend>
 <table cellspacing="10">

  <tr>
   <td>
    <label for="rua">Rua:</label>
   </td>
   <td align="left">
    <input type="text" name="rua">
   </td>
   <td>
    <label for="numero">Numero:</label>
   </td>
   <td align="left">
    <input type="text" name="numero" size="4">
   </td>
  </tr>
  <tr>
   <td>
    <label for="bairro">Bairro: </label>
   </td>
   <td align="left">
    <input type="text" name="bairro">
   </td>
  </tr>
  <tr>
   <td>
    <label for="servico">Serviço:</label>
   </td>
   <td align="left">
    <select name="servico" id="servico"> 
    
    
    
    <option value="">--</option> 
    <option value="Alfaiate">Alfaiate</option> 
    <option value="Eletricista">Eletricista</option> 
    <option value="Pedreiro">Pedreiro</option> 
    <option value="Bombeiro hidráulico">Bombeiro hidráulico</option> 
    <option value="Animador de festa">Animador de festa</option> 
    <option value="Cabeleleiro">Cabeleleiro </option> 
    <option value="Costureiro">Costureiro </option> 
    <option value="Marceneiro">Marceneiro </option> 
    <option value="Pintor">Pintor </option> 
    <option value="Fotografo">Fotografo</option> 
    <option value="Decorador">Decorador</option> 
    <option value="Buffet">Buffet </option> 
    <option value="Chaveiro">Chaveiro </option> 
    <option value="Carpinteiro">Carpinteiro </option> 
    <option value="Diarista">Diarista </option> 
    <option value="Detetização">Detetização </option> 
    <option value="Serralheiro">Serralheiro </option> 
    <option value="Servicos Gerais">Servicos Gerais </option> 
    <option value="Vidraceiro">Vidraceiro </option> 
    <option value="Depilação">Depilação </option> 
    <option value="Manicure">Manicure </option> 
    <option value="Maqueador">Maqueador </option> 
    <option value="Acupuntura">Acupuntura </option> 
    <option value="Motoboy">Motoboy </option>  
    <option value="Churrasqueiro">Churrasqueiro </option> 
    <option value="Dj">Dj </option>
    <option value="Producao Cultural">Producao Cultural </option> 
    ?>
   </select>
   </td>
  </tr>
  
  <tr>
  <tr>
   <td>
    <label for="cidade">Cidade: </label>
   </td>
   <td align="left">
    <input type="text" name="cidade">
   </td>
  </tr>
  <tr>
   <td>
    <label for="cep">CEP: </label>
   </td>
   
   <td align="left">
   <style>
  .cep li{display:inline-block;}
   </style>
   <ul class="cep" style="padding-left: 0px; margin-top-width: opx;margin-top: 0px;">
    <li>
      <input type="text" name="cep" size="5" maxlength="5">     
    </li>
    -
    <li>
      <input type="text" name="cep2" size="3" maxlength="3">
    </li>
   </ul>
  </td>
  </tr>
 </table>
</fieldset>
<br />

<!-- DADOS DE LOGIN -->
<fieldset>
 <legend>Dados de login</legend>
 <table cellspacing="10">
  <tr>
   <td>
    <label for="email">E-mail: </label>
   </td>
   <td align="left">
    <input type="text" name="email" id="email">
    <?php
          if ($erro_email == 1) {
               echo "<font style='color:#ff0000'> Email já existe </font>";
          }
      ?>
     </td>
  </tr>
  <tr>
   <td>
    <label for="imagem">Imagem de perfil:</label>
   </td>
   <td>
    <input accept="image/jpeg,image/png,image/jpg" type="file" name="foto" id="foto">

   </td>
  </tr>
  <tr>
   <td>
    <label for="pass">Senha: </label>
   </td>
   <td align="left">
    <input type="password" name="senha" id="senha" >
   </td>
  </tr>
  <tr>
   <td>
    <label for="passconfirm">Confirme a senha: </label>
   </td>
   <td align="left">
    <input type="password" name="senha" id="senha">
   </td>
  </tr>
 </table>
</fieldset>
<br />
<input type="submit" value="Salvar">
<input type="reset" value="Limpar">
</form>         
    
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
    <li class="btmspace-10"><i class="fa fa-phone"></i>(21) 986453730- - Felipe lima</li>
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
    <p class="fl_left">Criado por - <a href="#">Felipe Lima</a></p>
    <p class="fl_right">@2019 <a target="_blank" href="http://www.os-templates.com/" title="Free Website Templates">FreeJobs</a></p>
    <!-- ################################################################################################ -->
  </div>
</div><!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<!-- ################################################################################################ -->
<a id="backtotop" href="#top"><i class="fa fa-chevron-up"></i></a>
<!-- JAVASCRIPTS -->
<script src="../layout/scripts/jquery.min.js"></script>
<script src="../layout/scripts/jquery.backtotop.js"></script>
<script src="../layout/scripts/jquery.mobilemenu.js"></script>
</body>
</html>