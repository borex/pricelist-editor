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
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width:37%;">
            </div>
            <span class="progress-type">Rodenstock Nahkomfortgläser</span>
            <span class="progress-completed">37%</span>
        </div>
    </div>
</div>  


<ul class="nav nav-tabs">
	<li onclick="displaygenral()" ><a href="#" > General Information  </a></li>
	<li onclick="displayprice()" ><a href='#' > Pricelist Display Option  </a></li>
	<li onclick="displayprice()" ><a href='#' > Product selection   </a></li>
	<li onclick="displayprice()" ><a href='#' > Rodenstock Nahkomfortgläser   </a></li>
	<li onclick="displayprice()" class="active"><a href='#' > Rodenstock Gleitsichtgläser  </a></li>
</ul>


<div id='pricedisplay' >
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
  <form method='post' action="<?php echo url('stepfour/process') ;?>" >
		 <div class="form-horizontal row" >
         <div class="col-sm-12 animated fadeInRight ">
		  <h3>Rodenstock Gleitsichtgläser </h3>
		  <p>Choose sterben Produkte ab , sterben auf Ihrer individuellen Preisliste Nicht erscheinen Sollen .</p>
			<div class='row'>
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Impression FreeSign 3<br> &nbsp;&nbsp;<input type='radio' name='prl_imp_freesign3' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Impression 2 <br> <input type='radio' name='prl_imp_2' selected value='Yes'>
					</div>
			
			</div>
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Multigressiv MyView 2<br>  &nbsp;&nbsp;<input type='radio' name='prl_multi_myview_2' selected value='Yes'>
					</div>
			</div>			
			<div class='col-md-4'>
			
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Progressiv PureLife Free 2<br>  &nbsp;&nbsp;<input type='radio' name='prl_pure_life_free_2' selected value='Yes'>
					</div>
					<div class='form-group row' style='margin-left:20px;font-size:16px;font-weight:700'>
						Progressiv Life Free<br> &nbsp;&nbsp;<input type='radio' name='prl_pure_life_free' selected value='Yes'>
					</div>
					
			</div>			
			</div>
				
		</div>  
		</div>
		
	<div class=" col-md-4"></div>
		<div class="col-md-2">
				<a href="http://etnblessings.net/pdf/sximo/public/stepthree"  class="btn btn-primary" style="width:100%" > &lt;&lt; Prev </a>
		</div>
		<div class=" col-md-2">
				<button class="btn btn-primary" style="width:100%" type='submit' >Next &gt;&gt; </button>
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




