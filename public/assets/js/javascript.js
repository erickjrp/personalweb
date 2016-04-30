$(document).ready(function() {

	$('#fullpage').fullpage({

		anchors:['Inicio', 'Sobre_mi', 'Habilidades', 'Portafolio', 'Educacion_y_experiencia', 'Contacto', 'Redes_sociales'],

		normalScrollElements: '#adhara, #aloflamenko, #cienciasucv, #logoman, #telasymetales, #travelconsultores',

		onLeave: function(index, nextIndex, direction){
			
            var leavingSection = $(this);
            var header = '_header';

            $("#"+index+header).removeClass("active");
            $("#"+nextIndex+header).addClass("active");
        
        }

	});

});