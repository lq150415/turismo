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
        function detalles(data1, data2, data3,data4, data5)
        {
            $('#nom_cul2').val(data1);
            $('#des_cul2').val(data2);
            $('#fec_cul2').val(data4);
            $('#hor_cul2').val(data5);
            var bloq=document.getElementById("bloque");
            bloq.innerHTML= "<img src='/storage/"+data3+"' >";
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
                    <h1>Eventos <small>culturales</small></h1>
                  
                </div>
                <br/>
                <div class="col-lg-12">
                <button data-toggle = "modal" data-target = "#myModal" type="button" class="btn btn-primary"><span class="fa fa-plus-square-o"></span> Nuevo evento cultural</button>
                
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
            <th width="30%">FECHA</th>
            <th width="30%">HORA</th>
            <th width="30%">COORDENADAS</th>
            <th width="20%">DETALLES</th>
            <th data-orderable="false" width="5%">ACCION</th>
        </tr>
    </thead>
    <tbody style="font-size:11px; color: #000;">
           <?php if(count($culturas)>0):?>
      <tr>
        <?php  
          foreach ($culturas as $cultura):
           
          ?>
            <th><?php echo $cultura->NOM_CUL;?></th>
            <th><?php echo $cultura->DES_CUL; ?></th>
            <th><?php echo $cultura->FEC_CUL; ?></th>
            <th><?php echo $cultura->HOR_CUL; ?></th>
            <th><?php echo $cultura->LAT_CUL.' '.' '.$cultura->LON_CUL; ?></th>
            <th><button  data-toggle = "modal" onclick="javascript:detalles({{'"'.$cultura->NOM_CUL.'","'.$cultura->DES_CUL.'","'.$cultura->FOT_CUL.'","'.$cultura->FEC_CUL.'","'.$cultura->HOR_CUL.'"'}})" data-target = "#myModal3" class="btn btn-success" title="Detalles" > <span class="fa fa-info-circle"> </span> </button></th> 
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
               DATOS DE EVENTOS CULTURALES
            </h4>
         </div>
         <div class = "modal-body">
            
            <form method="POST" action="guardarcultura" class="form form-horizontal"  accept-charset="UTF-8"
enctype="multipart/form-data">
            <input type="hidden" name="lat" id="lat">   
            <input type="hidden" name="lon" id="lon">   
                <div class="form-group">
              <label class="col-lg-3">Nombre del evento cultural:</label>
              <div class="col-lg-5">
                <input type="text" name="nom_cul" class="form-control" required="yes">
              </div>
              </div>
              <br/>
              <br/>

<br/>
              <div class="form-group">
              <label class="col-lg-3">Descripción breve acerca del evento:</label>
              <div class="col-lg-5">
                    <textarea cols="4" name="des_cul" class="form-control"></textarea>              
              </div>
         </div>
         <br/><br/>
              <br/>

              <div class="form-group">
              <label class="col-lg-3">Banner o fotografia del evento:</label>
              <div class="col-lg-5">
                <input type="file" id="files" name="files" class="form-control">              
              </div>
              </div>

         <br/><br/>
              <br/>
              <div class="form-group">
              <label class="col-lg-2">Fecha del evento:</label>
              <div class="col-lg-3">
                <input type="date" id="fec_cul" name="fec_cul" class="form-control">              
              </div>
              <label class="col-lg-2">Hora del evento:</label>
              <div class="col-lg-3">
                <input type="time" id="hor_cul" name="hor_cul" class="form-control">              
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
              <div style=" width: 250px; height: 250px; float: right; margin-top:-45%;">
                
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
              Informacion acerca del evento 
            </h4>
         </div>
         <div class = "modal-body">
            
            <form method="POST" action="guardaratractivo" class="form form-horizontal"  accept-charset="UTF-8"
enctype="multipart/form-data">
            <input type="hidden" name="lat" id="lat">   
            <input type="hidden" name="lon" id="lon">   
                <div class="form-group">
              <label class="col-lg-3">Nombre del Evento:</label>
              <div class="col-lg-5">
                <input style="color: #000;" type="text" id="nom_cul2" class="form-control" required="yes" readonly="yes">
              </div>
              </div>
              <br/>
              <br/>

<br/>
              <div class="form-group">
              <label class="col-lg-3">Descripción del atractivo turistico:</label>
              <div class="col-lg-5">
                    <textarea style="color: #000;" cols="4" id="des_cul2" class="form-control" readonly="yes"></textarea>              
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