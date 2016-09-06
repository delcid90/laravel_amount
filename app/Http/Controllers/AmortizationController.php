<?php
namespace App\Http\Controllers;
use Illuminate\Http\Request;
use App\Http\Requests\AmortizationRequest as AmortizationRequest;

class AmortizationController extends Controller {

    public function getIndex()
    {
      return view('amortization.form');
    }

    public function anyCalc(AmortizationRequest $input)
    {
        $monto = $input->input('loan_amount');
        $year = $input->input('loan_term');
        $int = $input->input('interest');

        $cuota_mes = 238;
        $int_men = ($int /12/100);
        $meses = $year*12;
        $me =-($year*12);

        $cuota_mes = (($monto*$int_men)/(1-pow((1+$int_men),-$meses)));
        $cuota_mes = round($cuota_mes,8);
       
        $interes_mes_1 = ($monto*$int_men);
        $amortizacion_mes_1 = $cuota_mes - $interes_mes_1;
        $acumulada_mes_1 = $amortizacion_mes_1;
        $pendiente_mes_1 = $monto - $amortizacion_mes_1;
         

        return view('amortization.calc')
                    ->with('monto',$monto)
                    ->with('interes_mes_1',$interes_mes_1)
                    ->with('cuota_mes',round($cuota_mes,2))
                    ->with('int_men',$int_men)
                    ->with('meses', $meses);
    }

    public function getRoot()
    {
      return view('welcome');
    }

}