<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class ControladorAdmin extends Controller
{
    public function articulos()
    {
        return view('Admin.mensajeAdmin')->with(['text'=>'Aquesta és la pàgina de articles']);
    }

    public function clientes(){
        return view('Admin.mensajeClientes')->with(['text'=>'Aquesta és la pàgina de clients']);
    }
    public function facturacion(){
        return view('Admin.mensajeFacturacion')->with(['text'=>'Aquesta és la pàgina de facturació']); 
    }
    public function contabilidad(){
        return view('Admin.mensajeContabilidad')->with(['text'=>'Aquesta és la pàgina de comptabilitat']);
    }
}
