<div class="app_container">
	<form class="form-horizontal col col-md-4" >
<fieldset>

<!-- Form Name -->


<!-- Text input-->
<div class="form-group">
<label>Nombre</label>
  <input id="nombre" name="nombre" type="text" class="form-control input-md">

</div>

<!-- Text input-->
<div class="form-group">
	<label>Email</label>	
  <input id="email" name="email" type="mail" class="form-control input-md">
</div>

<!-- Select Basic -->
<div class="form-group">
	<label>Provincia</label>
    <select id="provincia" name="selectbasic" class="form-control">
      <option value="all" selected>Provincia</option>
      <option value="2">Option two</option>
    </select>
</div>

<!-- Text input-->
<div class="form-group">
 <label>Ciudad</label>
  <input id="ciudad" name="ciudad" type="text" class="form-control input-md">
</div>

<!-- Button -->
<div class="form-group">
    <button id="btnBuscar" name="singlebutton" class="btn btn-primary">Buscar</button>
</div>

</fieldset>
</form>

</div>
<script type="text/javascript">
  jQuery("#btnBuscar").click(function(e){
    var error = false;
    if(jQuery('#nombre').val()==""){
      console.log("Debe completar el campo nombre");
      jQuery("#nombre").addClass("error");
      error = true;
    }
    if(validEmail(jQuery('#email').val())==false){
      console.log("Debe completar el email");
      jQuery("#email").addClass("error");
      error = true;
    }

    if(error==false){
      console.log("Iniciando busqueda en directorio");
    }
   
   return false;
  });

function validEmail(e) {
    var filter = /^\s*[\w\-\+_]+(\.[\w\-\+_]+)*\@[\w\-\+_]+\.[\w\-\+_]+(\.[\w\-\+_]+)*\s*$/;
    return String(e).search (filter) != -1;
}

</script>