<?php include ("header.php");?>
    
    <?php 
        $arrayact = leer_actividad(); // Leemos el tipo de habitación de la URL y obtenemos del CSV los datos de la habitación. Guardamos todo en un array.
        if ($arrayact == -1)
            header('Location: '.'index.php'); // Si la habitación no existe, redirigimos a la portada
        
    ?>
    <div class="fila1 habitacion" style="background: url('<?php echo $arrayact[4] ?>') no-repeat center center fixed; background-size: cover;">
        <div class="cubiertacolor negro">
            <div>
                <h1 class="titular fullwrapper"><img src="img/iconoactividades.png" /><?php echo $arrayact[1];?></h1> 
            </div>
        </div>
    </div>
    
    <div id="principal">
        <div class="fila2 habitacion ">
            <div class="fullwrapper">
                <div class="descripcion">
                   <?php echo $arrayact[2]; ?>
                   <div class="calltocompra">
                       <div class="etiquetaprecio"><?php echo $arrayact[3];?>€/persona</div>
                       <a class="boton" href="contacto.php">Contáctanos para reservar</a>
                    </div>
                </div>
                <img class="habitacionimg" src="<?php echo $arrayact[4];?>"/> 
            </div>
        </div>
        
        <div class="fila4 habitacion oscuro">
            <div class="fullwrapper">
            
                <h2>Fotografías</h2>
            
                <div class="fotos"> 
                    <?php foreach(array_slice($arrayact, 4) as $foto){
                        echo '<img src="' . $foto . '"/>';
                    }?>

                </div>
                
            </div>
        </div>
        
        
        <div class="fila4 habitaciones calltoaction">
            <div class="fullwrapper">
                <img src="img/iconohabitaciones.png" width="126px" height="90px"/>
                <p>El hotel le ofrece 25 amplias y luminosas habitaciones repartidas sobre 3 plantas con ascensor.<br/> Todas con su propio estilo, servicio de habitaciones, Wifi, aire acondicionado y room-service. Reserva hoy tu habitación.<br/>
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
