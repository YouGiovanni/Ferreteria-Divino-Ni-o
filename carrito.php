<?php
$in = include("conexion.php");
session_start();
$mensaje = "";

if(isset($_POST['btnAccion'])){

    switch ($_POST['btnAccion']){
        
        case'Agregar':
            

            if(is_numeric( openssl_decrypt($_POST['ID'],COD,KEY))){
                $ID=openssl_decrypt($_POST['ID'],COD,KEY);
                $mensaje.="OK ID CORRECTO".$ID;
            }else{
                $mensaje.="ID incorrecto".$ID;
            }

            if(is_string(openssl_decrypt($_POST['nombre'],COD,KEY))){
                $NOMBRE=openssl_decrypt($_POST['nombre'],COD,KEY);
            }else{ $mensaje.="UPS., ALGO PASO"; break;}

            if(is_numeric(openssl_decrypt($_POST['cantidad'],COD,KEY))){
                $CANTIDAD=openssl_decrypt($_POST['cantidad'],COD,KEY);
            }else{ $mensaje.="UPS., ALGO PASO"; break;}

            if(is_numeric(openssl_decrypt($_POST['precio'],COD,KEY))){
                $PRECIO=openssl_decrypt($_POST['precio'],COD,KEY);
                $mensaje.="ok precio".$PRECIO;
            }else{ $mensaje.="UPS., ALGO PASO"; break;}


            if(isset($_SESSION['CARRITO'])){


                $producto=array(
                    'ID' =>$ID,
                    'NOMBRE' =>$NOMBRE,
                    'CANTIDAD' =>$CANTIDAD,
                    'PRECIO' =>$PRECIO
                );
                $_SESSION['CARRITO'][0]=$producto;
            }else{
                $numeroProductos= count($_SESSION['CARRITO']);

                $producto=array(

                    'ID' =>$ID,
                    'NOMBRE' =>$NOMBRE,
                    'CANTIDAD' =>$CANTIDAD,
                    'PRECIO' =>$PRECIO
                );
                $_SESSION['CARRITO'][$numeroProductos]=$producto;

            }


        break;
    }
}


?>