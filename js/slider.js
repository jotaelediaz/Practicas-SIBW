/* GENERA UN SLIDER */

function generaSlider(){
    var diapositiva = document.getElementById("slider");
    var titular = document.getElementById("titular_slider");
    var enlace = document.getElementById("enlace_slider");
    var img_array=["img/slider1.jpg","img/slider2.png","img/slider3.jpg"];
    var titulos_array=["Habitaciones individuales:<br/>Desde sólo 20€","Actividades guiadas para que visites<br/> la Alhambra durante tu estancia", "Desayunos tradicionales incluidos<br/> en todas las habitaciones"];
    var enlaces_array=["habitaciones.html","actividades.html", "servicios.html"]
    var indice=0;
    var intervalo = 6000;

    function cambiarDiapositiva() {
	//diapositiva.style.background = "url('"+img_array[indice%img_array.length]+"') no-repeat center center fixed";
	//diapositiva.style.backgroundSize = "cover";
    diapositiva.style.background = "url('"+img_array[indice%img_array.length]+"') no-repeat center center";
	diapositiva.style.backgroundSize = "cover";
	titular.innerHTML = titulos_array[indice%titulos_array.length]
	enlace.href = enlaces_array[indice++%enlaces_array.length]
    }

    setInterval(cambiarDiapositiva, intervalo);
}

