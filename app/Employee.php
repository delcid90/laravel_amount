<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Employee extends Model
{
    //
     protected $table = 'employees';
     protected $fillable = ['name','salary'];

    public function porcent($por)
	{
		$value = $this->salary;
		$a = $por/100;
		$va = $value*$a;
		 
		return $va;
	}
}

