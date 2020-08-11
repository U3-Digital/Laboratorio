<?php 

?>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<h2>Resumen de ingresos</h2>
			</div>
			<div class="col-md-4"></div>
			<div class="col-md-4">
				<select class="form-control" name="selectIntervalo" id="selectIntervalo" onchange="cambiaintervalo()">
                    <option value="dia">Hoy</option>       
                    <option value="semanal">Semana</option>     
                    <option value="mes">Mes</option>                         
                </select>
			</div>
		</div>
		

	</div>
</div>

<script type="text/javascript">
	const intervalo = document.getElementById("selectIntervalo");
	 	function  cambiaintervalo(){
	 		const fechaHoy= new Date(Date.now());
	 		const formated_Date = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+fechaHoy.getDate();

	 		const last_week = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+(fechaHoy.getDate()-fechaHoy.getDay());

	 		const month = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+1;
	 		

	 		if (intervalo.value === "dia") {
	 			$.ajax({
		            url: './ajax/getDia.php',
		            type: "GET",
		            data: `fecha= ${fechaHoy}`,
		            success: function(data) {
		                
		               console.log(data);

		            },
		            error: function(data) {
		                console.log(data);
		            },
		            complete: function() {

		            },
		            cache: false,
		            contentType: false,
		            processData: false
		        });
	 		}else if(intervalo.value ==="semanal"){

	 		}else{

	 		}
	 	}
</script>