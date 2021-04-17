<!DOCTYPE html>

<html>
  
    <head>
        <title>Renan Magera</title>  
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="<?php echo get_template_directory_uri(); ?>/style.css" type="text/css" media="all" />
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-BmbxuPwQa2lc/FVzBcNJ7UAyJxM6wuqIj61tLrc4wSX0szH/Ev+nYRRuWlolflfl" crossorigin="anonymous">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;800&display=swap" rel="stylesheet">
        <link rel="shortcut icon" href="images/rm.ico"> 

    <?php wp_head();?>
    </head>

<body>   

<!--Navbar-->
    <nav id="bar">
      <?php $template_directory = get_template_directory_uri(); ?> 
      <img class="logo" src="<?php echo $template_directory; ?>/images/rm_logo.png"/>  
      <ul id= "check">
          <li><a class="active" href="#pt1">Home</a></li>
          <li><a href="#pt2">Sobre</a></li>
          <li><a href="#pt3">Cadastre-se</a></li>
      </ul>
    </nav>
    
<!--Caixa 1-->
    <div class="bnnr" id="pt1">
      <?php $template_directory = get_template_directory_uri(); ?>
      <img class="banner" src="<?php echo $template_directory; ?>/images/banner.png"/> 
    </div>
      
<!--Caixa 2-->
    <div class="txt1" id="pt2">
      Faça o seu primeiro agendamento sem compromisso! 
    </div>

    <div class=bttnbox >
      <div  class="bttn">
        <?php $template_directory = get_template_directory_uri(); ?>
        <img class="icn" src="<?php echo $template_directory; ?>/images/banner2.png"  />
      </div>
    </div>

    <div class="txt2">
      A oportunidade de receber diagnósticos precisos e identificar soluções voltadas para investimentos no mercado financeiro
    </div>

<!--Caixa 3-->
    
    <div class="mb-3" id="pt3">

      <?php $template_directory = get_template_directory_uri(); ?>
      <img class="cima" src="<?php echo $template_directory; ?>/images/cima.png">

      <form class="form" name="cad" method="POST" action="<?php echo get_template_directory_uri(); ?>/send.php">
        <div class="schedule">
            Agende a sua consulta
        </div>
        <div class="schedule2">
          Assessoria de invetimentos
        </div>
          <input name="name" type="text" class="form-control" id="exampleFormControlInput1" placeholder="Nome completo">      
          <input name="email" type="email" class="form-control" id="exampleFormControlInput1" placeholder="e-mail">      
          <input name="phone" type="tel" class="form-control" id="exampleFormControlInput1" placeholder="WhatsApp com DDD">      
          <input type="submit" class="btnsend" value="Finalizar o meu cadastro" >
      </form>

      <?php $template_directory = get_template_directory_uri(); ?>
      <img class="baixo" src="<?php echo $template_directory; ?>/images/baixo.png">

    </div>
