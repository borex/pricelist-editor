@extends('layouts.app')


@section('content')

<script type="text/javascript" src="{{ asset('sximo/js/plugins/chartjs/Chart.min.js') }}"></script>
<div class="page-content row">
<div class="page-header">
      <div class="page-title">
        <h3><i class="fa fa-info"></i> Pricelist  <sup></sup></h3>
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



<ul class="nav nav-tabs">
	<li onclick="displaygenral()" class="active"><a href="#" > General Information  </a></li>
	<li onclick="displayprice()"><a href='#' > Pricelist Display Option  </a></li>
</ul>


<div id='genralinfo' >
<div class="tab-content m-t">
  <div class="tab-pane active use-padding" id="info">	
  <div class="sbox  "> 
  <div class="sbox-title"></div>
  <div class="sbox-content"> 
		 <div class="form-horizontal row" >
         <input name="_token" value="<?php echo csrf_token() ?>" type="hidden">
		<div class="col-sm-6 animated fadeInRight ">
		  <div class="form-group">
	
		    <label for="ipt" class=" control-label col-md-4">Company Name  </label>
			<div class="col-md-8">
			<input  name="prl_company_name" id="prl_company_name" class="form-control input-sm" required="" value="Comapny Name" type="text">  
			 </div> 
		  </div>  
		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Client Name </label>
			<div class="col-md-8">
			<input name="prl_client_name" id="prl_client_name" class="form-control input-sm" value="Client Name" type="text"> 
			 </div> 
		  </div>  
		  
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Contact Person</label>
			<div class="col-md-8">
			<input name="prl_contact_person" id="prl_contact_person" class="form-control input-sm" value="Contact Person" type="text">  
			 </div> 
		  </div>      

		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Email Address </label>
			<div class="col-md-8">
			<input name="prl_email" id="prl_email" class="form-control input-sm" value="Email" type="text"> 
			 </div> 
		  </div>   
          
          <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Address </label>
			<div class="col-md-8">
				<textarea class="form-control input-sm" name="prl_Address"></textarea>
			 </div> 
		  </div> 
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">City</label>
			<div class="col-md-8">
			<input name="prl_city" id="prl_city" class="form-control input-sm" value="City" type="text"> 
			 </div> 
		  </div>   
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">State </label>
			<div class="col-md-8">
			<input name="prl_state" id="prl_state" class="form-control input-sm" value="State" type="text"> 
			 </div> 
		  </div>   
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Country </label>
			<div class="col-md-8">
			<input name="prl_country" id="prl_country" class="form-control input-sm" value="Country" type="text"> 
			 </div> 
		  </div>   
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Pincode</label>
			<div class="col-md-8">
			<input name="prl_pincode" id="prl_pincode" class="form-control input-sm" value="Pincode" type="text"> 
			 </div> 
		  </div>   
		  <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">&nbsp;</label>
			<div class="col-md-8">
				<button class="btn btn-primary" onclick="displayprice()">Next</button>
			 </div> 
		  </div> 
		</div>

		<div class="col-sm-6 animated fadeInRight ">

		  


		   <div class="form-group">
		    <label class=" control-label col-md-4">Company Logo</label>
			<div class="col-md-8">
				<input name="logo"  type="file">
				<p> <i>Please use image dimension 155px * 30px </i> </p>
				<div style="padding:5px; border:solid 1px #ddd; background:#f5f5f5; width:auto;">
				 	<img src="http://localhost/pk/pdf/sximo/public/sximo/images/backend-logo.png" alt="Price List Editor">
				</div>				
			 </div> 
		  </div>
          
          
          <br><br><br><br><br><br><br><br><br>
          <div class="form-group">
		    <label for="ipt" class=" control-label col-md-4">Expire Date of Pricelist</label>
			<div class="col-md-8">
			<input name="prl_expire" id="prl_expire" class="form-control input-sm" value="Expire" type="text"> 
			 </div> 
		  </div>   
  		  

		</div>  
		 </div>
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


