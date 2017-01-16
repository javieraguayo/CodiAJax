<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	
</head>
<body>

<div class="row">
	
<div id="Resultado-View" class="col-md-12">
		<table class="table" style="width:100%">
			<thead>
				<tr>
					<th>IdProducto</th>
					<th>Nombre Producto</th>
					<th>Acciones</th>
				</tr>
			</thead>
			
			<tbody>
				<?php 
                if(isset($getProductos)){
                  foreach ($getProductos as $key => $a) {
                    ?>
                    <tr id="fila_<?=$a->codigo?>">                        
                      <td><?=$a->codigo;?></td>
                      <td><?=$a->NombreProducto;?></td>
                      
                      <td > <button type="button"  onclick="Elimina(<?=$a->codigo?>)" class="btn btn-primary"><i class="fa fa-trash-o"></i>Eliminar</button></i> 
                      <?php echo $a->codigo	 ?></td>
                      
                      <tr>
                        <?php
                      }
                    } 
                    ?>

			</tbody>

		</table>
		 <button id="btn-carga" type="submit" class="btn btn-default">Crear Auto</button>
	</div>
</div>
	
</body>
<script >
		

 function Elimina(codigo){
 	
    
    var ParamObjSend={
      'codigo':codigo,
    }
    $.ajax({
      type: "POST",
      url: "Producto/eliminar",
      data: ParamObjSend,
      success: function(objView){
       $('#fila_'+codigo).remove();
     }
   });
  }
	</script>
</html>