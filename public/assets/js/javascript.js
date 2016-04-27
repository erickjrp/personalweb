$(document).ready(function() {

	$('#fullpage').fullpage({

		anchors:['Inicio', 'Sobre_mi', 'Habilidades', 'Portafolio', 'Educacion_y_experiencia', 'Contacto', 'Redes_sociales'],

		onLeave: function(index, nextIndex, direction){
            var leavingSection = $(this);
            var header = '_header';

            $("#"+index+header).removeClass("active");
            $("#"+nextIndex+header).addClass("active");

            //after leaving section 2
            
            if(index == 2 && direction =='down'){
                alert("#"+index+header);
            }

            else if(index == 2 && direction == 'up'){
                alert("#"+nextIndex+header);
            }
        }

	});

});