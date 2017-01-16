<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
	<script type="text/javascript">
		
		function getViewResponse(){
        
       
        //Bloqueo de BOTON.. EJ no realizar dos pago por precionar boton 2 veces
        $("#btn-response-view").prop('disabled',true)

        //Carga en el Boton (Icon) 
        $(".btn-carga").html('');
        
        var ParamObjSend={
            'Param1':'1',
            'Param2':'2',
            'Param3':'3',
        }
        $.ajax({
            type: "POST",
            url: "http://localhost/CodeigniterAjax/Estandarizacion/getViewResponse",
            data: ParamObjSend,
            success: function(objView){
                $("#btn-response-view").prop('disabled',false)
                $(".btn-carga").html('');

                $("#Resultado-View").html(objView.ViewSet);
              
            }
        });
 }
	</script>
</head>
<body>

<div class="row">
	
<div id="Resultado-View" class="col-md-12">
		<table class="table" style="width:100%">
			<thead>
				<tr>
					<th>IdProducto</th>
					<th>Nombre Producto</th>
				</tr>
			</thead>
			
			<tbody>
				<?php
				if(isset($getProductos)){
					foreach ($getProductos as $key => $p) {
					?>
				<tr>
					<td><?=$p->codigo;?></td>
					<td><?=$p->NombreProducto;?></td>
					<td></td>
				</tr>


					<?php
					}
				}

				?>
			</tbody>
		</table>
	</div>
</div>
	
</body>
</html>