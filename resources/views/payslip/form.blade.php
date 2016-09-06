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
								<div class="panel-heading">Payslip </div>
								<div class="panel-body pan">
									<form action="{{action('PayslipController@postGenerate')}}" method="post" class="form-horizontal">
										<div class="form-body pal">
											{{csrf_field()}}
											<div class="row">
												<div class="col-md-12">
													<div class="form-group">
														<label for="selGender" class="control-label col-md-3">
														Employees <span class='require'>*</span></label>
														<div class="col-md-4">
														{{Form::select('id', $employees,null,['class'=>'form-control']) }}
														</div>
													</div>
												</div>
											</div>																																					
										</div>
										<div class=" text-right pal col-md-4">
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