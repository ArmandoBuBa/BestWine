<?php
   error_reporting(E_ALL ^ E_DEPRECATED);
   header("Content-Type: text/html; Charset=UTF-8");
   
   $aNombre = isset($_POST['aNombre']) ? $_POST['aNombre'] : '';
   $zApellido = isset($_POST['zApellido']) ? $_POST['zApellido'] : '';
   $aEmail = isset($_POST['aEmail']) ? $_POST['aEmail'] : '';
   $aPassword = isset($_POST['aPassword']) ? $_POST['aPassword'] : '';
   
   
   

   $con = new SQLite3("bestwine.db") or die("Error al conectar");
   $cs = $con -> query("SELECT email FROM user WHERE email='$aEmail'");
   
   
   $email = '';
   
   while($resul = $cs -> fetchArray()){
       $email = $resul['email'];
   }
   
   if ($aEmail == $email) {
         echo '
           <script>
           alert("El correo electrónico no es válido o ya está registrado")
           window.location="Registro.html"
          </script>
           ';
   }else{
       if(isset($aNombre) && !empty($aNombre && isset($zApellido) && !empty($zApellido) && isset($aEmail) && !empty($aEmail) && isset($aPassword) && !empty($aPassword))){
           $cs = $con -> query("INSERT INTO user(nombre,apellido,email,vpassword) VALUES('$aNombre','$zApellido','$aEmail','$aPassword');");
   
           echo '
           <script>
           alert("Registro exitoso")
           window.location="Ingresar.html"
          </script>
          
           ';
   
       }else{
           echo '
           <script>
           alert("llena los datos adecuadamente")
           window.location="Registro.html"
          </script>
           ';
       }
   }
   $con -> close();

?>