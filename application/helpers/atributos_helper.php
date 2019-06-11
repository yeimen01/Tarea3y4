<?php

function asgInput($nombre, $label, $opst=[], $value=''){

    $placeholder= '';
    $type='text';
    $required='';
    $class= 'form-control'; 
    $readonly='';


    foreach($opst as $k=>$j){
        $$k = $j;
    }

    if($readonly==''){
        return "<div class='form-group'> 
        <label>{$label}: </label>
        <input value='{$value}' class= '{$class}' placeholder='{$placeholder}'  type='{$type}' {$required} name='{$nombre}' />
    
    </div>";
    }else{

    return "<div class='form-group'> 
        <label>{$label}: </label>
        <input value='{$value}' class= '{$class}' placeholder='{$placeholder}' readonly='' type='{$type}' {$required} name='{$nombre}' />
    
    </div>";
    }
}

function asgIMG($nombre, $label){

    $type="file";
    $accept= 'image/*';

    return "<div class='form-group'>
    <label>{$label}: </label>
    <input type='{$type}' name='{$nombre}' accept = '{$accept}'
    
    </div>";
}


function graficas_marca(){
    $rs = core_usuarios::grafico_marca();
    $a = <<<HOLA
	<script type="text/javascript">
	$(function (){
		Highcharts.chart('container', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Cantidad de Vehiculos por marca y el porcentaje en stock'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [
HOLA;
    foreach ($rs as $vehiculos) {
        $a.= <<<HOLA
        { name: '{$vehiculos->marca} cantidad: {$vehiculos->cantidad}',
            y: $vehiculos->cantidad
        },
HOLA;
    }  
    $a .= <<<HOLA
     ]
    }]
});
		})
	</script>
	<div id="container" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>
HOLA;

    return $a;
}
function graficas_modelo(){
    $rs = core_usuarios::grafico_modelo();
    $a = <<<HOLA
	<script type="text/javascript">
	$(function (){
		Highcharts.chart('modelo', {
    chart: {
        plotBackgroundColor: null,
        plotBorderWidth: null,
        plotShadow: false,
        type: 'pie'
    },
    title: {
        text: 'Cantidad de Vehiculos por modelo y el porcentaje en stock'
    },
    tooltip: {
        pointFormat: '{series.name}: <b>{point.percentage:.1f}%</b>'
    },
    plotOptions: {
        pie: {
            allowPointSelect: true,
            cursor: 'pointer',
            dataLabels: {
                enabled: false
            },
            showInLegend: true
        }
    },
    series: [{
        name: 'Porcentaje',
        colorByPoint: true,
        data: [
HOLA;
    foreach ($rs as $vehiculos) {
        $a.= <<<HOLA
        { name: '{$vehiculos->modelo} cantidad: {$vehiculos->cantidad}',
            y: $vehiculos->cantidad
        },
HOLA;
    }  
    $a .= <<<HOLA
     ]
    }]
});
		})
	</script>
	<div id="modelo" style="min-width: 310px; height: 400px; max-width: 600px; margin: 0 auto"></div>

HOLA;

    return $a;
}

function cantidades_dinero(){
    $rs = core_reportes::cantidad_total();
    foreach ($rs as $dinero) {
        $dinero_total = $dinero->total;
    }
    return "<p class = 'leads'> RD$ {$dinero_total} </p>";
}
function cantidades_ventas(){
    $rs = core_reportes::cantidad_deventa();
    foreach ($rs as $dinero) {
        $dinero_total = $dinero->total;
    }
    return "<p class = 'leads'> {$dinero_total} </p> <br><br><br><br><br>";
}