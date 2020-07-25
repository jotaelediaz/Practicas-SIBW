<?php

    //Define el menú de navegación. Funciona mediante tuplas [Nombre del elemento, ruta del elemento, parametroURL, array(subelementos), ]
    
    $array_menu = [
        ["Nuestro hotel", "nuestro-hotel"],
        ["Habitaciones", "habitaciones", null, array(
            ["Habitación doble", "habitacion", "idhab=1"],
            ["Habitación doble superior", "habitacion", "idhab=2"],
            ["Habitación triple", "habitacion", "idhab=3"]
        )],
        ["Actividades", "actividades", null, array(
            ["Visita la Alhambra", "actividad", "idact=1"],
            ["Sierra Nevada", "actividad", "idact=2"],
            ["Baños Árabes", "actividad", "idact=3"],
            ["Tren Turístico", "actividad", "idact=4"],
            ["Espectáculo Flamenco", "actividad", "idact=5"],
            ["Parque de las Ciencias", "actividad", "idact=6"]
        )],
        ["Cómo llegar", "como-llegar"],
        ["Contacto", "contacto"]
    ];
?>