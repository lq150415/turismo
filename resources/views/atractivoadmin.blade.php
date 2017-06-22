@extends('admin')
@section('cuerpo')
{!! Html::style('css/table/jquery.dataTables.css')!!}
{!! Html::script('js/table/jquery.dataTables.js')!!}
<link href="vendor/magnific-popup/magnific-popup.css" rel="stylesheet">
    <style type="text/css">
        .service-box i
        {
            color: #fff;
        }
        .service-box:hover
        {
            background-color: #D9BD4C;
            opacity: 0.6;
            
            height: 150px;
            border-radius: 15px; 
            padding: 10px;
        }
    </style>
    <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDaJRD2DjiXph4uE4RaQD1YGdcmjeUXqPI" async="" defer="defer" type="text/javascript"></script>
    <script type="text/javascript">
    	function detalles(data1, data2, data3)
    	{
    		$('#nom_atr2').val(data1);
    		$('#des_atr2').val(data2);
    		var bloq=document.getElementById("bloque");
    		bloq.innerHTML= "<img src='/storage/"+data3+".jpg' >";
    	}
    </script>
    <script type="text/javascript">var centreGot = false;</script>

    {!!$map['js']!!}
    <script type="text/javascript" language="javascript" class="init">
			$(document).ready(function() {
    $('#example').DataTable();
} );
		</script>
		<style type="text/css">
			.thumb{
     height: 250px;

     
     margin: 0px 0px 0 0;
}

		</style>
	<div class="jumbo">
                <div class="col-lg-12">
                    <h1>Atractivos <small>turisticos</small></h1>
                  
                </div>
                <br/>
                <div class="col-lg-12">
                <button data-toggle = "modal" data-target = "#myModal" type="button" class="btn btn-info"><span class="fa fa-plus-square-o"></span> Nuevo atractivo</button>
                
                </div>
                <br/>
                <br/>
                <br/>
                <br/>

                <br/>
    <div style="width:95%;  ">
<table id="example" class="display" >
	<thead >
		<tr>
			<th width="20%">NOMBRE</th>
			<th width="30%">DESCRIPCION</th>
			<th width="30%">COORDENADAS</th>
      		<th width="20%">DETALLES</th>
			<th data-orderable="false" width="5%">ACCION</th>
     	</tr>
	</thead>
    <tbody style="font-size:11px; color: #000;">
		   <?php if(count($atractivos)>0):?>
      <tr>
        <?php  
          foreach ($atractivos as $atractivo):
           
          ?>
            <th><?php echo $atractivo->NOM_ATR;?></th>
            <th><?php echo $atractivo->DES_ATR; ?></th>
            <th><?php echo $atractivo->LAT_ATR.' '.' '.$atractivo->LON_ATR; ?></th>
            <th><button  data-toggle = "modal" onclick="javascript:detalles({{'"'.$atractivo->NOM_ATR.'","'.$atractivo->DES_ATR.'","'.$atractivo->FOT_ATR.'"'}})" data-target = "#myModal3" class="btn btn-success" title="Detalles" > <span class="fa fa-info-circle"> </span> </button></th> 
            <th><button  data-toggle = "modal" data-target = "#myModal4" class="btn btn-primary"  title="Modificar"> <span class="fa fa-pencil"> </span> </button>
            <button  data-toggle = "modal" data-target = "#myModal5" class="btn btn-danger"  title="eliminar"> <span class="fa fa-trash"> </span> </button></th> 
             
    </tr>
        <?php endforeach; endif;
      
      ?>
		
	</tbody>
                </div>


<div class = "modal fade" id = "myModal" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" >
   
   <div class = " modal-dialog modal-lg ">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
               DATOS DE ATRACTIVO TURISTICO
            </h4>
         </div>
         <div class = "modal-body">
            
            <form method="POST" action="guardaratractivo" class="form form-horizontal"  accept-charset="UTF-8"
enctype="multipart/form-data">
            <input type="hidden" name="lat" id="lat">	
            <input type="hidden" name="lon" id="lon">	
            	<div class="form-group">
              <label class="col-lg-3">Nombre del atractivo turistico:</label>
              <div class="col-lg-5">
                <input type="text" name="nom_atr" class="form-control" required="yes">
              </div>
              </div>
              <br/>
              <br/>

<br/>
              <div class="form-group">
              <label class="col-lg-3">Descripción del atractivo turistico:</label>
              <div class="col-lg-5">
					<textarea cols="4" name="des_atr" class="form-control"></textarea>              
			  </div>
         </div>
         <br/><br/>
              <br/>

              <div class="form-group">
              <label class="col-lg-3">Fotografía:</label>
              <div class="col-lg-5">
				<input type="file" id="files" name="files" class="form-control">              
			  </div>
              </div>
              <br/>
                <br/>
                <br/>
                <br/>
              <div class="form-group">
              <label class="col-lg-3">Ubicación:</label>
              <div class="col-lg-5">
				          {!!$map['html']!!}  

			  </div>
              </div>
              <div style=" width: 250px; height: 250px; float: right; margin-top:-35%;">
              	
            	<output id="list" ></output>	
              </div>
              <br/>
              <br/>
              <br/>
               <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>


</div>
         <div class = "modal-footer">
         	<button type = "submit" class = "btn btn-primary">
              <span class="fa fa-save"></span> Guardar
            </button>
            <button type = "button" class = "btn btn-danger" data-dismiss = "modal"> <span class="fa fa-times"></span>
              Cancelar
            </button>
            	</div>
            </form>
         </div>
         
      </div><!-- /.modal-content -->
   </div><!-- /.modal-dialog -->
  
</div><!-- /.modal -->
<div class = "modal fade" id = "myModal3" tabindex = "-1" role = "dialog" 
   aria-labelledby = "myModalLabel" aria-hidden = "true" >
   
   <div class = " modal-dialog modal-lg ">
      <div class = "modal-content">
         
         <div class = "modal-header">
            <button type = "button" class = "close" data-dismiss = "modal" aria-hidden = "true">
                  &times;
            </button>
            
            <h4 class = "modal-title" id = "myModalLabel">
              DETALLE DE ATRACTIVO TURISTICO
            </h4>
         </div>
         <div class = "modal-body">
            
            <form method="POST" action="guardaratractivo" class="form form-horizontal"  accept-charset="UTF-8"
enctype="multipart/form-data">
            <input type="hidden" name="lat" id="lat">	
            <input type="hidden" name="lon" id="lon">	
            	<div class="form-group">
              <label class="col-lg-3">Nombre del atractivo turistico:</label>
              <div class="col-lg-5">
                <input style="color: #000;" type="text" id="nom_atr2" class="form-control" required="yes" readonly="yes">
              </div>
              </div>
              <br/>
              <br/>

<br/>
              <div class="form-group">
              <label class="col-lg-3">Descripción del atractivo turistico:</label>
              <div class="col-lg-5">
					<textarea style="color: #000;" cols="4" id="des_atr2" class="form-control" readonly="yes"></textarea>              
			  </div>
         </div>
         

            
              <br/>
                <br/>
                <br/>
                <br/>
              <div class="form-group">
              <label class="col-lg-3">Ubicación:</label>
              <div class="col-lg-5">
				          {!!$map['html']!!}  

			  </div>
              </div>
              <div style=" width: 250px; height: 250px; float: right; margin-top:-25%;" id="bloque">
              	
            	<output id="list" ></output>	
              </div>
              <br/>
              <br/>
              <br/>
               <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>

 <br/>
              <br/>
              <br/>


</div>
</form>
</div>
</div>
</div>
<script type="text/javascript">
function archivo(evt) {
      var files = evt.target.files; // FileList object
       
        //Obtenemos la imagen del campo "file". 
      for (var i = 0, f; f = files[i]; i++) {         
           //Solo admitimos imágenes.
           if (!f.type.match('image.*')) {
                continue;
           }
       
           var reader = new FileReader();
           
           reader.onload = (function(theFile) {
               return function(e) {
               // Creamos la imagen.
                      document.getElementById("list").innerHTML = ['<img class="thumb" src="', e.target.result,'" title="', escape(theFile.name), '"/>'].join('');
               };
           })(f);
 
           reader.readAsDataURL(f);
       }
}
             
      document.getElementById('files').addEventListener('change', archivo, false);
      </script>
@stop