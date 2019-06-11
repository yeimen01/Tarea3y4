<?php plantilla::aplicar(); ?>

<?php 
if($_POST){
    $vehi = $_POST;
    Vehiculos::vender_vehi($vehi);
    
    redirect('main/inicio','refresh');
    
    }
    $vehiculo = new stdClass;
    $vehiculo->id = '';
    $vehiculo->matricula = '';
    $vehiculo->marca = '';
    $vehiculo->modelo = '';
    $vehiculo->color = '';
    $vehiculo->year = '';
    $vehiculo->precio = '';
    $vehiculo->img = '';
    if (isset($id)) {
        $rs = Vehiculos::vehiculo_x_id($id);
        if (count($rs) > 0) {
            $vehiculo = $rs[0];
        }
    }
?>

<h3>Vender Vehiculo</h3>

<form action="" method = "post">
    <div class="row">
        <div class = "col-md-6">
        <input type="hidden" name = "id" value = '<?= $vehiculo->id; ?>'/>
        <?= asgInput('matricula', 'Matricula', ['value' => $vehiculo->matricula, 'readonly' => 'readonly'])?>
        <?= asgInput('marca', 'Marca', ['value' => $vehiculo->marca, 'readonly' => 'readonly'])?>
        <?= asgInput('modelo', 'Modelo', ['value' => $vehiculo->modelo, 'readonly' => 'readonly']) ?>
        <?= asgInput('color', 'Color', ['value' => $vehiculo->color, 'readonly' => 'readonly']) ?>
        <?= asgInput('year', 'Año', ['value' => $vehiculo->year, 'readonly' => 'readonly']) ?>
        <?= asgInput('precio', 'Precio', ['type' => 'number', 'value' => $vehiculo->precio, 'readonly' => 'readonly']) ?>


        <p class = 'text-justify'>Reunidos vendedor y comprador en la fecha del encabezamiento, 
      manifiestan haber acordado formalizar en este documento de CONTRATO DE COMPRAVENTA 
      del vehículo que se especifica en las siguientes</p>

      <div class = 'text-center'>
      <h3><b>CONDICIONES</b></h3>
      </div>

      <p class = 'text-justify'><b>1ª)</b> El vendedor vende al comprador el vehículo de su propiedad anteriormente especificado 
      por la cantidad de <?= $vehiculo->precio; ?> pesos. El pago se realizará en un plazo no superior a 20 días 
      desde la firma de este documento.</p>

      <p class = 'text-justify'><b> 2ª)</b>El vendedor declara que no pesa sobre el vehículo ninguna carga o 
      gravamen ni impuesto, deuda o sanción pendientes de abono a la fecha de la firma de este contrato, 
      comprometiéndose en caso contrario a regularizar tal situación a su exclusivo cargo.</p>

      <p class = 'text-justify'><b>3ª)</b>El vendedor se compromete a facilitar los distintos documentos 
      relativos al vehículo (1) así como a firmar cuantos documentos sean necesarios para que el vehículo 
      quede correctamente inscrito a nombre del comprador en los correspondientes organismos públicos, 
      siendo todos los gastos a cargo del comprador.</p>

      <p class = 'text-justify'><b>4ª)</b>Una vez formalizado el presente contrato, el vendedor entregará 
      materialmente al comprador la posesión del vehículo, haciéndose el comprador cargo de cuantas 
      responsabilidades puedan contraerse por la propiedad del vehículo y su tenencia y uso a partir 
      de dicho momento de la entrega.</p>

      <p class = 'text-justify'><b>5ª)</b> El vehículo se encuentra al corriente respecto a las 
      obligaciones derivadas de la ITV (Inspección Técnica de Vehículos)</p>

      <p class = 'text-justify'><b>6ª)</b> El comprador declara conocer el estado actual del vehículo, 
      por lo que exime al vendedor de garantía por vicios o defectos que surjan con posterioridad a la 
      entrega.</p>

      <p class = 'text-justify'>Y para que así conste solo debe de firmar el presente contrato de 
      compraventa escribiendo su cedula y su tarjeta de credito en la siguientes casillas:</p>

      <?= asgInput('cedula', 'Cedula', ['placeholder'=>'Ingrese su cedula', 'required'=> 'required'])?> 
      <?= asgInput('tarjeta', 'Tarjeta de credito', ['type' => 'number', 'placeholder' => 'Ingrese su numero de tarjeta de Credito',  'required'=> 'required']) ?>

      <p class = 'text-justify'><i>(1) Los documentos que, como documentación del vehículo deben entregarse, 
      son los siguientes:</i></p>

      <ul>
        <li>
          <i>Permiso de circulación</i>
        </li>
        <li>
          <i>Ficha técnica (con los distintos registros de ITV)</i>
        </li>
      </ul>

      <div class= 'text-center'>
        <label><input type="checkbox" name="Acepto" value="ok", required>He leido todo y  acepto los terminos</label><br><br>
        <button class = 'btn btn-primary' type = "submit">Comprar</button>
        <button onclick = "return confirm('Seguro?')"  class = 'btn btn-warning' type = "reset">Limpiar</button>
        </div>
      </div>
    </div>
</div>
</form>
<br>
