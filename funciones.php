<?php 

/* Devuelve el nombre de la sección de la web basándonos en el nombre del fichero PHP extraído de la URI la página*/
function get_seccion_actual(){
	$seccion = $_SERVER['REQUEST_URI'];
	
	$seccion = str_replace("/","",$seccion);
	$seccion = str_replace(".php","",$seccion);
	return $seccion;
}

/* Devuelve true si el nombre de la sección actual coincide con el recibido como argumento */ 
function check_seccion($nombre){
	if($nombre == get_seccion_actual())
		return true;
	else
		return false;
}

/* Generar menú principal de la cabecera */
function print_nav($array_menu) {
	
	
	foreach ($array_menu as list($nombre, $archivo, $parametroURL, $array_submenu)) { //Recorremos el array para obtener tuplas de [Nombre, archivo, parametroURL, subelementos]
        
        echo '<li class="superior_menu ';
        if(check_seccion($archivo)) echo 'sec_actual'; // Comprobamos si la sección es la actual para la clase CSS 
        echo '" id="' . $archivo . '"><a href="' . $archivo . '.php';
        if(!is_null($parametroURL)){ echo '?' . $parametroURL; }
        echo '">' . $nombre. '</a>'; 
        
        if(!empty($array_submenu)){ // Si el elemento contiene subelementos...
        
        	echo '<ul class="submenu" id="$sub-' . $archivo . '">';  // Creamos un submenú...
        	
        	print_nav($array_submenu); // Y llamamos recursivamente a la función para que se cree
        	
        	echo '</ul>';
        }
        
        echo'<span class="separador">·</span>';
        
    };
    
}

/* Genera menú principal de la sidebar */
function print_sidebar_menu($array_menu) {
	
	echo '<ul>';
	
	if(!check_seccion('index')) {echo '<li class="superior_menu" id="index"><a href="index.php">Home</a>';}
	foreach ($array_menu as list($nombre, $archivo)) { // Recorremos el array del menú para obtener tuplas de [Nombre, archivo]
        
        if(!check_seccion('$archivo')) {
        	 echo '<li class="superior_menu" id="' . $archivo . '"><a href="' . $archivo . '.php">' . $nombre. '</a>';
        }
        
    };
    
    echo '</ul>';
}

/* Lee la lista de tipos de habitaciones del CSV e imprime un menú de ello */
function get_habitaciones(){
	
	$array_habs = array();
	$file = fopen("csv/datoshabitaciones.csv","r"); //Abrimos el archivo CSV
	
	while(!feof($file)) {array_push($array_habs,fgetcsv($file));}
	
	fclose($file);	//Cerramos el CSV
	return $array_habs; //Devolvemos el array con los datos de la habitación
	
}

/* Lee la lista de tipos de actividades del CSV e imprime un menú de ello */
function get_actividades(){
	
	$array_acts = array();
	$file = fopen("csv/datosactividades.csv","r"); //Abrimos el archivo CSV
	
	while(!feof($file)) {array_push($array_acts, fgetcsv($file));}
	
	fclose($file);	//Cerramos el CSV
	return $array_acts; //Devolvemos el array con los datos de la habitación
	
}

/* Lee el tipo de habitación como parámetro GET de la URL y carga en un array los datos obtenidos del CSV */
function leer_habitacion(){
	
	$idhab = $_GET["idhab"]; //Leemos de la URL el parámetro idhab, que indica el tipo de habitación (Ej: ***.com/?idhab=1)

	$file = fopen("csv/datoshabitaciones.csv","r"); //Abrimos el archivo CSV

	while(!feof($file)) {
		
		$array_hab = fgetcsv($file); //Usamos la funcion fgetcsv para obtener una línea del CSV e introducirla en un array
		
		if($array_hab[0] == $idhab) { //Si el ID de habitación del CSV (Primer campo de cada línea) coincide con el de la URL...
			fclose($file);	//Cerramos el CSV
			return $array_hab; //Devolvemos el array con los datos de la habitación
		}
  	}
  	fclose($file);
  	return $array_hab = -1; //Si no se encuentra, devolvemos el código de error -1

}

/* Lee el tipo de actividad como parámetro GET de la URL y carga en un array los datos obtenidos del CSV */
function leer_actividad(){
	
	$idact = $_GET["idact"]; //Leemos de la URL el parámetro idact, que indica el tipo de actividad (Ej: ***.com/?idact=1)

	$file = fopen("csv/datosactividades.csv","r"); //Abrimos el archivo CSV

	while(!feof($file)) {
		
		$array_act = fgetcsv($file); //Usamos la funcion fgetcsv para obtener una línea del CSV e introducirla en un array
		
		if($array_act[0] == $idact) { //Si el ID de actividad del CSV (Primer campo de cada línea) coincide con el de la URL...
			fclose($file);	//Cerramos el CSV
			return $array_act; //Devolvemos el array con los datos de la actividad
		}
  	}
  	fclose($file);
  	return $array_act = -1; //Si no se encuentra, devolvemos el código de error -1

}
?>