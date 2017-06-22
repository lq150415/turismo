@extends('layout')
@section('contenido')
 <script src="//maps.googleapis.com/maps/api/js?key=AIzaSyDaJRD2DjiXph4uE4RaQD1YGdcmjeUXqPI" async="" defer="defer" type="text/javascript"></script>
     <script type="text/javascript">var centreGot = false;</script>
     {!!$map['js']!!}
   <div style="margin-top:-45%;">
        
{!!$map['html']!!}
        
    </div>
@stop