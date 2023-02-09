<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Afip;

class welcomeController extends Controller
{
    public function consulta(Request $request){
        
        $afip = new Afip(array('CUIT' => 20323834688));
        $cuit = $request->input('date');
        $taxpayer_details = $afip->RegisterScopeThirteen->GetTaxpayerDetails($request->input('date'));
        //var_dump($cuit);
        //die();
        return view('welcome', [
            'constancias' => $taxpayer_details,
        ]);
    }
}
