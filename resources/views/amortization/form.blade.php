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
									<form action="{{action('AmortizationController@anyCalc')}}" method="post" class="form-horizontal">
										<div class="form-body pal">
											{{csrf_field()}}
											<h3>Personal</h3>
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="loan_amount" class="control-label col-md-3">Loan Amount <span class="require">*</span></label>
														<div class="input-group col-md-4">
															<input value="{{old('loan_amount')}}" name="loan_amount"  id="loan_amount" type="text" placeholder="Loan Amount" type="text"   class="form-control ">
															<span class="input-group-addon">
																<b>$</b>
															</span>
														</div>
														@if ($errors->has('loan_amount'))
											                <span class="error col-md-offset-3  col-md-4 help-block">{{ $errors->first('loan_amount') }}</span>
											            @endif
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="loan_term" class="control-label col-md-3">Loan Term <span class="require">*</span></label>
														<div class="input-group col-md-4">
															<input value="{{old('loan_term')}}" name="loan_term"  id="loan_term" type="text" placeholder="Loan Amount" type="text"   class="form-control ">
															<span class="input-group-addon">
																<b>Year</b>
															</span>
														</div>
														@if ($errors->has('loan_term'))
											                <span class="error col-md-offset-3  col-md-4 help-block">{{ $errors->first('loan_term') }}</span>
											            @endif
													</div>
												</div>
												<div class="col-md-12">
													<div class="form-group">
														<label for="interest" class="control-label col-md-3">Interest Rate<span class="require">*</span></label>
														<div class="input-group col-md-4">
															<input value="{{old('interest')}}" name="interest"  id="interest" type="text" placeholder="Loan Amount" type="text"   class="form-control ">
															<span class="input-group-addon">
																<b>%</b>
															</span>
														</div>
														@if ($errors->has('interest'))
											                <span class="error col-md-offset-3  col-md-4 help-block">{{ $errors->first('interest') }}</span>
											            @endif
													</div>
												</div>
											</div>																																					
										</div>
										<div class="  text-right pal col-md-4">
										<button type="submit" class="btn btn-primary">Submit</button>&nbsp;
										<button type="button" class="btn btn-green">Cancel</button>
										</div>
									</form>
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
	.help-block{
		padding: 0;
	}
	.error{
		font-weight: bold;
		color: red
	}
</style>

@endsection