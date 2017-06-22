<?php

namespace Turismo\Http\Controllers;

use Illuminate\Http\Request;

use Turismo\Http\Requests;
use Turismo\Http\Controllers\Controller;
use Turismo\Atractivo;
use Turismo\Cultural;
use \Carbon\Carbon;
use Illuminate\Support\Facades\Auth;

class AdminController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        if(Auth::user()->NIV_USU==1)
        {
            return view ('admininicio');
        }else
        {
            return view ('principal');
        }
    }
    public function atractivo()
    {
       $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 500;
        $config['map_height'] =300;
        $config['zoom'] = 15;
        $config['trafficOverlay'] = TRUE;
       
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';
 
        \Gmaps::initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        $marker['draggable'] = true;
         $marker['ondragend'] = '$(\'#lat\').val(event.latLng.lat()); $(\'#lon\').val(event.latLng.lng());';
        \Gmaps::add_marker($marker);
        
        $map = \Gmaps::create_map();
        $atractivos= Atractivo::get();
        //Devolver vista con datos del mapa
        return view('atractivoadmin', compact('map'))->with('atractivos',$atractivos);
    }

   public function cultura()
    {
       $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 500;
        $config['map_height'] =300;
        $config['zoom'] = 15;
        $config['trafficOverlay'] = TRUE;
       
        $config['onboundschanged'] = 'if (!centreGot) {
            var mapCentre = map.getCenter();
            marker_0.setOptions({
                position: new google.maps.LatLng(mapCentre.lat(), mapCentre.lng())
 
            });
        }
        centreGot = true;';
 
        \Gmaps::initialize($config);
 
        // Colocar el marcador 
        // Una vez se conozca la posición del usuario
        $marker = array();
        $marker['draggable'] = true;
         $marker['ondragend'] = '$(\'#lat\').val(event.latLng.lat()); $(\'#lon\').val(event.latLng.lng());';
        \Gmaps::add_marker($marker);
        
        $map = \Gmaps::create_map();
        $culturas= Cultural::get();
        //Devolver vista con datos del mapa
        return view('culturaladmin', compact('map'))->with('culturas',$culturas);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $atractivo= new Atractivo;
        $atractivo->NOM_ATR= $request->input('nom_atr');
        $atractivo->DES_ATR= $request->input('des_atr');
        if($request->file('files')){
        $foto=Carbon::now()->format('d-m-Y').'-'.$atractivo->NOM_ATR.'.jpg';
        $atractivo->FOT_ATR= $foto;
         \Storage::disk('local')->put($foto, \File::get($request->file('files')));}
        $atractivo->LAT_ATR=$request->input('lat');
        $atractivo->LON_ATR=$request->input('lon');
        $atractivo->save();
       
        return redirect()->route('atractivoadmin'); 


        }
    
    public function storecultura(Request $request)
    {
        $cultura= new Cultural;
        $cultura->NOM_CUL= $request->input('nom_cul');
        $cultura->DES_CUL= $request->input('des_cul');
        if($request->file('files')){
        $foto=Carbon::now()->format('d-m-Y').'-'.preg_replace('[\s+]','',$cultura->NOM_CUL.'.jpg');
        $cultura->FOT_CUL= $foto;
         \Storage::disk('local')->put($foto, \File::get($request->file('files')));}
        $cultura->LAT_CUL=$request->input('lat');
        $cultura->LON_CUL=$request->input('lon');
        $cultura->FEC_CUL=$request->input('fec_cul');
        $cultura->HOR_CUL=$request->input('hor_cul');
        $cultura->save();
       
        return redirect()->route('culturaadmi'); 


        }
    

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        //
    }
}
