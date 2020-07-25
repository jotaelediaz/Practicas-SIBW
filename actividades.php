<?php include ("header.php"); ?>
    
    <div class="fila1 actividades">
        <div class="cubiertacolor negro">
            <div>
                <h1 class="titular fullwrapper"><img src="img/iconoactividades.png">
                Grandes planes organizados por nuestro hotel para sacar <br>
                el máximo partido de tu visita a Granada
                </h1>
            </div>
        </div>
    </div>
    
    <div id="principal">
        <div class="fila2 habitaciones ">
            <div class="fullwrapper">
                <div class="descripcion">
                    <p>Descubrirá con nostros la Alhambra; visitando sus palacios, Mexuar, Comares, Leones, Generalife; paseando por sus patios, de los Arrayenes, la Reja, la Acequia, la Sultana; y disfrutando de sus jardines, de Partal, de la Medina y por suspuesto del Generalife con sus gracioso juegos de agua, y su laberintico diseño. </p>
                        
                    <p>También podrá conocer con nosotros una de las estaciones de esquí más importantes de España: Sierra Nevada, donde podrás disfrutar de miles de kilómetros esquiables. Además, Sierra Nevada cuenta con el pico más alto de la península: el Mulhacen.</p> 
                </div>
            </div>
        </div>
        <div class="fila3 actividades oscuro tiraproductos">
            <div class="fullwrapper">
            
                <h2>Nuestras actividades </h2>
                
                <?php $arr_actividades = get_actividades();
                
                foreach($arr_actividades as $actividad) { //Hacemos que para cada actividad contenida en el array, se genere un DIV 
                ?>
                    <div class="productotipo">        
                        <img src="<?php echo $actividad[4] ?>"/>
                        <h3><?php echo $actividad[1] ?></h3>
                		<h4 class="etiquetaprecio"><?php echo $actividad[3] ?>€/noche</h2>
                        <p><?php echo $actividad[2] ?></p>
                        <a class="boton" href="<?php echo 'habitacion.php?idhab='.$actividad[0]?>">Reserva esta habitación</a>
                    </div>
                <?php } ?>
            </div>
        </div>
        
        <div class="fila4 actividades calltoaction">
            <div class="fullwrapper">
                <img src="img/iconocontacta.png" width="126px" height="90px"/>
                <p>¿Tiene alguna duda sobre nuestro hotel, nuestras habitaciones o los paquetes turísticos? ¿O quizás prefieres realizar tu reserva por teléfono? Póngase en contacto con nosotros y nos ocuparemos de ello.<br/>
                <a class="boton" href="habitaciones.php">Contacte con nosotros</a>
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
