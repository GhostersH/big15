var tour = new Tour({
    steps: [
    {
      element: ".tour-step1",
      title: "¡Hola!",
      content: "Hemos creado una herramienta digital que recopila toda la información de la Guía de Ventas, BIG15 y mapas de itinerarios.",
      placement: "right",
      onShow: function(tour){
        var nameProvided = $("input[name=your_name]").val();
        if ($.trim(nameProvided) !== ""){
            name = nameProvided;
        }
    }
    },
    {
        element: ".tour-step2",
        title: "Para comenzar puedes dar clic en cada 'Isla'",
        content: "Podrás observar como se marcan sus Puntos de Visita + Actividades + Itinerarios que la visitan y los Big15 que puedes ver.",
        placement: "bottom"
  
    },
    {
      element: ".tour-step3",
      title: "También puedes dar clic en cada 'Punto de visita'",
      content: "Podrás observa que se marca la Isla a la que pertenece + Actividades + Barcos que lo visitan"
    },
    {
      element: ".tour-step4",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: ".tour-step5",
      title: "En la parte de actividades cuando veas:",
      content: "P, se refiere a una actividad exclusiva de La Pinta"
    },
    {
      element: ".tour-step6",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: ".tour-step7",
      title: "I, se refiere a una actividad exclusiva del Isabela II",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: ".tour-step8",
      title: "S, se refiere a una actividad exclusiva del Santa Cruz II",
      content: ""
    },
    {
      element: ".tour-step9",
      title: "Los vistos quieren decir que los 3 barcos realizan esa actividad.",
      content: ""
    },
    {
      element: ".tour-step10",
      title: "Al dar clic al nombre del Barco ",
      content: "Se marcan todos sus itinerarios con sus Islas, Puntos de Visita y Big15"
    },
    {
      element: ".tour-step11",
      title: "Al darle clic a un 'Itinerario'",
      content: "Verás cómo se resaltan su secuencia de visita + Isla + Puntos de Visita + Actividades + Big15"
    },
    {
      element: ".tour-step12",
      title: "Debajo de cada itinerario se encuentra el número total de Big15 que observa dicho itinerario (11 B15)",
      content: " ",
      placement: "bottom"
    },
    {
      element: ".tour-step13",
      title: "También puedes observar el día en el que el itinerario empieza",
      content: "(Ejemplo: L1, empieza el Lunes)",
      placement: "left"
    },
    {
      element: ".tour-step14",
      title: "Dentro de cada columna de itinerario verás un código: ",
      content: "'7-D4Lu' el 7 es el número de la actividad, que ocurre en el día 4 que es el Lunes.",
      placement: "top"
    },
    {
      element: ".tour-step15",
      title: "Al darle clic a una especie del BIG15 ",
      content: "Podrás observar cómo se marcan las Islas donde lo puede ver + Puntos de Visita + Itinerarios"
    },
    {
      element: ".tour-step16",
      title: "Los números debajo de los BIG15",
      content: "Es el número total de itinerarios en el que se puede observar cada especie. Es decir, mientras menor sea el número la especie es más difícil de observar. ",
      placement: "bottom"
    },
    {
      element: ".tour-step17",
      title: "Los números de la columna final derecha",
      content: "Es el total de BIG15 que se observan por punto de visita.",
      placement: "left"
    },
    {
      element: ".tour-step18",
      title: "¡Listo! ¡Aprende fácil y rápido!",
      content: "Toda sugerencia de mejora es bienvenida a “Danny Garrido”",
      placement: "center"

    }  
  ],
    backdrop: true,
    storage: false
  });
  
  tour.init();
  //tour.start();
  $('#initialize-tour').click(function(){
    tour.restart();

  });




/*
$(document).ready(function(){

// Instance the tour
var tour = new Tour({
    steps: [
    {
      element: ".tour-step1",
      
    },
    {
      element: "#tour-step2",
      title: "Para comenzar puedes dar clic en cada 'Isla'",
      content: "Podrás observar como se marcan sus Puntos de Visita + Actividades + Itinerarios que la visitan y los Big15 que puedes ver."
    },
    {
      element: "#tour-step3",
      title: "También puedes dar clic en cada 'Punto de visita'",
      content: "Podrás observa que se marca la Isla a la que pertenece + Actividades + Barcos que lo visitan"
    },
    {
      element: "#tour-step4",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step5",
      title: "En la parte de actividades cuando veas:",
      content: "P, se refiere a una actividad exclusiva de La Pinta"
    },
    {
      element: "#tour-step6",
      title: "Al darle clic a cada 'Actividad'",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step7",
      title: "I, se refiere a una actividad exclusiva del Isabela II",
      content: "Se marcará la Isla, sus Puntos de Visita y los itinerarios que la realizan"
    },
    {
      element: "#tour-step8",
      title: "S, se refiere a una actividad exclusiva del Santa Cruz II",
      content: ""
    },
    {
      element: "#tour-step9",
      title: "Los vistos quieren decir que los 3 barcos realizan esa actividad.",
      content: ""
    },
    {
      element: "#tour-step10",
      title: "Al dar clic al nombre del Barco ",
      content: "Se marcan todos sus itinerarios con sus Islas, Puntos de Visita y Big15"
    },
    {
      element: "#tour-step11",
      title: "Al darle clic a un 'Itinerario'",
      content: "Verás cómo se resaltan su secuencia de visita + Isla + Puntos de Visita + Actividades + Big15"
    },
    {
      element: "#tour-step12",
      title: "Debajo de cada itinerario se encuentra el número total de Big15 que observa dicho itinerario",
      content: " "
    },
    {
      element: "#tour-step13",
      title: "También puedes observar el día en el que el itinerario empieza",
      content: "(Ejemplo: L1, empieza el Lunes)"
    },
    {
      element: "#tour-step14",
      title: "Dentro de cada columna de itinerario verás un código: ",
      content: "'7-D4Lu' el 7 es el número de la actividad, que ocurre en el día 4 que es el Lunes."
    },
    {
      element: "#tour-step15",
      title: "Al darle clic a una especie del BIG15 ",
      content: "Podrás observar cómo se marcan las Islas donde lo puede ver + Puntos de Visita + Itinerarios"
    },
    {
      element: "#tour-step16",
      title: "Los números debajo de los BIG15",
      content: "Es el número total de itinerarios en el que se puede observar cada especie. Es decir, mientras menor sea el número la especie es más difícil de observar. "
    },
    {
      element: "#tour-step17",
      title: "Los números de la columna final derecha",
      content: "Es el total de BIG15 que se observan por punto de visita."
    },
    {
      element: "#tour-step18",
      title: "¡Listo! ¡Aprende fácil y rápido!",
      content: "Toda sugerencia de mejora es bienvenida a “Danny Garrido”"
    }
  ]});
  
  // Initialize the tour
  tour.init();
  
  // Start the tour
  tour.start();

});

*/