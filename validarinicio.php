<?php

error_reporting(E_ALL ^ E_DEPRECATED);
header("Content-Type: text/html; Charset=UTF-8");

$aEmail = isset($_POST['aEmail']) ? $_POST['aEmail'] : '';
$aPassword = isset($_POST['aPassword']) ? $_POST['aPassword'] : '';



 if (isset($aEmail) && !empty($aEmail) && isset($aPassword) && !empty($aPassword)){
    $con = new SQLite3("bestwine.db") or die("Error al conectar");
    $cs = $con -> query("SELECT * FROM user WHERE email='$aEmail'");

    $id = '';
    $nombre = '';
    $apellido = '';
    $email = '';
    $bpassword = '';
    $vpassword='';

    while($resul = $cs -> fetchArray()){
        $id = $resul['id'];
        $nombre = $resul['nombre'];
        $apellido = $resul['apellido'];
        $email = $resul['email'];
        $vpassword = $resul['vpassword'];
    }

   if ($aEmail === 'brayanmartinezespinosa@gmail.com' &&  $aPassword == $vpassword) {
       echo '
       <script>
        alert("Entrando como andministrador '.$nombre.'")
        window.location="admin.html"
      </script>
      ';
   }else{
       if($aEmail == $email &&  $aPassword == $vpassword){
        echo '
        <script>
         alert("bienvenido'.$nombre.'")
         window.location="Productos.php"
       </script>
       ';
       }
   }
 }else{
     echo' 
      <script>
        window.location ="index.php"
      </script>
      ';
   }
?>