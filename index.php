<html>
    <head>
        <title>Ferreteria: El Divino Niño</title>
        <meta charset="UTF-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" href="css/estilo.css">
    </head>

    <body>

        <div id="contenedor">
            <div id="barra">
              <div id="texto"></div>
            </div>
          </div>


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
                    <img src="img/logo.jpg" alt="imagen de sala" width="75" height="60" align="left">
                     </div>  
                </a>
                <a  class="boini" >
                    <strong>FERRERTERIA: "EL DIVINO NIÑO"</strong>
                          
               

                  </a>

                  <div class="botonesini" >

                  <a  href="inicio.html" class="botonapartado1" ><img src="img/ic_inicio.jpg" alt="imagen de sala" width="20" height="20" >
                    INICIO
                  </a>

                 <strong><a   href="pro/most2.php" class="botonapartado1" ><img src="img/ico_prod.jpeg" alt="imagen de sala" width="20" height="20" >
                    PRODUCTOS
                  </a> </strong> 

                <a  target="_blank"  href="AYUDA.pdf" class="botonapartado1" ><img src="img/ic_ayuda.jpg" alt="imagen de sala" width="20" height="20">
                  AYUDA
                </a>
                <a target="_blank"  href="marcas.html" class="botonapartado1" ><img src="img/ic_marcas.jpg" alt="imagen de sala" width="20" height="20">
                    MARCAS
                 </a>
                 <a  target="_blank" href="https://www.google.com/maps/uv?pb=!1s0x85c59b4c9e546fe7%3A0xe73fd97835893a85!3m1!7e115!4s%2Fmaps%2Fplace%2FCalle%2Bindependencia%2BS%252FN%2C%2BSan%2BCrist%25C3%25B3bal%2BTepeteopan%2F%4018.5236777%2C-97.5472842%2C3a%2C75y%2C162.03h%2C90t%2Fdata%3D*213m4*211e1*213m2*211s9djOF7ULwwi4VTv6m16hPQ*212e0*214m2*213m1*211s0x85c59b4c9e546fe7%3A0xe73fd97835893a85%3Fsa%3DX!5sCalle%20independencia%20S%2FN%2C%20San%20Crist%C3%B3bal%20Tepeteopan%20-%20Buscar%20con%20Google!15sCgIgAQ&imagekey=!1e2!2s9djOF7ULwwi4VTv6m16hPQ&hl=es&sa=X&ved=2ahUKEwiw0bSQ54_4AhU9kYkEHYIXCncQpx96BAhIEAM" class="botonapartado1" align="center"><img src="img/ic_ubicacion.jpg" alt="imagen de sala" width="20" height="20" align="left">
                    UBICACION DE LA TIENDA
                 </a> 
                     
                    
    
                </div>    </div>
<div class="body1">

	         <center><div class="header"><header>Foro</header></div></center>

              <div class="form" >

	        	<table  width="850px">

		
		         <tr >
		           <td width="20px"></td>
			       <td width="100px">Tema</td>
		    	   <td width="200px">Fecha</td>
			       <td width="200px">Respuestas</td>  

		                     </tr>
		          </div>	
				  
                        	 <?php 
		                         include("db1.php");
		                         $query = "SELECT * FROM  foro WHERE identificador = 0 ORDER BY fecha DESC";
		                         $result = $mysqli->query($query);
		                         while($row = mysqli_fetch_array($result, MYSQLI_ASSOC)){
			                         $id = $row['ID'];
			                         $titulo = $row['titulo'];
			                         $fecha = $row['fecha'];
			                         $respuestas = $row['respuestas'];
			                     echo "<tr>";
				                 echo "<td><a href='foro.php?id=$id'>ver</a></td>";
				                 echo "<td>$titulo</td>";
				                 echo "<td>".date("d-m-y   <---> $fecha")."</td>";
				                 echo "<td>$respuestas</td>";
			                     echo "</tr>";
		                    }
	                        ?>
 
	                         </table>
	


	                    <div class="textofin"><a href="formulario.php"> Nuevo Tema </a>	</div>		
				
                    </div>
<div>
	</body>
	</html>