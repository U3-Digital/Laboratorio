<?php 
	
?>

<div class="content-wrapper">
	<div class="container-fluid">
		<div class="row">
			<div class="col-md-4">
				<h2>Resumen de ingresos</h2>
			</div>
		</div>
		<br>
		<div class="row">
			<div class="col-md-4 col-xl-4">
	            <div class="tarjeta bg-c-blue order-card">
	                <div class="card-block">
	                    <h6 class="m-b-20">Ingresos Diarios</h6>
	                    <h2 class="text-right"><i class="fas fa-calendar-day f-left"></i><span id="in-dia">$500</span></h2>
	                    <p class="m-b-0">Numero de Estudios aplicados<span class="f-right" id="est-dia">5</span></p>
	                </div>
	            </div>
        	</div>
        	<div class="col-md-4 col-xl-4">
	            <div class="tarjeta bg-c-blue order-card">
	                <div class="card-block">
	                    <h6 class="m-b-20">Ingresos Semanales</h6>
	                    <h2 class="text-right"><i class="fas fa-calendar-week f-left"></i><span id="in-sem">486</span></h2>
	                    <p class="m-b-0">Numero de Estudios aplicados<span class="f-right" id="est-sem">351</span></p>
	                </div>
	            </div>
        	</div>
        	<div class="col-md-4 col-xl-4">
	            <div class="tarjeta bg-c-blue order-card">
	                <div class="card-block">
	                    <h6 class="m-b-20">Ingresos Mensuales</h6>
	                    <h2 class="text-right"><i class="fas fa-calendar-alt f-left"></i><span id="in-mes">486</span></h2>
	                    <p class="m-b-0">Numero de Estudios aplicados<span class="f-right" id="est-mes">351</span></p>
	                </div>
	            </div>
        	</div>
		</div>
		<div class="row justify-content-center">
			<div class="col-md-6">
				<canvas id="myBarChart"></canvas>
			</div>
		</div>
	</div>
</div>
<script type="text/javascript">
	const ingresosDiarios = document.getElementById("in-dia");
	const EstudiosDiarios = document.getElementById("est-dia");
	const ingresosSemanales = document.getElementById("in-sem");
	const EstudiosSemanales = document.getElementById("est-sem");
	const ingresosMensuales = document.getElementById("in-mes");
	const EstudiosMensuales = document.getElementById("est-mes");

	const fechaHoy= new Date(Date.now());
	const formated_Date = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+fechaHoy.getDate();
	const last_week = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+(fechaHoy.getDate()-fechaHoy.getDay());
	const month = fechaHoy.getFullYear()+"-"+(fechaHoy.getMonth()+1)+"-"+1;

	$.ajax({
		url: './ajax/getDia.php',
		type: "GET",
		data: `fecha = ${formated_Date}`,
		success: function(data) {
		    const datos = JSON.parse(data);
		    console.log(datos.Total);
		    if(datos.Total){
		    	ingresosDiarios.innerHTML = `$${datos.Total}`;	
		    }else{
		    	ingresosDiarios.innerHTML = "$0"
		    }
		    
		    EstudiosDiarios.innerHTML=  datos.citas;
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
           
           if(datos.Total){
		    	ingresosMensuales.innerHTML = `$${datos.Total}`;	
		    }else{
		    	ingresosMensuales.innerHTML = "$0"
		    }
           EstudiosMensuales.innerHTML=  datos.citas;
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

    $.ajax({
        url: './ajax/getMes.php',
        type: "POST",
        data: function(){
            let valores = new FormData();
            valores.append("fecha", formated_Date);
            valores.append("inicioMes", last_week);
            return valores;
        }(),
        success: function(data) {
           const datos = JSON.parse(data);
           
           if(datos.Total){
		    	ingresosSemanales.innerHTML = `$${datos.Total}`;	
		    }else{
		    	ingresosSemanales.innerHTML = "$0"
		    }
           EstudiosSemanales.innerHTML=  datos.citas;
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


	
</script>
<?php 
	$grafica = new Controller();
  	$grafica -> resumenGrafica();
?>