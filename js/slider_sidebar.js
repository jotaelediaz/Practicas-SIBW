/* GENERA UN SLIDER */

function generaSliderSidebar(){
    var diapositiva_s = document.getElementById("slider_sidebar");
    var titular_s = document.getElementById("titular_slider_sidebar");
    var enlace_s = document.getElementById("enlace_slider_sidebar");
    var img_array_s=["img/slider1.jpg","img/slider2.png","img/slider3.jpg"];
    var titulos_array_s=["Cómodas y acogedoras habitaciones:<br/>Individuales o dobles","Actividades guiadas para que visites<br/> la Alhambra durante tu estancia", "Desayunos tradicionales incluidos<br/> en todas las habitaciones"];
    var enlaces_array_s=["habitaciones.html","actividades.html", "servicios.html"]
    var indice_s=0;
    var intervalo_s = 6000;

    function cambiarDiapositivaSlider() {
	diapositiva_s.style.background = "url('"+img_array_s[indice_s%img_array_s.length]+"') no-repeat center center fixed";
	diapositiva_s.style.backgroundSize = "cover";
	titular_s.innerHTML = titulos_array_s[indice_s%titulos_array_s.length]
	enlace_s.href = enlaces_array_s[indice_s++%enlaces_array_s.length]
    }

    setInterval(cambiarDiapositivaSlider, intervalo_s);
}

