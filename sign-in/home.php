<?php 
session_start(); 
if(!isset($_SESSION['usuario'])){
  header('Location: index.hmtl?erro=1');
}

?>

<!DOCTYPE HTML>
<html lang="pt-br">
  <head>
    <meta charset="UTF-8">

    <title>FreeJobs</title>
    
    <!-- jquery - link cdn -->
    <script src="https://code.jquery.com/jquery-2.2.4.min.js"></script>

    <!-- bootstrap - link cdn -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

    <script type="text/javascript"></script>

    <link rel="stylesheet" type="text/css" href="../style.css">
  
  </head> 

  <body>

    <!-- Static navbar -->
      <nav class="nav navbar navbar-inverse">
        <div class="container" >
          <div class="navbar-header" >
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
              <span class="sr-only">Toggle navigation</span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
              <span class="icon-bar"></span>
            </button>
          </div>
          
          <div id="navbar" class="navbar-collapse collapse">
            <ul class="nav navbar-nav navbar-right">
              <li><a href="sair.php">Sair</a></li>
            </ul>
          </div><!--/.nav-collapse -->
        </div>
      </nav>


      <div class="container">
      <div class="col-md-3">

      <div class="panel panel-default">
      <table border="1" >
        <tr> 
          <td>
               <h4>Imagem</h4>
               <img src='<?php echo $arquivo; ?>' alt='Foto de exibição' />
              </div>
          </td>
        </tr>  
      </table>

           <div class="panel-body">
               <h4>Usuario:</h4>
               <h4><?= $_SESSION['usuario']?></h4>
           </div>
         

               <div class="panel-body">
               <h4>Profissão:</h4>
               <h4><?= $_SESSION['servico']?></h4>
               </div>
           </div>
        </div>
        

        <div class="col-md-6">
          <div class="panel panel-default">
            <div class="panel-body">
              <form id="form_tweet" class="input-group">
                <input type="text" id="text_tweet" name="text_tweet" class="form-control" placeholder="O que você precisa?" maxlength="140">
                <span class="input-group-btn">
                    <button class="btn btn-default" id="btn_tweet" type="button">
                   Jobs
                    </button>
                </span> 
              </form>
            </div>
          </div>
        </div>
    
      <div class="col-md-3">
        <div class="panel panel-default">
          <div class="panel-body">
            <h4><a href="">Procure seu FreeJobs</a></h4>
          </div>
        </div>
      </div>  
    </div>
  </div>
  
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/js/bootstrap.min.js"></script>
  
  </body>
</html>