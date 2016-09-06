@extends('pdf.layout')

@section('content')
<div style=" width: 100%; display:block; font-size:12px;">
	<div style=" width: 100%; display:block; height:400px">
		<div class="col-md-6 clearfix info" style="margin:20px 20px 20px 20px">
			<p>
				<b>Employee</b> 
				<span ">{{$name}}</span>
			</p>
			<hr>
		</div>
		<div  style=" width: 45%; margin: 0 2% 0 2%; display:block; float:left">
			<p>
				<b style="display:block; float: left; width:30%;">Basic + DA</b> :
				<span style="display:block; float: right;width:50%;">
				{{ number_format($employee->porcent(50),2)}}  <em>(50%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">HRA</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(25),2)}}  <em>(25%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Conveyance Allowance</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(4),2)}}  <em>(4%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Medical Allowance</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(2.5),2)}}  <em>(2.5%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Tele. Allowance</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(2.5),2)}}  <em>(2.5%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Special Allowance</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(7.87),2)}}  <em>(7.87%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Children Ed. Allo</b> :
				<span>  </span>
			</p>

			<p>
				<b>Net Salary / Take Home</b> :
				<span  style="display:block; float: right;width:50%;">{{$takenhome}}</span>
			</p>
			
		</div>
		<div  style=" width: 45%; margin: 0 2% 0 2%; display:block; float:left">
			<p>
				<b style="display:block; float: left; width:30%;">Advance </b> :
				<span style="display:block; float: right;width:50%;">0.00</span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">PF Contribution</b> :
				<span  style="display:block; float: right;width:60%;">{{ number_format($employee->porcent(6),2)}}   <em>(6%) + (12%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">ESI Contribution</b> :
				<span  style="display:block; float: right;width:50%;">{{ number_format($employee->porcent(2.12),2)}}  <em>(2.12%)</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Profession Tax</b> :
				<span style="display:block; float: right;width:50%;"> 0.00</em></span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">TDS - IT</b> :
				<span style="display:block; float: right;width:50%;">0.00</span>
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">other Deductions</b> :
				<span style="display:block; float: right;width:50%;">0.00</span>
			</p>
			<p style="height:18px;display:block;">
				
			</p>
			<p>
				<b style="display:block; float: left; width:30%;">Total Deductions</b> :
				<span  style="display:block; float: right;width:50%;">{{$totaldeductions}}</span>
			</p>
			
		</div>
		 <hr style=" width: 100%; margin-top: 250px; display:block;">
	</div>

</div>

@endsection