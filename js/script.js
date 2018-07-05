var general = {
    elementos:{
        "todo":[
            "#menuInicio",
            "#menuTour",
            "#menuContacto",
            "#footerRRSSTitulo"            
        ],
        "tours.php":[
            "#tourDesc1",
            "#tourDesc2",
            "#cpcReservar",
            "#bcInicio",
            "#bcTour",
            "#tituloTour",
            "#modalReservar > div > h3"
        ],
        "index.php":[
            "#destinosTitulo",
            "#introTextoTitulo",
            "#introTexto1",
            "#introTexto2"
        ],
        "contacto.php":[
            
        ]
    },
    traducciones:{
      en:{
        "tours.php":{
            "#tourDesc1":
              "We'll begin our tour with a walk in Valparaiso´s port where we´ll learn the transcendence of this site in the Chilean history, to continue with a rather unique transportation in the country (also the second oldest mean of transport in the whole South America) to arrive at  a classic Harbour spot."
              +"Then we'll stroll by the streets that marked the golden age of our historic Valparaiso learning some unique tales and stories on our way. Later we'll use one of the most visited funicular in the city which will take us up to the hills well known by their modern street art and their colorful houses and viewpoints, taking a trip to the heart of their rich heritage portrayed in their nostalgic alleys and stairs that will take us down to Plaza where we'll appreciate its monuments.",
            "#tourDesc2":
              "We cordially invite you to the remarkable Valparaiso a world heritage site and beloved city.",
              "#cpcReservar":"Reserve: 65 USD",
              "#bcInicio":"Home",
              "#bcTour":"Tour",
              "#tituloTour":"Our Tour",
              "#modalReservar > div > h3":"Reserve"
          },
        "todo":{
            "#menuInicio":"Home",
            "#menuTour":"Tour",
            "#menuContacto":"Contact us",
            "#footerRRSSTitulo":"Social Networks"},
        "index.php":{
            "#destinosTitulo":"Destinations",
            "#introTextoTitulo":"Your guide in the city",
            "#introTexto1":"I have travelled this good earth for over fifteen years in the very heart of the tourism industry, discovering diverse cultures and immersed in this enthusiastic business shoulder to shoulder with people from all around the globe.",
            "#introTexto2":"Is that excitement of being involved in a journey to discovery the essence of Valparaiso Master Tour, a project that reveals each corner of this vast region, our cherished Valparaiso is to be introduced to its fullest ... let me take you then on a journey to live this experience not quite like an average tourist but rather like a \" porteño \" , as one of us."
        }
        
     },
      es:{
        "tours.php":{
            "#tourDesc1":
              "Iniciaremos nuestro recorrido en el Puerto de Valparaíso donde conoceremos la importancia de este gran muelle en la historia de Chile. Continuaremos nuestro camino utilizando un medio de transporte único en el país y el Segundo de mayor antigüedad en sudamerica para llegar a una zona típica porteña."
              +" Caminaremos luego por las calles que marcaron la época de oro de Nuestro gran Valparaíso conociendo algunas historias y anécdotas únicas. Avanzaremos hasta llegar a uno de los funiculares mas visitados de nuestra ciudad el cual nos llevara a conocer los cerros ricos en arte callejero además de lo colorido de sus casas y miradores… Recorreremos sus callejones, escalas y conoceremos su rica historia para así descender y llegar a conocer nuestro gran monumento!",
            "#tourDesc2":
              "¡Te invitamos a conocer el gran Valparaíso, Patrimonio de la Humanidad, y nuestra ciudad querida!",
              "#cpcReservar":"Reservar: 65 USD",
              "#bcInicio":"Inicio",
              "#bcTour":"Tour",
              "#tituloTour":"Nuestro Tour",
              "#modalReservar > div > h3":"Reservar"
        },
        "todo":{
            "#menuInicio":"Inicio",
            "#menuTour":"Tour",
            "#menuContacto":"Contacto",
            "#footerRRSSTitulo":"Redes Sociales"},
        "index.php":{
            "#destinosTitulo":"Destinos",
            "#introTextoTitulo":"Tu guía en la ciudad",
            "#introTexto1":"Hola! Soy Osvaldo gerente y fundador de VALPARAISO MASTER TOUR, he recorrido el mundo y he estado ligado al turismo por más de 15 años. He conocido diferentes culturas e interactuado con personas de diferentes partes del mundo. Me apasiona compartir mis experiencias de viaje, es por eso que nace la idea de crear VALPARAISO MASTER TOUR, proyecto que no solo te permitirá ver Valparaiso y su historia, sino que con nosotros también disfrutaras la auténtica travesía de esta colorida región.",
            "#introTexto2":"Nuestra misión es involucrarte en esta aventura con cada rincón de este hermoso puerto y mostrarte a mi querida Valparaiso tal y como es. Te propongo acompañarme a vivir la experiencia de este viaje no solo como un turista, te aseguro que con nosotros te sentirás como un porteño real."            
        }        
        
     }
    },
    cargar: function () {
        var idioma = general.cargarValor("idioma");
        if(idioma === undefined || idioma === null){
            general.guardarValor("idioma","en");
        }
        
        $(window).load(function () {
            $('.page-slideshow').addClass('page-loading');
            $('.loading-animation-spinner').hide();
            $('.loading-animation').fadeOut('slow');
            $('body').css('overflow', 'visible');
        });
        $(document).ready(function () {
            general.accionesBotones();
            general.setearMenu();
            general.setearTextos();
        }); //        

    },
    setearMenu: function () {
        var menu = window.location.pathname;
        if (menu === "/" || menu === "/index.php") {
            $("#ulMenu li:eq(0)").addClass("active");
        } else if (menu === "/tours.php") {
            $("#ulMenu li:eq(1)").addClass("active");
        } else if (menu === "/contacto.php") {
            $("#ulMenu li:eq(2)").addClass("active");
        }
    },
    getUrlParameter: function getUrlParameter(sParam) {
        var sPageURL = decodeURIComponent(window.location.search.substring(1)),
                sURLVariables = sPageURL.split('&'),
                sParameterName,
                i;

        for (i = 0; i < sURLVariables.length; i++) {
            sParameterName = sURLVariables[i].split('=');

            if (sParameterName[0] === sParam) {
                return sParameterName[1] === undefined ? true : sParameterName[1];
            }
        }
    },
    setearTextos: function(){
        var pagina = general.getPagina();
        var idioma = general.cargarValor("idioma");
        
        general.elementos.todo.forEach(function(item,index){
            $(item).hide(function(){
                $(this).text(general.traducciones[idioma].todo[item]);
                $(this).slideDown();
            });            
        });

        general.elementos[pagina].forEach(function(item,index){
            $(item).hide(function(){
                $(this).text(general.traducciones[idioma][pagina][item]);
                $(this).slideDown();
            });
        });                
    },
    accionesBotones: function(){
        $("#idiomaEn").on("click",function(){
            general.guardarValor("idioma","en");
            general.setearTextos();
        });
        $("#idiomaEs").on("click",function(){
            general.guardarValor("idioma","es");
            general.setearTextos();           
        });
    },
    getPagina: function(){
        var ruta = window.location.pathname;
        if(ruta === "/"){
            return "index.php";
        }else{
            return ruta.substring(1);
        }
    },
    guardarValor: function(item,valor){
        sessionStorage.setItem(item,valor);
    },
    cargarValor: function(item){
        return sessionStorage.getItem(item);
    }
};


general.cargar();
