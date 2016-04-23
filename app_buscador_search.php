<?php 
	error_reporting(E_ALL);
	require('common.inc');

	$city='All';
	$province='All';
	if($_GET['city']){$city=$_GET['city'];}
	if($_GET['province']){$province=$_GET['province'];}
?>

<?php
	//Calling WS
	$ws_uri = 'http://www.conabip.gob.ar/ws/bps?province='.$province.'&city='.$city;
	$ws_response = get_ws_data($ws_uri);
	//Procesing WS
	if(count($ws_response->nodes)>0){
	print 'Encontramos <b>'.count($ws_response->nodes).'</b> Bibliotecas en la ubicación propuesta.<br>Te enviamos un acceso directo con el resultado de la búsqueda a tu correo electrónico.';
?>				

	<div id="results" style="">
		<?php 
        	$i=0;
        	foreach($ws_response->nodes as $item){
  	
			print '<div class="bp">
				<h3>'.$item->node->field_nombre_de_la_biblioteca.'</h3>
				<p><b>Drección:</b> '.$item->node->street.', '.$item->node->city.', '.$item->node->Provincia.'</p>
				<p><b>Teléfono:</b> '.$item->node->Teléfonos.'</p>
			</div>';
			

			}
        	?>
	</div>
        	<style type="text/css">
#results {
	position: fixed; top: 350px; bottom:20px; overflow: auto;
}
.bp {
	border:1px dashed #eee;
	padding:5px;
	padding-left: 20px;
	padding-right: 20px;
	margin-bottom: 15px;
	margin-right:20px;
	background: rgba(0,0,0,0.2)
}
.bp h3 {
	text-transform: uppercase;
	font-size: 15px;
	font-weight: bold;
}
        	</style>
      

 <?php } else {
 	print "No hay Bibliotecas en las ubicación propuesta.";
 } ?>   