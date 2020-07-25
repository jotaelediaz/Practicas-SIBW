<?php include ("header.php");?>
    
    <?php 
        $arrayhab = leer_habitacion(); // Leemos el tipo de habitación de la URL y obtenemos del CSV los datos de la habitación. Guardamos todo en un array.
        if ($arrayhab == -1)
            header('Location: '.'index.php'); // Si la habitación no existe, redirigimos a la portada
        
    ?>
    <div class="fila1 habitacion" style="background: url('<?php echo $arrayhab[4] ?>') no-repeat center center fixed; background-size: cover;">
        <div class="cubiertacolor negro">
            <div>
                <h1 class="titular fullwrapper"><img src="img/iconohabitacionesN.png" /><?php echo $arrayhab[1];?></h1> 
            </div>
        </div>
    </div>
    
    <div id="principal">
        <div class="fila2 habitacion ">
            <div class="fullwrapper">
                <div class="descripcion">
                   <?php echo $arrayhab[2]; ?>
                   <div class="calltocompra">
                       <div class="etiquetaprecio"><?php echo $arrayhab[3];?>€/noche</div>
                       <a class="boton" href="contacto.php">Contáctanos para reservar</a>
                    </div>
                </div>
                <img class="habitacionimg" src="<?php echo $arrayhab[4];?>"/> 
            </div>
        </div>
        
        <div class="fila4 habitacion oscuro">
            <div class="fullwrapper">
            
                <h2>Fotografías</h2>
            
                <div class="fotos"> 
                    <?php foreach(array_slice($arrayhab, 4) as $foto){
                        echo '<img src="' . $foto . '"/>';
                    }?>

                </div>
                
            </div>
        </div>
        
        <div class="fila3 habitacion tiraproductos">
                <div id="listaservicios">
                    <ul>
                        <li><img src="img/serv1.png">Recepción 24H</li> <!--Recpción 24H-->
                        <li><img src="img/serv2.png">Wifi</li> <!--Wifi-->
                        <li><img src="img/serv3.png">Bar-Cafetería</li> <!--Bar-Cafetería-->
                        <li><img src="img/serv4.png">Consigna</li> <!--Consigna de equipajes-->
                        <li><img src="img/serv5.png">Aire acondicionado</li> <!--Aire acondicionado-->
                        <li><img src="img/serv6.png">Parking cubierto</li> <!--parking cubierto-->
                        <li><img src="img/serv7.png">Entrada accesible</li> <!--Acceso a discapacitados-->
                        <li><img src="img/serv8.png">Room-Service</li> <!--Room-sevice-->
                    </ul>
                </div>
                
        </div>
        
        <div class="fila4 habitaciones calltoaction">
            <div class="fullwrapper">
                <img src="img/iconoactividadesnegro.png" width="126px" height="90px"/>
                <p>Si ya has reservado tu habitación, ¿Por qué no pruebas nuestras experiencias? <br/> Visitas a la Alhambra, esquí en Sierra Nevada y muchas más que harán tu visita a Granada inolvidable.<br/>
                <a class="boton" href="habitaciones.php">Consulta nuestros servicios</a>
                </p>
                
            </div>
        </div>
    </div>
    <div id="sidebar">
        <?php include("sidebar.php"); ?>
    </div>
<?php include ('footer.php'); ?>
</body>
</html>
