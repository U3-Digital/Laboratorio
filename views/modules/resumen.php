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
		<br>
		<div class="row">
			<div class=" ml-2 col-mb-5">
				<p id= "ingresos" value="value">sds</p>
				<P id= "NoCitas"></P>
			</div>
		</div>

	</div>
</div>

<script type="text/javascript">
	const intervalo = document.getElementById("selectIntervalo");
	const ingresos = document.getElementById("ingresos");
	const citas = document.getElementById("NoCitas");
	 	function  cambiaintervalo(){
	 		const fechaHoy= new Date(Date.now());
	 		const formated_Date = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+fechaHoy.getDate();

	 		const last_week = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+(fechaHoy.getDate()-fechaHoy.getDay());

	 		const month = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+1;
	 		

	 		if (intervalo.value === "dia") {

	 			$.ajax({
		            url: './ajax/getDia.php',
		            type: "GET",
		            data: `fecha = ${formated_Date}`,
		            success: function(data) {
		               const datos = JSON.parse(data);
		               ingresos.innerHTML = `Ingresos de hoy: $${datos.Total}`;
		               citas.innerHTML=  `Numero de citas de hoy: ${datos.citas}`;
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
	 			$.ajax({
		            url: './ajax/getMes.php',
		            type: "POST",
		            data: function(){
	                    let valores = new FormData();
	                    valores.append("fecha", formated_Date);
	                    valores.append("inicioMes", month);
	                    return valores;
	                }(),
		            success: function(data) {
		               const datos = JSON.parse(data);
		               
		               ingresos.innerHTML = `Ingresos de hoy: $${datos.Total}`;
		               citas.innerHTML=  `Numero de citas de hoy: ${datos.citas}`;
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
	 		}else{

	 		}
	 	}
</script>