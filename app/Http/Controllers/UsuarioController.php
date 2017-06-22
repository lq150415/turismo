<?php

namespace Turismo\Http\Controllers;

use Illuminate\Http\Request;

use Turismo\Http\Requests;
use Turismo\Http\Controllers\Controller;
use Turismo\User;
class UsuarioController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view('inicio');
    }
    public function regusu()
    {
        return view('registro');
    }
    public function regusuario(Request $request )
    {
        $usuario= new User;
        $usuario->NOM_USU=$request->input('nom_usu');
        $usuario->APE_USU=$request->input('ape_usu');
        $usuario->email=$request->input('email');
        $usuario->password=bcrypt($request->input('password'));
        $usuario->save();
       return redirect()->route('login'); 
    }
    public function principal()
    {
        return view('principal');
    }

     public function trafico()
    {
        $config = array();
        $config['center'] = 'auto';
        $config['map_width'] = 1100;
        $config['map_height'] = 600;
        $config['trafficOverlay'] = TRUE;
        $config['zoom'] = 15;
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
        \Gmaps::add_marker($marker);
 
        $map = \Gmaps::create_map();
 
        //Devolver vista con datos del mapa
        return view('trafico', compact('map'));
        
    }
    public function calendario()
    {
        return view ('calendario');
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
        //
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
