@extends('layout.master')

@section('content')
<!--BEGIN PAGE WRAPPER-->
<div id="page-wrapper">

	<!--BEGIN TITLE & BREADCRUMB PAGE-->
	<div id="title-breadcrumb-option-demo" class="page-title-breadcrumb">
		<div class="page-header pull-left">
			<div class="page-title">Amortization </div>
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
								<div class="panel-heading">Amortization </div>
								<div class="panel-body pan">
									<div class="col-lg-4" style="padding-top: 20px; ">
										<table class="table table-hover table-striped table-bordered table-advanced tablesorter">
										  <tr>
										    <td>
										    	<div align="right" class="style2">Loan Amount</div>
										    </td>
										    <td>
										    	<div align="right" class="style2">{{$monto}}</div>
										    </td>
										  </tr>
										  <tr>
										    <td>
										    	<div align="right" class="style2">Monthly Interest</div>
										    </td>
										    <td>
										    	<div align="right" class="style2">{{$interes_mes_1}}</div>
										    </td>
										  </tr>
										  <tr>
										    <td>
										    	<div align="right" class="style2">Payment time in months </div>
										    </td>
										    <td>
										    	<div align="right" class="style2">{{ $meses}}</div>
										    </td>
										  </tr>
										  <tr>
										    <td>
										    	<div align="right" class="style2">Monthly Payment</div>
										    </td>
										    <td>
										    	<div align="right" class="style2">{{$cuota_mes}}</div>
										    </td>
										  </tr>
										</table>
									</div>
									<div class="clearfix"></div>
									<div class="col-md-12">
										<table class="table table-hover table-striped table-bordered table-advanced tablesorter">
										  <tr>
										    <td width="33"><div align="center"><span class="style1"></span></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Amortization</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Interest</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Total</strong></div></td>
										    <td colspan="2"><div align="center" class="style1"><strong>Amortization</strong></div></td>
										  </tr>
										  <tr>
										    <td width="33"><div align="center" class="style1"><strong>#</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Month</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Month</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Month</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Cumulative</strong></div></td>
										    <td width="110"><div align="center" class="style1"><strong>Pending</strong></div></td>
										  </tr>
											  <?php 
											  $amort=0;
											  $inter=0;
											  $cuota=0;
											  $acumu=0;
											  $pendi=$monto;
											 ?>
											@for($x=0;$x<=$meses;$x++)
												@if($amort==0)
												<?php
													$inter=round($pendi*$int_men,4);
													$cuota=$cuota_mes*1;
													$amort=round($cuota-$inter,4); 
													$pendi=round($pendi-$amort,4); 
													$pendi = (int) $pendi;
													$acumu=round($acumu+$amort,4);

												?>
												@else		  
											 		<tr>
											    		<td width="33"> <span class="style2">{{$x}}</span></td>
											    		<td width="110"><span class="style2"> {{$amort}} </span></td>
											    		<td width="110"><span class="style2"> {{$inter}} </span></td>
											    		<td width="110"><span class="style2"> {{$cuota}} </span></td>
											    		<td width="110"><span class="style2"> {{$acumu}} </span></td>
											    		<td width="110"><span class="style2"> {{$pendi}}</span> </td>
											    		<?php 
											    				$inter=round($pendi*$int_men,4);
											    				$cuota=$cuota_mes*1;
											    				$amort=round($cuota-$inter,4); 
											    				$pendi=round($pendi-$amort,4); 
											    				$acumu=round($acumu+$amort,4);
											    				$pendi =($pendi >= 0) ? $pendi : 0;
											    			?>
											  		</tr>
											  		@endif
										  	@endfor
		   								</table>
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
@endsection
@section('js')
<script src="{{url('assets/js/table-advanced.js')}}"></script>
@endsection