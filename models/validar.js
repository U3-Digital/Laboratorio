
var btnRegistro = 0; // variable para capturar el registro que quiero borrar

// este metodo recibe el nombre del boton borrar que se precionó en la lista de ordenes,
// cada boton tiene como nombre el numero de orden al que le pertenece, para identificar cual orden quiero borrar
$('#deleteModal').on('show.bs.modal', function(e) {
    btnRegistro = $(e.relatedTarget).data('borrar');

});

function borraRegistro(){
	alert("vamos a borrar");
        document.getElementById(btnRegistro).click();

}
