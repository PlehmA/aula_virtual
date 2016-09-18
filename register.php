<?php 
session_start();//crea una sesi贸n para ser usada mediante una petici贸n GET o POST, o pasado por una cookie y la sentencia include_once es la usaremos para incluir el archivo de conexi贸n a la base de datos que creamos anteriormente.
include_once "include/dbb.php"; 
/*Creamos el formulario con el campo de Usuario que se llamara $_POST['usuario'] y 2 campos para la clave y uno mas para confirmar si escribi贸 bien la clave, se llamaran $_POST['password'] y $_POST['repassword'] respectivamente, procedemos a escribir el codigo que procesara y validara lo que el usuario ingrese:*/
if(isset($_POST['enviar']))//para saber si el boton registrar fue presionado. 
{ 
    if($_POST['usuario'] == '' or $_POST['name'] or $_POST['password'] == '' or $_POST['repassword'] == '' or $_POST['email'] == '')
    { 
        echo 'Por favor llene todos los campos.';//Si los campos est谩n vac铆os muestra el siguiente mensaje, caso contrario sigue el siguiente codigo.
    } 
    else 
    { 
        $sql = 'SELECT * FROM usuarios'; 
        $rec = mysql_query($sql); 
        $verificar_usuario = 0;//Creamos la variable $verificar_usuario que empieza con el valor 0 y si la condicion que verifica el usuario(abajo), entonces la variable toma el valor de 1 que quiere decir que ya existe ese nombre de usuario por lo tanto no se puede registrar
  
        while($result = mysql_fetch_object($rec)) 
        { 
            if($result->usuario == $_POST['usuario']) //Esta condici髇 verifica si ya existe el usuario 
            { 
                $verificar_usuario = 1; 
            } 
        } 
  
        if($verificar_usuario == 0) 
        { 
            if($_POST['password'] == $_POST['repassword'])//Si los campos son iguales, continua el registro y caso contrario saldr谩 un mensaje de error.
            { 
                $usuario = $_POST['usuario']; 
                $password = $_POST['password'];
                $email = $_POST['email'];
                $sql = "INSERT INTO usuarios (usuario,password,email) VALUES ('$usuario','$password','$email')";//Se insertan los datos a la base de datos y el usuario ya fue registrado con exito.
                mysql_query($sql); 
  
                echo 'Usted se ha registrado correctamente.'; 
            } 
            else 
            { 
                echo 'Las claves no son iguales, intente nuevamente.'; 
            } 
        } 
        else 
        { 
            echo 'Este usuario ya ha sido registrado anteriormente.'; 
        } 
    } 
}?>