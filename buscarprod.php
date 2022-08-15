
<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" type="text/css" href="css/style4.css">
  <link rel="stylesheet" type="text/css" href="css/style3.css">
	<link rel="stylesheet"  type="text/css" href="css/estilo.css">
	<title>El Divino Niño:Productos</title>
  </head>
  <body class="p-3 m-0 border-0 bd-example">








  <div id="contenedor">
            <div id="barra">
              <div id="texto"></div>
            </div>
          </div>




<div class="enc"> 



      <div class="envio" ><br> ----- ENVIOS GRATIS APARTIR DE $2000 -----
            </div>

            <div class="bar">
                <img src="img/barritas.jpg" >
                <ul> <strong><div class="barb" ><a>Ferreteria: El Divino Niño   </a></div></strong>
                    <li><a href="acercaemp.html">Acerca de nosotros</a></li>
                    <li><a href="index.php">Preguntas</a></li>
                    <li><a href="contactanos.html">contactos</a></li>
                    <li><a href="#">Ayuda</a></li>
                </ul>

              
            </div>


     

            <div class="apartado1" >
                <a align="center">
                    <div class="logo" >
                    <img src="img/logo_2.jpg" alt="imagen de sala" width="75" height="60" align="left">
                     </div>  
                </a>
                <a  class="boini" >
                    <strong>FERRERTERIA: "EL DIVINO NIÑO"</strong>
                          
               

                  </a>

                  <div class="botonesini" >

                  <a  href="inicio.html" class="botonapartado1" ><img src="img/ic_inicio.jpg" alt="imagen de sala" width="20" height="20" >
                    INICIO
                  </a>

                 <strong><a  href="pro/most2.php" class="botonapartado1" ><img src="img/ico_prod.jpeg" alt="imagen de sala" width="20" height="20" >
                    PRODUCTOS
                  </a> </strong> 

                <a  target="_blank"  href="AYUDA.pdf" class="botonapartado1" ><img src="img/ic_ayuda.jpg" alt="imagen de sala" width="20" height="20">
                  AYUDA
                </a>
                <a href="buscarprod.php" class="botonapartado1" ><img src="img/ic_marcas.jpg" alt="imagen de sala" width="20" height="20">
                    BUSCAR PRODUCTOS
                 </a>
                 <a  target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x85c59b4c9e546fe7%3A0xe73fd97835893a85!3m1!7e115!4s%2Fmaps%2Fplace%2FCalle%2Bindependencia%2BS%252FN%2C%2BSan%2BCrist%25C3%25B3bal%2BTepeteopan%2F%4018.5236777%2C-97.5472842%2C3a%2C75y%2C162.03h%2C90t%2Fdata%3D*213m4*211e1*213m2*211s9djOF7ULwwi4VTv6m16hPQ*212e0*214m2*213m1*211s0x85c59b4c9e546fe7%3A0xe73fd97835893a85%3Fsa%3DX!5sCalle%20independencia%20S%2FN%2C%20San%20Crist%C3%B3bal%20Tepeteopan%20-%20Buscar%20con%20Google!15sCgIgAQ&imagekey=!1e2!2s9djOF7ULwwi4VTv6m16hPQ&hl=es&sa=X&ved=2ahUKEwiw0bSQ54_4AhU9kYkEHYIXCncQpx96BAhIEAM" class="botonapartado1" align="center"><img src="img/ic_ubicacion.jpg" alt="imagen de sala" width="20" height="20" align="left">
                    UBICACION DE LA TIENDA
                 </a> 
                     
                    <button type="button" id="bu1"><img src="https://cdn-icons-png.flaticon.com/512/107/107831.png" class="imgcompra" alt="">CARRITO (0)</button>
                    
                    
    
                </div>    </div>
                

            </header>


</div> 







<div class="body">






<div class="bus">
  
  <div class="container-2">

                   <form action="" method="get"   class="icon"  >
                   <input type="text" name="busqueda" id="search" placeholder="Buscar Producto" class="fa fa-search">
                   <br>
                   <br>
                   <br>
                   <input type="submit" name="enviar" value="Buscar" class="clas">

</form>


</div> 


</div> 




<br><br>
<?php 
$in = include("pro/dbp.php");
if(isset($_GET['enviar'])){
    $busqueda = $_GET['busqueda'];
    
   


    $consulta =(" SELECT * FROM producto WHERE nombre LIKE '%$busqueda%'");
    $result  = mysqli_query($conexion,$consulta);
    while($row =$result ->fetch_array()){

      $nom = $row['nombre'];
      $des = $row['descripcion_txt'];
      $can = $row['cantidad_stock'];
      $pre = $row['precio_venta'];
      $img = $row['imagen'];
   
		?>


<div class="conts">
		<div class="cont">
			<div class="cont1">
			<img id="imgca"src="data:image/jpg;base64,<?php echo base64_encode($img); ?>">
			<b><h4><?php echo $nom; ?></h4></b>
				<div class="producto"><?php echo $des; ?></div>
				<div class="producto">Disponibles: <?php echo $can; ?></div>
				<div class="producto" ><b>$ <?php echo $pre; ?></b></div>
            







            </div>
			</div>
			
		</div>
	

		<?php
	
 }
    }

?>
	</div>




</div>



</body>
</html>
