var header = '_header';
var seccion = 'seccion_';

$(document).ready(function() {

	/*Para que todo desaparezca*/
	$("#seccion_2").fadeTo(0, 0);
	$("#seccion_3").fadeTo(0, 0);
	$("#seccion_4").fadeTo(0, 0);
	$("#seccion_5").fadeTo(0, 0);
	$("#seccion_6").fadeTo(0, 0);
	$("#seccion_7").fadeTo(0, 0);
	/*Finaliza para que todo desaparezca*/

	/*Iniciar fullpage*/	
	$('#fullpage').fullpage({

		//Asignar id a cada vista
		anchors:['Inicio', 'Sobre_mi', 'Habilidades', 'Portafolio', 'Educacion_y_experiencia', 'Contacto', 'Redes_sociales'],

		//Desactivar el scroll principal cuando se abran las modales
		normalScrollElements: '#adhara, #aloflamenko, #cienciasucv, #logoman, #telasymetales, #travelconsultores',

		//Se ejecuta cada vez que se abandona una sección
		onLeave: function(index, nextIndex, direction){
			
            var leavingSection = $(this);
            
            /*Para asignar y remover la clase active a las opciones del menú*/
            $("#"+index+header).removeClass("active");
            $("#"+nextIndex+header).addClass("active");
            /*Finaliza para asignar y remover la clase active a las opciones del menú*/

            /*Para aparecer y desaparecer el contenido de las secciones*/// || (index == 7 && nextIndex == 6))
            if(index == 6 && nextIndex == 7){
            	$("#"+seccion+nextIndex).fadeTo(1000, 1);
            }else{
            	if(nextIndex == 7){
            		$("#seccion_6").fadeTo(1000, 1);
            	}
            	$("#"+seccion+index).fadeTo(500, 0);
            	$("#"+seccion+nextIndex).fadeTo(1000, 1);
            }
            /*Finaliza para aparecer y desaparecer el contenido de las secciones*/
        
        }

	});
	/*Finaliza iniciar fullpage*/

});