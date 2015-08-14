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
            <div class="progress-bar" role="progressbar" aria-valuenow="20" aria-valuemin="0" aria-valuemax="100" style="width: 9%;">
            </div>
            <span class="progress-type"> Pricelist Display Option</span>
            <span class="progress-completed">9%</span>
        </div>
    </div>
</div>  


<ul class="nav nav-tabs">
	<li onclick="displaygenral()" ><a href="#" > General Information  </a></li>
	<li onclick="displayprice()" class="active" ><a href='#' > Pricelist Display Option  </a></li>
	<li onclick="displayprice()"  ><a href='#' > Product selection   </a></li>
	<li onclick="displayprice()" ><a href='#' > Rodenstock Nahkomfortgläser   </a></li>
	<li onclick="displayprice()" ><a href='#' > Rodenstock Gleitsichtgläser  </a></li>
</ul>


<div id='pricedisplay' >
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
  <form method='post' action="<?php echo url('stepone/process') ;?>" >
		 <div class="form-horizontal row" >
         <div class="col-sm-6 animated fadeInRight ">
		  <h3>Price option</h3>
          <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Select Default Price </label>
			<div class="col-md-8">
			<input  name="prl_priceoption" id="prl_priceoption" value='useadminprice' checked   type="radio">  
            <p>
            Note: This will use our SF6 Database
			</p>
             </div> 
             </div>
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Select Your option </label>
			<div class="col-md-8">
			<input  name="prl_priceoption" id="prl_priceoption"  value='useclientprice'   type="radio">  
			<p>
            Note: This will let you create your own price
			</p>
          </div> 
		  </div>  
		<br> 
		<br> 
         <div class="form-horizontal row" >
         <div class="col-sm-6 animated fadeInRight ">
		  <h3>Rounded/ Unrounded Price</h3>
         	<div class="form-group">
			<div class="col-md-offset-8">
			<input  name="prl_pricerounded" id="prl_pricerounded" class="form-control input-sm" value='rounded' checked   type="radio">  
			  Rounded
		  </div>
           <div class="col-md-offset-8">
			<input  name="prl_pricerounded" id="prl_pricerounded" class="form-control input-sm" value='unrounded'   type="radio">  
		    Unrounded
		  </div> 
        </div>
        
         <h3>Margin On price</h3>
         	 <div class="form-group">
			<div class="col-md-offset-2">
			Months:<input  id="prl_pricemargin" class="form-control input-sm" name='marginmonth'   type="text">  
			  
		  </div>
           <div class="col-md-offset-2">
			Percentage:<input  id="prl_pricemargin" class="form-control input-sm" name='margincent'   type="text">  
		  </div> 
        
          	 </div> 
		 </div>  
		 </div>  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">&nbsp;</label>
			 
			 
		  </div> 
		</div>

		<div class="col-sm-6 animated fadeInRight ">

		 <div class="form-group">
		<h3>SF6 Database</h3>
        <p>
        	If you have your own Sf6 Database file than you can upload here
        </p>
			<div class="col-md-offset-5">
				<input name="ownsf"  type="file">
			 </div> 
		  </div>
		  <br>
		  <br>
		  <br>
		<h3>Select Your Old Pricelist</h3>
		<div class='col-md-offset-2'>
        	<select name='prl_old_prl' class='form-control'>
            	<option value=''>----None----</option>
			</select>
		</div>

		
		</div>  
		
		
	</div>
	
	<div class=" col-md-4"></div>
		<div class="col-md-2">
				<a href="http://etnblessings.net/pdf/sximo/public/pricelist"  class="btn btn-primary" style="width:100%" >&lt;&lt; Prev  </a>
		</div>
		<div class=" col-md-2">
				<button class="btn btn-primary" style="width:100%" type='submit' >Next &gt;&gt;</button>
		</div>
		
	<div class=" col-md-4"></div>

<br>
<br>
<br>
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




