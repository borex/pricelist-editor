@extends('layouts.app')


@section('content')

<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">
<div class="page-header">
      <div class="page-title">
        <h3> Pricelist  <sup></sup></h3>
      </div>
	  	  <ul class="breadcrumb">
		<li><a href="<?php echo url('/')?>/dashboard">Home</a></li>
		<li><a href="#">Pricelist</a></li>
	  </ul>	  
</div>
		  
	</div>
    <hr>
<div class="page-content-wrapper">  
	
	
@if(Auth::check() && Auth::user()->group_id == 1)
<section>


<div class="container" style="margin-top: 10px; margin-bottom: 10px;width:100%">
    <div class="row">
        <div class="progress" id="progress1">
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 29%;">
            </div>
            <span class="progress-type"> Product selection</span>
            <span class="progress-completed">29%</span>
        </div>
    </div>
</div>  


<ul class="nav nav-tabs">
	<li onclick="displaygenral()" ><a href="#" > General Information  </a></li>
	<li onclick="displayprice()" ><a href='#' > Pricelist Display Option  </a></li>
	<li onclick="displayprice()" class="active" ><a href='#' > Product selection   </a></li>
	<li onclick="displayprice()" ><a href='#' > Rodenstock Nahkomfortgläser   </a></li>
	<li onclick="displayprice()" ><a href='#' > Rodenstock Gleitsichtgläser  </a></li>
</ul>

<div id='pricedisplay' >
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
  <form method='post' action="<?php echo url('steptwo/process') ;?>" >
		 <div class="form-horizontal row" >
         <div class="col-sm-12 animated fadeInRight ">
		  <h3>Product selection </h3>
		  <p>Select the items from which you want to filter your individual pricelist</p>
			<div class='row'>
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Pricing Mono Plus 2<br> &nbsp;&nbsp;<input type='radio' name='prl_pric_mono_plus_2' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Pricing Mono 2<br> &nbsp;&nbsp;<input type='radio' name='prl_pric_mono_2' selected value='Yes'>
					</div>
			
			</div>
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Multigressiv Mono Plus 2<br> &nbsp;&nbsp;<input type='radio' name='prl_multi_mono_plus_2' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Multigressiv Mono 2<br> &nbsp;&nbsp;<input type='radio' name='prl_multi_mono_2' selected value='Yes'>
					</div>
			
			</div>			
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Cosmolit<br>&nbsp;&nbsp;<input type='radio' name='prl_cosmolit' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Perfalit<br>&nbsp;&nbsp;<input type='radio' name='prl_perfalit' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Cosmolit Stock Line<br>&nbsp;&nbsp;<input type='radio' name='prl_cosmolit_stockline' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Perfalit Stock Line<br>&nbsp;&nbsp;<input type='radio' name='prl_perfalit_stockline' selected value='Yes'>
					</div>
			
			</div>			
			</div>
		
		</div>  
		</div>
		
		
		<div class=" col-md-4"></div>
		<div class="col-md-2">
				<a href="http://etnblessings.net/pdf/sximo/public/stepone"  class="btn btn-primary" style="width:100%" >&lt;&lt; Prev </a>
		</div>
		<div class=" col-md-2">
				<button class="btn btn-primary" style="width:100%" type='submit' >Next &gt;&gt;</button>
		</div>
		
	<div class=" col-md-4"></div>

<br>
<br>
<br>
	</form>
	</div>
	</div>	 
</div>
</div>
</div>




</section>	
@endif
</div>		
</div>
@stop




