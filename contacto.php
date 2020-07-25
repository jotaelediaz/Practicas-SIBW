<?php include ("header.php"); ?>
    <div class="fila1 contacto">
        <div class="cubiertacolor negro">
            <div>
                <h1 class="titular fullwrapper"><img src="img/iconocontacto.png">
                Atención disponible las 24 horas del día para atender<br>
                tus dudas, reservas o incluso información turística.
                </h1>
            </div>
        </div>
    </div>
    
    <div id="principal">
        <div class="fila2 contacto ">
            <div class="fullwrapper">
                
                <div class="descripcion">
                    <h3>Información de Contacto</h3>
                    <p>Dirección: Imprenta, nº 2 - Granada (España)<br/>
                       Teléfono: +34 958 215 273<br/>
                       Fax: +34 958 225 765<br/>
                       Email: info@hotel-plazanueva.com</p>
                </div>
                
                <div class="fotos">
                    <img src="img/fotocontactoinfo.jpg"/>
                </div>
            
            </div>
        </div>
        
        
        <div class="fila3 oscuro contacto">
            <div class="fullwrapper">
            
                <h2>Formulario de Contacto</h2>
                <form action="mail.php" method="post" class="formulario" onsubmit="return validarFormulario()">
                    <label>Nombre y apellidos</label>
                    <input type="text" id="camponombre" value="" size="40" name=name>
                    <label>Teléfono</label>
                    <input type="tel" id="campotelefono" value="" size="40" name=tel>
                    <label>Correo electrónico</label>
                    <input type="text" id="campoemail" value="" size="40" name=email>
                    <label>Mensaje</label>
                    <textarea cols="40" id="campomensaje" rows="10" name=message></textarea>
                    <input type="submit" value="Enviar" class="submit"><br>
                </form>
    	    <div id="erroresformulario"> </div>
                
            </div>
        </div>
        
        <div class="fila4 actividades calltoaction">
            <div class="fullwrapper">
                <img src="img/iconollega.png" width="126px" height="90px"/>
                <p>¿Necesitas saber donde se encuentra el hotel o necesitas indicaciones como llegar?¿Indicaciones sobre transporte público?<br/>
                <a class="boton" href="habitaciones.php">Dónde estamos</a>
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
