<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Employee;
use Carbon\Carbon;
use PDF;
class PayslipController extends Controller
{
    //
    public function getIndex()
    {
    	$employees = Employee::all()->pluck('name','id');
    	 
    	return view('payslip.form')->withEmployees($employees);
    }


    public function postGenerate(Request $resq)    	
    {
    	$id = $resq->input('id');
    	$employe = Employee::findOrFail($id);
    	$salary = $employe->salary;
    	$name = $employe->name;

    	$suma = (
    			$employe->porcent(50) +
    			$employe->porcent(25) +
    			$employe->porcent(4) +
    			$employe->porcent(2.5) +
    			$employe->porcent(2.5) +
    			$employe->porcent(7.87)
 				);
		$suma=number_format($suma,2);
    	$suma2 = ($employe->porcent(6) + $employe->porcent(2.12));
    	$suma2 = number_format($suma2,2);
     	$m = Carbon::now()->format('F');
    	return view('payslip.generate')
    			->withEmployee($employe)
    			->withName($name)
    			->withMonth($m)
    			->withTakenhome($suma)
    			->withTotaldeductions($suma2)
    			->withSalary($salary);
    }

    public function getPdf($id)
    {

    	$employe = Employee::findOrFail($id);
    	$salary = $employe->salary;
    	$name = $employe->name;

    	$suma = (
    			$employe->porcent(50) +
    			$employe->porcent(25) +
    			$employe->porcent(4) +
    			$employe->porcent(2.5) +
    			$employe->porcent(2.5) +
    			$employe->porcent(7.87)
 				);
		$suma=number_format($suma,2);
    	$suma2 = ($employe->porcent(6) + $employe->porcent(2.12));
    	$suma2 = number_format($suma2,2);
     	$m = Carbon::now()->format('F');
   	    $data = [
    	'employee'=>$employe,
    	'name'=>$name,
    	'month'=>$m,
    	'takenhome'=>$suma,
    	'totaldeductions'=>$suma2,
    	'salary'=>$salary
        ];
    	$pdf = PDF::loadView('pdf.payslip', $data);
    	return $pdf->stream();
    }    
}
