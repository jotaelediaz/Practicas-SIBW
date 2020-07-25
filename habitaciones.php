<?php include ("header.php"); ?>

    <div class="fila1 habitaciones">
        <div class="cubiertacolor negro">
            <div>
                <h1 class="titular fullwrapper"><img src="img/iconohabitacionesN.png" />
                25 amplias y luminosas habitaciones <br/>repartidas en tres plantas con ascensor.</h1>
            </div>
        </div>
    </div>
    
    <div id="principal">
        <div class="fila2 habitaciones ">
            <div class="fullwrapper">
                <div class="descripcion">
                    <p>Nuestras habitaciones con vistas a Plaza Nueva y a la Torre de la Vela, que pertenece al recinto de la Alhambra, le permitirán disfrutar de una perspectiva distinta de la ciudad. Disfrute de esta experiencia por un pequeño suplemento. Asimismo el hotel dispone de habitaciones interiores, recomendables para personas que desean descansar con la máxima tranquilidad.</p>
    
                    <p>Las habitaciones también disponen de un cuarto de baño completo, aire acondicionado, TV, teléfono directo y una caja de seguridad gratuita para su mayor tranquilidad.</p> 
                </div>
            </div>
        </div>
        <div class="fila3 habitaciones oscuro tiraproductos">
            <div class="fullwrapper">
            
                <h2>Nuestras habitaciones</h2>
                
                <?php $arr_habitaciones = get_habitaciones();
                
                foreach($arr_habitaciones as $habitacion) { //Hacemos que para cada habitación contenida en el array, se genere un DIV 
                ?>
                    <div class="productotipo">        
                    <img src="<?php echo $habitacion[4] ?>"/>
                    <h3><?php echo $habitacion[1] ?></h3>
            		<h4 class="etiquetaprecio"><?php echo $habitacion[3] ?>€/noche</h2>
                    <p><?php echo $habitacion[2] ?></p>
                    <a class="boton" href="<?php echo 'habitacion.php?idhab='.$habitacion[0]?>">Reserva esta habitación</a>
                    </div>
                <?php } ?>

            </div>
        </div>
        
        <div class="fila4 habitaciones calltoaction">
            <div class="fullwrapper">
                <img src="img/iconoservicios.png" width="126px" height="90px"/>
                <p>Si te gustan nuestras habitaciones, echa un ojo a los servicios que incluye tu estancia en nuestro hotel: Televisión por satélite, accesorios de baño, aire acondicionado, parking cubierto, ...<br/>
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
