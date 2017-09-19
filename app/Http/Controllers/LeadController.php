<?php

namespace App\Http\Controllers;

use Request;
use DB;
use App\Lead;
use App\Http\Requests\LeadRequest;

Class LeadController extends Controller {

  public function storeLead(LeadRequest $request){

    date_default_timezone_set('America/Sao_Paulo');
		$data = date('Y-m-d H:i:s');

    $lead = new Lead();
    $lead->nome = $request->nome;
    $lead->sobrenome = $request->sobrenome;
    $lead->email = $request->email;
    $lead->empresa = $request->empresa;
    $lead->cargo = $request->cargo;
    $lead->data_hora = $data;
    $lead->save();

    return redirect('/')
					->withInput();
  }
}
