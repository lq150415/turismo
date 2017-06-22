@extends('admin')
@section('cuerpo')
 <div class="row">
                <div class="col-lg-12">
                    <h1>Datos <small>Estadisticos</small></h1>
                  
                </div>
            </div>
            <div class="row">
                <div class="col-md-8">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Cantidad de visitas</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-chart1"></div>
                        </div>
                    </div>
                </div>
                
        
            
            <div class="row">
                <div class="col-lg-4">
                    <div class="panel panel-primary">
                        <div class="panel-heading">
                            <h3 class="panel-title"><i class="fa fa-bar-chart-o"></i> Atractivos turisticos mas votados</h3>
                        </div>
                        <div class="panel-body">
                            <div id="shieldui-chart2"></div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    

                </div>
                
            </div>
        </div>
@stop