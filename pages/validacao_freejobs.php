<?php 
require_once('conexao_banco.php');

$usuario = $_POST['usuario'];
$email   = $_POST['email'];
$login   = $_POST['email'];
$senha   = $_POST['senha'];
$cpf     = $_POST['cpf'];
$servico = $_POST['servico'];
$sexo    = $_POST['sexo'];       

        //pega a extensão do arquivo
       $arquivo = imagecreatefromjpeg('foto');

       // define nome do arquivo
       $novo_nome = time() . $arquivo;

$id = $dados_usuario['id'];
$id = $id+1;

$diretorio = "user".$id; //apresentará um id acima após outro registrado

     move_uploaded_file($_FILES['foto']['temp_name'], $novo_nome.$diretorio); //efetua upload


// if (file_exists('user'.$diretorio)) {
//     echo "<script>alert('essa pasta existe');</script>";
//     rmdir($diretorio);
// }else{
//     mkdir("user".$diretorio,0777);
//     echo "<script>alert('O pasta ".$diretorio." foi criada com sucesso ');</script>";
// }

// $formatos = array(1=>'image/png', 2=>'image/jpg', 3=>'image/jpeg', 4=>'image/gif');

// if ($formatos = true) {
//     move_uploaded_file($_FILES['arquivo']['temp_name'], 'diretorio/'.$diretorio."/".$foto);
// } else {
//     echo "<script>alert('tipo de arquivo nao suportado');</script>";
    
// }

  
$objDb = new db();
$link = $objDb->connect_mysql();

$usuario_existe = false;
$email_existe = false;


 //verificar se o usuário já existe
    $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['usuario'])){

            $usuario_existe = true;
        }

    }else{
        echo 'Erro ao tentar localizar o registro de usuário';
    }

    //verificar se o e-mail já existe
    $sql = "SELECT * FROM usuarios WHERE email = '$email' ";
    if($resultado_id = mysqli_query($link, $sql)){

        $dados_usuario = mysqli_fetch_array($resultado_id);

        if(isset($dados_usuario['email'])){

            $email_existe = true;

        }

    }else{
        echo 'Erro ao tentar localizar o registro de email';
    }
   
    if($usuario_existe || $email_existe){

        $retorno_get = '';

        if($usuario_existe){
            $retorno_get .= "erro_usuario=1&";
        }

        if($email_existe){
            $retorno_get .= "erro_email=1&";
        }

        header('Location:formulario.php?' . $retorno_get);
        die();

    }

         $sql = "INSERT INTO usuarios (usuario, email, login, senha, cpf, servico, sexo, arquivo) values ('$usuario', '$email', '$login', '$senha', '$cpf', '$servico', '$sexo', '$novo_nome')"; 
 

    //executar a query
    if(mysqli_query($link, $sql)){
        header("Location: login.php");
    }else{
        echo "Erro ao registrar o usuário!";
    }

?>