@extends('layout.master')

@section('content')
<!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper">

	<!--BEGIN TITLE & BREADCRUMB PAGE-->
	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
		<div class="page-header pull-left">
			<div class="page-title">Payslip </div>
		</div>
		<ol class="breadcrumb page-breadcrumb">
			<li><i class="fa fa-home"></i>&nbsp;
				<a href="index-2.html">Home</a>&nbsp;&nbsp;<i class="fa fa-angle-right">
			</i>&nbsp;&nbsp;
		</li>
		<li class="active">Amortization </li>
	</ol>
	<div class="btn btn-blue reportrange hide">
		<i class="fa fa-calendar"></i>&nbsp;<span></span>&nbsp;report&nbsp;
		<i class="fa fa-angle-down"></i>
		<input type="hidden" name="datestart"/>
		<input type="hidden" name="endstart"/>
	</div>
	<div class="clearfix"></div>

</div>

<!--END TITLE & BREADCRUMB PAGE--><!--BEGIN CONTENT-->

<div class="page-content">
	<div id="form-layouts" class="row">
		<div class="col-lg-12">
			<div>
				<div id="tab-two-columns" class="tab-pane ">
					<div class="row">
						<div class="col-lg-12">
							<div class="panel panel-yellow">
								<div class="panel-heading">
									Pay Slip for the Month Of {{$month}}
									<a href="{{action('PayslipController@getPdf',$employee->id)}}" class="btn btn-primary" style="float:right;margin: -4px">
										 PDF
									</a>
								</div>
								<div class="panel-body pan">
									<div class="row">
										<div class="col-md-12">
											<div class="col-md-6 clearfix info" style="margin:20px 20px 20px 0;">
												<p>
													<b>Employee</b> 
													<span>{{$name}}</span>
												</p>
											</div>
											<div class="col-md-6 lay">
												<p>
													<b>Basic + DA</b> :
													<span> {{ number_format($employee->porcent(50),2)}}  <em>(50%)</em></span>
												</p>
												<p>
													<b>HRA</b> :
													<span>{{ number_format($employee->porcent(25),2)}}  <em>(25%)</em></span>
												</p>
												<p>
													<b>Conveyance Allowance</b> :
													<span>{{ number_format($employee->porcent(4),2)}}  <em>(4%)</em></span>
												</p>
												<p>
													<b>Medical Allowance</b> :
													<span>{{ number_format($employee->porcent(2.5),2)}}  <em>(2.5%)</em></span>
												</p>
												<p>
													<b>Tele. Allowance</b> :
													<span>{{ number_format($employee->porcent(2.5),2)}}  <em>(2.5%)</em></span>
												</p>
												<p>
													<b>Special Allowance</b> :
													<span>{{ number_format($employee->porcent(7.87),2)}}  <em>(7.87%)</em></span>
												</p>
												<p>
													<b>Children Ed. Allo</b> :
													<span>  </span>
												</p>

												<p>
													<b>Net Salary / Take Home</b> :
													<span>{{$takenhome}}</span>
												</p>
												
											</div>
											<div class="col-md-6 lay">
												<p>
													<b>Advance </b> :
													<span>0.00</span>
												</p>
												<p>
													<b>PF Contribution</b> :
													<span>{{ number_format($employee->porcent(6),2)}}   <em>(6%) + (12%)</em></span>
												</p>
												<p>
													<b>ESI Contribution</b> :
													<span>{{ number_format($employee->porcent(2.12),2)}}  <em>(2.12%)</em></span>
												</p>
												<p>
													<b>Profession Tax</b> :
													<span> 0.00</em></span>
												</p>
												<p>
													<b>TDS - IT</b> :
													<span>0.00</span>
												</p>
												<p>
													<b>other Deductions</b> :
													<span>0.00</span>
												</p>
												<p style="height:18px;display:block;">
													
												</p>
												<p>
													<b>Total Deductions</b> :
													<span>{{$totaldeductions}}</span>
												</p>
												
											</div>
										</div>
									</div>

								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</div>
<style type="text/css">
	.lay p{font-size: 13px; }
	.lay p b{ float: left; }
	.lay p span{     float: right;
    position: relative;
    text-align: right;
     padding-right: 20%;
    width: 50%;}
	.lay p span em{ position: absolute;
    right: 0px;
    top: 0;}
    .info p{
    	font-size: 18px;
    }
    .info p b{

    }
    .info p span{

    }
	    
	 
</style>

@endsection